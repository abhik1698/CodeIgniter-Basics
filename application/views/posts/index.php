<h4><?= $title;?></h4>

<?php foreach ($posts as $post) : ?>
	<h2><b><?= $post['title']; ?></b></h2>
	<small class="post-date">Posted on: <?= $post['created_at']; ?></small><br>	
	<h3><?= $post['body']; ?></h3>
	<a class="btn btn-default" href="<?= site_url('./posts/'.$post['slug']);?>">Read more</a>
	<hr>
<?php endforeach; ?> 