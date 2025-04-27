<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Data Hewan</h1>

        <form method="POST" action="{{ route('hewan.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" placeholder="Nama Hewan" required>
            </div>

            <div class="mb-3">
                <label for="jenis_hewan" class="form-label">Jenis Hewan</label>
                <input type="text" name="jenis_hewan" id="jenis_hewan" class="form-control" placeholder="Jenis Hewan" required>
            </div>

            <div class="mb-3">
                <label for="ras" class="form-label">Ras</label>
                <input type="text" name="ras" id="ras" class="form-control" placeholder="Ras Hewan" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" placeholder="Nama Pemilik" required>
            </div>

            <div class="mb-3">
                <label for="kontak_pemilik" class="form-label">Kontak Pemilik</label>
                <input type="text" name="kontak_pemilik" id="kontak_pemilik" class="form-control" placeholder="Kontak Pemilik" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
