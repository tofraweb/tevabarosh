	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs">
	    <div class="container">
	        <h1 class="pull-left">בלוג
	          <small>על צמחים וציפורים</small>
	        </h1>
	        <ul class="pull-right breadcrumb">
	            <li><a href="<?php echo base_url();?>">בית</a></li>
	            <li class="active">בלוג</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===--><

  <!--=== Content Part ===-->
    <div class="container content" style="margin-top:-50px">
        <ul class="timeline-v1">
						<?php
						$cnt = 1;
						foreach ($posts as $post) { ?>
            <li <?php if($cnt % 2 == 0) echo 'class="timeline-inverted"';?>>
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/post/<?php echo $post->picture;?>" alt=""/>
                    </div>
                    <div class="timeline-body text-justify">
                        <h3 class="font-light"><a href="<?php echo base_url();?>blog/blog_item/<?php echo $post->id; ?>"><?php echo $post->title_he;?></a></h3>
                        <p><?php echo $post->excerpt;?></p>
                        <a class="btn-u btn-u-sm" href="<?php echo base_url();?>blog/blog_item/<?php echo $post->id; ?>">קרא עוד</a>
                    </div>
                    <div class="timeline-footer">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> <?php echo $post->post_date;?></li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">7 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>239</a>
                    </div>
                </div>
            </li>
						<?php $cnt++; } ?>
            <!-- <li class="timeline-inverted">
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record invert"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img6.jpg" alt=""/>
                    </div>
                    <div class="timeline-body text-justify">
                        <h2 class="font-light"><a href="#">Standards of Font Sizes</a></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn-u btn-u-sm" href="#">Read More</a>
                    </div>
                    <div class="timeline-footer">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> March 16, 2014</li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">12 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>87</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge primarya"><i class="glyphicon glyphicon-record"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <div class="carousel slide carousel-v1" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img7.jpg" alt=""/>
                                    <div class="carousel-caption">
                                        <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img6.jpg" alt=""/>
                                    <div class="carousel-caption">
                                        <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img9.jpg" alt=""/>
                                    <div class="carousel-caption">
                                        <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-arrow">
                                <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a data-slide="next" href="#myCarousel" class="right carousel-control">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-body text-justify">
                        <h2 class="font-light"><a href="#">Make a Type Specimen Book</a></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn-u btn-u-sm" href="#">Read More</a>
                    </div>
                    <div class="timeline-footer">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> November 06, 2014</li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">37 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>121</a>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img3.jpg" alt=""/>
                    </div>
                    <div class="timeline-body text-justify">
                        <h2 class="font-light"><a href="#">Gallery of Type and Scrambled</a></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn-u btn-u-sm" href="#">Read More</a>
                    </div>
                    <div class="timeline-footer">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> November 02, 2014</li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">24 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>34</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record invert"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <img class="img-responsive" src="<?php echo base_url();?>/assets/img/main/img1.jpg" alt=""/>
                    </div>
                    <div class="timeline-body text-justify">
                        <h2 class="font-light"><a href="#">Lorem Ipsum is Simple</a></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn-u btn-u-sm" href="#">Read More</a>
                    </div>
                    <div class="timeline-footer primary">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> February 26, 2014</li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">93 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>355</a>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record invert"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <!-- 16:9 aspect ratio -->
            <!--            <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="http://player.vimeo.com/video/9679622" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                    <div class="timeline-body">
                        <h2 class="font-light"><a href="#">Make it Only Responsive</a></h2>
                        <p>I only make it responsive and remove the empty spaces to be more like Facebook timeline!</p>
                        <a class="btn-u" href="#">Read More</a>
                    </div>
                    <div class="timeline-footer primary">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> November 29, 2013</li>
                            <li><i class="fa fa-comments-o"></i> <a href="#">162 Comments</a></li>
                        </ul>
                        <a class="likes" href="#"><i class="fa fa-heart"></i>798</a>
                    </div>
                </div>
            </li> -->
            <li class="clearfix" style="float: none;"></li>
        </ul>
    </div><!--/container-->
    <!-- End Content Part -->
