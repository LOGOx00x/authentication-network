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
        <p><b>การติดตั้ง FTP Server</p></b>
        ทำการ install packet vsftpd โดยใช้คำสั่ง apt-get install vsftpd -y : 
        <p><center><img src="img/FTP/1.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/vsftp.conf :
        <p><center><img src="img/FTP/2.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า write_enable=YES :
        <p><center><img src="img/FTP/3.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า chroot_local_user=YES กับ chroot_list_enable=YES :
        <p><center><img src="img/FTP/4.png" width="100%"></center></p>
        เพิ่ม allow_writeable_chroot=YES :
        <p><center><img src="img/FTP/5.png" width="100%"></center></p>
        ทำการ start vsftpd โดยใช้คำสั่ง systemctl stat vsftpd :
        <p><center><img src="img/FTP/6.png" width="100%"></center></p>

        <p><b>การใช้งาน FTP Server</p></b>
        คลิก Site Manager…. ในเมนูที่ขยายลงมา แล้วหน้าต่าง Site Manager จะเปิดขึ้นมา : 
        <p><center><img src="img/FTP/7.png" width="100%"></center></p>
        ใส่ข้อมูลตามรายละเอียด
        <p>Host: หมายเลข IP Address ของเครื่อง FTP Server</p> 
        <p>Port: 21</br> 
        <p>Username: Account User ที่กำหนดใน Ubuntu Server ||
        Password: Password User ที่กำหนดใน Ubuntu Server :</p> 
        <p><center><img src="img/FTP/8.png" width="100%"></center></p>
        ตั้งค่า Transfer Settings เป็น Active : 
        <p><center><img src="img/FTP/9.png" width="100%"></center></p>
        เมื่อ Connect เรียบร้อยแล้วจะสามารถรับส่งไฟล์ จาก server ไป client หรือ client ไป server ได้ :
        <p><center><img src="img/FTP/10.png" width="100%"></center></p>
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
