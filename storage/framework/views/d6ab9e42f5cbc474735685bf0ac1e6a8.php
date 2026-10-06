<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, <?php echo e(auth()->user()->name); ?>.</p>
    <p>Role: <?php echo e(auth()->user()->role); ?></p>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P11-EcommerceAuth\resources\views/admin.blade.php ENDPATH**/ ?>