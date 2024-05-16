<?php
class Model {
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/models.db';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->dbhandle = new PDO($dsn, null, null, $options);
        }
        catch (PDOException $e) {
            echo "Connection to database failed: " . $e->getMessage();
        }
    }

    public function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            $this->dbhandle->exec("CREATE TABLE Page_Text (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, description TEXT)");
            return "Model_3D and Page_Text tables are successfully created inside models.db file";
        }
        catch (PDOException $e){
            echo "An error occurred: " . $e->getMessage();
        }
    }

    public function dbInsertData()
    {
        try {
            // Prepare SQL statement for inserting into Model_3D
            $sqlModel3D = "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) VALUES (:id, :brand, :x3dModelTitle, :x3dCreationMethod, :modelTitle, :modelSubtitle, :modelDescription)";
            $stmtModel3D = $this->dbhandle->prepare($sqlModel3D);
    
            // Insert data into Model_3D
            $model3DData = [
                [
                    'id' => 1, 'brand' => 'Coke', 
                    'x3dModelTitle' => 'Coca Cola X3D Model', 
                    'x3dCreationMethod' => 'This X3D model of the Coke can has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.',
                    'modelTitle' => 'History of Coca Cola', 
                    'modelSubtitle' => 'Atlanta Beginnings',
                    'modelDescription' => "It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs' Pharmacy put it on sale for five cents (about 3p) a glass."
                ],
                [
                    'id' => 2, 'brand' => 'Sprite', 
                    'x3dModelTitle' => 'Sprite X3D Model', 
                    'x3dCreationMethod' => 'This X3D model of the Sprite bottle has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.',
                    'modelTitle' => 'Sprite — Fanta Klare Zitrone', 
                    'modelSubtitle' => 'First introduced in 1961',
                    'modelDescription' => "Crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola's no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories."
                ],
                [
                    'id' => 3, 'brand' => 'Fanta', 
                    'x3dModelTitle' => 'Fanta X3D Model', 
                    'x3dCreationMethod' => 'This X3D model of the Fanta slim can has been created in 3ds Max 2025, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.',
                    'modelTitle' => 'Fanta — Liquid Sunshine', 
                    'modelSubtitle' => 'Fruit-flavored',
                    'modelDescription' => 'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.'
                ],
            ];
    
            foreach ($model3DData as $data) {
                $stmtModel3D->execute($data);
            }
    
            // Prepare SQL statement for inserting into Page_Text
            $sqlPageText = "INSERT INTO Page_Text (Id, title, subtitle, description) VALUES (:id, :title, :subtitle, :description)";
            $stmtPageText = $this->dbhandle->prepare($sqlPageText);
    
            // Insert data into Page_Text
            $pageTextData = [
                ['id' => 1, 'title' => 'Welcome to Coca Cola', 'subtitle' => 'Explore the taste of refreshing moments!', 'description' => 'Discover More'],
                ['id' => 2, 'title' => 'Coca Cola', 'subtitle' => 'New York Harbour, 1886', 'description' => "It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!"],
                ['id' => 3, 'title' => 'Sprite', 'subtitle' => 'West Germany, 1959', 'description' => "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories."],
                ['id' => 4, 'title' => 'Fanta', 'subtitle' => 'Germany, 1941', 'description' => "Fanta originated in Germany as a Coca-Cola alternative in 1941 due to the American trade embargo of Nazi Germany, which affected the availability of Coca-Cola ingredients. The current formulation of Fanta, with orange flavor, was developed in Italy in 1955."],
                ['id' => 5, 'title' => '3D Images', 'subtitle' => '3D Images', 'description' => 'These 3D images of the Coke can, Sprite bottle and Fanta slim can are rendered in 3ds Max 2025 with Arnold renderer.'],
                ['id' => 6, 'title' => 'Introducing', 'subtitle' => 'Introducing', 'description' => "This video comes from the Coca-Cola's YouTube channel."],
                ['id' => 7, 'title' => 'Camera Views', 'subtitle' => 'Camera Views', 'description' => 'These buttons select a range of X3D model viewpoints.'],
                ['id' => 8, 'title' => 'Render', 'subtitle' => 'Render', 'description' => 'These buttons select render and lighting options.'],
                ['id' => 9, 'title' => 'Animation', 'subtitle' => 'Animation', 'description' => 'These buttons play or stop the animation.'],
            ];
    
            foreach ($pageTextData as $data) {
                $stmtPageText->execute($data);
            }
    
            return "X3D model and Page text data inserted successfully inside models.db";
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        } finally {
            $this->dbhandle = null; // Close the database connection
        }
    }

    public function dbGetData()
    {
        try {
            $sql = 'SELECT * FROM Model_3D';
            $stmt = $this->dbhandle->prepare($sql);
            $stmt->execute();

            $result = [];
            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $result[] = $data;
            }
        }
        catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
        return $result;
    }

    public function dbGetPageData()
    {
        try {
            $sql = 'SELECT * FROM Page_Text';
            $stmt = $this->dbhandle->prepare($sql);
            $stmt->execute();

            $result = [];
            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $result[] = $data;
            }
        }
        catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
        return $result;
    }


}
?>
