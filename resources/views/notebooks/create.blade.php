@extends('layouts.base')

@section('content')
<div class="container text-center">
    <form action="{{route('notebooks.store')}}" method="POST">
    {{csrf_field()}}
        <div class="form-group">
            <label for="name">
                NoteBook Name
            </label>
            <input class="form-control" name="name" placeholder="input" type="text">
            </input>
        </div>
        <input type="submit" class="btn btn-primary" value="Done">
        
    </form>
</div>
@endsection
