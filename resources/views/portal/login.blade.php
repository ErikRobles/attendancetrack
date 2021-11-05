<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('backend/css/app.css')  }}">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <title>Portal Login</title>
    <style>
        .signUp-container {
            width: 60%;
            height: 350px;
            border: 1px solid;
            border-radius: 35px;
            padding: 21px;
            margin-left: 20%;
            margin-top: 150px;
            box-shadow: 5px 10px 18px #888888;
}
@media (max-width: 500px) {
    .signUp-container {
        width: 95%;
        height: 400px;
        margin-top: 50px;
        margin-left: 3%;
    }
}
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="signUp-container">
            <div class="signup-title">
                <h3 class="text-center">Portal Login</h3>
                <hr>

            </div>
        <form method="post" action="{{ route('login_sub') }}" class="">
            @csrf
            <div class="signUp-form">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="name">Enter Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label for="name">Enter Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">Login</button>
                        </div>
                        {{-- <div class="col-sm-12">
                            <h5 class="text-center">Don't have an account? <a href="{{ url('portal/signup') }}">Sign Up</a></h5>
                        </div> --}}
                    </div>
                </div>
            </div>
        </form>
        </div>

    </div>
    <script>
        $(document).ready(function($) {
            $(function() {
                setTimeout(function() {
                    $('.fade-message').slideUp();
                }, 3000);
            });
        });
    </script>
</body>
</html>

