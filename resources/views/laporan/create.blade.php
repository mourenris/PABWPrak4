<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan Banjir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title mb-4">Form Pelaporan Banjir BPBD</h3>
                <form action="/laporan/simpan" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pelapor</label>
                        <input type="text" name="nama_pelapor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi (Kecamatan)</label>
                        <input type="text" name="lokasi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tinggi Genangan (cm)</label>
                        <input type="number" name="tinggi_genangan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Kejadian</label>
                        <input type="date" name="tanggal_kejadian" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Laporan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>