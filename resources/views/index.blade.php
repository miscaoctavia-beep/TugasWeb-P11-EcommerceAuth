<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Daftar Post</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('posts.create') }}">Buat Post Baru</a>

    <hr>

    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <small>
                Penulis: {{ $post->user->name }}
                | Role: {{ $post->user->role }}
            </small>

            <br><br>

            @can('update', $post)
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
            @endcan

            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            @endcan
        </article>

        <hr>
    @endforeach
</body>
</html>