<!DOCTYPE html>
<html>
<head>
	<title>First Ignite</title>
	<link rel="stylesheet" href='https://bootswatch.com/3/cosmo/bootstrap.min.css'>
	<link rel="stylesheet" href='./assets/css/style.css'>
	<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="./">Cphp</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url();?>">Home</a></li>
					<li><a href="<?= base_url();?>about">About</a></li>
					<li><a href="<?= base_url();?>posts">Latest Posts</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
				<li><a type="submit"  href="<?= base_url();?>posts/create">Create Post</a></li>
				</ul>
			</div>
		</div>		
	</nav>

	<div class="container">