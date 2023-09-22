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

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one" class="tiles">
				<?php				
					$type = $_GET['type'];
					$path = './products/'.rawurldecode($type);					
					$allImages = glob($path.'/*.jpg', GLOB_BRACE);
					$images = array_diff($allImages, array($path.'/banner.jpg'));
					if(count($images) < 1) header("location: /index.php");
					foreach($images as $image){				
						print '<article><span class="image"><img src="'.rawurlencode($image).'" alt="" /></span></article>';								
   					};			
				?>				
			</section>
		</div>

		<?php
		include("./html/footer.html");
		?>

	</div>

	<?php
	include("./html/scripts.html");
	?>

</body>

</html>