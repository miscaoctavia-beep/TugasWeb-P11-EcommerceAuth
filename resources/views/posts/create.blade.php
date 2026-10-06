<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Post</title>
</head>
<body>
    <h1>Buat Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Judul</label><br>
        <input type="text" name="title" value="{{ old('title') }}" required>
        <br><br>

        <label>Isi</label><br>
        <textarea name="content" rows="6" required>{{ old('content') }}</textarea>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Kembali</a>
</body>
</html>