<div class="d-flex justify-content-end gap-2">
    @if (!empty($editSelector) && !empty($permissionKey))
        @can("update {$permissionKey}")
            <button type="button" class="btn btn-sm btn-light-primary {{ $editSelector }}"
                data-id="{{ $recordId }}">
                {{ $editLabel ?? 'Edit' }}
            </button>
        @endcan
    @endif

    @if (!empty($deleteSelector) && !empty($permissionKey))
        @can("delete {$permissionKey}")
            <button type="button" class="btn btn-sm btn-light-danger {{ $deleteSelector }}"
                data-id="{{ $recordId }}">
                {{ $deleteLabel ?? 'Delete' }}
            </button>
        @endcan
    @endif
</div>
