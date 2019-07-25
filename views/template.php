<html>
	<head>
		<title>Meu site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<header>
			<h1>Meu sistema de Funcionarios</h1>
		</header>
		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
			Todos os direitos reservados
		</footer>
	</body>
</html>