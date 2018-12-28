<?php
    try {
    	$db = new PDO("mysql:dbname=grupo11daw;host=mysql.grupo11daw2018.com.mialias.net", "grupo11daw", "1234ABC$" );
	} catch(PDOException $e) {
	    echo $e->getMessage();
	}

    $table= "alimentos";
	$columns = "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255) NOT NULL, energia DECIMAL(10,0) NOT NULL, proteina DECIMAL(10,0) NOT NULL, hidratocarbono DECIMAL(10,0) NOT NULL, fibra DECIMAL(10,0) NOT NULL, grasatotal DECIMAL(10,0) NOT NULL";

    $createTable = $db->exec("CREATE TABLE IF NOT EXISTS grupo11daw.$table($columns)");
?>