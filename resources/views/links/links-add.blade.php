@extends('layouts.master')

@section('content')

    <form method="post" action="{{route('links-add')}}">
    @csrf
        <div class="form-group">
            <label for="title">Titel: </label>
            <input type="text" name="title" class="form-control">
            @if($errors->has('title'))
                <p class="text-danger">{{$errors->first('title')}}</p>
            @endif

        </div>
        <div class="form-group">
            <label for="link">link: </label>
            <input type="text" name="link" class="form-control">
            @if($errors->has('link'))
                <p class="text-danger">{{$errors->first('link')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">description </label>
            <input type="text" name="description" class="form-control">
            @if($errors->has('description'))
                <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
        <input type="submit" class="btn btn-success" value="yeet het er in">
    </form>

@endsection
