<h2><?= $title;?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" rows="10" placeholder="Body goes here"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>