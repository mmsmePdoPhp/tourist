<div class="form-group">
    @if ($errors->any())

        <div class="alert alert-warning alert-dismissible fade show w-75 m-auto p-0 by-1" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif
</div>
