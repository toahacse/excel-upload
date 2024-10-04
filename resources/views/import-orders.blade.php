<!DOCTYPE html>
<html>
<head>
    <title>Import Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Import Excel File</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('import.orders') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Choose Excel File:</label>
                <input type="file" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Import</button>
        </form>
    </div>
</body>
</html>
