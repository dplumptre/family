@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @if ( !empty($header) && $header === true )
        <h4><i class="icon fa fa-ban"></i> Form Errors</h4>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    {{--<div class="alert alert-danger alert-dismissable">--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        {{--<h3 class="font-w300 push-15"><i class="icon fa fa-ban"></i> Form Error(s)</h3>--}}
        {{--<p>Opps, an error <a class="alert-link" href="javascript:void(0)">occured</a>!</p>--}}
    {{--</div>--}}
@endif