<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left"><?php echo $species[0]->name_he;?>
          <small><?php echo $species[0]->name_lat;?></small>
        </h1>
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
        <div class="col-md-6">
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                  <?php
                  if($pictures){
                    $cnt = 0;
                  foreach ($pictures as $picture) {?>
                    <div class="item <?php if($cnt == 0) echo 'active';?>">
                        <img alt="" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $picture->filename;?>">
                        <!-- <div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div> -->
                    </div>
                  <?php $cnt++; } } else { ?>
                    <img alt="" src="<?php echo base_url();?>assets/img/no-image.jpg">
                  <?php } ?>
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
            <!-- Icons -->
            <div style="text-align:center; margin-top:15px;">
              <i class="fa fa-sun-o color-green"></i> צל מלה, צל חלקי
              &nbsp;&nbsp;
              <i class="fa fa-tint color-green"></i>  השקייה מועטה
              &nbsp;&nbsp;
              <i class="fa fa-paint-brush color-green"></i> לבן, צהוב, ורוד
              &nbsp;&nbsp;
              <i class="fa fa-calendar color-green"></i> אביב, קיץ
            </div>
            <!-- End Icons -->
        </div>
        <!-- End Carousel -->

        <!-- Content Info -->
        <div class="col-md-6">
            <!--Basic Table-->
            <div class="panel panel-green margin-bottom-40">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-tasks"></i>טקסונומיה - סיווג הצמח</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: #629430; font-weight: bold;">שם
                              <?php if($logged_in){ ?>
                                <small><a target="_blank" href="<?php echo base_url();?>admin/species_management/edit/<?php echo $species[0]->id;?>/?id=<?php echo $species[0]->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                              <?php } ?>
                            </th>
                            <th><?php echo $species[0]->name_he;?></th>
                            <th><?php echo $species[0]->name_lat;?></th>
                            <th class="hidden-sm"><?php echo $species[0]->name_hu;?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: #629430; font-weight: bold;">סוג</td>
                            <td><a href="<?php echo base_url();?>catalog/getSpeciesListInGenus/<?php echo $genus->id;?>"><?php echo $genus->name_he;?></a></td>
                            <td><?php echo $genus->name_lat;?></td>
                            <td class="hidden-sm"><?php echo $genus->name_hu;?></td>
                        </tr>
                        <tr>
                            <td style="color: #629430; font-weight: bold;">משפחה</td>
                            <td><a href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><?php echo $family->name_he;?></a></td>
                            <td><?php echo $family->name_lat;?></td>
                            <td class="hidden-sm"><?php echo $family->name_hu;?></td>
                        </tr>
                        <tr>
                            <td style="color: #629430; font-weight: bold;">סדרה</td>
                            <td><a href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><?php echo $order->name_he;?></a></td>
                            <td><?php echo $order->name_lat;?></td>
                            <td class="hidden-sm"><?php echo $order->name_hu;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--End Basic Table-->
            <div class="tag-box tag-box-v2">
                <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>
            </div>
            <div style="text-align:center">
              <a class="btn-u btn-u-large" href="javascript:history.back()">חזרה</a>
            </div>
        </div>
        <!-- End Content Info -->
    </div><!--/row-->

    <div class="margin-bottom-20 clearfix"></div>


    <!-- Same Family Carousel -->
    <?php if($species_in_family) { ?>
      <div class="headline"><h2>עוד מינים ממשפחת <a href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><?php echo $family->name_he;?></a></h2></div>
      <div class="owl-carousel-v2 margin-bottom-40">
          <div class="owl-slider-v4">
            <?php foreach($species_in_family as $sp) { ?>
              <div class="item">
                <a class="fancybox img-hover-v1" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $sp->id;?>">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $sp->picture;?>" alt="">
                </a>
                <h4 style="margin-top:12px">
                  <a href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $sp->id;?>"><?php echo $sp->name_he;?></a>
                  <small>
                    <?php echo $sp->name_lat;?>
                  </small>
                </h4>
              </div>
            <?php } ?>
          </div>
      </div>
    <?php } ?>
    <!-- End Same Family Carousel -->

    <!-- Same Order Carousel -->
    <?php if($species_in_order) { ?>
      <div class="headline"><h2>עוד מינים מסדרת <a href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><?php echo $order->name_he;?></a></h2></div>
      <div class="owl-carousel-v5 margin-bottom-40">
          <div class="owl-slider-v2">
            <?php foreach($species_in_order as $sp) { ?>
              <div class="item">
                <a  class="fancybox img-hover-v1" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $sp->id;?>">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $sp->picture;?>" alt="">
                </a>
              </div>
            <?php } ?>
          </div>
      </div>
    <?php } ?>
    <!-- End Same Order Carousel -->

</div><!--/container-->
<!--=== End Content Part ===-->
