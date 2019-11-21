<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thực hành Menu</title>
	<style>
		body {
			padding: 0;
			margin: 0;
		}
		ul li {
			list-style-type: none;
			float: left;
			background: black;
		}
		a {
			color: white;
			text-decoration: none;
			padding: 15px;
			display: block;
		}
		ul li ul {
			display: none;
		}
		ul li:hover {
			display: block;
			background: red;
		}

		ul li:hover ul {
			display: block;
			position: absolute;
			margin-left: -40px;
		}
		ul li ul li {
			float: none;
			position: relative;
		}

		ul li ul li ul li {
			display: none;
		}
		ul li ul li:hover ul li{
			display: block;
		}
		ul li ul li ul {
			position: absolute;
			top: 0px;
			left: 90px;
		}
	</style>
</head>
<body>
	
</body>
</html>

<?php 
	$menu = array();
	$menu[] = array('id'=>'1', 'name'=>'Menu 1', 'parent'=>'0');
	$menu[] = array('id'=>'2', 'name'=>'Menu 2', 'parent'=>'0');
	$menu[] = array('id'=>'3', 'name'=>'Menu 3', 'parent'=>'0');
	$menu[] = array('id'=>'4', 'name'=>'Menu 4', 'parent'=>'0');
	$menu[] = array('id'=>'5', 'name'=>'Menu 1.1', 'parent'=>'1');
	$menu[] = array('id'=>'6', 'name'=>'Menu 1.2', 'parent'=>'1');
	$menu[] = array('id'=>'7', 'name'=>'Menu 2.1', 'parent'=>'2');
	$menu[] = array('id'=>'8', 'name'=>'Menu 3.1', 'parent'=>'3');
	$menu[] = array('id'=>'9', 'name'=>'Menu 3.2', 'parent'=>'3');
	$menu[] = array('id'=>'10', 'name'=>'Menu 3.2.1', 'parent'=>'9');
	$menu[] = array('id'=>'11', 'name'=>'Menu 3.2.2', 'parent'=>'9');
	$menu[] = array('id'=>'12', 'name'=>'Menu 2.1.1', 'parent'=>'7');

	function dequy($menu, $parent =0){
		echo '<ul>';
		foreach ($menu as $value1) {
			if($value1['parent']==$parent){
				echo '<li>'."<a href='#' title=''>".$value1['name']."</a>";

				$id1 = $value1['id'];
				dequy($menu, $id1);
			}
		}
		echo '</li>';
		echo '</ul>';
	}

	dequy($menu, $parent=0);
 ?>