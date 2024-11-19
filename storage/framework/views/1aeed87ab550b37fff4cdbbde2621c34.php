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
        <header>
            <h1>Selamat Datang di Dashboard Penjualan</h1>
        </header>
        <div class="cards">
            <div class="card">
                <h3>Total Produk</h3>
                <p id="total-products"><?php echo e($totalProducts); ?></p>
            </div>
            <div class="card">
                <h3>Penjualan Hari Ini</h3>
                <p id="sales-today"><?php echo e($salesToday); ?></p>
            </div>
            <div class="card">
                <h3>Total Pendapatan</h3>
                <p id="total-revenue"><?php echo e($totalRevenue); ?></p>
            </div>
            <div class="card">
                <h3>Pengguna Terdaftar</h3>
                <p id="registered-users">350</p>
            </div>
        </div>
        <div class="alert alert-primary" role="alert">
            A simple primary alert—check it out!
        </div>
        <!-- Sales Chart -->
        <div id="chart">
            <h2>Grafik Penjualan Bulanan</h2>
            
               <?php echo $chart->container(); ?>

        </div>
    </div>

    <!--<script src="script.js"></script>-->
      
    <script src="<?php echo e($chart->cdn()); ?>"></script>
    <?php echo e($chart->script()); ?>

    <!-- Optional JavaScript -->
    <!-- Uncomment the script tag below if you have a script file to include -->
    <!-- <script src="script.js"></script> -->
</body>
</html>
<?php /**PATH C:\Users\ella3\OneDrive\Dokumen\UNIVERSITAS MERCU BUANA\SEMESTER 5\PWE\Atilla Kuncoro Djati\atillakd\resources\views/contoh.blade.php ENDPATH**/ ?>