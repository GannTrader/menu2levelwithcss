<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style>
		ul li {
			display: inline-table;
			background: black;
			padding: 5px;
		}
		ul ul {
			display: none;
			position: absolute;
		}
		ul ul li {
			display: block;
			margin-left: -45px;
		}
		ul li:hover ul {
			display: block;
		}
		a {
			color: white;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div>
		<ul>
			<li><a href="">Menu 1</a></li>
			<li><a href="">Menu 2 <i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="">Menu 2.1</a></li>
					<li><a href="">Menu 2.2</a></li>
				</ul>
			</li>
			<li><a href="">Menu 3 <i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="">Menu 3.1</a></li>
					<li><a href="">Menu 3.2</a></li>
					<li><a href="">Menu 3.3</a></li>				
					<li><a href="">Menu 3.4</a></li>
				</ul>
			</li>
			<li><a href="">Menu 4</a></li>
		</ul>
	</div>
</body>
</html>