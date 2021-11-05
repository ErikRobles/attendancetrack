<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <title>Portal SignUp</title>
    <style>
        .signUp-container {
    width: 60%;
    height: 550px;
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
        height: 600px;
        margin-top: 50px;
        margin-left: 3%;
    }
}
    </style>
</head>
<body>
    @include('layouts.messages')
    <div class="container mt-4">
        <div class="signUp-container">
            <div class="signup-title">
                <h3 class="text-center">Portal Sign Up</h3>
                <hr>

            </div>
        <form method="POST" action="{{ url('portal/signup_sub') }}" class="">
            {{ csrf_field() }}
        {{ method_field('POST') }}
            <div class="signUp-form">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Enter Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Enter Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="name">Enter Phone Number (optional)</label>
                            <input type="text" name="mobile_no" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="name">Enter Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Sign Up</button>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="text-center">Already have an account? <a href="{{ url('portal/login') }}">Login</a></h5>
                        </div>
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
