<?php
if( isset( $_POST['txtnumber1'] ) && isset( $_POST['txtnumber2'] )) :
	$n1 = $_POST['txtnumber1'];
	$n2 = $_POST['txtnumber2'];
endif;



// Tạo đối tượng
$nto = new NguyenTo();
$nto->getList($n1, $n2);
?>