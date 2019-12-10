<?php include 'dmpc_login_server.php' ?>


<html>
<head>
  <title></title>
  <h1 style="text-align: center; color: white">DMPC &nbsp;Login&nbsp; Form</h1>
  <style type="text/css">

    body{
      background-image: url("mohammad-alizade-631039-unsplash.jpg");
      background-size: 100%;
    }
    h1{
      background-color: black;
      padding: 50px;
      font-family: Tw Cen MT;
      margin: 0px;
      filter: opacity(80%);

    }
   .box{
        width: 320px;
        height: 420px;
        background: white;
        color: #000;
        top: 50%;
        left: 60%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
      }

    .box p{
      margin: 0;
      padding: 0;
      font-size: 20px;
      font-family: helvetica;
      color: black;
      padding-bottom: 5px;
    }

    .box select{
      width: 100%;
      margin-bottom: 20px;
      padding: 10px;
    }

    .box button[type="submit"]{
      border: 1px solid black;
      outline: none;
      height:40px;
      cursor: pointer;
      position: fixed;
      width: 250px;
      bottom: 30px;
      background: transparent;
      color: black;
      font-size: 18px;
    }
    .box input{
      margin-bottom: 20px;
      width: 100%;
    }
    .box input[type="text"],input[type="password"]{
      outline: none;

      font-size: 16px;
      border-top: none;
      border-right: none;
      border-left: none;
      border-bottom: 1px solid black;
      padding: 10px;
      background-color: white;
      color: black;
      height: 50px;
    }

    .box_black{
      width: 500px;
        height: 420px;
        background: #001233;
        color: #000;
        top: 50%;
        left: 40%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    }

  </style>

</head>
  
  

<body>
  <div class="box_black">
     <p style="color: white; margin-left: 90px; font-size: 30px;font-family:century gothic; text-shadow: 2.5px 2.5px black; filter: opacity(97%);">WELCOME</p>
  </div>
  <div class="box">
    <p style="font-size: 16px; padding: 10px; margin-bottom:20px; ">We Need Your...</p>
    <form method="post" action="dmpc_login.php">
      <?php include 'errors.php' ?>
 

  <input type="text" name="username" required="Y" placeholder="Username">
  <br> 
  <input type="password" name="pwd" required="Y" placeholder="Password">
   <br>

  <button type="submit" class="btn" name="dmpc_sub">Log in</button> 
   </form>  
  </div>

   </body>
   </html>