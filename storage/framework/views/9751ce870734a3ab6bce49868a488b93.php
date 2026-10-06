<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form action="<?php echo e(route('posts.update', $post)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Judul</label><br>
        <input type="text" name="title" value="<?php echo e(old('title', $post->title)); ?>" required>
        <br><br>

        <label>Isi</label><br>
        <textarea name="content" rows="6" required><?php echo e(old('content', $post->content)); ?></textarea>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="<?php echo e(route('posts.index')); ?>">Kembali</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P11-EcommerceAuth\resources\views/posts/edit.blade.php ENDPATH**/ ?>