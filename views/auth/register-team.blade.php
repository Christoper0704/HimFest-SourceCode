<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Register Team</h4><hr>
                <form action="{{ route('auth.save') }}" method="POST">

                @if(Session::get('Success'))
                    <div class="alert alert-success">
                        {{ Session::get('Success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your Name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{ old('email') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <label>line ID</label>
                        <input type="text" class="form-control" name="lineid" placeholder="Enter your Line ID" value="{{ old('lineid') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your Phone Number" value="{{ old('phone') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Team Name</label>
                        <input type="text" class="form-control" name="teamname" placeholder="Enter your Team Name" value="{{ old('teamname') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Referrer</label>
                        <select name="referrer" id="category" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Student Card</label>
                        <input type="file" name="studentcard" id="studentcard">
                    </div>
                    <input type="hidden" id="submit" name="submit" value="1">
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    <br>
                    <a href="{{ route('auth.login') }}">Already have an acount? Login here!</a>
                </form>
                </div>
        </div>
    </div>

</body>
</html>