<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TECHC.SNS</title>
  
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"> 
    <!-- Script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    TECHC.SNS
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse"　id="myNavbar">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
<<<<<<< HEAD
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/tweet') }}">Tweet</a></li>
                    <li><a href="{{ url('/timeline') }}">TL</a></li>
=======
                    <li><a href="{{ url('/home') }}">マイページ</a></li>
                    <li><a href="#">掲示板</a></li>
                    <li><a href="#">日記</a></li>
                    <li><a href="#">メッセージ</a></li>
>>>>>>> b7d49d5a27a2a6ced0eaa7a22585a53a6ec26a48
                </ul>
       
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                  <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user">ログイン</span></a></li>
                  <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"> 登録</span></a></li>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                          <li style="transform: translateY(50%);display:flex">
                            <input name="" type="text" value=""/>
                            <div class="serch_icon" style="background: white;width: 22px;border-radius: 0px 5px 5px 0px;text-align: center;">
                              <span style="transform: translateY(20%);" class="glyphicon glyphicon-search"></span>
                            </div>
                          </li>
                        </ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->user_name }} <span class="caret"></span>
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
  
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
