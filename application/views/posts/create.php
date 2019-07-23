<h2><?= $title;?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Add title"
    oninput="document.getElementById('slug').value=convertToSlug(this.value);"
    onkeypress="document.getElementById('slug').style.width = ((document.getElementById('slug').value.length + 1) * 8) + 'px';">    
    
    <small><label>http://localhost/Cphp/posts/</label><input type="text" id="slug" name="slug" 
    	onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';"></small>    
  </div>
  
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor" class="form-control" name="body" rows="10" placeholder="Body goes here"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Create</button>
</form>