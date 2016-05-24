<?php 
 $dbhost  = 'localhost';    // Unlikely to require changing
 $dbname  = 'miyamour_ura01';   // Modify these...
 $dbuser  = 'miyamour_root';   // ...variables according
 $dbpass  = 'Hotdilvin95';   // ...to your installation

 //$dbhost, $dbuser, $dbpass, $dbname
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 if ($conn->connect_error) die($conn->connect_error);
 mysqli_set_charset($conn,"utf8");
 function queryMysql($query)
 {
    global $conn;
    $results = $conn->query($query);
    if (!$results) die($conn->error);
    return $results;
 }
 function destroySession()
 {
    $_SESSION=array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');
    session_destroy();
 }

 function google_ads()
 {
 }
 
 function maist_ads_leaderboard()
 {
    echo "
    <div class='head_ad' style='text-align: center;'>
    <script type='text/javascript'>
        var adstir_vars = {
        ver: '4.0',
        app_id: 'MEDIA-c7049e1c',
        ad_spot: 4,
        center: false,
        };
    </script>
    <script type='text/javascript' src='https://js.ad-stir.com/js/adstir.js'></script>
    </div>";
 }
 function maist_ads_leaderboard2()
 {
     echo "
     <div class='foot_ad' style='text-align: center;'>
        <script type='text/javascript'>
            var adstir_vars = {
            ver: '4.0',
            app_id: 'MEDIA-c7049e1c',
            ad_spot: 5,
            center: false,
            };
        </script>
        <script type='text/javascript' src='https://js.ad-stir.com/js/adstir.js'></script>
    </div>";
 }
 function maist_ads_250s()
 {
    echo "
    <div style='float:left;'>
        <script type='text/javascript'>
            var adstir_vars = {
            ver: '4.0',
            app_id: 'MEDIA-c7049e1c',
            ad_spot: 1,
            center: false,
            };
        </script>
        <script type='text/javascript' src='https://js.ad-stir.com/js/adstir.js'></script>
    </div>


    <div style='float:left;'>
        <script type='text/javascript'>
            var adstir_vars = {
            ver: '4.0',
            app_id: 'MEDIA-c7049e1c',
            ad_spot: 2,
            center: false,
            };
        </script>
        <script type='text/javascript' src='https://js.ad-stir.com/js/adstir.js'></script>
    </div>



    <div style='float:left;'>
        <script type='text/javascript'>
            var adstir_vars = {
            ver: '4.0',
            app_id: 'MEDIA-c7049e1c',
            ad_spot: 3,
            center: false,
            };
        </script>
        <script type='text/javascript' src='https://js.ad-stir.com/js/adstir.js'></script>
    </div>
            ";
 }
 ?>