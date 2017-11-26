<?php
	$carName = $_GET['carName'];
	
	try {
		//connect to database
		$dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false,));
		
		//view all records in the cars table
		$sql = 'SELECT * FROM Cars WHERE BrandName = "'. $carName. '"';
		
		//PDO query to databse with prepared SQL statement
		$stmt = $dbhandle->query($sql);
		
		//array to return results
		$result = null;
		
		//variable to index
		$i=0;
		
		//PDO fetchall the results using while loop
		while ($data = $stmt->fetch()){
			//database contents to results array
			$result[$i]['brandName'] = $data['BrandName'];
			$result[$i]['model'] = $data['Model'];
			$result[$i]['colour'] = $data['Colour'];
			
			//increment index
			$i++;
		}
	}
	catch (PDOEXception $e){
		print new Exception($e->getMessage());
	}
	
	//close database connection
	$dbhandle = NULL;
	
	//return response
	echo json_encode($result);
?>	