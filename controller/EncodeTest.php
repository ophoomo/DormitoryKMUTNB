<?php
	class Encode {
		public $salt = "";
		public $passwordEncode = "";
		public function RandomSalt() {
			$limit = rand(20, 30);
			$data = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789%()@#+-*";
			for ($i = 0; $i < $limit; $i++) {
				$this->salt =  $this->salt.$data[rand(0, strlen($data)-1)];
			}
		}

		public function Encode($password) {
			$this->passwordEncode = hash_hmac('sha256', $password, $this->salt);
		} 
	}


	// Login
	// $encode = new Encode();
	// $encode->salt = "phoom";
	// $encode->Encode("1234567890");
	// echo $encode->passwordEncode;


	// Register
	// $encode->RandomSalt();
	// $encode->Encode("1234567890");

	// Save to Database
	// $encode->salt;
	// $encode->passwordEncode;
	
?>