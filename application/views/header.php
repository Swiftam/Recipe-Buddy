<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Recipe Friend</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/styles.css" />
</head>
<body>
<div id="body">
	<header>
		<span id="site-title">Recipe Buddy</span>
		<nav>
			<?php if ( $this->uri->segment(1) == 'admin' ): ?>
			<ul>
				<li>
					<?=anchor('admin/recipes', 'Recipes')?>
					<ul>
						<li><?=anchor('admin/recipe', 'New Recipe');?></li>
						<li><?=anchor('admin/recipes', 'List Recipes');?></li>
					</ul>
				</li>
				<li><?=anchor('home/index', 'Back to Site');?></li>
			</ul>
			<?php else: ?>
			<ul>
				<li><?=anchor('home/index', 'Home');?></li>
				<li><?=anchor('home/recipes', 'Recipes');?></li>
				<li><?=anchor('home/ingredients', 'Ingredients');?></li>
				<li><?=anchor('admin/index', 'Administration');?></li>
			</ul>
			<?php endif; ?>
		</nav>
	</header>
