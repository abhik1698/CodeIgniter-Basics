<h2><?= $title;?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update/'.$post['slug']); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title" value="<?= $post['title'];?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor" class="form-control" name="body" rows="10" placeholder="Body goes here"><?= $post['body'];?></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form> 