<h4><?= $title;?></h4>
<button class="btn btn-default" onclick="location.href='./posts/create'" style="float: right;">Create Posts</button>
<?php foreach ($posts as $post) : ?>
	<h2><b><?= $post['title']; ?></b></h2>
	<small class="post-date">Posted on: <?= $post['created_at']; ?></small><br>	
	<h3><?= $post['body']; ?>...</h3>
	<a class="btn btn-default" href="<?= site_url('./posts/'.$post['slug']);?>">Read more</a>
<?php endforeach; ?> 