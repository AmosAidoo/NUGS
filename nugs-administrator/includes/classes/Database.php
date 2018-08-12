<?php
	class Database {
		private $connection;
		private $host;
        private $username;
        private $password;
        private $dbName;

        public function __construct(string $host,string $username,string $password,string $dbName){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->dbName = $dbName;
        }

        public function connect() : object{
			$conn = new mysqli($this->host,$this->username,$this->password,$this->dbName);

			if($conn->connect_error){
				die("Couldn't establish connection " . $conn->connect_error);
			}

			$this->connection = $conn;
			return $conn;
		}

		public function close(){
			$this->connection->close();
		}

	}
?>