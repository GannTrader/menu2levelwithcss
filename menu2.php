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

	function dequy($menu, $parent =0){
		$menuP = array();
		foreach ($menu as $value1) {
			if($value1['parent']==$parent){

				$id1 = $value1['id'];
				$child = array();
				foreach ($menu as $value2) {
					if($value2['parent']==$id1){
						$child[] = $value2;
					}
				}
				$value1['sub'] = $child;
				$menuP[] = $value1;
			}
			
		}
		echo '<pre>';
		print_r($menuP);
	}

	dequy($menu, $parent=0);
 ?>