<!DOCTYPE html>
<html>
<head>
    <title>Seka Warung - Transaksi Stok</title>
</head>
<body>
    <h1>Riwayat Transaksi & Stok Seka Warung</h1>
    <a href="{{ route('transactions.create') }}">+ Catat Transaksi Baru</a> | 
    <a href="{{ route('products.index') }}">Kembali ke Daftar Produk</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
        </tr>
        @foreach($transactions as $index => $t)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $t->product->nama_barang ?? 'Produk Dihapus' }}</td>
            <td>
                <span style="color: {{ $t->tipe == 'masuk' ? 'green' : 'red' }}; font-weight: bold;">
                    {{ strtoupper($t->tipe) }}
                </span>
            </td>
            <td>{{ $t->jumlah }}</td>
            <td>{{ $t->keterangan }}</td>
            <td>{{ $t->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>