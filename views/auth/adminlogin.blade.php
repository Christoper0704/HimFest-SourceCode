<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Admin Login</h4><hr>
                <form action="{{ route('auth.check') }}" method="POST">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                
                @if(Session::get('Success'))
                    <div class="alert alert-success">
                        {{ Session::get('Success') }}
                    </div>
                @endif

                @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your team name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <input type="hidden" id="submit" name="submit" value="2">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                    <br>
                </form>
                </div>
        </div>
    </div>

</body>
</html>