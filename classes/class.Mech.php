<?php

class Mech{
    protected $mechname;
    protected $userId;
    protected $databaseProperty;
    
    function __construct($userId, $databaseProperty) {
		$this->databaseProperty = $databaseProperty;
		$this->userId = $userId;
       $sql = file_get_contents('sql/getMech.sql');
	   $params = array(
		  'userId' => $userId,
	   );
	   $statement = $this->databaseProperty->prepare($sql);
	   $statement->execute($params);
	   $mechs = $statement->fetchAll(PDO::FETCH_ASSOC);
        
	   $mech = $mechs[0];
        
       
       $this->mechname = $mech["mechname"];
       
	}
    
    function getName() {
        return $this->mechname;
    }
	
}
