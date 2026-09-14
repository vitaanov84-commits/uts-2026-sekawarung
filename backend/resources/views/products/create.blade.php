<!DOCTYPE html>
<html>
<head>
    <title>Seka Warung - Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>
    
    <a href="{{ route('products.index') }}">&laquo; Kembali ke Daftar Produk</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Kode Barang:</label><br>
        <input type="text" name="kode_barang" required><br><br>

        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" required><br><br>

        <label>Harga Beli:</label><br>
        <input type="number" name="harga_beli" required><br><br>

        <label>Harga Jual:</label><br>
        <input type="number" name="harga_jual" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <label>Satuan</label><br>
        <input type="text" name="satuan" required><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>