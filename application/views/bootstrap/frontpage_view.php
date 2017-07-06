<!--=== Slider ===-->
<!-- <div class="slider-inner">
		<div id="da-slider" class="da-slider">
				<div class="da-slide"></div>
				<div class="da-slide"></div>
				<div class="da-arrows">
						<span class="da-arrows-prev"></span>
						<span class="da-arrows-next"></span>
				</div>
		</div>
</div><!--/slider--> 
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container content-sm">
		<!-- Recent Works -->
		<div class="headline"><h2>על צמחים וציפורים</h2></div>
		<div class="row margin-bottom-20">
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $bird[0]->picture;?>" alt="">
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $bird[0]->category_id;?>">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $bird[0]->category_id;?>">ציפורים</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $garden[0]->picture;?>" alt="">
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $garden[0]->category_id;?>">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $garden[0]->category_id;?>">צמחי גינה</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $field[0]->picture;?>" alt="">
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $field[0]->category_id;?>" class="btn btn-primary">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $field[0]->category_id;?>" class="btn btn-primary">פרחי שדה</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $tree[0]->picture;?>" alt="">
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $tree[0]->category_id;?>" class="btn btn-primary">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/?cat=<?php echo $tree[0]->category_id;?>" class="btn btn-primary">עצים ושיחים</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
		</div>
		<!-- End Recent Works -->

		<!-- Birds Section -->
		<div class="headline"><h2>לחופש נולדו</h2></div>
		<div class="row margin-bottom-20">
        <?php foreach ($best_birds as $species) {?>
				<div class="col-md-4 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $species->picture;?>" alt=""></a>
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo ' '.$species->name_lat;?></a>
								</div>
								<div class="caption" style="text-align:center">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo $species->name_he;?></a>
											<small>
												<?php if($species->name_hu) echo ' '.$species->name_hu;?>
											</small>
										</h3>
								</div>
						</div>
				</div>
				<?php } ?>
		</div>
		<!-- End Birds Section -->

		<!-- Info Blokcs -->
		<div class="row margin-bottom-30">
				<!-- Welcome Block -->
				<div class="col-md-8 md-margin-bottom-40">
						<div class="headline"><h2>צאו לטייל</h2></div>
						<div class="row">
								<div class="col-sm-4">
										<img class="img-responsive margin-bottom-20" src="<?php echo base_url();?>assets/img/family.jpg" alt="">
								</div>
								<div class="col-sm-8">
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
										<ul class="list-unstyled margin-bottom-20">
												<li><i class="fa fa-check color-green"></i>עושה טוב לנפש</li>
												<li><i class="fa fa-check color-green"></i>בריא לגוף</li>
												<li><i class="fa fa-check color-green"></i>מפתח את הילדים</li>
												<li><i class="fa fa-check color-green"></i>מעניין וכייפי</li>
												<li><i class="fa fa-check color-green"></i>אפשרות לילמוד</li>
										</ul>
								</div>
						</div>

						<blockquote class="hero-unify">
								<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								<small>טומי פרנק</small>
						</blockquote>
				</div><!--/col-md-8-->

				<!-- Latest Shots -->
				<div class="col-md-4">
						<div class="headline"><h2>תמונות אחרונות</h2></div>
						<div id="myCarousel" class="carousel slide carousel-v1">
								<div class="carousel-inner">
									<?php
									$cnt = 0;
									foreach ($latest_photos as $species) {?>
										<div class="item <?php if($cnt == 0) echo 'active';?>">
												<img src="<?php echo base_url();?>assets/img/media/upload/<?php echo $species->picture;?>" alt="">
										</div>
										<?php $cnt++; } ?>
								</div>
								<div class="carousel-arrow">
										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<i class="fa fa-angle-left"></i>
										</a>
										<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<i class="fa fa-angle-right"></i>
										</a>
								</div>
						</div>
				</div><!--/col-md-4-->
		</div>
		<!-- End Info Blokcs -->

		<!-- Succulents Section -->
		<div class="headline"><h2>עולם הסוקולנטים</h2></div>
		<div class="row margin-bottom-20">
			  <?php foreach ($best_succulents as $species) {?>
				<div class="col-md-4 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
											<a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $species->picture;?>" alt=""></a>
										</div>
										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo ' '.$species->name_lat;?></a>
								</div>
								<div class="caption" style="text-align:center">
										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo $species->name_he;?></a>
											<small>
												<?php if($species->name_hu) echo ' '.$species->name_hu;?>
											</small>
										</h3>
								</div>
						</div>
				</div>
				<?php } ?>
		</div>
		<!-- End Succulents Section -->

		<!-- Service Blocks -->
		<div class="row margin-bottom-30">
				<div class="col-md-4">
						<div class="service">
								<i class="fa fa-compress service-icon"></i>
								<div class="desc">
										<h4>Fully Responsive</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
								</div>
						</div>
				</div>
				<div class="col-md-4">
						<div class="service">
								<i class="fa fa-cogs service-icon"></i>
								<div class="desc">
										<h4>HTML5 + CSS3</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
								</div>
						</div>
				</div>
				<div class="col-md-4">
						<div class="service">
								<i class="fa fa-rocket service-icon"></i>
								<div class="desc">
										<h4>Launch Ready</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
								</div>
						</div>
				</div>
		</div>
		<!-- End Service Blokcs -->
</div><!--/container-->


<!-- End Content Part -->
