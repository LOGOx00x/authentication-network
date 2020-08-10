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
        <p><b>การติดตั้งระบบ Authentication</p></b>
        ทำการเข้า root เพื่อใช้สิทธิ์ของระบบ :
        <p><center><img src="img/webanddata/1.png" width="100%"></center></p>
        ทำการตั้งค่า network interfaces โดยใช้คำสั่ง nano /etc/network/interfaces :
        <p><center><img src="img/authentication/1.png" width="100%"></center></p>
        ตั้งค่า network interfaces :
        <p><center><img src="img/authentication/2.png" width="100%"></center></p>
        ทำการบันทึกการแก้ไข CTRL + X จากนั้นกด Y เพื่อยันยืนการบันทึก หรือ N เพื่อยกเลิกการแก้ไข้ แล้วกด Enter เพื่อบันทึก :
        <p><center><img src="img/authentication/3.png" width="100%"></center></p>
        ทำการ restart network โดยใช้คำสั่ง /etc/init.d/networking restart :
        <p><center><img src="img/authentication/4.png" width="100%"></center></p>
        ทำการเช็ค IP โดยใช้คำสั่ง ifconfig :
        <p><center><img src="img/authentication/5.png" width="100%"></center></p>
        ทำการสร้าง Database โดยใช้คำสั่ง echo 'create database  radius;'  | mysql -u root -p :
        <p><center><img src="img/authentication/6.png" width="100%"></center></p>
        ทำการสร้าง user และ password เพื่อใช้ในการเข้า Database โดยใช้คำสั่ง echo  "grant all on radius. * to radius @ 'localhost' identified by 'ใส่รหัส'; flush privileges;" | mysql -u root -p :
        <p><center><img src="img/authentication/7.png" width="100%"></center></p>
        เพิ่มข้อมูล table โดยใช้คำสั่ง mysql -u root -p radius < /etc/freeradius/sql/mysql/schema.sql -p :
        <p><center><img src="img/authentication/8.png" width="100%"></center></p>
        เพิ่มข้อมูล table โดยใช้คำสั่ง mysql -u root -p radius < /etc/freeradius/sql/mysql/nas.sql -p :
        <p><center><img src="img/authentication/9.png" width="100%"></center></p>
        เข้าใช้ Database โดยใช้คำสั่ง mysql - u root -p :
        <p><center><img src="img/authentication/10.png" width="100%"></center></p>
        เลือก Database ทีได้ทำการสร้างไว้ use radius; :
        <p><center><img src="img/authentication/11.png" width="100%"></center></p>
        ทำการเพิ่มข้อมูลเพื่อทำการสร้างงานระบบ authentication โดยใช้คำสั่ง insert into radcheck(UserName,Attribute,Value)values('ชื่อ','Password','รหัส');
        <p><center><img src="img/authentication/12.png" width="100%"></center></p>
        ทำการออกจาก Database โดยใช้คำสั่ง exit; :
        <p><center><img src="img/authentication/13.png" width="100%"></center></p>
        ทำการแก้ไข config ของ freeradius เพื่อทำให้ข้อมูลใน Database สามารถใช้งานได้ config อันแรกที่ต้องแก้ไข โดยใช้คำสั่ง nano /etc/freeradius/sql.conf :
        <p><center><img src="img/authentication/14.png" width="100%"></center></p>
        แก้ไขตรง password ให้เป็นค่าที่ได้ตั้งค่าตอนที่สร้าง user และ password ในการเข้าถึง Database :
        <p><center><img src="img/authentication/15.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า radclients = yes :
        <p><center><img src="img/authentication/16.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/freeradius/radiusd.conf :
        <p><center><img src="img/authentication/17.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า $INCLUDE sql.conf :
        <p><center><img src="img/authentication/18.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/freeradius/sites-available/default :
        <p><center><img src="img/authentication/19.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า sql ในแท็กไฟล์ของ authorize :
        <p><center><img src="img/authentication/20.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า sql ในแท็กไฟล์ของ accounting :
        <p><center><img src="img/authentication/21.png" width="100%"></center></p>
        ทำการเอา # ออก ในบรรทัดที่มึคำว่า sql ในแท็กไฟล์ของ session :
        <p><center><img src="img/authentication/22.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/freeradius/clients.conf :
        <p><center><img src="img/authentication/23.png" width="100%"></center></p>
        เพื่อทำการดูชื่อของ secret หรือจะแก้ไขตามที่ต้องการ :
        <p><center><img src="img/authentication/24.png" width="100%"></center></p>
        ทำการ restart freeradius :
        <p><center><img src="img/authentication/25.png" width="100%"></center></p>
        ทำการทดสอบ Database สามารถใช้งานได้ไหม โดยใช้คำสั่ง radtest ชื่อ รหัสผ่าน localhost 0 ตามด้วยชื่อของ secret หากขึ้น red_recv : Access Accept packet from host 127.0.0.1 สามารถใช้งานได้ :
        <p><center><img src="img/authentication/26.png" width="100%"></center></p>
        จากนั้นไปที่โฟลเดอร์ usr/src โดยใช้คำสั่ง cd /usr/src :
        <p><center><img src="img/authentication/27.png" width="100%"></center></p>
        ทำการ install packet haserl โดยใช้คำสั่ง apt-get install haserl -y :
        <p><center><img src="img/authentication/28.png" width="100%"></center></p>
        ทำการ download ไฟล์ cooova-chilli เพื่อมาทำการทำระบบ authentication ที่ลิงค์ http://gg.gg/lap8k :
        <p><center><img src="img/authentication/29.png" width="100%"></center></p>
        ทำการคัดลอกไฟล์ cooova-chilli ไปที่ usr/src โดยใช้คำสั่ง cp ตำแหน่งไฟล์ ไปตำแหน่งโฟลเดอร์ที่ต้องการ :
        <p><center><img src="img/authentication/30.png" width="100%"></center></p>
        ทำการเช็คว่าไฟล์คัดลอกมาหรือยัง โดยใช้คำสั่ง ls :
        <p><center><img src="img/authentication/31.png" width="100%"></center></p>
        ทำการติดตั้ง cooova-chilli โดยการใช้คำสั่ง dpkg -i ตามด้วยชื่อไฟล์ :
        <p><center><img src="img/authentication/32.png" width="100%"></center></p>
        <p><center><img src="img/authentication/33.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/default/chilli :
        <p><center><img src="img/authentication/34.png" width="100%"></center></p>
        แก้ไขบรรดทัด START_CHILLI= จาก 0 เป็น 1 :
        <p><center><img src="img/authentication/35.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/chilli/defaults :
        <p><center><img src="img/authentication/36.png" width="100%"></center></p>
        ทำการตั้งค่า config ดังรูป :
        <p><center><img src="img/authentication/37.png" width="100%"></center></p>
        <p><center><img src="img/authentication/38.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/chilli/up.sh :
        <p><center><img src="img/authentication/39.png" width="100%"></center></p>
        ทำการเพิ่ม iptables -I POSTROUTING -t nat -o $HS_WANIF -j MASQUERADE ด้านของบรรทัด [-e /etc/chilli/ipup.sh] && . /etc/chilli/ipup.sh} :
        <p><center><img src="img/authentication/40.png" width="100%"></center></p>
        ทำการ restart cooova-chilli โดยใช้คำสั่ง /etc/init.d/chilli restart :
        <p><center><img src="img/authentication/41.png" width="100%"></center></p>
        ทำการ wget haserl โดยใช้คำสั่ง wget https://jaist.dl.sourceforge.net/project/haserl/haserl-devel/haserl-0.9.35.tar.gz :
        <p><center><img src="img/authentication/42.png" width="100%"></center></p>
        ทำการ tar ไฟล์ หรือ การแตกไฟล์ โดยใช้คำสั่ง tar xvf haserl-0.9.35.tar.gz :
        <p><center><img src="img/authentication/43.png" width="100%"></center></p>
        ทำการไปที่โฟลเดอร์ haserl โดยใช้คำสั่ง cd haserl-0.9.35.tar.gz :
        <p><center><img src="img/authentication/44.png" width="100%"></center></p>
        จากนั้น ใช้คำสั่ง ./configure :
        <p><center><img src="img/authentication/45.png" width="100%"></center></p>
        ทำการ install cooova-chilli โดยใช้คำสั่ง make && make install :
        <p><center><img src="img/authentication/46.png" width="100%"></center></p>
        ทำการแก้ไข config โดยใช้คำสั่ง nano /etc/chilli/wwwsh :
        <p><center><img src="img/authentication/47.png" width="100%"></center></p>
        แก้ไขบรรดทัด haserl= ให้เป็น haserl=/usr/local/bin/haserl :
        <p><center><img src="img/authentication/48.png" width="100%"></center></p>
        จากนั้นทำการ reboot โดยใช้คำสั่ง reboot :
        <p><center><img src="img/authentication/49.png" width="100%"></center></p>
        เมื่อ reboot ขึ้นมา ให้ทำการ start cooova-chilli โดยใช้คำสั่ง systemctl start chilli :
        <p><center><img src="img/authentication/50.png" width="100%"></center></p>
        และ ทำการ start freeradius โดยใช้คำสั่ง systemctl start freeradius :
        <p><center><img src="img/authentication/51.png" width="100%"></center></p>
        จากนั้นไปที่เครื่อง clients และทำการเชื่อมต่อเครื่อง clients กับ server เข้าด้วยกัน
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
