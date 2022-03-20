<?php
include '../engine/container.php';

?>
<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>Моя галерея</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script type="text/javascript" src="../engine/scripts/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="../engine/scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../engine/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../engine/scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.photo").fancybox({
				transitionIn: 'elastic',
				transitionOut: 'elastic',
				speedIn: 500,
				speedOut: 500,
				hideOnOverlayClick: false,
				titlePosition: 'over'
			});
		});
	</script>

</head>

<body>
	<div id="main">
		<div class="post_title">
			<h2>Моя галерея</h2>
		</div>
		<div class="gallery">
			<?php foreach ($images as $image) : ?>
				<a rel="gallery" class="photo" href="images/big/<?= $image ?>"><img src="images/small/<?= $image ?>" width="150" height="100" /></a>
			<?php endforeach; ?>

		</div>
	</div>
	<form method='post' enctype="multipart/form-data" style="margin: 0 auto;
									  display: flex;
									  flex-direction: column;
									  width: 350px;
									  margin-top: 20px;
									  color: white;
									  ">
		<input type="file" name="file">
		<input type="submit" value="Add image" style=" width: 150px; margin-top: 20px;">
		<?= $message ?>
	</form>
</body>

</html>