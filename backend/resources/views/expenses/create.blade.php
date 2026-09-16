<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengeluaran</title>
</head>
<body>
    <h1>Tambah Pengeluaran Baru</h1>

    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf

        <div>
            <label>Tanggal:</label><br>
            <input type="date" name="tanggal" required>
        </div>
        <br>
        <div>
            <label>Keterangan:</label><br>
            <input type="text" name="keterangan" required>
        </div>
        <br>
        <div>
            <label>Jumlah:</label><br>
            <input type="number" name="jumlah" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>