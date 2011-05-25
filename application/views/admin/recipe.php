<h1>New Recipe</h1>

<?=validation_errors();?>

<?=form_open('admin/recipe');?>
<p>
  <?=form_label('Title:', 'name');?>
  <?=form_input(array('name' => 'name', 'id' => 'name', 'value' => $name) );?>
</p>

<p>
  <?=form_label('Description:', 'description');?>
  <?=form_input(array('name' => 'description', 'id' => 'description', 'value' => $description) );?>
</p>

<p>
  <?=form_submit('dorecipe', 'Save');?>
</p>
<?=form_close();?>
