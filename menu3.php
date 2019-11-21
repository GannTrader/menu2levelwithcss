<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu đa cấp (3 cấp)</title>
	<style>
		li {
			list-style-type: none;
			float: left;
			background: black;
			display: block;
			padding: 15px;
			border: 1px solid white;
			position: relative;
		}
		a {
			color: white;
			text-decoration: none;
		}
		li ul {
			display: none;
			position: absolute;
			top: 50px;
		}
		li li {
			float: none;
		}
		li:hover ul {
			display: block;
		}
	</style>
</head>
<body>
	<div>
		<ul>
			<li><a href="">Menu 1</a></li>
			<li><a href="">Menu 2</a>
				<ul>
					<li><a href="">Menu 2.1</a></li>
					<li><a href="">Menu 2.2</a></li>
					<li><a href="">Menu 2.3</a>
						<ul>
							<li><a href="">Menu 2.3.1</a></li>
							<li><a href="">Menu 2.3.2</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="">Menu 3</a></li>
			<li><a href="">Menu 4</a></li>
		</ul>
	</div>
</body>
</html>