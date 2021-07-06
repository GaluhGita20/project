
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="keywords" content="Student Day 2021" />
  <meta name="description" content="Student Day 2021">
  <meta name="author" content="Studentday">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page ?> ~ SDU</title>
  <?php if ($page == 'Object not found!') {
      http_response_code(404);
      include('404.php'); // provide your own HTML for the error page
      die();
  } ?>

  <!-- Web Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800" rel="stylesheet" type="text/css">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{asset('css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
  <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
  <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">
  <!-- Current Page CSS -->
  <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/circle-flip-slideshow/css/component.css')}}">

  <!-- Demo CSS -->
  <link rel="stylesheet" href="{{asset('css/demos/demo-landing.css')}}">

  <!-- Skin CSS -->
  <link rel="stylesheet" href="{{asset('css/skins/skin-landing.css')}}">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{asset('css/icon.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">

  <!-- Boxicons CDN Icon  -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <style>
    * {
      font-family: "Poppins", sans-serif;
    }

    body{
      position: relative;
      min-height: 100vh;
      width: 100%;
      overflow: hidden;
    }

    .sidebar{
      position:fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 78px;
      background: #000;
      padding: 6px 14px;
      transition: all 0.5 ease;
    }

    .sidebar.active{
      width: 240px;
    }

    .sidebar .logo_content .logo{
      color: #fff;
      display: flex;
      height: 50px;
      width: 100%;
      align-items: center;
      opacity: 0;
      pointer-events: none;
      transition: all 0.5s ease;
    }

    .sidebar.active .logo_content .logo{
      opacity: 1;
      pointer-events: none;
    }

    .logo_content .logo i{
      font-size: 28px;
      margin-right: 5px;
    }

    .sidebar #btn{
      position: absolute;
      color: #fff;
      left: 50%;
      top: 12px;
      font-size: 20px;
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 50px;
      transform: translateX(-50%);
    }

    .sidebar.active #btn{
      left: 90%;
    }

    .sidebar ul{
      margin-top : 20px;
    }

    .sidebar ul li{
      position: relative;
      height: 50px;
      width:100%;
      margin: 0 0px;
      list-style: none;
      line-height: 50px;
    }

    .sidebar ul li .tooltip{
      position: absolute;
      height: 35px;
      width: 122px;
      left: 122px;
      top: 50%;
      transform: translateY(-50%, -50%);
      border-radius: 6px;
      background: #fff;
      line-height: 35px;
      text-align: center;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      transition: 0s;
      opacity: 0;
      pointer-events: none;
      display: block;
    }

    .sidebar.active ul li .tooltip{
      display: none;
    }
    .sidebar ul li:hover .tooltip{
      transition: all 0.5s ease;
      top: 50%;
      opacity: 1;
    }

    .sidebar ul li a{
      color: #fff;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
      border-radius: 12px;
      /* font-size: 17px; */
      text-shadow: 2px 3px 5px #fff;
      white-space: nowrap;
    }

    .sidebar ul li a:hover{
      color: #000;
      background: #fff;
      text-shadow: 2px 3px 5px #000;
    }

    .sidebar ul li i{
      height: 50px;
      min-width: 50px;
      border-radius: 12px;
      line-height: 50px;
      text-align: center;
    }

    .sidebar .links_name{
      opacity: 0;
      pointer-events: none;
      transition: all 0.5s ease;
    }

    .sidebar.active .links_name{
      opacity: 1;
      pointer-events: auto;
    }
    
    .sidebar .profile_content{
      position:absolute;
      color: #fff;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    .sidebar .profile_content .profile{
      position: relative;
      padding: 10px 16px;
      height: 60px;
      background: #11101d;
    }

    .profile_content .profile .profile_details{
      display: flex;
      align-items: center;
      opacity: 0;
      pointer-events: none;
      white-space: nowrap;
    }

    .sidebar.active .profile .profile_details{
      opacity: 1;
      pointer-events: auto;
    }

    .profile .profile_details img{
      height: 45px;
      width: 45px;
      object-fit: cover;
      border-radius: 14px;
    }

    .profile .profile_details .name_and_job{
      margin-left: 10px;
    }
    
    .profile .profile_details .name{
      font-size: 15px;
      font-weight: 400;
    }

    .profile .profile_details .job{
      font-size: 12px;
    }

    .profile #log-out {
      position: absolute;
      left: 50%;
      bottom: 4px;
      transform: translateX(-50%);
      min-width: 50px;
      line-height: 50px;
      font-size: 20px;
      border-radius: 12px;
      text-align: center;
    }

    .sidebar.active .profile #log-out{
      left: 88%;
    }

    .home_content{
      position: absolute;
      height: 100%;
      width: calc(100% - 78px);
      left: 78px;
      transition: all 0.2s ease;
    }

    .home_content .text{
      font-size: 25px;
      font-weight: 500;
      color: #1d1b31;
      margin: 12px;
    }
    .sidebar.active ~ .home_content{
      width: calc(100% - 240px);
      left: 240px;
    }

  </style>

</head>
<body>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <img alt="Student day"  height="70"  src="{{asset('img/logo/logo-sdu2020-fix-stroke.png')}}" href="">
      </div>
      <a href="#"><i class='bx bx-menu' id="btn"></i></a>
    </div>
    <ul class="nav_list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-library' ></i>
          <span class="links_name">Database</span>
        </a>
        <span class="tooltip">Database</span>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-archive' ></i>
          <span class="links_name">Rekapan</span>
        </a>
        <span class="tooltip">Rekapan</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart-down' ></i>
          <span class="links_name">Statistik</span>
        </a>
        <span class="tooltip">Statistik</span>
      </li>
    </ul>

    <!-- End Icon -->
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <img src="{{asset('img/logo/loader.png')}}" alt="">
          <div class="name_and_job">
            <div class="name">3D SDU 2021</div>
            <div class="job">Web Development</div>
          </div>
        </div>
        ><i class='bx bx-log-out' id='log-out'></i>
      </div>
    </div>
  </div>
  <div class="home_content">
    <div class="text">Home Content</div>
  </div>

  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-searxh");

    btn.onclick = function(){
      sidebar.classList.toggle("active");
    }
  </script>
</body>
</html>