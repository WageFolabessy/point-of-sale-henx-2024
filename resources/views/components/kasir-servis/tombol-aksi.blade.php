<div class="d-flex justify-content-center align-items-center">
    <a href="#" id="tombol-hapus" class="btn btn-danger btn-icon-split mb-4 mr-2" title="Hapus"
        data-id="{{ $data->id }}">
        <span class="icon text-white-50">
            <i class="fas fa-trash"></i>
        </span>
    </a>
    <a href="#" id="tombol-edit" class="btn btn-warning btn-icon-split mb-4 mr-2" title="Edit" data-toggle="modal"
        data-target="#modal-edit-transaksi" data-id="{{ $data->id }}">
        <span class="icon text-white-50">
            <i class="fas fa-edit"></i>
        </span>
    </a>
    <a href="#" id="tombol-detail" class="btn btn-info btn-icon-split mb-4 mr-2" title="Detail"
        data-toggle="modal" data-target="#modal-detail-transaksi" data-id="{{ $data->id }}">
        <span class="icon text-white-50">
            <i class="fas fa-eye"></i>
        </span>
    </a>
    <form action="{{ route('servis-nota', $data->id) }}" method="GET">
        @csrf
        <button type="submit" id="tombol-nota" class="btn btn-secondary btn-icon-split mb-4 mr-2" title="nota"
            data-toggle="modal" data-target="#modal-nota-transaksi" data-id="{{ $data->id }}">
            <span class="icon text-white-50">
                <i class="fas fa-download"></i>
            </span>
        </button>
    </form>
    </div>
