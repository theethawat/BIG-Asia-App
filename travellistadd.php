<?php
 session_start();
 $user=$_SESSION["user"];

 $travelname=$_POST["title"];
 $travelbody=$_POST["body"];
 $travelcountry=$_POST["country"];
 $group=$_POST["catagory"];

$conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");


 move_uploaded_file($_FILES["photo"]["tmp_name"],"Travel/".$_FILES["photo"]["name"]);

    $filename=$_FILES["photo"]["name"];
    
    $sql="INSERT INTO $group(Travelname,Country,Photo,Infoadd,Usrname) VALUE('$travelname','$travelcountry','$filename','$travelbody','$user')";
    if (mysqli_query($conn,$sql)){
        echo "เราได้ทำการเพิ่มข้อความของคุณเรียบร้อยแล้ว" ;
        echo '<meta http-equiv="refresh"content="0; url=travel.php">';
    }
    else{
        echo "ERROR" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>