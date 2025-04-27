@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-5">
    <h2 class="mb-4">Data Hewan Peliharaan</h2>

    <a href="{{ route('hewan.create') }}" class="btn btn-primary mb-3">Tambah Hewan</a>
    <a href="{{ route('hewan.riwayat') }}" class="btn btn-success mb-3">Riwayat Hapus</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
                    <td>{{ $index + $hewan->firstItem() }}</td>
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
                        <a href="{{ route('hewan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('hewan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Belum ada data hewan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
<div class="pagination">
    {{ $hewan->links("pagination::bootstrap-5") }}
</div>
@endsection
