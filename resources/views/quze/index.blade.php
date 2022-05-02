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

    <script type="text/javascript">
      var qu = [];
      var count = 0;
    </script>

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
        <div class="col-sm-2">

        </div>
        <div class="col-sm-4 box bg-dark" id="bo">

          <h2 id="qu" class="btn btn-info"></h2>
          <br>
          <img src="" alt="" class="img-fluid" id="im" width="200px" height="auto">
          <br>
          <img src="" alt="" class="img-fluid" id="an1img" width="200px" height="auto">
          <br>
          <img src="" alt="" class="img-fluid" id="an2img" width="200px" height="auto">
          <br>
          <img src="" alt="" class="img-fluid" id="an3img" width="200px" height="auto">
          <br>
          <img src="" alt="" class="img-fluid" id="an4img" width="200px" height="auto">
          <br>
          <img src="" alt="" class="img-fluid" id="an5img" width="200px" height="auto">
          <br>
          <select class="form-control" name="answer" id="answer">
            <option value="an1" id="an1"></option>
            <option value="an2" id="an2"></option>
            <option value="an3" id="an3"></option>
            <option value="an4" id="an4"></option>
            <option value="an5" id="an5"></option>
          </select>

          <input type="text" id="coan" value="" class="hid">
          <br><br>

          <button type="button" name="button" class="btn btn-primary" onclick="qrun()">Next</button>


        </div>

        <div class="col-sm-1">

        </div>
        <div class="col-sm-5">

          <div id="finish">

          </div>


          <button type="button" name="button" id="0" class="btn btn-warning" onclick="show(0)">01</button>
          <button type="button" name="button" id="1" class="btn btn-warning" onclick="show(1)">02</button>
          <button type="button" name="button" id="2" class="btn btn-warning" onclick="show(2)">03</button>
          <button type="button" name="button" id="3" class="btn btn-warning" onclick="show(3)">04</button>
          <button type="button" name="button" id="4" class="btn btn-warning" onclick="show(4)">05</button>

          <button type="button" name="button" id="5" class="btn btn-warning" onclick="show(5)">06</button>
          <button type="button" name="button" id="6" class="btn btn-warning" onclick="show(6)">07</button>
          <button type="button" name="button" id="7" class="btn btn-warning" onclick="show(7)">08</button>
          <button type="button" name="button" id="8" class="btn btn-warning" onclick="show(7)">09</button>
          <button type="button" name="button" id="9" class="btn btn-warning" onclick="show(9)">10</button>

          <button type="button" name="button" id="10" class="btn btn-warning" onclick="show(10)">11</button>
          <button type="button" name="button" id="11" class="btn btn-warning" onclick="show(11)">12</button>
          <button type="button" name="button" id="12" class="btn btn-warning" onclick="show(12)">13</button>
          <button type="button" name="button" id="13" class="btn btn-warning" onclick="show(13)">14</button>
          <button type="button" name="button" id="14" class="btn btn-warning" onclick="show(14)">15</button>

          <button type="button" name="button" id="15" class="btn btn-warning" onclick="show(15)">16</button>
          <button type="button" name="button" id="16" class="btn btn-warning" onclick="show(16)">17</button>
          <button type="button" name="button" id="17" class="btn btn-warning" onclick="show(17)">18</button>
          <button type="button" name="button" id="18" class="btn btn-warning" onclick="show(18)">19</button>
          <button type="button" name="button" id="19" class="btn btn-warning" onclick="show(19)">20</button>

          <button type="button" name="button" id="20" class="btn btn-warning" onclick="show(20)">21</button>
          <button type="button" name="button" id="21" class="btn btn-warning" onclick="show(21)">22</button>
          <button type="button" name="button" id="22" class="btn btn-warning" onclick="show(22)">23</button>
          <button type="button" name="button" id="23" class="btn btn-warning" onclick="show(23)">24</button>
          <button type="button" name="button" id="24" class="btn btn-warning" onclick="show(24)">25</button>

          <button type="button" name="button" id="25" class="btn btn-warning" onclick="show(25)">26</button>
          <button type="button" name="button" id="26" class="btn btn-warning" onclick="show(26)">27</button>
          <button type="button" name="button" id="27" class="btn btn-warning" onclick="show(27)">28</button>
          <button type="button" name="button" id="28" class="btn btn-warning" onclick="show(28)">29</button>
          <button type="button" name="button" id="29" class="btn btn-warning" onclick="show(29)">30</button>

          <button type="button" name="button" id="30" class="btn btn-warning" onclick="show(30)">31</button>
          <button type="button" name="button" id="31" class="btn btn-warning" onclick="show(31)">32</button>
          <button type="button" name="button" id="32" class="btn btn-warning" onclick="show(32)">33</button>
          <button type="button" name="button" id="33" class="btn btn-warning" onclick="show(33)">34</button>
          <button type="button" name="button" id="34" class="btn btn-warning" onclick="show(34)">35</button>

          <button type="button" name="button" id="35" class="btn btn-warning" onclick="show(35)">36</button>
          <button type="button" name="button" id="36" class="btn btn-warning" onclick="show(36)">37</button>
          <button type="button" name="button" id="37" class="btn btn-warning" onclick="show(37)">38</button>
          <button type="button" name="button" id="38" class="btn btn-warning" onclick="show(38)">39</button>
          <button type="button" name="button" id="39" class="btn btn-warning" onclick="show(39)">40</button>

          <button type="button" name="button" id="40" class="btn btn-warning" onclick="show(40)">41</button>
          <button type="button" name="button" id="41" class="btn btn-warning" onclick="show(41)">42</button>
          <button type="button" name="button" id="42" class="btn btn-warning" onclick="show(42)">43</button>
          <button type="button" name="button" id="43" class="btn btn-warning" onclick="show(43)">44</button>
          <button type="button" name="button" id="44" class="btn btn-warning" onclick="show(44)">45</button>
          <button type="button" name="button" id="45" class="btn btn-warning" onclick="show(45)">46</button>
          <button type="button" name="button" id="46" class="btn btn-warning" onclick="show(46)">47</button>
          <button type="button" name="button" id="47" class="btn btn-warning" onclick="show(47)">48</button>
          <button type="button" name="button" id="48" class="btn btn-warning" onclick="show(48)">49</button>
          <button type="button" name="button" id="49" class="btn btn-warning" onclick="show(49)">50</button>




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
      .hid{
        visibility: hidden;
      }
    </style>

    <script type="text/javascript">
      var results = <?php echo json_encode( $result ) ?>;

      let questions = [];


      var count = 0;
      var co = 0;

      var total = 0;

    </script>

    <script type="text/javascript">
      for( i in results ) {

        questions[count] = results[i];
        count = count+1;
      }

      console.log(questions[0].qu);

      function show(co) {

        if (co == 40) {
          document.getElementById('finish').innerHTML='<button type="button" name="button" class="btn btn-info" onclick="end()">Finish</button> <br><br>'
        }
          var qu = questions[co].qu;
          var an1 = questions[co].an1;
          var an2 = questions[co].an2;
          var an3 = questions[co].an3;
          var an4 = questions[co].an4;
          var an5 = questions[co].an5;
          var an1img = questions[co].an1img;
          var an2img = questions[co].an2img;
          var an3img = questions[co].an3img;
          var an4img = questions[co].an4img;
          var an5img = questions[co].an5img;
          var coan = questions[co].coan;
          var im = questions[co].im;

          document.getElementById('qu').innerHTML=qu;
          document.getElementById('im').src='images/'+im;
          document.getElementById('an1').innerHTML=an1;
          document.getElementById('an2').innerHTML=an2;
          document.getElementById('an3').innerHTML=an3;
          document.getElementById('an4').innerHTML=an4;
          document.getElementById('an5').innerHTML=an5;
          document.getElementById('an1img').src='an1/'+an1img;
          document.getElementById('an2img').src='an2/'+an2img;
          document.getElementById('an3img').src='an3/'+an3img;
          document.getElementById('an4img').src='an4/'+an4img;
          document.getElementById('an5img').src='an5/'+an5img;
          document.getElementById('coan').value=coan;



      }

      function qrun() {
        var corect = document.getElementById('coan').value;
        var answers = document.getElementById('answer').value;

        if (answers == corect) {
          document.getElementById(co).style.background="blue";
          total = total+1;
          co = co+1;
          alert('correct');
          show(co);

        }else {
          document.getElementById(co).style.background="red";
          co = co+1;
          alert('wrong');
          show(co);

        }
      }

      function end() {
        var bo = document.getElementById('bo');
        bo.innerHTML='Your marks is : <br>'+total;
      }

      show(0);

    </script>

  </body>
</html>
