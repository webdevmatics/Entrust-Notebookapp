<div class="container text-center">
    <form action="{{route('notebooks.update',$notebooks->id)}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group">
            <label for="name">
                NoteBook Name
            </label>
            <input class="form-control" name="name" placeholder="input" type="text">
            </input>
        </div>

        <input type="submit" class="btn btn-primary" value="Done">

        <form action="{{route('notebooks.delete',$notebooks->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
            <div class="form-group">
                {{-- <a href="{{}}"></a> --}}
            <input type="submit" class="btn btn-danger" value="Delete">

            </div>
        </form>    
        
    </form>
</div>