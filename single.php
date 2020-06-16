<!-- 
	Creating classes with "categories-" pre-appended by getting the category of the 
	current post.
-->

<?php if (have_posts()) : while (have_posts()) : the_post(); 
	$categories = get_the_category(get_the_ID()); 					
?>
	<article class="post <?php  foreach ($categories as $cd ) { ?>catergory-<?	echo $cd->cat_name; ?> <? } ?>" id="post-<?php the_ID(); ?>">
	</article>
<?php endwhile; endif; ?>
				
<script>
	var arrayDefualt = document.querySelector("article").classList;
	var aLngth = arrayDefualt.length;
	var catArray = [];
			
	for (i = 0; i < aLngth; i++) {
		if (arrayDefualt[i].match(/-+/g) ) {								
			catArray.push(arrayDefualt[i].split('-')[1]);			
		}		
	}
</script>
