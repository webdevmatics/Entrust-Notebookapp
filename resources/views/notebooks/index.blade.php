@extends('layouts.base')

@section('content')
	<div class="container text-center">
            <h1 class="pull-xs-left">Your Notebooks</h1>
            <div class="pull-xs-right">
                <a class="btn btn-primary" href="#" role="button">New NoteBook +</a>
            </div>
            <div class="clearfix"></div>
            <!-- notebook view -->
            <div class="row notebooks">
            @foreach($notebooks as $notebook)
                <div class="col-sm-6 col-md-3">
                    <div class="row">
                        <a href="{{route('notebooks.show',$notebook->id)}}"><img src="dist/img/notebook.jpg" class="img-thumbnail" alt="Responsive image"></a>
                        <div class="notebook-title">
                            
                            <a href="{{route('notebooks.show',$notebook->id)}}" class="btn btn-primary" role="button">{{$notebook->name}}</a> 
                        </div>
                    </div>
                </div>
            @endforeach    
                </div>
            </div>
        </div>
@endsection