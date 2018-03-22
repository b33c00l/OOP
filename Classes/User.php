<?php

interface UserInterface{
	public function getAllUsers() :array;
	public function getUserById(int $id) :array;
	public function getUserByUsername(string $username) :array;
	public function addUser(string $username, string $password) :int;
	public function removeUser(int $id) : bool;
}

class User implements UserInterface {

	private $db;

	function __construct(Database $db){
		$this->db = $db;
	}

	//Get all users
	public function getAllUsers(): array{
		return $this->db->select("SELECT id, username FROM users");
	}

	//Get user by id
	public function getUserById(int $id) :array{
		return $this->db->select("SELECT * FROM users WHERE id = :id", ["id" => "$id"]);
	}

	//Get user by username
	public function getUserByUsername(string $username) :array{
		return $this->db->select("SELECT * FROM users WHERE username = :username", ["username" => "$username"]);
	}

	//Add user
	public function addUser(string $username, string $password) :int{
		return $this->db->insert("INSERT INTO users (username, password) VALUES (:username,:password)",[
			"username" => "$username",
			"password" => password_hash("$password", PASSWORD_DEFAULT)
			]
			);
	}

	//Remove user by id
	public function removeUser(int $id) : bool{
		return $this->db->remove("DELETE FROM users WHERE id = :id", ["id" => "$id"]);
	}

}

