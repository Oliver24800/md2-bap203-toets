@extends ('layouts.master')

@section ('content')

    <div class="container">
        @foreach($links as $links)
            <a href="">{{$links->title}}</a>
        @endforeach
    </div>
    @endsection