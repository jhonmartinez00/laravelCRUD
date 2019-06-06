<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <head>
        <title>View</title>
    </head>
    <body>
        <div class="container">
        <h2 class="py-3">Announcements</h2>

<table class="table table-bordered" style="text-align:center">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col">Content</th>
    <th scope="col">Date</th>
    <th colspan="2">Action</th>
  </tr>
</thead>
<tbody>

@foreach($announcements as $announcement)
  <tr>
    <th scope="row">{{ $announcement->id }}</th>
    <td>{{ $announcement->title }}</td>
    <td>{{ $announcement->content }}</td>
    <td>{{ $announcement->date }}</td>
    <td><a href="/update/{{$announcement->id}}" class="btn btn-primary">UPDATE</a></td>
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