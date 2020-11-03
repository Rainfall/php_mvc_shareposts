Posts

<?php 
	foreach ($data as $post) { ?>
		<h2><?php echo $post->title; ?></h2>
		<p><a href="/shareposts2/posts/show/<?php echo $post->postId; ?>">Read More</a></p>
	<?php }
?>