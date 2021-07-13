<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css ">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <title>Student Data</title>
</head>
<body>
    <div class="container mt-3 mb-4">
        @if ($message = Session::get('success'))
        <div class="alert alert-success mx-1" role="alert">
            {{ $message }}
        </div>
         @endif
         @if ($message = Session::get('update'))
            <div class="alert alert-success mx-1" role="alert">
                {{ $message }}
            </div>
         @endif
         @if ($message = Session::get('delete'))
            <div class="alert alert-success mx-1" role="alert">
                {{ $message }}
            </div>
         @endif
        <h2 class=" text-center">Student Data</h2>
        <div class="mb-4">
            <a href="{{ route('student.create') }}" class="btn btn-primary">Add Data</a>
        </div>
        <table class="table table-hover mt-5" id="student_table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                      <tr>
                          <td>{{ $student->id }}</td>
                          <td><img src="{{ asset('studentPhoto') }}/{{ $student->path }}" alt="" height="100px" width="100px"></td>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->email }}</td>
                          <td>{{ $student->city }}</td>
                          <td><a  class="btn btn-sm btn-primary" href="{{ route('student.edit', $student->id ) }}">EDIT</a></td>
                            <td>
                            <form action="{{ route('student.destroy', $student->id ) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" id="add_value" name="submit">DELETE</button>
                            </form>
                            </td>
                      </tr>
                @endforeach
            </tbody>
            

        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#student_table').DataTable();
} ); 
  </script>
</body>
</html>