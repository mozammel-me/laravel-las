@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible  show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('fail'))
    <div class="alert alert-danger alert-dismissible  show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible  show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $error }}</strong>
    </div>
@endforeach