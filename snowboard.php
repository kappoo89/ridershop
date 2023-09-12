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
					$path = './images/snowboard/*.jpg';					
					$images = glob($path, GLOB_BRACE);
					foreach($images as $image){					
						print '<article><span class="image"><img src="'.$image.'" alt="" /></span></article>';								
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