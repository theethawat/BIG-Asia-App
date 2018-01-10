<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/f1130c3fe8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<style>
    .headone{
        font-family:'kanit',sans-serif;
    }
    img.travel{
        width:200px;
    }
    .col{
        margin:0.5em;
    }
    </style>
</head>
<body>
    
<!-- Just an image -->
<nav class="navbar sticky-top navbar-dark" style="background-color:deeppink;">
        <a class="navbar-brand" href="#">
          <img src="logowhite.png" width="40" height="30" alt="logo" class="d-inline-block align-top" >
          BIGASIA
        </a>   <?php
                    session_start();
                    ?>
        <ul class="nav nav-pills nav-fill mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;" ><?php echo "สวัสดี".$_SESSION["user"];?></a>
                  <div class="dropdown-menu" >
              <a class="dropdown-item" href="logout.php">Logout</a>
              <a class="dropdown-item" href="setting.php">Setting</a>
              </div>
                </li>
                </ul>
         <ul class="nav nav-pills nav-fill ">
                                <li class="nav-item">
                                      <button class="menubut" data-toggle="modal" data-target="#menumodal">
                                        <i class="fa fa-bars " aria-hidden="true"></i>
                                            </button>
                                  </li>
      </nav>
      <br>
      <div class="modal fade" id="menumodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'kanit',sans-serif;">เมนู</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                 
                    <div class="modal-body">
                      
                            <div class="row">
    
                                    <div class="col">
                                        <a href="asia.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-globe " aria-hidden="true"></i></h2><h6>เกี่ยวกับทวีปเอเชีย</h6></button></a>
                                    </div>
                        
                                    <div class="col">
                                            <a href="knowledge.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-flag" aria-hidden="true"></i></h2><h6>ข้อมูลประเทศ</h6></button></a>
                                    </div>
                        
                                </div>
                          <br>
                          <div class="row">
                        
                                <div class="col">
                                    <a href="history.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-university " aria-hidden="true"></i></h2><h6>ประวัติศาสตร์</h6></button></a>
                                </div>
                        
                                <div class="col">
                                        <a href="time.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-clock-o " aria-hidden="true"></i></h2><h6>เช็คเวลา</h6></button></a>
                                </div>
                        
                            </div>
                             <br>
                          <div class="row">
                        
                                <div class="col">
                                <a href="travel.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-map-marker  " aria-hidden="true"></i></h2><h6>ท่องเที่ยว</h6></button></a>
                                </div>
                        
                                <div class="col">
                                        <a href="home.php"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-newspaper-o " aria-hidden="true"></i></h2><h6>ข่าวสาร</h6></button></a>
                                </div>
                        
                            </div>
                            <br>
                            <div class="row">
                          
                                  <div class="col">
                                      <a href="setcountry.php"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-cog  " aria-hidden="true"></i></h2><h6>แก้ไขประเทศที่ติดตาม</h6></button></a>
                                  </div>
                                  <div class="col">
                                          <a href="menux.html"><button class="btn btn-secondary mainmenu"><h2><i class="fa fa-paper-plane  " aria-hidden="true"></i></h2><h6>เมนูอื่นๆ</h6></button></a>
                                  </div>
                          
                              </div>
    
    
    
    
                    </div>
                    
                  </div>
                </div>
              </div>
      <div class="container">
       <h4 class="headone">ท่องเที่ยว</h4>
       <h5 class="headone">ศาสนาและวัฒนธรรม</h5>
       <div class='card'><div class='card-body'>
           <div class="row">
       <?php
       $conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
        $sql="SELECT * FROM Culture ORDER BY ID DESC";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
          {
              for($i=0;$i<5;$i++)
              { 
                 $row = mysqli_fetch_assoc($result);   
                 if($row!=NULL)
                 {
                   $id=$row["ID"];
                   print "<div class='col'>";
                   print "<img class='travel' src='Travel/".$row["Photo"]."'> <br>";
                   print "<p class='headone'>".$row["Travelname"]."</p> ";
                   print "<form action='travelitem.php' method='post'>";
                   print "<button type='submit' class='btn btn-success headone' name='id' value='$id'> ดูเพิ่มเติม </button> ";
                   print "</form></div>";
                }
                 }
                 
             
            
        } 
      else{
            echo "ไม่มีข้อมูล" ;
          }
       ?>

        </div></div></div>

    <br>
    
    <h5 class="headone">แลนด์มาร์ค</h5>
       <div class='card'><div class='card-body'>
           <div class="row">
       <?php
 
        $sql="SELECT * FROM Landmark ORDER BY ID DESC";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
          {
              for($i=0;$i<5;$i++)
              {  $row = mysqli_fetch_assoc($result);   
                  if($row!=NULL)  
                  {
                      $id=$row["ID"];
                   print "<div class='col'>";
                   print "<img class='travel' src='Travel/".$row["Photo"]."'> <br>";
                   print "<p class='headone'>".$row["Travelname"]."</p> ";
                   print "<form action='travelitem2.php' method='post'>";
                   print "<button type='submit' class='btn btn-success headone' name='id' value='$id'> ดูเพิ่มเติม </button> ";
                   print "</form></div>";
                  }
               
                }
             
            
        } 
      else{
            echo "ไม่มีข้อมูล" ;
          }
       ?>

        </div></div></div>
          <br>
          
    <h5 class="headone">สถานที่ช้อปปิ้ง</h5>
       <div class='card'><div class='card-body'>
           <div class="row">
       <?php
 
        $sql="SELECT * FROM Shopping ORDER BY ID DESC";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
          {
              for($i=0;$i<5;$i++)
              {  
                $row = mysqli_fetch_assoc($result);   
                if($row!=NULL)
                {
                  $id=$row["ID"];
                   print "<div class='col'>";
                   print "<img class='travel' src='Travel/".$row["Photo"]."'> <br>";
                   print "<p class='headone'>".$row["Travelname"]."</p> ";
                   print "<form action='travelitem3.php' method='post'>";
                   print "<button type='submit' class='btn btn-success headone' name='id' value='$id'> ดูเพิ่มเติม </button> ";
                   print "</form></div>";
                }
                }
                 
             
            
        } 
      else{
            echo "ไม่มีข้อมูล" ;
          }
       ?>

        </div></div></div>

        <br>
          
          <h5 class="headone">สถานที่ทางธรรมชาติ</h5>
             <div class='card'><div class='card-body'>
                 <div class="row">
             <?php
       
              $sql="SELECT * FROM Nature ORDER BY ID DESC";
              $result=mysqli_query($conn,$sql);
      
              if(mysqli_num_rows($result)>0)
                {
                    for($i=0;$i<5;$i++)
                    {  
                      $row = mysqli_fetch_assoc($result);   
                      if($row!=NULL)
                      {
                        $id=$row["ID"];
                         print "<div class='col'>";
                         print "<img class='travel' src='Travel/".$row["Photo"]."'> <br>";
                         print "<p class='headone'>".$row["Travelname"]."</p> ";
                         print "<form action='travelitem4.php' method='post'>";
                         print "<button type='submit' class='btn btn-success headone' name='id' value='$id'> ดูเพิ่มเติม </button> ";
                         print "</form></div>";
                      }
                      }
                       
                   
                  
              } 
            else{
                  echo "ไม่มีข้อมูล" ;
                }
             ?>
      
              </div></div></div>
              <br>
          
          <h5 class="headone">อื่นๆ</h5>
             <div class='card'><div class='card-body'>
                 <div class="row">
             <?php
       
              $sql="SELECT * FROM Other ORDER BY ID DESC";
              $result=mysqli_query($conn,$sql);
      
              if(mysqli_num_rows($result)>0)
                {
                    for($i=0;$i<5;$i++)
                    {  
                      $row = mysqli_fetch_assoc($result);   
                      if($row!=NULL)
                      {
                        $id=$row["ID"];
                         print "<div class='col'>";
                         print "<img class='travel' src='Travel/".$row["Photo"]."'> <br>";
                         print "<p class='headone'>".$row["Travelname"]."</p> ";
                         print "<form action='travelitem5.php' method='post'>";
                         print "<button type='submit' class='btn btn-success headone' name='id' value='$id'> ดูเพิ่มเติม </button> ";
                         print "</form></div>";
                      }
                      }
                       
                   
                  
              } 
            else{
                  echo "ไม่มีข้อมูล" ;
                }
             ?>
      
              </div></div></div>

    </div>
    <br><br><br><br><br>
    <nav class="navbar fixed-bottom navbar-light bg-light" >
        <nav class="nav nav-pills nav-justified">
                                <a class="nav-item nav-link " href="home.php"><i class="fa fa-home" aria-hidden="true"></i><br>Home</a>
                            
                              
                                <a class="nav-item nav-link" style="background-color:gainsboro ;" data-toggle="modal" data-target="#postmodal" href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><br>Post</a>
                                <a class="nav-item nav-link" style="background-color:gainsboro;" data-toggle="modal" data-target="#travelmodal" href="#"><i class="fa fa-map" aria-hidden="true"></i><br>Add to Travel</a>
                            
                            
                                <a class="nav-item nav-link " href="knowledge.html"><i class="fa fa-flag" aria-hidden="true"></i><br>Country</a>
                                
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
            <form action="nation/rec.php" method="post" enctype="multipart/form-data">
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
    <input  type="file" name="photo" id="photo">
      <p><b>ข้อกำหนดในการโพสรูปภาพ</b> คือ ต้องไม่โพสภาพที่สื่อความหมายร้ายแรง ภาพอนาจารย์ หรือภาพที่ไม่สมควรโพส</p>
          <button type="submit" class="btn btn-primary" >โพสต์</button>
          </form>
      </div>
     
    </div>
  </div>
</div>

          <div class="modal fade" id="travelmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">โพสต์สถานที่ท่องเที่ยว</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
         
          <div class="modal-body">
            <form action="travellistadd.php" method="post" enctype="multipart/form-data"> 

            ชื่อเรื่อง : <br>
          <input type="text" class="form-control" name="title" required><br>
            เกี่ยวกับสถานที่ :<br>
            <textarea class="form-control" name="body" rows="3"></textarea><br>
            เลือกประเทศของสถานที่: <br>ถ้ามีหลายประเทศที่ไม่ต้องเลือก แต่ให้ใส่ในบทความข้างบน<br>
            <select class="form-control" name="country" >
        
            <option value="อัฟกานิสถาน">อัฟกานิสถาน</option>
            <option value="บาห์เรน">บาห์เรน</option>
            <option value="บังกลาเทศ">บังกลาเทศ</option>
            <option value="ภูฏาน">ภูฏาน</option>
            <option value="บรูไน">บรูไน</option>
            <option value="กัมพูชา">กัมพูชา</option>
            <option value="จีน">จีน</option>
            <option value="อินเดีย">อินเดีย</option>
            <option value="อินโดนีเซีย">อินโดนีเซีย</option>
            <option value="อิหร่าน">อิหร่าน</option>
            <option value="อิรัก">อิรัก</option>
            <option value="อิสราเอล">อิสราเอล</option>
            <option value="ญี่ปุ่น">ญี่ปุ่น</option>
            <option value="จอร์แดน">จอร์แดน</option>
            <option value="คาซัคสถาน">คาซัคสถาน</option>
            <option value="คูเวต">คูเวต</option>
            <option value="คีร์กีซสถาน">คีร์กีซสถาน</option>
            <option value="ลาว">ลาว</option>
            <option value="เลบานอน">เลบานอน</option>
            <option value="มาเลเซีย">มาเลเซีย</option>
            <option value="มัลดีฟส์">มัลดีฟส์</option>
            <option value="มองโกเลีย">มองโกเลีย</option>
            <option value="เมียนมาร์">เมียนมาร์</option>
            <option value="เนปาล">เนปาล</option>
            <option value="กาหลีเหนือ">เกาหลีเหนือ</option>
            <option value="โอมาน">โอมาน</option>
            <option value="ปากีสถาน">ปากีสถาน</option>
            <option value="ปาเลสไตน์">ปาเลสไตน์</option>
            <option value="ฟิลิปปินส์">ฟิลิปปินส์</option>
            <option value="กาตาร์">กาตาร์</option>
            <option value="ซาอุดิอาระเบีย">ซาอุดิอาระเบีย</option>
            <option value="สิงคโปร์">สิงคโปร์</option>
            <option value="เกาหลีใต้">เกาหลีใต้</option>
            <option value="ศรีลังกา">ศรีลังกา</option>
            <option value="ซีเรีย">ซีเรีย</option>
            <option value="ไต้หวัน">ไต้หวัน</option>
            <option value="ทาจิกิสถาน">ทาจิกิสถาน</option>
            <option value="ไทย">ไทย</option>
            <option value="ติมอร์-เลสเต">ติมอร์-เลสเต</option>
            <option value="เติร์กเมนิสถาน">เติร์กเมนิสถาน</option>
            <option value="สหรัฐอาหรับเอมิเรตส์">สหรัฐอาหรับเอมิเรตส์</option>
            <option value="อุซเบกิสถาน">อุซเบกิสถาน</option>
            <option value="เวียดนาม">เวียดนาม</option>
            <option value="เยเมน">เยเมน</option>
           
            

         
    </select>
          หมวดหมู่สถานที่ :<br>
          <select class="form-control" name="catagory" required >
            <option value="Culture">ศาสนาและวัฒนธรรม</option>
            <option value="Landmark">แลนด์มาร์ค และ สถานที่น่าสนใจ</option>
            <option value="Shopping">สถานที่ขายสินค้า</option>
            <option value="Nature">สถานที่ทางธรรมชาติ</option>
            <option value="Othe">อื่นๆ</option>
        </select>
    <input  type="file" name="photo" id="photo">
      <p><b>ข้อกำหนดในการโพสรูปภาพ</b> คือ ต้องไม่โพสภาพที่สื่อความหมายร้ายแรง ภาพอนาจารย์ หรือภาพที่ไม่สมควรโพส</p>
          <button type="submit" class="btn btn-primary" >โพสต์</button>
          </form>
      </div>
     
    </div>
  </div>
</div>
    
</body>
</html>