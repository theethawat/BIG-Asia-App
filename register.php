<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/f1130c3fe8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    
   
  </head>
<body>
<!-- Just an image -->
<div><nav class="navbar sticky-top navbar-dark" style="background-color:deeppink;">
        <a class="navbar-brand" href="#">
          <img src="logowhite.png" width="40" height="30" alt="logo" class="d-inline-block align-top" >
          BIGASIA
        </a>
      </nav>
    </div>
    <div class="container">
    <p>
    
    <?php
    $name=$_POST["name"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    
    $conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
    $sql="INSERT INTO Member(Username,Pass,Usrname,Email) VALUES('$username','$password','$name','$email')";
    
    if(mysqli_query($conn,$sql))
        echo "ระบบได้เพิ่มข้อมูลของคุณเรียนร้อยแล้ว กลับไปที่ Login ได้เลย ";
    else
        echo "ERROR มีบางอย่างผิดพลาด คุณอาจจะใส่ Username หรือ Email ตรงกับที่มีคนใช้อยู่ในระบบแล้ว กรุณาลงทะเบียนใหม่ครับ".mysqli_error($conn);

    mysqli_close($conn);
    ?>

    </p>
    <a href="index.html"><button class="btn btn-primary">Login</button></a> 
    <a href="register.html"><button class="btn btn-secondary">Register</button></a>
    
      </div>


</body>
</html>