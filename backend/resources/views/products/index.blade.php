<!DOCTYPE html>
<html>
<head>
    <title>Seka Warung - Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk Seka Warung</h1>
    <a href="{{ route('products.create') }}">Tambah Produk</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Stok</th>
        </tr>
        @isset($products)
            @foreach($products as $p)
            <tr>
                <td>{{ $p->kode_barang }}</td>
                <td>{{ $p->nama_barang }}</td>
                <td>{{ $p->harga_jual }}</td>
                <td>{{ $p->stok }}</td>
            </tr>
            @endforeach
        @endisset
    </table>
</body>
</html>