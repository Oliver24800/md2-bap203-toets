@extends('layouts.master')

@section('content')

    <h1>Toevoegen</h1>
    <form action="{{route ('links-opslaan')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">titel</label>
            <input type="text" name="title" class="form-control" />
            @if ($errors->has('title'))
                <p class="text-danger"> {{ $errors->first('title')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">description</label>
            <textarea name="description" rows="10" colls="40" class="form-control" ></textarea>
            @if ($errors->has('description'))
                <p class="text-danger"> {{ $errors->first('description')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">url</label>
            <input type="text" name="url" class="form-control" />
            @if ($errors->has('url'))
                <p class="text-danger"> {{ $errors->first('url')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-success"> opslaan
        </button>
    </form>


@endsection