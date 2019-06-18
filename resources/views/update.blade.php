@extends('layouts.app')
@section('content')
    <body>
    
        <div class="container">
            <form action="/update/{{ $announcement-> id}}" method="POST">
            @method('PATCH')
        <h2 class="pt-5">Edit Details
        <a h0ref="/view" class="btn btn-secondary float-right">Back</a>
        </h2>
        <hr>
      
      
      
        <div class="row mt-5">
            <div class="col col-lg-8">
                <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $announcement-> title}}">
                    <div>{{ $errors->first('title') }}</div>
                </div>
            </div>

            <div class="col col-lg-4">
                <div class="form-group">
                    <input type="date" name="date" class="form-control" value="{{ $announcement->date }}">
                </div>
                </div>

            </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $announcement-> content }}</textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>
                <button type="submit" class="btn btn-success" style="float:right">SAVE</button>
                @csrf
            </form>
        </div>
    </body>
</html> 
@endsection