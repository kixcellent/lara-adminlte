@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success" role="alert">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif

@if(Session::get('warning', false))
    <?php $data = Session::get('warning'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-warning" role="alert">
                <i class="fa fa-warning"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-warning"></i>
            {{ $data }}
        </div>
    @endif
@endif

@if(Session::get('danger', false))
    <?php $data = Session::get('danger'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-times"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-danger" role="alert">
            <i class="fa fa-times"></i>
            {{ $data }}
        </div>
    @endif
@endif

@if(Session::get('info', false))
    <?php $data = Session::get('info'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-info" role="alert">
                <i class="fa fa-exclamation"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-info" role="alert">
            <i class="fa fa-exclamation"></i>
            {{ $data }}
        </div>
    @endif
@endif
