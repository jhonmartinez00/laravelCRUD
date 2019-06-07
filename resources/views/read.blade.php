<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">  
    <head>
        <title>View</title>
    </head>
    <body>
        <div class="container">
        <h2 class="pt-5">Announcements</h2>
        <a href="/create">Create new announcement</a>
<table class="table table-bordered mt-5" style="text-align:center">
<thead>
  <tr>
    <th scope="col">Title</th>
    <th scope="col">Content</th>
    <th scope="col">Date</th>
    <th colspan="2">Action</th>
  </tr>
</thead>
<tbody>

@foreach($announcements as $announcement)
  <tr>
    <td scope="row">{{ $announcement->title }}</td>
    <td>{{ $announcement->content }}</td>
    <td>{{ $announcement->date }}</td>
    <td><a href="/update/{{$announcement->id}}" class="btn btn-primary">EDIT</a></td>
    <td>
    <form action="/read/{{$announcement->id}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
    </td>
  </tr>
@endforeach
</tbody>
</table>
        </div>
    </body>
</html> 