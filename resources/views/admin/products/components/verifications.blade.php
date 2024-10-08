<div class="modal fade" id="verificationsModal-{{ $id }}" tabindex="-1" aria-labelledby="verificationsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verificationsModalLabel">{{ __('admin.verifications') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('admin.vehicles.components.verifications-table')
            </div>
        </div>
    </div>
</div>
