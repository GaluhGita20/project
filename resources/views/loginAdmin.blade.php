<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="keywords" content="Student Day 2021" />
  <meta name="description" content="Student Day 2021">
  <meta name="author" content="Studentday">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>

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
    *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .sampul{
      background-image: url("admin/gambar/gallery/umum/IMG_9914.jpg");
      background-size: cover;
      position: fixed;
      width: 100%;
      height: 100%;
   }

    .sampul .kolom-login{
      background: rgba(4, 29, 23, 0.5);
      box-shadow: 0px 0px 25px 10px black;
      border-radius: 15px;
      color: #fff;
      width: 330px;
      height: 400px;
      top: 50%;
      left: 50%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding: 70px 30px;
   }

   .sampul h1{
     margin: 0;
     padding: 0 0 20px;
     text-align: center;
     font-size: 22px;
     color: #fff;
   }

    .sampul .kolom-login .profil {
      width: 100px;
      height: 100px;
      border-radius: 15%;
      position: absolute;
      top: -50px;
      left: calc(50% - 50px);
   }

   .sampul .kolom-login p{
     font-weight: bold;
     color: #fff;
     /* margin-bottom: 10px; */
   }

   .kolom-login input{
    width: 100%;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
   }

   .kolom-login input::placeholder{
     color: #fff;
   }

   button{
     border: none;
     outline: none;
     height: 30px;
     color: #fff;
     font-size: 18px;
     border-radius: 20px;
     background-color: violet;
     margin-top: 10px;
     width: 100%;
   }
  </style>

</head>
<body>
  <div class="sampul">
      <div class="kolom-login">
          <img src="{{asset('img/logo/loader.png')}}" alt="" class="profil" >
          <h1>Login Admin</h1>
          <form action="">
            <p>Username</p>
            <input type="text" name="username" placeholder="Masukkan username ">
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan password">
            <button type="submit" name="login">Login</button>
          </form>
      </div>
  </div>
</body>
</html>