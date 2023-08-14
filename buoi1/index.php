<?php
// Class Books
class Books {
	// Thuộc tính
	var $price; // var khai báo thuộc tinh
	static $title; // 

	function setPrice($par) {
		$this->price = $par;
	}

	function getPrice(){
		echo $this->price . '<br />';
	}

	function setTitle($par) {
		self::$title = $par;
	}

	static function getTitle() {
		return self::$title . '<br />';
	}
}

$obj = new Books(); // khởi tạo đối tượng
$obj->setTitle("AAA");
$obj->setPrice(1000);

//$obj->getTitle();
$obj->getPrice();

echo '=========================================================================================== <br />';

// extends 
class Novel extends Books {
	var $publisher;

	function setPublisher($par) {
		$this->publisher = $par;
	}

	function getPublisher() {
		echo $this->publisher . '<br />';
	}
}

$novel = new Novel();
$novel->setPublisher("Public");
$novel->setPrice(2000);

echo Books::getTitle();
$novel->getPrice();
$novel->getPublisher();
?>
