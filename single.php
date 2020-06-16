



<!-- Using php grab the current posts  category via the post_id-->
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
	console.log('\n');										
	console.log('Post Categories:\n');			
	for (i = 0; i < aLngth; i++) {
		if (arrayDefualt[i].match(/-+/g) ) {							
			console.log("["+i+"] = "+arrayDefualt[i]);
			catArray.push(arrayDefualt[i].split('-')[1]);			
		}		
	}
	console.log('\n');		
	console.log('Filtered Post Categories:\n');
	for (i = 0; i < catArray.length; i++) {
		console.log("["+i+"] = "+catArray[i] );
	}
	console.log('\n');	
</script>
