<?php


$action = 'nguyento';
if( isset( $_GET['act'] ) ) {
	$action = $_GET['act'];
}

// Controller điều phối ( gọi 1 view hay nhièu view)
switch ( $action ) {
	case 'nguyento':
		require_once './View/nguyento.php';
		break;
	
	case 'ketqua':
		require_once './View/ketqua.php';
		break;
}
?>