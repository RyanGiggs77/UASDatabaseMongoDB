<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 CRUD Application Tutorial -AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
    <div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('pembelian.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <table class="table">
                            <tr>
                                <th>Product Name</th>
                                <td>:</td>
                                <td>{{ $pembelian->nama_pembeli }}</td>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <td>:</td>
                                <td>{{ $pembelian->harga_barang }}</td>
                            </tr>
                            <tr>
                                <th>Product Description</th>
                                <td>:</td>
                                <td>{{ $pembelian->jumlah_barang }}</td>
                            </tr>
                            <tr>
                                <th>Product Stock</th>
                                <td>:</td>
                                <td>{{ $pembelian->total_harga }}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>:</td>
                                <td>{{ $pembelian->metode_pembayaran }}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>:</td>
                                <td>{{ $pembelian->tanggal_pembelian }}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>:</td>
                                <td>{{ $pembelian->status_pembelian }}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>:</td>
                                <td>{{ $pembelian->alamat_pembeli }}</td>
                            </tr>
                        </table>
                    </div>
                    
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>