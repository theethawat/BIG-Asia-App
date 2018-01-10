<?php
session_start();
$user=$_SESSION["user"];

//$nationshort =array("AFG","BHR","BAN","BHU","BRU","CAM","CHN","IND","IDN","IRN","IRQ","ISR","JPN","JOR","KAZ","KUW","KGZ","LAO","LIB","MAS","MDV","MNG","MYA","NPE","PRK","OMA","PAK","PLE","PHI","QAT","KSA","SIN","KOR","SRI","SYR","TPE","TJK","THA","TLS","TKM","UAE","UZB","VIE","YEM");
$delete=$_POST["deleteitem"];
$short=$_POST["country"];

//for($j=0 ;$j<44 ; $j++)
 //{
     //$short=$nationshort[$j];

     //echo $short." ";

$conn=mysqli_connect("localhost","avmtsgmm_admin","Tttt2544","avmtsgmm_testmysql");

$sql="DELETE FROM $short WHERE ID ='$delete' ";

                if (mysqli_query($conn,$sql)) {
                    echo "Record deleted successfully";
                } 
                
                else 
                {
                    echo "Error deleting record: " . $conn->error;
                }
      
     mysqli_close($conn);
        echo " <meta http-equiv='refresh'content='0; url=setting.php'> " ;
       
 //}


?>