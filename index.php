<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('config.php') ?>
	<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
	<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
	<?php $posts = getPublishedPosts(); ?>
	<title> Blog | HOMEPAGE </title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src="js/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d2cd2acddf.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/header.js"></script>
	<script type="text/javascript" src="js/responsiveslides.min.js"></script>
</head>
<body>
	<div class="container">
		<?php include( ROOT_PATH . '/includes/header.php') ?>
		<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<?php foreach ($posts as $post): ?>
				<div class="post">
					<img src="<?php echo BASE_URL . '/images/' . $post['image']; ?>" class="post_image" alt="">
						<?php if (isset($post['topic']['name'])): ?>
							<a 
								href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
								class="btn category">
								<?php echo $post['topic']['name'] ?>
							</a>
						<?php endif ?>
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
    <?php include ('includes/footer.php')?>
</body>
</html>