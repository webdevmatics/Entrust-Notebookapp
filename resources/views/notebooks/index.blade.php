@extends('layouts.base')

@section('content')
<div class="container text-center">
    <h1 class="pull-xs-left">
        Your Notebooks
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="{{route('notebooks.create')}}" role="button">
            New NoteBook +
        </a>
    </div>
    <div class="clearfix">
    </div>
    <!-- notebook view -->
    <div class="row notebooks">
        @foreach($notebooks as $notebook)
        <div class="col-sm-6 col-md-3">
            <div class="card">
                <div class="card-block">
                    <a href="{{route('notebooks.show',$notebook->id)}}">
                        <h4 class="card-title">
                            {{$notebook->name}}
                        </h4>
                    </a>
                </div>
                <a href="{{route('notebooks.show',$notebook->id)}}">
                    <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                </a>
                <div class="card-block">
                    <a class="card-link" href="{{route('notebooks.update',$notebook->id)}}">
                        Edit Notebook
                    </a>
                    {{-- <a class="card-link" href="#"> --}}
                        {{-- delete form --}}
                        <form style="display:inline" action="{{route('notebooks.destroy',$notebook->id)}}" class="pull-xs-right5 card-link" method="POST">
                            {{csrf_field()}}
            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            </input>
                        </form>
                    {{-- </a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
