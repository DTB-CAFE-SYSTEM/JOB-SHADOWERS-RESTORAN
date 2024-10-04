<?php
include('database/connect.php');
if(isset($_GET["id"])){
    
    $item = $_GET['id'];

            $foods ="SELECT * FROM foods where SN = $item";
            $result = mysqli_query($conn, $foods);
            $common = mysqli_fetch_assoc($result);
                        $Name = $common['P_Name'];
                        $Price = $common['Price'];
                        $Image = $common['P_Image'];


            
                         
                     $Update_Cart = "INSERT INTO cart(P_Name,Price,P_Image) 
                                VALUES('$Name', $Price,'$Image')";         
                            $result = mysqli_query($conn,$Update_Cart); 

               
                            
                            if($result){
                                   header('location: index.php');
                               }
                            
                 }
                    
     ?>