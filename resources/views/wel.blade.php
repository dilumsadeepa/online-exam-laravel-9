<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>



    <div class="container-fluid box">
      <nav class="navbar navbar-expand-sm bg-dark nb">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </nav>
      <div class="row">
        <div class="col-sm-12 item">

        </div>
      </div>
    </div>




    <style media="screen">
      .nb{
        text-align: right;
        float: right;
      }

      .nb a{
        text-decoration: none;
        outline: none;
        color: white;
        font-weight: 400;
        margin: 10px;
        padding: 15px;
      }

      .box{
        width: 100%;
        height: 100vh;
        background-image: url('{{asset("img/wel2.jpg")}}');
      }


    </style>

  </body>
</html>
