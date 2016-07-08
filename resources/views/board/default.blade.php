<html>
<head>
    <meta charset="UTF-8"/>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/board.css">
    <title>Board</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">THE SNS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">掲示板</a></li>
            <li><a href="#">日記</a></li>
            <li><a href="#">メッセージ</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li style="transform: translateY(50%);display:flex">
              <input name="" type="text" value=""/>
              <div class="serch_icon" style="background: white;width: 22px;border-radius: 0px 5px 5px 0px;text-align: center;">
                <span style="transform: translateY(20%);" class="glyphicon glyphicon-search"></span>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
  
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                      </ul>
                  </li>
              @endif
          </ul>
        </div>
      </div>
    </nav>
     @yield('board_content')
     
     <footer style="border-top: 1px solid black;text-align:center;">
      <small>Copyright © xxxxx All Rights Reserved.</small>
    </footer>
</body>
</html>