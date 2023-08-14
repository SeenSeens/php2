<?php
$n1 = $_POST['txtnumber1'];
$n2 = $_POST['txtnumber2'];

// Tạo đối tượng
$nto = new NguyenTo();
$nto->getList($n1, $n2);
?>