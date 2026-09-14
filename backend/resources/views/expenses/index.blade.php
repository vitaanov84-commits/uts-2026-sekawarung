<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengeluaran</title>
</head>
<body>
    <div style="padding: 20px; font-family: Arial, sans-serif;">
        <h2>Daftar Pengeluaran</h2>

        <!-- Pesan sukses jika data berhasil disimpan -->
        @if(session('success'))
            <div style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('expenses.create') }}" style="display: inline-block; margin-bottom: 15px; padding: 5px 10px; background: #28a745; color: white; text-decoration: none;">+ Tambah Pengeluaran</a>

        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #f2f2f2;">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @forelse($expenses as $index => $expense)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $expense->tanggal }}</td>
                        <td>{{ $expense->keterangan }}</td>
                        <td>Rp {{ number_format($expense->jumlah, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" align="center">Belum ada data pengeluaran.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>