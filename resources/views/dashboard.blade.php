<head>
    @if(Auth::user()->role == 1)
    <meta http-equiv="refresh" content="0; url={{route('courses.index')}}" />
    @elseif(Auth::user()->role == 3)
    <meta http-equiv="refresh" content="0; url={{route('classes.index')}}" />
    @elseif(Auth::user()->role == 2)
    <meta http-equiv="refresh" content="0; url={{route('classes.index')}}" />
    @endif
</head>