<?php 
class Model {
	//Variable pointing to database
	public $dbhandle;
	//Create database connection
	public function __construct(){
		try {
			$this->dbhandle = new PDO('sqlite:./db/database.db','user','password',array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false,));
			
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
	}
	
	//Create a table using POD exec function
	public function dbCreateTable(){
		try {
			$this->dbhandle->exec("CREATE TABLE IF NOT EXISTS Weapons(Id INTEGER NOT_NULL AUTO_INCREMENT PRIMARY KEY, Name TEXT, Origin TEXT, Date TEXT, Description TEXT)");
			return "A table named Weapons has been created or already exists in database";
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	//Insert data using PDO Exec function
	public function dbInsertData(){
		try {
			$this->dbhandle->exec("INSERT INTO Weapons (Name, Origin, Date, Description) VALUES ('Flanged Mace', 'Various', '13th to 14th Century', 'Ewart Oakeshott is a historian and illustrater which has defined a method to catalogue medieval swords based on physical form named the Oakeshott typology. Of these swords, the Type XVI swords have a flat cutting blade which tapers to an acute point reinforced by a clearly defined ridge, making it equally effective for thrusting. This type somewhat resembles a more slender version of type XIV. Blade length c. 70–80cm. Subtype XVIa have a longer blade with a shorter fuller (usually running down 1/3 and rarely exceeding 1/2 of the blade). The grip is often extended to accommodate one and a half or two hands.'); " .
			"INSERT INTO Weapons (Name, Origin, Date, Description) VALUES ('Oakeshott Type XVI Swords', 'Earliest references to the Byzantine Empire', 'White', 'A mace is a simple weapon that uses a heavy head on the end of a handle to deliver powerful blows. During the Middle Ages metal Armour and chain mail protected against the blows of edged weapons and blocked arrows and other projectiles. Solid metal maces and war hammers proved able to inflict damage on well armoured knights, as the force of a blow from a mace is large enough to cause damage without penetrating the armour. One example of a mace capable of penetrating armour is the flanged mace. What makes a flanged mace different from other maces is the flanges, protruding edges of metal that allow it to dent or penetrate even the thickest armour. This variation of the mace did not become popular until significantly after knobbed maces. Although there are some references to flanged maces (bardoukion) as early as the Byzantine empire circa 900, it is commonly accepted that the flanged mace did not become popular in Europe until the 12th century.'); " .
			"INSERT INTO Weapons (Name, Origin, Date, Description) VALUES ('Halberd', 'N/A', 'N/A', 'N/A'); " .
			"INSERT INTO Weapons (Name, Origin, Date, Description) VALUES ('Shield', 'N/A', 'N/A', 'N/A'); " ) ;
			return "Data inserted successfully inside the Database";
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	//Get Data
	public function dbGetData(){
		try {
			//Get Database as object
			$sql = 'SELECT * FROM Weapons';
			$stmt = $this->dbhandle->query($sql);
			
			//Set up array to return
			$result = null;
			
			//set up variable to index
			$i = 0;
			
			//While loop
			while ($data = $stmt->fetch()){
				//Database contents to result array
				$result[$i]['name'] = $data['Name'];
				$result[$i]['origin'] = $data['Origin'];
				$result[$i]['date'] = $data['Date'];
				$result[$i]['description'] = $data['Description'];
				$i++;
			}
		} catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}
	//Deletes data from table
	public function dbDeleteData(){
		try {
			//Deletes every data entry in Weapons
			$this->dbhandle->exec("DELETE FROM Weapons");
			return "All data in database has been deleted";
		} catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	//Deletes Weapons Table
	public function dbDeleteTable(){
		try {
			//DROP command delets the entire table
			$this->dbhandle->exec("DROP TABLE Weapons");
			return "Weapons Table in database has been deleted";
		} catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

}
?>