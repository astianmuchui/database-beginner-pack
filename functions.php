<?php
function insert($name,$color,$cost){ 

    //insert data into a database//
    $check_name = validate($name);
    $check_color = validate($color);
    $check_cost = validate($cost);
    //insert if no errors
    if (($check_name and $check_color and $check_cost)=== true) {
        include "database.php";


            //insert to database
    $query="INSERT INTO products(stock_name,stock_color,stock_cost) VALUES('$name','$color','$cost')";
    $sql = mysqli_query($connection,$query);
    if($sql){
        //success
        return true;
    }else{
        //not saved
        return false;
    }
    }
}

    function validate($value){
        if (strlen($value)>10) {
            # code...
            return false;
        }else {
            return true;
        }
    }

?>