<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    class Mailer {

    //Load Composer's autoloader
    public function sendEmail($parameter) {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'cam2rescue@gmail.com';                     //SMTP username
            $mail->Password   = 'lwjl hjsj mjvm youg';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('cam2rescue@gmail.com', 'Cam2Rescue');
            $mail->addAddress('cam2rescue@gmail.com', 'Cam2Rescue');     //Add a recipient
            $mail->addAddress($parameter['to_email']);               //Name is optional
            $mail->addReplyTo('cam2rescue@gmail.com', 'Cam2Rescue');
            
            if(!empty($parameter['Cc'])) {
                $mail->addCC('cc@example.com');
            }

            if(!empty($parameter['Bcc'])) {
                $mail->addBCC('bcc@example.com');
            }

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
            if(!empty($parameter['attachment'])) {
                $mail->addAttachment($parameter['attachment']);  
            }
           
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $parameter['subject'];
            $mail->Body    = $parameter['body'];;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            return ($mail->send()) ? true : false;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}