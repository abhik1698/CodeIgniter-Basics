<h1><?= $post['title'];?></h1>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small><br>	
<div class="post-body">
	<?= $post['body'];?>
</div>

<hr>

<a href="./edit/<?= $post['slug']; ?>" class="btn btn-default">Edit</a><br><br>

<?= form_open('/posts/delete/'.$post['id']) ?>
	<input class="btn btn-danger" value="Delete Article" type="submit" onclick="return confirm('Are you sure?')">
</form>	


