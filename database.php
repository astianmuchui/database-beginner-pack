
<?php
DEFINE ("DBNAME","databas");
DEFINE ("DBHOST","localhost");
DEFINE ("DBUSER","root");
DEFINE ("DBPASSWORD","");


$connection=mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);
if($connection){
    // echo "Sucessful connection";
}else{
    echo "connection failed";
}
?>