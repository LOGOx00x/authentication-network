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
        <p><b>การใช้งานระบบ Authentication</p></b>
        เปิด Browser เพื่อ login เข้าใช้ internet :
        <p><center><img src="img/authentication/52.png" width="100%"></center></p>
        ทำการทดสอบการเข้าถึง internet โดยไปที่ cmd แล้วใช้คำสั่ง ping www.google.com พบว่าไม่สามารถเข้าถึง internet ได้ ดังรูป :
        <p><center><img src="img/authentication/53.png" width="100%"></center></p>
        จากนั้นทำการ login เพื่อใช้ internet :
        <p><center><img src="img/authentication/54.png" width="100%"></center></p>
        ทำการทดสอบการเข้าถึง internet โดยไปที่ cmd แล้วใช้คำสั่ง ping www.google.com พบว่าสามารถเข้าถึง internet ได้ ดังรูป :
        <p><center><img src="img/authentication/56.png" width="100%"></center></p>
        ทำการทดสอบการเข้าถึง internet โดยไปที่ Browser โดยไปที่ website ดังรูป พบว่าสามารถเข้าถึง internet ได้ :
        <p><center><img src="img/authentication/55.png" width="100%"></center></p>
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
