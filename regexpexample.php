<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
        <p>
          <?php          
			//This is EIN regex.
			$string = "00-0000000";
			echo preg_match("^[1-9]\d?-\d{7}$^", $string);
			echo "<br>";
			
			
			//This is Email address regex. Prefer the seond one.
			$email = "crm@crm.crm";
			//echo preg_match("/^[a-z0-9._%+-]+@([a-z0-9.-]+)\.([a-z]{2,4})$/i", $email);
			
			echo preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|
								biz|info|mobi|name|aero|asia|jobs|museum)$/i", $email);	
			echo "<br />";


			//This is Phone number regex.
			$phoneNumber = "222-222-2222";
			//echo preg_match("/^[2-9]\d{2}-\d{3}-\d{4}$/", $phoneNumber);
			
			
			
			//echo preg_match("/^(?:1-?)?(\d)\1\1-?\1\1\1-?\1\1\1\1$/", $phoneNumber);
			//$x = preg_match("/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/", $phoneNumber);
			
			$x = preg_match("/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/", $phoneNumber);
			$y = preg_match("/^(\d)\g1\g1-\g1\g1\g1-\g1\g1\g1\g1$/", $phoneNumber) == 1 ? 0 : 1;
			
			if($x && $y ? true : false)
			{
				echo "Success";
			}
			else
			{
				echo "Failure";
			}	

//K6Y9N-2XYBP-H43R3-V7H6H-BDTY2 - 64 bit
//9W7BP-XN3QD-GYT72-DVH74-K4QB2 - 32 bit	
// 232 tables in the database		
			
          ?>
        </p>   
	</body>
</html>

