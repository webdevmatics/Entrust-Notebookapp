@extends('layouts.base')

@section('content')
<div class="container">
    <h1 class="pull-xs-left">
        Notes
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="{{route('notes.create')}}" role="button">
            New Note +
        </a>
    </div>
    <div class="clearfix">
    </div>
    <!-- notes -->
    <div class="list-group notes-group">
        @foreach($notes as $note)
        <a class="list-group-item list-group-item-action" href="{{route('notes.show',$note->id)}}">
            <h5 class="list-group-item-heading">
                {{$note->title}}
            </h5>
            <p class="list-group-item-text">
                {{str_limit($note->body,30)}}
            </p>
        </a>
        @endforeach
        
    </div>
</div>
@endsection
