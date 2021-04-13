<?php 

	if(isset($_POST['upload_btn'])){

		$db_connetion = mysqli_connect("localhost", "root", "", "php_file_csv");

		$csv = $_FILES['csv'];

		if($csv['name'] !=''){



			$file = fopen($csv['tmp_name'],"r");

			for($i=0; $row = fgetcsv($file); $i++){

				if($i>1){
					
					$name 	= $row[0];
					$email 	= $row[1];
					$age 	= $row[2];
					$phone 	= $row[3];

					$query = "INSERT INTO users(`name`,`email`,`age`,`phone`) values('$name','$email','$age','$phone')";
					mysqli_query($db_connetion,$query);

					echo "Suceess";

				}

				
			}

















		}else{
			echo "Empty";
		}





	}


?>