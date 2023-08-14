<?php
/**
 * 
 */
class NguyenTo {
	function isNguyenTo( $x ) {
		$isSNT = true;
		for($i = 2; $i < $x; $i++) {
			if($x % $i == 0) {
				$isSNT = false;
				break;
			}
		}
		return $isSNT;
	}

	// Phương thức nhận 2 giá trị từ view gửi về
	function getList($x1, $x2) {
		for($i = $x1; $i <= $x2; $i++) {
			if( $this->isNguyenTo( $i ) ) {
				echo $i . '<br />';			}
		}
	}
}
?>