<?php
require_once 'Model/NguyenTo.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Số Nguyên Tố</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<?php
	$ctrl = 'nguyentocontroller';
	if( isset( $_GET['action'] )) {
		$ctrl = $_GET['action'];
	}
	require_once 'Controller/' . $ctrl . '.php';
	?>
</body>
</html>