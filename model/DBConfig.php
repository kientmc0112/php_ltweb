<?php
	class Database {
		/*Database Information*/
		private $localhost = 'localhost';
		private $username = 'admin';
		private $password = '1';
		private $dbname = 'php_ltweb';

		private $conn = NULL;
		private $result = NULL;

		/*Function connect databse*/
		public function connect() {
			$this->conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->dbname) or die("Can't connect to database");
			$this->conn->query("set names 'utf8'");
			return $this->conn;
		}

		/*Function execute sql query*/
		public function execute($sql) {
			$this->result = mysqli_query($this->conn, $sql);
			return $this->result;
		}

		/*Function count result*/
		public function getRow() {
			if(!$this->result) {
				$num = 0;
			}
			else {
				$num = mysqli_num_rows($this->result);
			}
			return $num;
		}

		/*Function login*/
		public function login($username, $password) {
			$sql = "SELECT * FROM account WHERE username='$username' AND pass='$password'";
			$this->execute($sql);
			if($this->getRow() == 1) {
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}

		/*Function register*/
		public function register($name, $username, $email, $password) {
			$sql = "INSERT INTO account(name, username, email, pass, level) VALUES('$name','$username','$email','$password', '0')";
			return $this->execute($sql);
		}

		/*Function check email*/
		public function check($data, $type) {
			$sql = "SELECT * FROM account WHERE $type='$data'";
			$this->execute($sql);
			return $this->getRow();
		}

		/*Function get all*/
		public function getList($tblname) {
			$sql = "SELECT * FROM $tblname";
			$this->execute($sql);
			if($this->getRow() == 0) {
				$data = 0;
			}
			else {
				while($datas = mysqli_fetch_array($this->result)) {
					$data[] = $datas;
				}
			}
			return $data;
		}

		/*Brand*/
		public function addBrand($name, $position, $summary) {
			$sql = "INSERT INTO brands(name, position, summary) VALUES('$name', '$position', '$summary')";
			return $this->execute($sql);
		}

		public function editBrand($id, $name, $position, $summary) {
			$sql = "UPDATE brands SET name = '$name', position = '$position', summary = '$summary' WHERE id = '$id'";
			return $this->execute($sql);
		}

		public function getBrand($id) {
			$sql = "SELECT * FROM brands WHERE id='$id'";
			$this->execute($sql);
			if($this->getRow() != 0) {
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}

		public function deleteBrand($id) {
			$sql = "DELETE FROM brands WHERE id='$id'";
			return $this->execute($sql);
		}

		/*Category*/
		public function addCategory($name, $summary) {
			$sql = "INSERT INTO categories(name, summary) VALUES('$name', '$summary')";
			return $this->execute($sql);
		}

		public function editCategory($id, $name, $summary) {
			$sql = "UPDATE categories SET name = '$name', summary = '$summary' WHERE id = '$id'";
			return $this->execute($sql);
		}

		public function getCategory($id) {
			$sql = "SELECT * FROM categories WHERE id='$id'";
			$this->execute($sql);
			if($this->getRow() != 0) {
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}

		public function deleteCategory($id) {
			$sql = "DELETE FROM categories WHERE id='$id'";
			return $this->execute($sql);
		}

		/*Product*/
		public function addProduct($name, $cost, $state, $summary, $brand_id, $category_id, $url) {
			$sql = "INSERT INTO products(name, cost, state, summary, brand_id, category_id, url) VALUES('$name', '$cost', '$state', '$summary', '$brand_id', '$category_id', '$url')";
			return $this->execute($sql);
		}

		public function editProduct($id, $name, $cost, $state, $summary, $brand_id, $category_id, $url) {
			$sql = "UPDATE products SET name = '$name', cost = '$cost', state = '$state', summary = '$summary', brand_id = '$brand_id', category_id = '$category_id', url = '$url' WHERE id = '$id'";
			return $this->execute($sql);
		}

		public function getProduct($id) {
			$sql = "SELECT * FROM products WHERE id='$id'";
			$this->execute($sql);
			if($this->getRow() != 0) {
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}

		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id='$id'";
			return $this->execute($sql);
		}

		/*Function get information*/
		// public function getData($tblname, $data, $type) {
		// 	$sql = "SELECT * FROM $tblname WHERE $type = '$data'";
		// 	$this->execute($sql);
		// }
	}
