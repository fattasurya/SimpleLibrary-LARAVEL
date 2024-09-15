<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #5569c3   ;
            color: white;
            border-bottom: 1px solid #343a40;
            border-radius: 10px 10px 0 0;
            padding: 1rem 1.5rem;
        }
        .card-body {
            padding: 2rem;
            background-color: #ffffff;
        }
        .btn-primary {
            background-color: #6b6b6b;
            border-color: #6b6b6b;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
        }
        .btn-primary:hover {
            background-color: #666565;
            border-color: #666565;
        }
        .container {
            margin-top: 3rem;
        }
        h1 {
            font-size: 2rem;
            color: #343a40;
        }
        p {
            font-size: 1.1rem;
            color: #495057;
        }
        a.btn {
            font-size: 1rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Detail Buku</h1>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">{{ $buku->judul }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Judul:</strong> {{ $buku->judul }}</p>
                <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
