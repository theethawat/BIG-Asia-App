<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูล </title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    
    <script src="https://use.fontawesome.com/f1130c3fe8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </head>
<body>

<!-- Just an image -->
<nav class="navbar sticky-top navbar-dark" style="background-color:deeppink;">
        <a class="navbar-brand" href="#">
          <img src="logowhite.png" width="40" height="30" alt="logo" class="d-inline-block align-top" >
          BIGASIA
        </a>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link" style="color:white;" href="menux.html"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </li></ul>
      </nav>
      <br>
    <p class="headpart2"><?php   
    $conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
    if($conn)
    //$name=$_POST["Name"];
    $name=$_POST["name"];
    $comment=$_POST["comment"];


    
    //move_uploaded_file($_FILES["photo"]["tmp_name"],"File/".$_FILES["photo"]["name"]);
    //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // $filename=$_FILES["photo"]["name"];
    $sql="INSERT INTO CommentApp (Nameadd,Comment) VALUES('$name','$comment')";
    if (mysqli_query($conn,$sql)){
        echo "เราได้ทำการเพิ่มข้อความของคุณเรียบร้อยแล้ว ขอขอบคุณที่ให้ความเห็นเรา" ;
        echo '<meta http-equiv="refresh"content="0; url=menux.html">';
    }
    else{
        echo "ERROR" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?></p>

 <br><br><br><br><br>
 <nav class="navbar fixed-bottom navbar-light bg-light" >
  <nav class="nav nav-pills nav-justified">
    <a class="nav-item nav-link active" href="../home.php"><i class="fa fa-home" aria-hidden="true"></i><br>Home</a>
    <a class="nav-item nav-link" data-toggle="modal" data-target="#postmodal" href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><br>Post</a>
    <a class="nav-item nav-link " href="../knowledge.html"><i class="fa fa-flag" aria-hidden="true"></i><br>Country</a>
    >
  </nav>
      </nav>

      <div class="modal fade" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">โพสต์</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="nation/rec.php" method="post">
        <textarea class="form-control" name="News" rows="3"></textarea><br>
        <select class="form-control" name="country">
        <option value="AFG">อัฟกานิสถาน</option>
        <option value="BHR">บาห์เรน</option>
        <option value="BAN">บังกลาเทศ</option>
        <option value="BHU">ภูฏาน</option>
        <option value="BRU">บรูไน</option>
        <option value="CAM">กัมพูชา</option>
        <option value="CHN">จีน</option>
        <option value="IND">อินเดีย</option>
        <option value="IDN">อินโดนีเซีย</option>
        <option value="IRN">อิหร่าน</option>
        <option value="IRQ">อิรัก</option>
        <option value="ISR">อิสราเอล</option>
        <option value="JPN">ญี่ปุ่น</option>
        <option value="JOR">จอร์แดน</option>
        <option value="KAZ">คาซัคสถาน</option>
        <option value="KUW">คูเวต</option>
        <option value="KGZ">คีร์กีซสถาน</option>
        <option value="LAO">ลาว</option>
        <option value="LIB">เลบานอน</option>
        <option value="MAS">มาเลเซีย</option>
        <option value="MDV">มัลดีฟส์</option>
        <option value="MNG">มองโกเลีย</option>
        <option value="MYA">เมียนมาร์</option>
        <option value="NPE">เนปาล</option>
        <option value="PRK">เกาหลีเหนือ</option>
        <option value="OMA">โอมาน</option>
        <option value="PAK">ปากีสถาน</option>
        <option value="PLE">ปาเลสไตน์</option>
        <option value="PHI">ฟิลิปปินส์</option>
        <option value="QAT">กาตาร์</option>
        <option value="KSA">ซาอุดิอาระเบีย</option>
        <option value="SIN">สิงคโปร์</option>
        <option value="KOR">เกาหลีใต้</option>
        <option value="SRI">ศรีลังกา</option>
        <option value="SYR">ซีเรีย</option>
        <option value="TPE">ไต้หวัน</option>
        <option value="TJK">ทาจิกิสถาน</option>
        <option value="THA">ไทย</option>
        <option value="TLS">ติมอร์-เลสเต</option>
        <option value="TKM">เติร์กเมนิสถาน</option>
        <option value="UAE">สหรัฐอาหรับเอมิเรตส์</option>
        <option value="UZB">อุซเบกิสถาน</option>
        <option value="VIE">เวียดนาม</option>
        <option value="YEM">เยเมน</option>
     

</select>
      <button type="submit" class="btn btn-primary" >โพสต์</button>

    </select>
        </form>
      </div>
     
    </div>
  </div>
</div>
 </body>
 </html>