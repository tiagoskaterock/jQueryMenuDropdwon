<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Dropdown</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	.menu {
  		height: 50px;
  		background: black;
  	}
  	ul {
  		list-style: none;
  		display: flex;
  		align-items: center;
  		justify-content: center;
  		padding-top: 10px;
  	}
  	li {
  		display: inline-block;
  		color: white;
  		margin-right: 20px;
  	}
  	a {
  		text-decoration: none;
  		color: white;
  		background: black;
  	}
  	a:hover {
  		text-decoration: none;
  		color: #f33;
  	}
  	.menu1 {
  		/*height: 50px;*/
  	}
  	.menu2 {
  		position: absolute;
  		background: black;
  		padding-top: 15px;
  		display: none;
  		border-right: 10px solid black;
  		border-left: 10px solid black;
  		border-bottom: 10px solid black;
  	}
  </style>
</head>
<body>

	<div class="menu">
		<ul>
			<li>
					<div class="menu1"><a href="#">Home</a></div>
					<div class="menu2">
						<div><a href="#">Home 1</a></div>
						<div><a href="#">Home 2</a></div>
					</div>
			</li>
			<li>
				<div class="menu1"><a href="#">Sobre</a></div>
					<div class="menu2">
						<div><a href="#">Sobre 1</a></div>
						<div><a href="#">Sobre 2</a></div>
					</div>
			</li>
			<li>
				<div class="menu1"><a href="#">Galeria</a></div>
					<div class="menu2">
						<div><a href="#">Galeria 1</a></div>
						<div><a href="#">Galeria 2</a></div>
					</div>
			</li>
			<li>
				<div class="menu1"><a href="#">Serviços</a></div>
					<div class="menu2">
						<div><a href="#">Serviços 1</a></div>
						<div><a href="#">Serviços 2</a></div>
					</div>
			</li>
			<li>
				<div class="menu1"><a href="#">Blog</a></div>
					<div class="menu2">
						<div><a href="#">Blog 1</a></div>
						<div><a href="#">Blog 2</a></div>
					</div>
			</li>
			<li>
				<div class="menu1"><a href="#">Contato</a></div>
					<div class="menu2">
						<div><a href="#">Contato 1</a></div>
						<div><a href="#">Contato 2</a></div>
					</div>
			</li>
		</ul>
	</div>

	<script>
		$('li').hover(function(){
			$(this).find('.menu2').slideDown('fast');
		}, function(){
			$(this).find('.menu2').slideUp();			
		});
	</script>
</body>
</html>