<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Exam | Admin</title>

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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Online Examination System</a>



          <!-- Dropdown -->
          <li class="nav-item dropdown fl">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="40px" height="40px"/>
            </a>
            @else
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              {{ Auth::user()->name }}
            </a>
            @endif
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                       this.closest('form').submit();">{{ __('Logout') }}</a>
              </form>
            </div>
          </li>
        </ul>
      </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1>Admin Panel</h1>
        </div>
      </div>
    </div>
<br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

            <div class="btn btn-info pa"><a href="{{route('adminv.index')}}">
              <h3>Quzes</h3>
              <hr>
              {{$ex}}</a>
            </div>

            <div class="btn btn-info pa">
              <h3>Users</h3>
              <hr>
              {{$us}}
            </div>

            <div class="btn btn-info pa">
              <h3>Users</h3>
              <hr>

              <a href="{{ route('quze.create') }}" class="">Register</a>

            </div>




        </div>
      </div>
<br><br><br>
      <div class="row">
        <div class="col-sm-6 box bg-dark">

          <a href="{{route('exam.create')}}" class="btn btn-info">ADD QUZE</a>


        </div>

        <div class="col-sm-6 box bg-dark">

          <a href="{{route('image.create')}}" class="btn btn-info">ADD QUZE with images</a>


        </div>
      </div>

    </div>

    <style media="screen">
      .box{
        text-align: center;

        color: white;
        padding: 40px;
      }
      .fl{
        right: 0;
        margin-left: 70%;
      }

      .pa{
        padding: 10px;
        text-align: center;
        width: 300px;
      }

      .re{
        color: white;
      }
    </style>

  </body>
</html>
