<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="<?php echo e(url(Auth::user()->role . '/home')); ?>">Home</a></li>
            <li><a href="<?php echo e(url(Auth::user()->role . '/produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="<?php echo e(url(Auth::user()->role . '/laporan')); ?>">Laporan</a></li>
            <li>
                <form action="<?php echo e(url('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-decoration-none bg-transparent border-0 text-white" style="font-size: 18px;">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header style="display: flex; justify-content:space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan Anda</p>
            </div>
            <div>
                <button class="card-button">
                    <a class="text-decoration-none text-white" href="<?php echo e(url(Auth::user()->role . '/produk/add')); ?>">Add Product</a>
                </button>
            </div>
        </header>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Product Grid -->
        <div class="product-grid">
            <?php if($produk->count() > 0): ?>
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <img src="<?php echo e(url('storage/public/images/' . $item->image)); ?>" alt="Produk">
                    <h3><?php echo e($item->nama_produk); ?></h3>
                    <p class="price">Rp <?php echo e(number_format($item->harga, 0, ',', '.')); ?></p>
                    <p class="description"><?php echo e($item->deskripsi); ?></p>
                    <p>Stok: <?php echo e($item->jumlah_produk); ?></p>

                    <!-- Edit Button -->
                    <a href="<?php echo e(url(Auth::user()->role . '/produk/edit/' . $item->kode_produk)); ?>" class="btn btn-primary mb-2">Edit</a>

                    <!-- Delete Button -->
                    <form action="<?php echo e(url(Auth::user()->role . '/produk/delete/' . $item->kode_produk)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Tidak ada produk tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Rama Derilano Putra\derilano\resources\views/produk.blade.php ENDPATH**/ ?>