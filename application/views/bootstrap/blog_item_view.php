	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs">
	    <div class="container">
	        <h1 class="pull-left">בלוג
	          <small>על צמחים וציפורים</small>
	        </h1>
	        <ul class="pull-right breadcrumb">
	            <li><a href="<?php echo base_url();?>">בית</a></li>
							<li><a href="<?php echo base_url();?>blog//blog_timeline">בלוג</a></li>
	            <li class="active"><?php echo $post->title_he; ?></li>

	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===--><

	<!--=== Blog Posts ===-->
	<div class="bg-color-light">
			<div class="container content-sm">
					<div class="row">
							<!-- Blog Sidebar -->
							<div class="col-md-3">
									<div class="headline-v2"><h2>Latest Posts</h2></div>
									<!-- Latest Posts -->
									<ul class="list-unstyled blog-latest-posts margin-bottom-50">
											<li>
													<h3><a href="#">Wireframe for the news view...</a></h3>
													<small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio leo.</p>
											</li>
											<li>
													<h3><a href="#">It is a long established fact that a reader</a></h3>
													<small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
													<p>Pellentesque efficitur blandit dui, porta cursus velit imperdiet sit amet.</p>
											</li>
											<li>
													<h3><a href="#">The point of using Lorem Ipsum</a></h3>
													<small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
													<p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a. Nunc nec auctor mauris, semper scelerisque nibh.</p>
											</li>
											<li>
													<h3><a href="#">Many desktop publishing packages...</a></h3>
													<small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
													<p>Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
											</li>
									</ul>
									<!-- End Latest Links -->

									<div class="headline-v2"><h2>תגיות</h2></div>
									<!-- Tags v2 -->
									<ul class="list-inline tags-v2 margin-bottom-50">
											<li><a href="#">סוקולנטים</a></li>
											<li><a href="#">פרחי שדה</a></li>
											<li><a href="#">עצים ושיחים</a></li>
											<li><a href="#">ירקות</a></li>
											<li><a href="#">ציפורים</a></li>
									</ul>
									<!-- End Tags v2 -->

									<div class="headline-v2"><h2>Photostream</h2></div>
									<!-- Photostream -->
									<ul class="list-inline blog-photostream margin-bottom-50">
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img22.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 1">
															<span><img class="img-responsive" src="../assets/img/main/img22.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img23.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 2">
															<span><img class="img-responsive" src="../assets/img/main/img23.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img4.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 3">
															<span><img class="img-responsive" src="../assets/img/main/img4.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img9.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 4">
															<span><img class="img-responsive" src="../assets/img/main/img9.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img25.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 5">
															<span><img class="img-responsive" src="../assets/img/main/img25.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img6.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 6">
															<span><img class="img-responsive" src="../assets/img/main/img6.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img20.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 7">
															<span><img class="img-responsive" src="../assets/img/main/img20.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img3.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 8">
															<span><img class="img-responsive" src="../assets/img/main/img3.jpg" alt=""></span>
													</a>
											</li>
											<li>
													<a href="<?php echo base_url();?>assets/img/main/img7.jpg" rel="gallery" class="fancybox img-hover-v2" title="Image 9">
															<span><img class="img-responsive" src="../assets/img/main/img7.jpg" alt=""></span>
													</a>
											</li>
									</ul>
									<!-- End Photostream -->

									<div class="headline-v2"><h2>Newsletter</h2></div>
									<!-- Blog Newsletter -->
									<div class="blog-newsletter">
											<p>Subscribe to our newsletter for good news, sent out every month.</p>
											<div class="input-group">
													<input type="text" class="form-control" placeholder="Email">
													<span class="input-group-btn">
															<button class="btn-u" type="button">Subscribe</button>
													</span>
											</div>
									</div>
									<!-- End Blog Newsletter -->
							</div>
							<!-- End Blog Sidebar -->

							<!-- Blog All Posts -->
							<div class="col-md-9">
									<!-- News v3 -->
									<div class="news-v3 margin-bottom-30">
											<img class="img-responsive full-width" src="<?php echo base_url();?>assets/img/media/upload/post/<?php echo $post->picture;?>" alt="">
											<div class="news-v3-in">
													<ul class="list-inline posted-info">
															<li> <a href="#"><?php echo $author->username; ?></a></li>
															<li> <?php echo $post->post_date; ?></li>
													</ul>
													<h2><?php echo $post->title_he; ?></h2>
													<p><?php echo $post->content; ?></p>
													<ul class="post-shares post-shares-lg">
															<!-- <li>
																	<a href="#">
																			<i class="rounded-x icon-speech"></i>
																			<span>28</span>
																	</a>
															</li>
															<li>
																	<a href="#">
																			<i class="rounded-x icon-share"></i>
																			<span>355</span>
																	</a>
															</li>
															<li>
																	<a href="#">
																			<i class="rounded-x icon-heart"></i>
																			<span>107</span>
																	</a>
															</li> -->
															<?php if ($logged_in) { ?>
															<li>
																	<a href="<?php echo base_url();?>admin/posts/edit/<?php echo $post->id;?>" target="_blank">
																			<i class="rounded-x icon-pencil"></i>
																			<span>ערוך</span>
																	</a>
															</li>
															<?php } ?>
													</ul>
											</div>
									</div>
									<!-- End News v3 -->

									<!-- Blog Post Author -->
									<div class="blog-author margin-bottom-30">
											<img src="<?php echo base_url();?>assets/img/media/upload/user/<?php echo $author->picture;?>" alt="">
											<div class="blog-author-desc">
													<div class="overflow-h">
															<h4><?php echo $author->fullname; ?></h4>
															<ul class="list-inline">
																	<li><a href="https://www.facebook.com/tomi.frank.92"><i class="fa fa-facebook"></i></a></li>
																	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
															</ul>
													</div>
													<p><?php echo $author->intro; ?></p>
											</div>
									</div>
									<!-- End Blog Post Author -->

									<!-- News v2 -->
									<div class="row news-v2 margin-bottom-50">
											<div class="col-sm-6 sm-margin-bottom-30">
													<div class="news-v2-badge">
															<img class="img-responsive" src="<?php echo base_url();?>assets/img/main/img18.jpg" alt="">
															<p>
																	<span>23</span>
																	<small>Jan</small>
															</p>
													</div>
													<div class="news-v2-desc">
															<h3><a href="#">Reading Some Books</a></h3>
															<small>By Admin | California, US | In <a href="#">Art</a></small>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
											</div>
											<div class="col-sm-6">
													<div class="news-v2-badge">
															<img class="img-responsive" src="<?php echo base_url();?>assets/img/main/img16.jpg" alt="">
															<p>
																	<span>22</span>
																	<small>Jan</small>
															</p>
													</div>
													<div class="news-v2-desc">
															<h3><a href="#">Interior Design</a></h3>
															<small>By Admin | California, US | In <a href="#">Art</a></small>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
											</div>
									</div>
									<!-- End News v2 -->

									<hr>

									<h2 class="margin-bottom-20">Comments</h2>
									<!-- Blog Comments -->
									<div class="row blog-comments margin-bottom-30">
											<div class="col-sm-2 sm-margin-bottom-40">
													<img src="<?php echo base_url();?>assets/img/team/img1-sm.jpg" alt="">
											</div>
											<div class="col-sm-10">
													<div class="comments-itself">
															<h4>
																	Jalen Davenport
																	<span>5 hours ago / <a href="#">Reply</a></span>
															</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
													</div>
											</div>
									</div>
									<!-- End Blog Comments -->

									<!-- Blog Comments -->
									<div class="row blog-comments blog-comments-reply margin-bottom-30">
											<div class="col-sm-2 sm-margin-bottom-40">
													<img src="<?php echo base_url();?>assets/img/team/img3-sm.jpg" alt="">
											</div>
											<div class="col-sm-10">
													<div class="comments-itself">
															<h4>
																	Jorny Alnordussen
																	<span>6 hours ago / <a href="#">Reply</a></span>
															</h4>
															<p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
													</div>
											</div>
									</div>
									<!-- End Blog Comments -->

									<!-- Blog Comments -->
									<div class="row blog-comments margin-bottom-50">
											<div class="col-sm-2 sm-margin-bottom-40">
													<img src="<?php echo base_url();?>assets/img/team/img5-sm.jpg" alt="">
											</div>
											<div class="col-sm-10">
													<div class="comments-itself">
															<h4>
																	Marcus Farrell
																	<span>7 hours ago / <a href="#">Reply</a></span>
															</h4>
															<p>Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
													</div>
											</div>
									</div>
									<!-- End Blog Comments -->

									<hr>

									<h2 class="margin-bottom-20">Post a Comment</h2>
									<!-- Form -->
									<form action="<?php echo base_url();?>assets/php/sky-forms-pro/demo-comment-process.php" method="post" id="sky-form3" class="sky-form comment-style">
											<fieldset>
													<div class="row sky-space-30">
															<div class="col-md-6">
																	<div>
																			<input type="text" name="name" id="name" placeholder="Name" class="form-control">
																	</div>
															</div>
															<div class="col-md-6">
																	<div>
																			<input type="text" name="email" id="email" placeholder="Email" class="form-control">
																	</div>
															</div>
													</div>

													<div class="sky-space-30">
															<div>
																	<textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control"></textarea>
															</div>
													</div>

													<p><button type="submit" class="btn-u">Submit</button></p>
											</fieldset>

											<div class="message">
													<i class="rounded-x fa fa-check"></i>
													<p>Your comment was successfully posted!</p>
											</div>
									</form>
									<!-- End Form -->
							</div>
							<!-- End Blog All Posts -->
					</div>
			</div><!--/end container-->
	</div>
	<!--=== End Blog Posts ===-->
