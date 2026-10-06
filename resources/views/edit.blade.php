<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}"><br><br>

        <label>Isi</label><br>
        <textarea name="content" rows="6">{{ old('content', $post->content) }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Kembali</a>
</body>
</html>