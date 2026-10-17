<div class="card mb-3 shadow-sm border-0">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="card-title m-0 fw-bold text-primary">{{ $item->lokasi }}</h5>
            
            @if($item->tinggi_genangan < 30)
                <span class="badge bg-warning text-dark">Waspada</span>
            @elseif($item->tinggi_genangan <= 70)
                <span class="badge bg-warning text-white">Siaga</span>
            @else
                <span class="badge bg-danger text-white">Awas</span>
            @endif
        </div>
        
        <p class="card-text mb-1">
            <strong>Pelapor:</strong> {{ $item->nama_pelapor }}
        </p>
        <p class="card-text mb-1">
            <strong>Tinggi Genangan:</strong> {{ $item->tinggi_genangan }} cm
        </p>
        <p class="card-text text-muted small mb-0">
            <strong>Tanggal Kejadian:</strong> {{ \Carbon\Carbon::parse($item->tanggal_kejadian)->format('d M Y') }}
        </p>
    </div>
</div>