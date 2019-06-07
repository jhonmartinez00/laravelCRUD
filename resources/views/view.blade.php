<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">  
<script src="{{ asset('js/app.js') }}"></script>
    <head>
        <title>View</title>
    </head>
    <body>
        <div class="container">
        <h2 class="pt-5">Announcements</h2>
        <a href="/create">Create new announcement</a>

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show col-lg-4" style="float:right" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

        @if(session()->has('deleteMessage'))
        <div class="alert alert-danger alert-dismissible fade show col-lg-4" style="float:right" role="alert">
        {{ session()->get('deleteMessage') }} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

        @if(session()->has('updateMessage'))
        <div class="alert alert-primary alert-dismissible fade show col-lg-4" style="float:right" role="alert">
        {{ session()->get('updateMessage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif


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
    <form action="/view/{{$announcement->id}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
    </td>
  </tr>
@endforeach
</tbody>
</table>
<div style="float:right">{{ $announcements->links() }}</div>
        </div>
    </body>
</html> 