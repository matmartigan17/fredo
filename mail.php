<?php

   $to  = "contact@fredericrolof.fr";
 
   $from = isset($_POST['from']) ? $_POST['from'] : 'toto@titi.fr';
   $nom = isset($_POST['nom']) ? $_POST['nom'] : 'titi';
   $sujet = isset($_POST['sujet']) ? $_POST['sujet'] : 'sujet';
   $message = isset($_POST['message']) ? $_POST['message'] : 'message';
   
	// Pour les hébergements mutualisés Windows de OVH
   ini_set("SMTP", "smtp.mondomaine.com");   
 
   
   $JOUR  = date("Y-m-d");
   $HEURE = date("H:i"); 
   
 
   $mail_Data = "";
   $mail_Data .= "<html> \n";
   $mail_Data .= "<head> \n";
   $mail_Data .= "<title> Site web </title> \n";
   $mail_Data .= "</head> \n";
   $mail_Data .= "<body> \n"; 
   $mail_Data .= "<b>Un message de $nom : </b>";
   $mail_Data .= "<br> \n";
   $mail_Data .= $message;
   $mail_Data .= "</body> \n";
   $mail_Data .= "</HTML> \n";
 
   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=utf-8 \n";
   $headers .= "From: $from  \n";
 
 
   $CR_Mail = TRUE;
 
   $CR_Mail = @mail ($to, $sujet, $mail_Data, $headers);
 
   if ($CR_Mail === FALSE)
      {
      echo "Erreur envoi mail <br> \n";
      }
	else
      {
		header('Location:http://www.fredericrolof.fr');
      }
	  
	  ?>