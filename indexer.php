       <?php

        require "functions.php";
        if (isset($_POST["submit"])) {
            $name = $_POST['stock-name'];
            $color = $_POST['stock-color'];
            $cost = $_POST['stock-price'];                    
            //call the insert function
            $status = insert($name,$color,$cost);
            
            if($status === true){
                echo "sucess";
            }else {
                echo "failed";
            }
        }
        
  ?>
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <center>
        <form action="indexer.php" method="post">
            <label>Stock name</label> <br>
            <input type="text" name="stock-name"> <br>

            <label> stock color</label> <br>
            <input type="text"name="stock-color"> <br>

            <label for="price">Stock price</label> <br>
            <input type="text" name="stock-price"> <br>
            <br>
        
            <input type="submit" value="Submit" name="submit">
        </form>
        </center>
        <style>
            input{
                width: 30%;
                height: 50px;
            }
            label{
                font-size: 30px;
                font-family: 'arial','helvetica','sans-serif,'-apple-system',;
            }
        </style>
    </body>
    </html>


