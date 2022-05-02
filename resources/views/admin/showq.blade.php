<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Exam</title>

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

    <div class="table-responsive table-hover table-dark">
      <table class="table">
        <tr class="thead-light">
          <th>NO</th>
          <th>Quiz</th>
          <th>Ansewer 1</th>
          <th>Ansewer 2</th>
          <th>Ansewer 3</th>
          <th>Ansewer 4</th>
          <th>Ansewer 5</th>
          <th>C. Answer</th>
          <th>Grade</th>
          <th>Action</th>
        </tr>
      @foreach($result as $r)
        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->qu}}</td>
          <td>{{$r->an1}}</td>
          <td>{{$r->an2}}</td>
          <td>{{$r->an3}}</td>
          <td>{{$r->an4}}</td>
          <td>{{$r->an5}}</td>
          <td>{{$r->coan}}</td>
          <td>{{$r->grade}}</td>
        </tr>
      @endforeach
      </table>
    </div>

  </body>
</html>
