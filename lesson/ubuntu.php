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
        <p><b>การติดตั้ง ระบบปฏิบัติการ Ubuntu 16.04.6 desktop</p></b>
        ให้ทำการดาวโหลด Ubuntu 16.04 desktop edition ที่เป็นไฟล์ iso image ได้จาก http://www.ubuntu.com/download หลังจากโหลดมาแล้วให้ทำการเขียนลงแผ่นซีดีให้เรียบร้อยก่อน, หรือ เขียนไฟล์ลง flash drive เพื่อติดตั้งจาก flash drive ก็ได้ หลังจากเสร็จแล้วให้ทำการ restart เครื่องและทำตามขั้นตอนต่อไปนี้ :
            <p><center><img src="img/ubuntu/111.png" width="100%"></center></p>
        ให้ทำการเลือกภาษาสำหรับการติดตั้งจากนั้นกดปุ่ม Install Ubuntu เพื่อเริ่มการติดตั้ง :
            <p><center><img src="img/ubuntu/1.png" width="100%"></center></p>
        หน้าต่อไปเป็นหน้าความต้องการทรัพยากรพื้นฐานในการติดตั้ง Ubuntu 16.04 (ระบบที่จะติดตั้งลงไปต้องมีพื้นที่ว่างอย่างน้อยที่สุด 4.5 GB, และต้องตรวจสอบระบบไฟฟ้า,ปลั๊กไฟ เพื่อให้แน่ใจว่าไฟฟ้าจะไม่ดับหรือขัดข้องในช่วงที่กำลังติดตั้ง และเครื่องต้องต่ออินเตอร์เน็ตอยู่ขณะติดตั้งด้วยนะครับ ซึ่งตามรูปต้องมีเชคถูกทุกตัว. จากนั้นให้เชคถูกที่ Download updates while installing Ubuntu และ Install this third-party software for graphics and Wi-Fi hardware, Flash, MP3 and other media (ซึ่งจากการเชคถูกตรงนี้ระบบจะทำการติดตั้งโปรแกรมพื้นฐานจำพวก Flash, MP3, และไฟล์ media อื่นๆ) และกดปุ่ม Continue :
        <p><center><img src="img/ubuntu/2.png" width="100%"></center></p>
        ต่อไปเป็นหน้าสำหรับการจัดสรรพื้นที่ของระบบ โดยจะมีให้เราเลือกหลายแบบในที่นี้เราจะทำการเลือกแบบ Erase disk and install Ubuntu และกดปุ่ม  Install Now :
        <p><center><img src="img/ubuntu/3.png" width="100%"></center></p>
        กดปุ่ม Continue เพื่อยืนยันการติดตั้งโดยระบบจะทำการแบ่งพื้นที่อัตโนมัติ :
        <p><center><img src="img/ubuntu/4.png" width="100%"></center></p>
        จากนั้นเลือกโชนเวลาของเรา และกดปุ่ม  Continue :
        <p><center><img src="img/ubuntu/5.png" width="100%"></center></p>
        เปลี่ยน keyboard layout ถ้าจำเป็น และกดปุ่ม  Continue :
        <p><center><img src="img/ubuntu/6.png" width="100%"></center></p>
        พิมพ์ชื่อ, ชื่อคอมพิวเตอร์,ชื่อเข้าระบบและรหัสผ่านจากนั้นกดปุ่ม  Continue :
        <p><center><img src="img/ubuntu/7.png" width="100%"></center></p>
        ระบบกำลังทำการติดตั้งซึ่งคงต้องรอให้ระบบติดตั้งเสร็จก่อน :
        <p><center><img src="img/ubuntu/8.png" width="100%"></center></p>
        หลังจากเสร็จแล้ว,ระบบจะให้เราทำการ restart ให้คลิกที่ Restart Now :
        <p><center><img src="img/ubuntu/9.png" width="100%"></center></p>
        หลังจากนั้นระบบจะ restart ระบบ เมื่อ restart เสร็จแล้วก็จะมาหน้า login ให้ท่านทำการ login โดยใช้ username และ password ที่กรอกไปก่อนหน้านั้น. :
        <p><center><img src="img/ubuntu/11.png" width="100%"></center></p>
        หน้าจอที่ติดตั้งเสร็จแล้วจะเป็นดังรูป :
        <p><center><img src="img/ubuntu/12.png" width="100%"></center></p>
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
