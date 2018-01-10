<?php
session_start();
$user=$_SESSION["user"];

//Login Connect Database
$conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
$old=$_POST["oldpassword"];
$new=$_POST["newpassword"];
//User Finding
$sql="SELECT * FROM Member WHERE Usrname= '$user' ";
$memo=mysqli_query($conn,$sql);
$row1 = mysqli_fetch_assoc($memo); 
if($row1["Pass"]=$old)
{
    $sql=" UPDATE Member SET Pass='$new' WHERE Username='$user' ";

    if (mysqli_query($conn,$sql)) {
        echo "Record updated successfully";
        } 
    else {
        echo "<h1> Error updating record: </h1> " . $conn->error;
        }

}



mysqli_close($conn);
echo " <meta http-equiv='refresh'content='0; url=setting.php'> " ;

?>