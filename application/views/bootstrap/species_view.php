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
            <div class="headline">
              <h4>גלריית תמונות</h4>
            </div>
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
            <!-- End Carousel -->

            <?php if($category->kingdom_id == 1) { ?>
            <!-- Icons -->
            <div style="text-align:center; margin-top:15px;">
              <?php if($properties->light_conditions) { ?>
                <i class="fa fa-sun-o color-green" title="תנאי אור"></i> <?php echo $properties->light_conditions;?>
                &nbsp;&nbsp;
              <?php } ?>
              <?php if($properties->watering) { ?>
                <i class="fa fa-tint color-green" title="צריכת מיים"></i>  <?php echo $properties->watering;?>
                &nbsp;&nbsp;
              <?php } ?>
              <?php if($properties->flower_color) { ?>
                <i class="fa fa-paint-brush color-green" title="צבע הפרח"></i> <?php echo $properties->flower_color;?>
                &nbsp;&nbsp;
              <?php } ?>
              <?php if($properties->blooming_season) { ?>
                <i class="fa fa-calendar color-green" title="עונת פריחה"></i> <?php echo $properties->blooming_season;?>
              <?php } ?>
            </div>
            <!-- End Icons -->
            <?php } else {?>
              <!-- Icons -->
              <div style="text-align:center; margin-top:15px;">
                <?php if($properties->name_he) { ?>
                  <i class="fa fa fa-safari color-<?php echo $properties->color;?>"></i> <?php echo $properties->name_he;?> <?php echo $properties->rlc_code;?>
                  &nbsp;&nbsp;
                <?php } ?>
              </div>
              <!-- End Icons -->
            <?php } ?>
        </div>


        <!-- Content Info -->
        <div class="col-md-6">

            <!-- Tab v2 -->
             <div class="tab-v2" style="margin-bottom:30px">
                 <ul class="nav nav-tabs">
                     <li class="active"><a href="#taxonomy" data-toggle="tab">טקסונומיה</a></li>
                     <li><a href="#description" data-toggle="tab">תיאור כללי</a></li>
                 </ul>
                 <div class="tab-content">
                     <div class="tab-pane fade in active" id="taxonomy">
                       <!--Basic Table-->
                       <div class="panel margin-bottom-20" style="margin-top:5px">
                           <!-- <div class="panel-heading">
                               <h3 class="panel-title"><i class="fa fa-tasks"></i>טקסונומיה - סיווג הצמח</h3>
                           </div> -->
                           <table class="table table-striped table-hover">
                               <thead>
                                   <tr>
                                       <th style="font-weight: bold;">שם</th>
                                       <th><?php echo $species[0]->name_he;?></th>
                                       <th><?php echo $species[0]->name_lat;?></th>
                                       <th class="hidden-sm"><?php echo $species[0]->name_hu;?></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td style="font-weight: bold;">סוג</td>
                                       <td><a href="<?php echo base_url();?>catalog/getSpeciesListInGenus/<?php echo $genus->id;?>"><b><?php echo $genus->name_he;?></b></a></td>
                                       <td><?php echo $genus->name_lat;?></td>
                                       <td class="hidden-sm"><?php echo $genus->name_hu;?></td>
                                   </tr>
                                   <tr>
                                       <td style="font-weight: bold;">משפחה</td>
                                       <td><a href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><b><?php echo $family->name_he;?></b></a></td>
                                       <td><?php echo $family->name_lat;?></td>
                                       <td class="hidden-sm"><?php echo $family->name_hu;?></td>
                                   </tr>
                                   <tr>
                                       <td style="font-weight: bold;">סדרה</td>
                                       <td><a href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><b><?php echo $order->name_he;?></b></a></td>
                                       <td><?php echo $order->name_lat;?></td>
                                       <td class="hidden-sm"><?php echo $order->name_hu;?></td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       <?php if($logged_in) { ?>
                      <hr>
                       <table class="table" style="margin-top:-30px">
                           <thead>
                               <tr>
                                   <th>מין</th>
                                   <th>תמונות</th>
                                   <th>מאפיינים</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td style="color: #629430; font-weight: bold;">
                                     <small><a target="_blank" href="<?php echo base_url();?>admin/species_management/edit/<?php echo $species[0]->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                   </td>
                                   <td>
                                     <small><a target="_blank" href="<?php echo base_url();?>admin/pictures_management/<?php echo $species[0]->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                   </td>
                                   <?php if($category->kingdom_id == 1) {
                                     if($properties->id) { ?>
                                     <td>
                                       <small><a target="_blank" href="<?php echo base_url();?>admin/plant_properties_management/edit/<?php echo $properties->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                     </td>
                                     <?php } else {?>
                                     <td>
                                       <small><a target="_blank" href="<?php echo base_url();?>admin/plant_properties_management/add"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                     </td>
                                   <?php } } else {
                                     if($properties->id) { ?>
                                     <td>
                                       <small><a target="_blank" href="<?php echo base_url();?>admin/bird_properties_management/edit/<?php echo $properties->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                     </td>
                                     <?php } else {?>
                                     <td>
                                       <small><a target="_blank" href="<?php echo base_url();?>admin/bird_properties_management/add"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></small>
                                     </td>
                                   <?php } } ?>
                               </tr>
                           </tbody>
                       </table>
                       <?php } ?>
                       <!--End Basic Table-->
                     </div>
                     <div class="tab-pane fade in" id="description">
                       <!--Basic Species Description -->
                       <?php if ($properties->description) { ?>
                       <!-- <div class="tag-box tag-box-v2"> -->
                         <div class="headline">
                           <h5>תיאור כללי</h5>
                         </div>
                         <?php echo $properties->description;?>
                       <!-- </div> -->
                       <?php } else { ?>
                       <div class="tag-box tag-box-v2">
                         <div class="headline">
                           <h5>תיאור כללי</h5>
                         </div>
                         <p>אין עדיין תיואר עבור מין זה.</p>
                       </div>
                       <?php } ?>
                       <!--End Basic Species Description -->
                     </div>
                 </div>
             </div>
             <!-- End Tab v1 -->

            <!--Back Button -->
            <div style="text-align:center">
              <a class="btn-u btn-u-large" href="javascript:history.back()">חזרה</a>
            </div>
            <!--End Back Button -->

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
