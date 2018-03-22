<?php
interface GameInterface {
	
    public function getAllGames() : array;
	
	// Get user games by the user id
    public function getUserGames(int $int) : array;
	
	// Get the best players
    public function getTopWinners(int $count) : array;
	
	// Get players who played the most
    public function getTopPlayers(int $count) : array;

}

class Game implements GameInterface {

	private $db;

	function __construct(Database $db){
		$this->db = $db;
	}

    public function getAllGames() : array{
    	return $this->db->select("SELECT * FROM stats");
    }
	
	// Get user games by the user id
    public function getUserGames(int $int) : array{
    	return $this->db->select("SELECT * FROM stats WHERE id = :id", ["id" => "$int"]);
    }
	
	// Get the best players
    public function getTopWinners(int $count) : array{
    	return $this->db->select("SELECT username, MAX(total) FROM stats GROUP BY username LIMIT $count");
    }
	
	// Get players who played the most
    public function getTopPlayers(int $count) : array{
    	return $this->db->select("SELECT username, COUNT(total) FROM stats GROUP BY username LIMIT $count");
    }






}

