<h4><?= $title;?></h4>

<?php foreach ($posts as $post) : ?>
	<?= '<div href="./posts/'.$post['slug'].'">'?>
	<h2><b><?= '<a href="./posts/'.$post['slug'].'">'.$post['title'].'</a>' ?></b></h2>
	<small class="post-date">Posted on: <?= $post['created_at']; ?></small><br>	
	<h3><?php
		$string = strip_tags($post['body']);
		if (strlen($string) > 250) {
			// truncate string
			$stringCut = substr($string, 0, 250);
			$endPoint = strrpos($stringCut, ' ');

			//if the string doesn't contain any space then it will cut without word basis.
			$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
			$string .= '... <a href="./posts/'.$post['slug'].'">Read More</a>';
		}
		echo $string;
	?></h3>	
	<hr>
<?php endforeach; ?> 