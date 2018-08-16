<?php 

	/**

	* 

	*/

	class Users

	{

		protected $id;

		protected $title;

		protected $price;

		protected $description;

		protected $image;

		protected $createdOn;



		public $conn;



		function setId($id) { $this->id = $id; }

		function getId() { return $this->id; }

		function setTitle($name) { $this->title = $title; }

		function getTitle() { return $this->title; }

		function setPrice($mobile) { $this->price = $price; }

		function getPrice() { return $this->price; }

		function setDescription($email) { $this->description = $description; }

		function getDescription() { return $this->description; }

		function setImage($pass) { $this->image = $image; }

		function getImage() { return $this->Image=$Image; }

		function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }

		function getCreatedOn() { return $this->CreatedOn; }

		function setToken($token) { $this->token = $token; }

		function getToken() { return $this->token; }

		function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }

		function getCreatedOn() { return $this->createdOn; }





		function __construct() {

			require 'DbConnect1.php';

			$db = new DbConnect();

			$this->conn = $db->connect();

		}
	public function getAllWorkshops() {

			$sql="SELECT * FROM Workshops"; 

			$stmt->bindParam(':email', $this->email);
	$stmt = $this->conn->prepare($sql);
	$stmt->execute();
			try {

				if($stmt->execute()) {

					$workshops = $stmt->fetchAll(PDO::FETCH_ASSOC);

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

			return $workshops;

		}



		public function getWorkshopById() {

			$stmt = $this->conn->prepare('SELECT * FROM workshops WHERE id = :wid');

			$stmt->bindParam(':wid', $this->id);

			try {xx
\
				if($stmt->execute()) {

					$user = $stmt->fetch(PDO::FETCH_ASSOC);

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

			return $workshop;

		}


		public function save()

		{

			$sql = "INSERT INTO `users`(`id`, `name`, `mobile`, `email`, `pass`, `activated`, `token`, `created_on`) VALUES (null,:name,:mobile,:email,:pass,:activated,:token,:cdate)";

			$stmt = $this->conn->prepare($sql);

			$stmt->bindParam(':name', $this->name);

			$stmt->bindParam(':mobile', $this->mobile);

			$stmt->bindParam(':email', $this->email);

			$stmt->bindParam(':pass', $this->pass);

			$stmt->bindParam(':activated', $this->activated);

			$stmt->bindParam(':token', $this->token);

			$stmt->bindParam(':cdate', $this->createdOn);

			try {

				if($stmt->execute()) {

					return true;

				} else {

					return false;

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

		}


//added
		public function addItem() {

			$stmt = $this->conn->prepare("INSERT INTO 'cart'('Id','Cid','Pid','TITLE','QUALITY', 'TOTALAMOUNT' ,'createdON') VALUES (null,:cid, :pid,:title,:quantity,:totalAmount,:cdate)" ;

			$stmt->bindParam(':cid', $this->cid);
			$stmt->bindParam(':pid', $this->pid);
			$stmt->bindParam(':title', $this->title);
			$stmt->bindParam(':quantity', $this->quantity);
			$stmt->bindParam(':totalAmount', $this->totalAmoun);
			$stmt->bindParam(':cdate', $this->cdate);
			try {

				if($stmt->execute()) {

					$user = $stmt->fetch(PDO::FETCH_ASSOC);

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

			return $user;

		}



		public function getUserById() {

			$stmt = $this->conn->prepare('SELECT * FROM users WHERE id = :id');

			$stmt->bindParam(':id', $this->id);

			try {

				if($stmt->execute()) {

					$user = $stmt->fetch(PDO::FETCH_ASSOC);

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

			return $user;

		}



		public function activateUserAccount() {

			$stmt = $this->conn->prepare('UPDATE users SET activated = 1 WHERE id = :id');

			$stmt->bindParam(':id', $this->id);

			try {

				if($stmt->execute()) {

					return true;

				} else {

					return false;

				}

			} catch (Exception $e) {

				echo $e->getMessage();

			}

		}		
		?>