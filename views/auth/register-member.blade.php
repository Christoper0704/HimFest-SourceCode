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
                <h4>Register Member</h4><hr>
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
                        <label>Member Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Line ID</label>
                        <input type="text" class="form-control" name="lineid" placeholder="Enter your Line ID (optional)">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                        <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Student Card</label>
                        <input type="file" name="studentcard" id="studentcard">
                    </div>
                    <input type="hidden" id="submit" name="submit" value="2">
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                </form>
                </div>
        </div>
    </div>

</body>
</html>