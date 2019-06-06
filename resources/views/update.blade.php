<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <head>
        <title>Edit</title>
    </head>
    <body>
        <div class="container">
            <form action="/update/{{ $announcement-> id}}" method="POST">
            @method('PATCH')
            <h2 class="py-5">Edit Details </h2>
                <div class="form-group">
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