<?php

          $name=$_POST['name'];
          $visitor_email= $_POST['email'];
          $message=$_POST['message'];


         $email_from="jitendra_010107@rediffmail.com";

         $email_subject="Regarding innovative ideas for future";

          $email_body= "User Name:$name.\n".
              "User Email:$visitor_email.\n".
               "User Message:$message.n\";


                    $to="jitendra7883010107@gmail.com";

$headers="From: $email_from \r\n";

$headers.="Reply-To: $visitor_email \r\n";





if(mail($to,$email_subject,$email_body,$headers))

{ 

echo "mail send successfully";

}

else{
	echo "Can Not send mail";
}

header(Location: "put your orginal ideas.html");

?>

