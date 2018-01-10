<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country Set</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/f1130c3fe8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <style>
        h4.head{
            font-family:'kanit',sans-serif;
        }
        h6.head{
            font-family:'kanit',sans-serif;
        }
        </style>
</head>
<body>
    <?php
     session_start();
     $user=$_SESSION["user"];
     ?>

<!-- Just an image -->
<nav class="navbar sticky-top navbar-dark" style="background-color:deeppink;">
        <a class="navbar-brand" href="#">
          <img src="logowhite.png" width="40" height="30" alt="logo" class="d-inline-block align-top" >
          BIGASIA
        </a>
        <ul class="nav nav-pills nav-fill mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;" > <?php echo "สวัสดี".$_SESSION["user"];?> </a>
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
    
<!--CODE PART-->
              <div class="container">
                <h4 class="head">จัดการประเทศที่ติดตาม</h4> 
                <div class="card">
                    <div class="card-body">
                            <h6 class=head>ประเทศที่คุณติดตามอยู่</h6>
                            <div style="display:flex;flex-wrap: wrap;">
                                <?php
                                //Start Session
                               

                                //Login Connect Database
                                $conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");

                                //User Finding
                                $sql="SELECT * FROM Member WHERE Username= '$user' ";
                                $memo=mysqli_query($conn,$sql);
                                $row1 = mysqli_fetch_assoc($memo);
                                
                                //Set 1
                                $nationname = array("Afghanistan","Bahrain","Bangladesh","Bhutan","Brunei","Cambodia","China","India","Indonesia","Iran");
                                for($i=0;$i<10;$i++)
                                {
                                    $countryname=$nationname[$i];
                                    if($row1["$countryname"]==1){
                                        print "<form action='delete.php' method=post ><button class='btn btn-light' type='submit' name='country' value='$countryname'>".$countryname." <i class='fa fa-minus-circle' aria-hidden='true'></i></button></form>";
                                    }
                                    
                                }
                                //End of Set 1
                                ?>
                                
                                <?php
                                 //Set 2
                                 $nationname = array("Iraq","Israel","Japan","Jordan","Kazakhstan","Kuwait","Kyrgyzstan","Laos","Lebanon","Malaysia");
                                 for($i=0;$i<10;$i++)
                                 {
                                     $countryname=$nationname[$i];
                                     if($row1["$countryname"]==1){
                                        print "<form action='delete.php' method=post ><button class='btn btn-light' type='submit' name='country' value='$countryname'>".$countryname." <i class='fa fa-minus-circle' aria-hidden='true'></i></button></form>";
                                     }
                                     
                                 }
                                 //End of Set 2
                                
                                  //Set 3
                                  $nationname = array("Maldives","Mongolia","Myanmar","Nepal","Northkorea","Oman","Pakistan","Palestine","Philippines","Qatar");
                                  for($i=0;$i<10;$i++)
                                  {
                                      $countryname=$nationname[$i];
                                      if($row1["$countryname"]==1){
                                        print "<form action='delete.php' method=post ><button class='btn btn-light' type='submit' name='country' value='$countryname'>".$countryname." <i class='fa fa-minus-circle' aria-hidden='true'></i></button></form>";
                                      }
                                      
                                  }
                                  //End of Set 3
                                 
                                    //Set 4
                                    $nationname = array("SaudiArabia","Singapore","SouthKorea","SriLanka","Syria","Taiwan","Tajikistan","Thailand","Timor-Leste","Turkmenistan");
                                    for($i=0;$i<10;$i++)
                                    {
                                        $countryname=$nationname[$i];
                                        if($row1["$countryname"]==1){
                                            print "<form action='delete.php' method=post ><button class='btn btn-light' type='submit' name='country' value='$countryname'>".$countryname." <i class='fa fa-minus-circle' aria-hidden='true'></i></button></form>";
                                        }
                                        
                                    }
                                    //End of Set 4
                                    
                                     //Set 5
                                     $nationname = array("UnitedArabEmirates","Uzbekistan","Vietnam","Yemen");
                                     for($i=0;$i<4;$i++)
                                     {
                                         $countryname=$nationname[$i];
                                         if($row1["$countryname"]==1){
                                            print "<form action='delete.php' method=post ><button class='btn btn-light' type='submit' name='country' value='$countryname'>".$countryname." <i class='fa fa-minus-circle' aria-hidden='true'></i></button></form>";
                                         }
                                         
                                     }
                                     //End of Set 5
                                ?>


                     </div> <!-- div of flex display-->
                    </div> <!-- div of card body-->
                </div> <!-- div of card -->
                   <br>

                   <!-- Set of Input -->
                   <div class="card">
                    <div class="card-body">
                   <h6 class=head>ประเทศที่คุณยังไม่ได้ติดตาม</h6>
                            <div style="display:flex;flex-wrap: wrap;">
                                <?php
                                //Start Session Base on Above
    
                                //User Finding
                               /* $sql="SELECT * FROM Member WHERE Usrname= '$user' ";
                                $memo=mysqli_query($conn,$sql);
                                $row1 = mysqli_fetch_assoc($memo); */
                                
                                //Set 1
                                $nationname = array("Afghanistan","Bahrain","Bangladesh","Bhutan","Brunei","Cambodia","China","India","Indonesia","Iran");
                                for($i=0;$i<10;$i++)
                                {
                                    $countryname=$nationname[$i];
                                    if($row1["$countryname"]==0){
                                        print "<form action='add.php' method=post ><button class='btn btn-light'  type='submit' name='country'  value='$countryname'>".$countryname." <i class='fa fa-plus-circle' aria-hidden='true'></i></button></form> "."  ";
                                    }
                                    
                                }
                                //End of Set 1
                                ?>
                                
                                <?php
                                 //Set 2
                                 $nationname = array("Iraq","Israel","Japan","Jordan","Kazakhstan","Kuwait","Kyrgyzstan","Laos","Lebanon","Malaysia");
                                 for($i=0;$i<10;$i++)
                                 {
                                     $countryname=$nationname[$i];
                                     if($row1["$countryname"]==0){
                                        print "<form action='add.php' method=post ><button class='btn btn-light'   type='submit' name='country'  value='$countryname'>".$countryname." <i class='fa fa-plus-circle' aria-hidden='true'></i></button></form> "."  ";
                                     }
                                     
                                 }
                                 //End of Set 2
                                
                                  //Set 3
                                  $nationname = array("Maldives","Mongolia","Myanmar","Nepal","Northkorea","Oman","Pakistan","Palestine","Philippines","Qatar");
                                  for($i=0;$i<10;$i++)
                                  {
                                      $countryname=$nationname[$i];
                                      if($row1["$countryname"]==0){
                                        print "<form action='add.php' method=post ><button class='btn btn-light'   type='submit' name='country'  value='$countryname'>".$countryname." <i class='fa fa-plus-circle' aria-hidden='true'></i></button></form> "."  ";
                                      }
                                      
                                  }
                                  //End of Set 3
                                 
                                    //Set 4
                                    $nationname = array("SaudiArabia","Singapore","SouthKorea","SriLanka","Syria","Taiwan","Tajikistan","Thailand","Timor-Leste","Turkmenistan");
                                    for($i=0;$i<10;$i++)
                                    {
                                        $countryname=$nationname[$i];
                                        if($row1["$countryname"]==0){
                                            print "<form action='add.php' method=post ><button class='btn btn-light'  type='submit' name='country'   value='$countryname'>".$countryname." <i class='fa fa-plus-circle' aria-hidden='true'></i></button></form> "."  ";
                                        }
                                        
                                    }
                                    //End of Set 4
                                    
                                     //Set 5
                                     $nationname = array("UnitedArabEmirates","Uzbekistan","Vietnam","Yemen");
                                     for($i=0;$i<4;$i++)
                                     {
                                         $countryname=$nationname[$i];
                                         if($row1["$countryname"]==0){
                                            print "<form action='add.php' method=post ><button class='btn btn-light' style='margin-lef:5px;' name='country'  type='submit' value='$countryname'>".$countryname." <i class='fa fa-plus-circle' aria-hidden='true'></i></button></form> "."  ";
                                         }
                                         
                                     }
                                     //End of Set 5
                                ?>


                     </div> <!-- div of flex display-->
                    </div> <!-- div of card body-->
                </div> <!-- div of card -->
                                            



            </div><!-- div of container -->

            <?php
            mysqli_close($conn);
            ?>
<!-- END OF CODE PART -->


    <br><br><br><br><br>
    <nav class="navbar fixed-bottom navbar-light bg-light" >
        <nav class="nav nav-pills nav-justified">
                                <a class="nav-item nav-link " href="home.php"><i class="fa fa-home" aria-hidden="true"></i><br>Home</a>
                            
                              
                                <a class="nav-item nav-link" style="background-color:gainsboro ;" data-toggle="modal" data-target="#postmodal" href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><br>Post</a>
                                <a class="nav-item nav-link" style="background-color:gainsboro;" data-toggle="modal" data-target="#menumodal" href="#"><i class="fa fa-bars" aria-hidden="true"></i><br>Menu</a>
                            
                            
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
            <form action="nation/rec.php" method="post" enctype="multipart/form-data" >
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
    
</body>
</html>