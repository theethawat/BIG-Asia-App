<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <link rel="icon" href="logosquare.png">
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
    
    <div class="container" >
        <br>
        <?php
        session_start();
        ?>
        
        <div class="card">
            <div class="card-body member" style="text-align:left; font-family: 'kanit',sans-serif;" >
              <h4 class="regishead" style="text-align:center;" >เข้าสู่ระบบ</h4>
              
              <p>ชื่อของคุณคือ ? </p>
              <div class="alert alert-secondary" role="alert">
                <?php echo $_SESSION["user"];?>
                </div>

                <?php 
                $user=$_SESSION["user"];

                if ($user !=NULL)
                {
                    print "<a href='home.php'><button type='button' class='btn btn-primary' style='width:100%;'>เข้าสู่ระบบ</button></a>";
                }
                if ($user == NULL)
                {
                    print "ไม่มีชื่อค้างอยู่ในระบบ";
                }
                ?>
                
                <br><br>
                <div class="row">
                    <div class="col">
                        ไม่ใช่ หรือ ไม่มีชื่อของคุณ  <br>
                        <a href="index.html"><button type="button" class="btn btn-secondary">กลับไป login แบบทั่วไป</button></a>
                       
                    </div>
                    <div class="col">
                        ยังไม่มีบัญชีผู้ใช้  <br>
                        <a href="register.html"><button type="button" class="btn btn-secondary">สมัครสมาชิก</button></a>
                    </div>
                </div>

       </div></div>

      </div>

</body>
</html>