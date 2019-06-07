<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">
    <head>
        <title>Create</title>
    </head>
    <body>
        <div class="container">
            <form action="create" method="POST">
        <h2 class="pt-5">Create Announcements</h2>
        <a href="/read">View announcements</a>
                <div class="form-group mt-5">
                    <input type="text" class="form-control" name="title" placeholder="Announcement Title" value="">
                    <div>{{ $errors->first('title') }}</div>
                </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="What do you want to announce?"></textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>
                <?php
                    $dateAnnounced = date("Y/m/d");  
                ?>
                <input type="text" value="{{ $dateAnnounced }}" style="display:none" name="date">
                <button type="submit" class="btn btn-success" style="float:right">POST</button>
                @csrf
            </form>
        </div>
    </body>
</html> 