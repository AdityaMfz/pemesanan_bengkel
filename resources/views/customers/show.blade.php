<!DOCTYPE html>
<html>
<head>
    <title>Show Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Customer Details</h1>
        <p><strong>ID:</strong> {{ $customer->id_customer }}</p>
        <p><strong>Nama Customer:</strong> {{ $customer->nama_customer }}</p>
        <p><strong>Alamat:</strong> {{ $customer->alamat }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
        <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</body>
</html>
