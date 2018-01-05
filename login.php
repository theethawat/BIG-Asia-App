<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lofin Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/f1130c3fe8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    
   <style>
       h2.welcome{
           font-family:'kanit',sans-serif;
           text-align:center;
       }
       </style>
  </head>
<body>
<!-- Just an image -->
<div><nav class="navbar sticky-top navbar-dark" style="background-color:deeppink;">
        <a class="navbar-brand" href="#">
          <img src="logowhite.png" width="40" height="30" alt="logo" class="d-inline-block align-top" >
          BIGASIA
        </a>
        
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link" style="color:white;" href="#"> </i> </a>

            </li></ul>

      </nav>
    </div>
    <br><br><br><br><br>
    <div class="container">
      <h2 class="welcome">
      <?php 
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    

    $conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
    $sql="SELECT * FROM Member ";  
    
    $result=mysqli_query($conn,$sql);
    session_start();
     while($row = mysqli_fetch_assoc($result))
        {
             if($row["Username"]==$username)
             {
                 if($row["Pass"]==$password){
                    $user=$row["Username"];
                    echo "สวัสดีคุณ".$user;
                    echo "<br> ยินดีต้อนรับสู่ BIG ASIA App ท่องเอเชียไม่รู้จบ";
                    $_SESSION["user"]=$user;
                    echo '<meta http-equiv="refresh"content="0; url=home.php">';
                 }
                 else{
                        print "คุณใส่ Password ผิดครับ" ;
                        print "<br><a href='index.html'> Login ใหม่อีกครั้ง </a> "  ;
                 }
             }
             else
             {
                print "คุณใส่ Username ผิดครับ";
                print "<br><a href='index.html'> Login ใหม่อีกครั้ง </a> "  ;
             }
        }

    //mysqli_close($conn);   
    ?>
      </h2>
</div>
    
    <p>
    
   

    </p>
   
    
      </div>


</body>
</html>