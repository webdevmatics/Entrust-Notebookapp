@extends('layouts.base')

@section('content')
<div class="container text-center">
    <form action="{{route('notes.update',$note->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" placeholder="Note Title" type="text">
            
        </div>

        <div class="form-group">
            <label for="body">
                Notes
            </label>
            <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3">
        </div>
        <input type="submit" class="btn btn-primary" value="Done">
    </form>
</div>
@endsection
