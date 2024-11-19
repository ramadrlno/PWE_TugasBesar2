<!DOCTYPE html>
<html>
<head>
    <title>Laporan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center; /* Untuk menyelaraskan teks ke tengah secara horizontal */
        }
        .date {
            text-align: right; /* Menyelaraskan tanggal ke kanan */
            margin-bottom: 20px; /* Jarak di bawah tanggal */
        }

    </style>
</head>
<body>
    <div class="date">
        Tanggal: <?php echo e(now()->format('d-m-Y H:i')); ?> <!-- Menampilkan tanggal dan waktu saat ini -->
    </div>
    <h2>Laporan Produk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah Produk</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($product->nama_produk); ?></td>
                <td><?php echo e($product->deskripsi); ?></td>
                <td>Rp<?php echo e(number_format($product->harga, 0, ',', '.')); ?></td> <!-- Format harga -->
                <td><?php echo e($product->jumlah_produk); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
<?php /**PATH C:\Users\ella3\OneDrive\Dokumen\UNIVERSITAS MERCU BUANA\SEMESTER 5\PWE\Atilla Kuncoro Djati\atillakd\resources\views/report.blade.php ENDPATH**/ ?>