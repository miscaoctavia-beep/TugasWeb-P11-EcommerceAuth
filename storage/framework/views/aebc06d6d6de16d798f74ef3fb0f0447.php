<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Post</title>
</head>
<body>
    <h1>Buat Post Baru</h1>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Judul</label><br>
        <input type="text" name="title" value="<?php echo e(old('title')); ?>" required>
        <br><br>

        <label>Isi</label><br>
        <textarea name="content" rows="6" required><?php echo e(old('content')); ?></textarea>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="<?php echo e(route('posts.index')); ?>">Kembali</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P11-EcommerceAuth\resources\views/posts/create.blade.php ENDPATH**/ ?>