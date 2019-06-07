<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">
    <head>
        <title>Create</title>
    </head>
    <body>
    
        <?php
            $dateAnnounced = date("Y-m-d");  
        ?>
        <div class="container">
            <form action="create" method="POST">
        <h2 class="pt-5">New Announcement</h2>
        <hr>
        <a href="/view">View announcements</a>

            <div class="row mt-5">
            <div class="col col-lg-8">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="">
                    <div>{{ $errors->first('title') }}</div>
                </div>
            </div>

            <div class="col col-lg-4">
                <div class="form-group">
                    <input type="date" name="date" class="form-control" value="{{ $dateAnnounced }}">
                </div>
                </div>

            </div>

            
                <div class="form-group">
                </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="What do you want to announce?"></textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>
                <button type="submit" class="btn btn-success" style="float:right">POST</button>
                @csrf
            </form>
        </div>
    </body>
</html> 