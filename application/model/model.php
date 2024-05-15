<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/models.db';
		$user = 'user';
		$pass = 'password';
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		];
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, $user, $pass, $options);
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "Connection to database failed!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	// This is a simple fix to represent, what would in reality be, a table in the database containing the brand names. 
	// The database schema would then contain a foreign key for each drink entry linking back to the brand name
	// This structure allows us to read the list of brand names to populate a menu in a view
	public function dbGetBrand()
	{
		// Return the Brand Names
		return array("-", "Coke", "Sprite", "Fanta");
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		try {
			$this->dbhandle->exec("CREATE TABLE Page_Text (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, description TEXT)");
			return "Model_3D and Page_Text tables are successfully created inside models.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
				"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Coke', 'Coca Cola X3D Model', 'This X3D model of the Coke can has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'History of Coca Cola','Atlanta Beginnings','It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Sprite', 'Sprite X3D Model', 'This X3D model of the Sprite bottle has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Sprite — Fanta Klare Zitrone','First introduced in 1961','Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'Fanta', 'Fanta X3D Model', 'This X3D model of the Fanta slim can has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Fanta — Liquid Sunshine','Fruit-flavored','Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.'); "); 
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		try{
			$this->dbhandle->exec(
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (1, 'Welcome to Coca Cola', 'Explore the taste of refreshing moments!', 'Discover More'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (2, 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (3, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (4, 'Fanta', 'Germany, 1941', 'Fanta originated in Germany as a Coca-Cola alternative in 1941 due to the American trade embargo of Nazi Germany, which affected the availability of Coca-Cola ingredients. The current formulation of Fanta, with orange flavor, was developed in Italy in 1955.'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (5, '3D Images', '3D Images', 'These 3D images of the Coke can, Sprite bottle and Fanta slim can are rendered in 3ds Max 2025 with Arnold renderer.'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (6, 'Camera Views', 'Camera Views', 'These buttons select a range of X3D model viewpoints.'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (7, 'Render', 'Render', 'These buttons select render and lighting options.'); " .
				"INSERT INTO Page_Text (Id, title, subtitle, description) 
				VALUES (8, 'Animation', 'Animation', 'These buttons start or stop the animation.'); "); 
			return "X3D model and Page text data inserted successfully inside models.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	public function dbGetPageData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Page_Text';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['title'] = $data['title'];
				$result[$i]['subtitle'] = $data['subtitle'];
				$result[$i]['description'] = $data['description'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coke1',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coke2',

			'model_3' => 'Sprite Bottle 3D Image 1',
			'image3D_3' => 'sprite1',

			'model_4' => 'Sprite Bottle 3D Image 2',
			'image3D_4' => 'sprite2',

			'model_5' => 'Fanta Slim Can 3D Image 1',
			'image3D_5' => 'fanta1',

			'model_6' => 'Fanta Slim Can 3D Image 2',
			'image3D_6' => 'fanta2'
		);
	}
}
?>