<?php
// include 'database/connect.php';

if(isset($_GET["id"])){

    session_start();
        if (!isset($_SESSION['google_auth'])) {
        header('location: https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=702412683171-hu5ur4uad25tm49gb5gii0e9md7cbkdk.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Fprojects%2Folives%2Fauth%2Fgoogle_callback.php&state&scope=email%20profile&approval_prompt=auto&service=lso&o2v=2&ddm=1&flowName=GeneralOAuthFlow');
        exit();
        }

        include './Database/connect.php';

        // Check which session variable is set and get the user ID
        $id = isset($_SESSION['google_auth']) ? $_SESSION['google_auth'] : null;

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE SN = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $details = $result->fetch_object();

        $profileImage = htmlspecialchars($details->Avatar, ENT_QUOTES, 'UTF-8'); // Sanitize output
        $name = htmlspecialchars($details->First_Name, ENT_QUOTES, 'UTF-8'); // Sanitize output
        $email = htmlspecialchars($details->Email, ENT_QUOTES, 'UTF-8'); // Sanitize output
    
    
    
        $item = $_GET['id'];

            
            $foods ="SELECT * FROM foods where SN = $item";
            $result = mysqli_query($conn, $foods);
            $common = mysqli_fetch_assoc($result);
                        $P_Name = $common['P_Name'];
                        $Price = $common['Price'];
                        $Image = $common['P_Image'];

                        // 
//  C_Name
//  Email
//  P_Name
//  Price
//  P_Image

                     $Update_Cart = "INSERT INTO cart( C_Name, Email, P_Name, Price, P_Image) 
                                VALUES('$name', '$email', '$P_Name', $Price,'$Image')";         
                            $result = mysqli_query($conn,$Update_Cart); 

                            
                            if($result){
                                   header('location: index.php');
                               }
                            
                 }
                    
     ?>