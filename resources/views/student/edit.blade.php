<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center mt-3">Student Registration Form</h2>
        <form action="{{ route('student.update', $student->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name')  is-invalid  @enderror" id="name" name="name" value="{{ $student->name }}">
                @error('name')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div> 
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email')  is-invalid  @enderror" id="email" name="email" value="{{ $student->email }}">
                @error('email')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>   
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control @error('city')  is-invalid  @enderror" id="city" name="city" value="{{ $student->city }}">
                @error('city')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div> 
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control @error('photo')  is-invalid  @enderror" type="file" id="formFile" name="photo">
                @if($errors->has('photo'))
                <div class="">{{ $errors->first('photo') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    
  </body>
</html>