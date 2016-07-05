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
            <li><a href="../ilvinchan95/lavarel/resources/views/auth/signup.blade.php"><span class="glyphicon glyphicon-user"> Sign Up</span></a></li>
            <li><a href="../ilvinchan95/lavarel/resources/views/auth/signin.blade.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
     @yield('board_content')
     
</body>
</html>