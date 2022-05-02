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



  </body>
</html>
