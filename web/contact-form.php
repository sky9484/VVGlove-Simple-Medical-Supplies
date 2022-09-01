<?php
     
	 
	 if (isset($_POST['submit']))  {
		 
		 $name = $_POST['name'];
		 $mailFrom = $_POST['mail'];
		 $message = $_POST['message'];
		 
		 
		 $mailTo = "mario@vvglove.com";
		 $headers = "From: ".$mailFrom;
		 $txt = "You have received an email enquiry from ".$name.".\n\n".$message;
		 
		 
		 mail($mailTo, $txt, $headers);
		 header("Location:  index.html?mailsend");
		 
		 
	 }	
	
	
?>