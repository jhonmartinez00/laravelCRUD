@extends('nav')
@section('content')
    <body>
        <div class="container">
            <form action="/update/{{ $announcement-> id}}" method="POST">
            @method('PATCH')
        <h2 class="pt-5">Edit Details
        <a href="/view" class="btn btn-secondary float-right">Back</a>
        </h2>
        <hr>
                <div class="form-group mt-5">
                    <input type="text" class="form-control" name="title" value="{{ $announcement-> title}}">
                    <div>{{ $errors->first('title') }}</div>
                </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $announcement-> content }}</textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>
                <?php
                    $dateAnnounced = date("Y/m/d");  
                ?>
                <input type="text" value="{{ $dateAnnounced }}" style="display:none" name="date">
                <button type="submit" class="btn btn-success" style="float:right">SAVE</button>
                @csrf
            </form>
        </div>
    </body>
</html> 
@endsection