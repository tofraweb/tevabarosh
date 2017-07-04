<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left"><?php echo $species[0]->name_he;?></h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo base_url();?>">בית</a></li>
            <li><a href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><?php echo $order->name_he;?></a></li>
            <li><a href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><?php echo $family->name_he;?></a></li>
            <li><a href="<?php echo base_url();?>catalog/getSpeciesListInGenus/<?php echo $genus->id;?>"><?php echo $order->name_he;?></a></li>
            <li class="active"><?php echo $genus->name_he;?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
  <div class="row portfolio-item margin-bottom-50">
        <!-- Carousel -->
        <div class="col-md-7">
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="<?php echo base_url();?>assets/img/main/img11.jpg">
                        <div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="<?php echo base_url();?>assets/img/main/img12.jpg">
                        <div class="carousel-caption">
                            <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                        </div>
                        </div>
                    <div class="item">
                        <img alt="" src="<?php echo base_url();?>assets/img/main/img13.jpg">
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
        <!-- End Carousel -->

        <!-- Content Info -->
        <div class="col-md-5">
          <h2>Portfolio Item Information</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos <a href="#">ducimus qui blanditiis</a> praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
            <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
            <ul class="list-unstyled">
              <li><i class="fa fa-user color-green"></i> Jack Baur</li>
              <li><i class="fa fa-calendar color-green"></i> 14,2003 February</li>
              <li><i class="fa fa-tags color-green"></i> Websites, Google, HTML5/CSS3</li>
            </ul>
            <a href="#" class="btn-u btn-u-large">VISIT THE PROJECT</a>
        </div>
        <!-- End Content Info -->
    </div><!--/row-->

    <div class="tag-box tag-box-v2">
        <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>
    </div>

    <div class="margin-bottom-20 clearfix"></div>

    <!-- Recent Works -->
    <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
        <div class="headline"><h2 class="pull-left">Recent Works</h2>
            <div class="owl-navigation">
                <div class="customNavigation">
                    <a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
                </div>
            </div><!--/navigation-->
        </div>

        <div class="owl-recent-works-v1">
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img1.jpg" alt="">
                    </em>
                    <span>
                        <strong>Happy New Year</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img2.jpg" alt="">
                    </em>
                    <span>
                        <strong>Award Winning Agency</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img3.jpg" alt="">
                    </em>
                    <span>
                        <strong>Wolf Moon Officia</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img4.jpg" alt="">
                    </em>
                    <span>
                        <strong>Food Truck Quinoa Nesciunt</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img5.jpg" alt="">
                    </em>
                    <span>
                        <strong>Happy New Year</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img1.jpg" alt="">
                    </em>
                    <span>
                        <strong>Happy New Year</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img2.jpg" alt="">
                    </em>
                    <span>
                        <strong>Award Winning Agency</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img3.jpg" alt="">
                    </em>
                    <span>
                        <strong>Wolf Moon Officia</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img4.jpg" alt="">
                    </em>
                    <span>
                        <strong>Food Truck Quinoa Nesciunt</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="../assets/img/main/img5.jpg" alt="">
                    </em>
                    <span>
                        <strong>Happy New Year</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Recent Works -->
</div><!--/container-->
<!--=== End Content Part ===-->
