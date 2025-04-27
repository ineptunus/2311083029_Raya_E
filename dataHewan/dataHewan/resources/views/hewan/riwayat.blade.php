<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Data Dihapus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Riwayat Hewan yang Dihapus</h1>

        <a href="{{ route('hewan.index') }}" class="btn btn-secondary mb-3">Kembali ke Data Hewan</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Hewan</th>
                    <th>Jenis</th>
                    <th>Ras</th>
                    <th>Tanggal Lahir</th>
                    <th>Nama Pemilik</th>
                    <th>Kontak Pemilik</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hewan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_hewan }}</td>
                        <td>{{ ucfirst($item->jenis_hewan) }}</td>
                        <td>{{ $item->ras }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->kontak_pemilik }}</td>
                        <td>
                            <span class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($item->status) }}
                            </span>
                        </td>
                        <td>
                            {{-- Tombol Restore --}}
                            <form action="{{ route('hewan.restore', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-success btn-sm">Restore</button>
                            </form>
        
                            {{-- Tombol Hapus Permanen --}}
                            <form action="{{ route('hewan.riwayat', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus permanen?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus Permanen</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Belum ada data hewan yang dihapus.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
    </div>
</body>
</html>
