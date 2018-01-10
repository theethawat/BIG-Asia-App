<?php
session_start();
$user=$_SESSION["user"];

//Login Connect Database
$conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");
$country=$_POST["country"];
//User Finding
/*$sql="SELECT * FROM Member WHERE Usrname= '$user' ";
$memo=mysqli_query($conn,$sql);
$row1 = mysqli_fetch_assoc($memo); */
$sql=" UPDATE Member SET $country='1' WHERE Username='$user' ";

if (mysqli_query($conn,$sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
echo " <meta http-equiv='refresh'content='0; url=setcountry.php'> " ;

?>