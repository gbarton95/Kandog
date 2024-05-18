<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title fw-bold fs-3">{{ $title }}</h5>
            </div>
            <div class="modal-body pb-3">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger" id="{{ $id }}ConfirmButton">{{ $confirmText }}</button>
            </div>
        </div>
    </div>
</div>
