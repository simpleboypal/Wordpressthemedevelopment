<?php
/* Template Name: Homepage */

get_header();
?>	<!-- #main -->

	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="<?php echo get_template_directory_uri(); ?>/assests/images/family-large.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>It’s never easy...<br> When it comes to family.</h1>
					<p>
						But we can set<br> everything straight.
					</p>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<h2>Testimonials</h2>
					<p>
						&ldquo;Aenean ullamcorper purus vitae nisl tristique sollicitudin. Quisque vestibulum, erat ornare.&rdquo;
					</p>
					<span>-John Doe and Jane Doe-</span>
				</div>
				<h1><?php the_title();  ?></h1>
				<p>
					<?php the_content();  ?>
				</p>
			</div>
		</div>
		<div class="featured">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo get_template_directory_uri(); ?>/assests/images/meeting.jpg" alt="Img" height="130" width="197">
						</div>
					</div><?php
								$post_7 = get_post( 29 ); 
								$title = $post_7->post_title;
								$content = $post_7->post_content;
								$link =  get_permalink(29) ;
								$image = get_the_post_thumbnail_url(29, 'full'); 
							?>
					<p>
						<b><?php echo $title; ?></b><?php echo $content ?>
					</p>
					<a href="<?php echo $link ?>" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $image; ?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>get to know us more</b> Just browse through all our Free Website Templates and ﬁnd what you’re looking for.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo get_template_directory_uri(); ?>/assests/images/smile.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>what we offer</b> Join the discussion on our forum and meet other people in the community.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo get_template_directory_uri(); ?>/assests/images/family-small.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>get in touch with us</b> And we love the challenge of doing something diferent and something special.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>

<?php
get_footer();
?>