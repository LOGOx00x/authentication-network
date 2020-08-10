<!DOCTYPE html>
<head>
<?php include('h.php');?>
</head>

<body class="toggled">

  <div class="d-flex" id="wrapper">

    <?php include('sidebar.php'); ?>

    <?php include('navbar.php');?>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <br><br><br>
        <p><b>การติดตั้ง Web Server และ Database Server</p></b>
        ทำการเข้า root เพื่อใช้สิทธิ์ของระบบ :
        <p><center><img src="img/webanddata/1.png" width="100%"></center></p>
        จากนั้นทำการติดตั้ง Package ดังนี้ apt-get install mysql-server mysql-client phpMyAdmin freeradius freeradius-utils freeradius-mysql apache2 php-pear php-db make gcc -y :
        <p><center><img src="img/webanddata/2.png" width="100%"></center></p>
        <p><center><img src="img/webanddata/3.png" width="100%"></center></p>
        ทำการตั้งรหัสผ่านของ web server :
        <p><center><img src="img/webanddata/4.png" width="100%"></center></p>
        <p><center><img src="img/webanddata/5.png" width="100%"></center></p>
        เลือก Configurung ของ phpmyadmin กด spec bar เพื่อทำการเลือก :
        <p><center><img src="img/webanddata/6.png" width="100%"></center></p>
        ยืนยันการเลือก Configurung ของ phpmyadmin :
        <p><center><img src="img/webanddata/7.png" width="100%"></center></p>
        ทำการตั้งรหัสผ่านของ phpmyadmin :
        <p><center><img src="img/webanddata/8.png" width="100%"></center></p>
        <p><center><img src="img/webanddata/9.png" width="100%"></center></p>
        ทำการเช็ค IP โดยใช้คำสั่ง ifconfig :
        <p><center><img src="img/webanddata/10.png" width="100%"></center></p>
        เปิด Browser แล้วนำ IP แล้วนำ IP ที่ได้มาใส่เพื่อเข้าถึง web server
        <p><center><img src="img/webanddata/11.png" width="100%"></center></p>
        เข้า Database หรือ phpmyadmin โดยนำ IP ที่ได้มาแล้วตามด้วย phpmyadmin :
        <p><center><img src="img/webanddata/12.png" width="100%"></center></p>
        <p><center><img src="img/webanddata/13.png" width="100%"></center></p>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
