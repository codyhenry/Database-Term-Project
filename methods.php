<?php

	include_once 'connect.php';
	include_once 'createUser.php';
	
	function random_num(){
	
		//generate user id 
		$text = "";
		$length = 7;
		
		for($i=0;$i<$length;$i++){
			$text.= rand(0,9);
		}
	return $text;
}

	function get_email() {
		
		$useremail = "SELECT email FROM Users WHERE fname='$first' AND lname='$last' AND security = 'admin';";
		$result = mysqli_query($conn,$useremail);
		if(mysqli_num_rows($result) == 0){
			echo "could not find email";
		}
		
	return $result;
	}
	
	
?>