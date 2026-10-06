<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Daftar Post</h1>

    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <a href="<?php echo e(route('posts.create')); ?>">Buat Post Baru</a>

    <hr>

    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article>
            <h2><?php echo e($post->title); ?></h2>
            <p><?php echo e($post->content); ?></p>

            <small>
                Penulis: <?php echo e($post->user->name); ?>

                | Role: <?php echo e($post->user->role); ?>

            </small>

            <br><br>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                <a href="<?php echo e(route('posts.edit', $post)); ?>">Edit</a>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Hapus</button>
                </form>
            <?php endif; ?>
        </article>

        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Belum ada post.</p>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P11-EcommerceAuth\resources\views/posts/index.blade.php ENDPATH**/ ?>