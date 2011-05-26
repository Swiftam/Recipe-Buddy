<h1>List Recipes</h1>

<?php if ( count( $recipes ) == 0 ): ?>
<p>No recipes found.</p>
<?php else: ?>
<ul>
<?php foreach ( $recipes as $recipe ): ?>
  <li><?=$recipe->name;?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<p>[&nbsp;<?=anchor('admin/recipe', 'New Recipe');?>&nbsp;]</p>
