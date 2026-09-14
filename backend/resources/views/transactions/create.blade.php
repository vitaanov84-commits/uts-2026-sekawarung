<!DOCTYPE html>
<html>
<head>
    <title>Seka Warung - Tambah Transaksi</title>
</head>
<body>
    <h1>Catat Transaksi Stok Barang</h1>
    <a href="{{ route('transactions.index') }}">&laquo; Kembali</a>
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

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <label>Pilih Produk:</label><br>
        <select name="product_id" required style="padding: 5px; width: 200px;">
            <option value="">-- Pilih Barang --</option>
            @foreach($products as $p)
                <option value="{{ $p->id }}">{{ $p->nama_barang }} (Stok: {{ $p->stok }})</option>
            @endforeach
        </select><br><br>

        <label>Tipe Transaksi:</label><br>
        <select name="tipe" required style="padding: 5px; width: 200px;">
            <option value="masuk">Barang Masuk (Tambah Stok)</option>
            <option value="keluar">Barang Keluar/Terjual (Kurangi Stok)</option>
        </select><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" min="1" required style="padding: 5px; width: 200px;"><br><br>

        <label>Keterangan (Opsional):</label><br>
        <input type="text" name="keterangan" style="padding: 5px; width: 200px;"><br><br>

        <button type="submit">Simpan Transaksi</button>
    </form>
</body>
</html>