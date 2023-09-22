<!DOCTYPE HTML>
<html>

<?php
include("./html/head.html");
?>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<?php
		include("./html/header.html");
		?>

		<!-- Banner -->
		<section id="banner" class="major">			
			<div class="inner">
				<?php
				$event = json_decode(file_get_contents('event.json'), true);

				if ($event['active']): ?>
				<header class="major">
					<h1><?php echo $event['title'] ?></h1>
				</header>

				<div class="divider"></div>
				<div class="content">
					<p>
						<?php echo $event['desc'] ?>
					</p>
					<ul class="actions">
						<li><a href="<?php echo $event['link'] ?>" class="button next scrolly">VAI ALL'EVENTO</a></li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one" class="tiles">

				<?php
					$path = './products/';						
					$allFiles = scandir($path);
					$files = array_diff($allFiles, array('.', '..'));
					
					foreach($files as $folder) {
						if (!is_dir($folder)) {							
    						print '
							<article>
								<span class="image">
									<img src="products/'.rawurlencode($folder).'/banner.jpg" alt="" />
								</span>
								<header class="major">
									<h3><a href="products.php?type='.$folder.'" class="link">'.$folder.'</a></h3>					
								</header>
							</article>
							';								
   						}
					}								
				?>					
			</section>
		</div>

		<section id="contatti">
			<div class="inner">
				<!-- Content -->
				<div class="row">
					<!-- Break -->
					<div class="col-4 col-12-medium contatti_item">
						<div class="contatti_wrapper">
							<h3><span class="icon solid alt fa-envelope"></span> Email</h3>
							<div class="contatti_text">
								<a href="#">info@rider-shop.it</a>
							</div>
						</div>
					</div>
					<div class="col-4 col-12-medium contatti_item">
						<div class="contatti_wrapper">
							<h3><span class="icon solid alt fa-phone"></span> Phone</h3>
							<div class="contatti_text">(+39) 389 698 2731</div>
						</div>
					</div>
					<div class="col-4 col-12-medium contatti_item">
						<div class="contatti_wrapper">
							<h3><span class="icon solid alt fa-home"></span> Address</h3>
							<div class="contatti_text">
								Via Comasina 26A, 20843 Verano Brianza MB
							</div>
						</div>
					</div>
				</div>
		</section>

		<?php
		include("./html/footer.html");
		?>

	</div>

	<?php
	include("./html/scripts.html");
	?>

</body>

</html>