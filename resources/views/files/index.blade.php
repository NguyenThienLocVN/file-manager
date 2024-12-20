<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
</head>
<body>
    <h1>File Manager</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
    
    <h2>Uploaded Files</h2>
    <ul>
        @foreach ($files as $file)
            <li>
                {{ $file->name }}
                <form action="/files/{{ $file->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
