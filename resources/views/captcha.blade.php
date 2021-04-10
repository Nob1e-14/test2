<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

<link href="../build/css/custom.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Styles -->
    <style>
        .container {
            max-width: 500px;
        }
        .reload {
            font-family: Lucida Sans Unicode
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2>Captcha en Laravel</h2>


        @if (session('status'))
                <div class="w3-panel w3-green w3-round">
                    <h3>{{ session('status') }}</h3>
                </div>
            @endif
        @if (session('alert'))
                <div class="alert alert-danger">
                    <h3>{{ session('alert') }}</h3>
                </div>
            @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{url('captcha-validation')}}">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="Password">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group mt-4 mb-4">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>

            <div class="form-group mb-4">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</body>

<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

</script>

</html>