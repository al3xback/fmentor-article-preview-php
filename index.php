<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Frontend Mentor | Article Preview Component | PHP</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Article preview component solution." />
	<meta name="keywords" content="Frontend Mentor, Article preview component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'Article preview component');
	define('CARD', array(
		'title' => 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
		'description' => "Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting. I've got some simple tips to help you make any room feel complete.",
		'image' => array('src' => 'images/drawers.jpg', 'alt' => 'Drawers'),
		'author' => array(
			'name' => 'Michelle Appleton',
			'image' => 'images/avatar.jpg',
			'postDate' => '28 Jun 2020'
		),
		'socialLinks' => array(
			'Facebook' => '#',
			'Twitter' => '#',
			'Pinterest' => '#'
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<article class="card">
				<div class="card__image">
					<div class="card__image-inner">
						<img src="<?php echo CARD['image']['src']; ?>" width="280" height="278" alt="<?php echo CARD['image']['alt']; ?>" />
					</div>
				</div>
				<div class="card__content">
					<h2 class="card__title"><?php echo CARD['title']; ?></h2>
					<p class="card__desc"><?php echo CARD['description']; ?></p>
					<div class="card__author">
						<div class="card__author-img-box">
							<img src="<?php echo CARD['author']['image']; ?>" class="card__author-img" width="40" height="40" alt="<?php echo CARD['author']['name']; ?>" />
						</div>
						<div class="card__author-info">
							<h3 class="card__author-name"><?php echo CARD['author']['name']; ?></h3>
							<p class="card__author-post-date"><?php echo CARD['author']['postDate']; ?></p>
						</div>
					</div>
					<div class="card__share">
						<input type="checkbox" name="toggle" id="share-toggle" class="card__share-checkbox" />
						<div class="card__share-box">
							<div class="card__share-action">
								<span class="card__share-action-txt">Share</span>
								<ul class="card__share-action-buttons">
									<?php foreach (CARD['socialLinks'] as $name => $url) : ?>
										<li>
											<a href="<?php echo $url; ?>" title="Share on <?php echo $name; ?>">
												<i class="icon-<?php echo strtolower($name); ?>" aria-hidden="true"></i>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<label for="share-toggle" class="btn btn--icon btn--share-toggle">
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="13">
									<path fill="currentColor" d="M15 6.495L8.766.014V3.88H7.441C3.33 3.88 0 7.039 0 10.936v2.049l.589-.612C2.59 10.294 5.422 9.11 8.39 9.11h.375v3.867L15 6.495z"></path>
								</svg>
							</label>
						</div>
					</div>
				</div>
			</article>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
