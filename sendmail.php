<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();

$conn = mysqli_connect("localhost", "orion132_website_lms", "0bB1K_JaF96F", "orion132_website_lms");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
require 'phpmailer/PHPMailerAutoload.php';

              if(!empty($_POST['phone3']) && !empty($_REQUEST['email3']) && !empty($_REQUEST['name3']))
              {
                      
                        $email3 =  $_REQUEST['email3'];
                        
                        $name3 = $_REQUEST['name3'];
                        
                        $phone3 =  $_REQUEST['phone3'];
                        
                        $sql = "INSERT INTO `leads` (`name`, `email`, `mobile`)  VALUES ('$name3', '$email3', '$phone3')";
                        
                        if(mysqli_query($conn, $sql) or die(mysqli_error($conn))){
                            echo "data stored in a database successfully.";
                        } 
                        mysqli_close($conn);
                    
                    $mail = new PHPMailer;
                  //  $mail->isSMTP();
                        $mail->Host = 'localhost';  // SMTP server address
                        $mail->SMTPAuth = false;
                        $mail->Username = 'info@bawandarr.com'; // SMTP username
                        $mail->Password = 'Varun@bawandarr2021#'; // SMTP password
                        $mail->SMTPSecure = 'none';
                        $mail->Port = 25;
                    
                    // Set the sender and recipient
                    $mail->setFrom($email3 , 'The 62 Avenue');  // Sender's email and name
                    $mail->addAddress('rohit@bawandarr.com.test-google-a.com' , 'The 62 Avenue');  // Recipient's email and name

                    $email3 = $_POST['email3'];
                    $name3 = $_POST['name3'];
                    $phone3  = $_POST['phone3'];
                   
                    $message = '<table style="border:1px solid #ddd;"><tr><th style="border:1px solid #ddd;">Name</th><td style="border:1px solid #ddd;">'.$_POST['name3'].'</td></tr><tr>
                    <th style="border:1px solid #ddd;">Email</th><td style="border:1px solid #ddd;">'.$_POST['email3'].'</td></tr>
                    <tr><th style="border:1px solid #ddd;">Phone</th><td style="border:1px solid #ddd;">'.$_POST['phone3'].'</td></tr>
                    </table>';
                   
                   // Integrate Curl API Here
                    
                    $mail->Subject = 'The 62 Avenue';

                    $mail->msgHTML($message);

                    $mailsend = $mail->Send();

                    $mail->ClearAllRecipients();
                    
                    $headers = [
                                    'Content-Type: application/json'
                                ];

                    if (!$mailsend) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    }

                    else{ 

                     echo "Message_sent";

                }

            }

               

?>