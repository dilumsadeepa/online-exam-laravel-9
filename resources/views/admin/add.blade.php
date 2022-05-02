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
<br><br><br>
    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-12">

          <form action="{{route('exam.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="quze">Quze</label>

               <textarea class="form-control" rows="5" id="quze" name="quze"></textarea>
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" placeholder="Add Image" id="image" name="image">
            </div>

            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="an1" placeholder="Answer one" name="an1">
              </div>
              <div class="col">
                <input type="text" class="form-control" id="an2" placeholder="Answer two" name="an2">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="an3" placeholder="Answer three" name="an3">
              </div>
              <div class="col">
                <input type="text" class="form-control" id="an4" placeholder="Answer four" name="an4">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="an5" placeholder="Answer five" name="an5">
              </div>
              <div class="col">
                <input type="file" class="form-control" id="an1img" placeholder="Answer one image" name="an1img">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col">
                <input type="file" class="form-control" id="an2img" placeholder="Answer two image" name="an2img">
              </div>
              <div class="col">
                <input type="file" class="form-control" id="an3img" placeholder="Answer three image" name="an3img">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col">
                <input type="file" class="form-control" id="an4img" placeholder="Answer four image" name="an4img">
              </div>
              <div class="col">
                <input type="file" class="form-control" id="an5img" placeholder="Answer five image" name="an5img">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col">
                <select class="form-control" name="coan" id="coan">
                  <option value="">Select Correct Answer</option>
                  <option value="an1">Answer 01</option>
                  <option value="an2">Answer 02</option>
                  <option value="an3">Answer 03</option>
                  <option value="an4">Answer 04</option>
                  <option value="an5">Answer 05</option>
                  <option value="an1img">Answer 01 image</option>
                  <option value="an2img">Answer 02 image</option>
                  <option value="an3img">Answer 03 image</option>
                  <option value="an4img">Answer 04 image</option>
                  <option value="an5img">Answer 05 image</option>

                </select>

              </div>
              <div class="col">

                <select class="form-control" name="grade" id="grade">
                  <option value="">Select Grade</option>
                  <!--option value="6">Grade 06</option>
                  <option value="7">Grade 07</option>
                  <option value="8">Grade 08</option>
                  <option value="9">Grade 09</option>
                  <option value="10">Grade 10</option>
                  <option value="11">Grade 11</option-->
                  <option value="12">Grade 12</option>
                  <option value="13">Grade 13</option>
                </select>
              </div>

            </div>
<br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
        <br>

      </div>

    </div>
    <br><br>
    <a href="{{route('dashboard')}}" class="btn btn-info">Go Back</a>

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
    </style>

  </body>
</html>
