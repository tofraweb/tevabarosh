
    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <!-- Right Sidebar -->
           <div class="col-md-3 magazine-page">
               <!-- Search Bar -->
               <div class="headline headline-md"><h2>חיפוש</h2></div>
               <form method="get" action="<?php echo base_url();?>catalog">
                 <div class="input-group margin-bottom-40">
                     <input type="text" class="form-control"  name="s" id="s">
                     <span class="input-group-btn">
                         <button class="btn-u" type="button">חפש</button>
                     </span>
                 </div>
               </form>
               <!-- End Search Bar -->

               <!-- Posts -->
               <!-- <div class="posts margin-bottom-40">
                   <div class="headline headline-md"><h2>Recent Posts</h2></div>
                   <dl class="dl-horizontal">
                       <dt><a href="#"><img src="../assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                       <dd>
                           <p><a href="#">Responsive Bootstrap 3 Template placerat idelo alac eratamet.</a></p>
                       </dd>
                   </dl>
                   <dl class="dl-horizontal">
                       <dt><a href="#"><img src="../assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                       <dd>
                           <p><a href="#">100+ Amazing Features Layer Slider, Layer Slider, Icons, 60+ Pages etc.</a></p>
                       </dd>
                   </dl>
                   <dl class="dl-horizontal">
                       <dt><a href="#"><img src="../assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                       <dd>
                           <p><a href="#">Developer Friendly Code imperdiet condime ntumi mperdiet condim.</a></p>
                       </dd>
                   </dl>
               </div> -->
               <!--/posts-->
               <!-- End Posts -->

               <!-- Tabs Widget -->
               <!-- <div class="headline headline-md"><h2>מיון לפי</h2></div> -->
               <?php if($category->kingdom_id == 9 || $cat_type == 9) { ?>
               <div class="tab-v2 margin-bottom-40">
                   <ul class="nav nav-tabs">
                       <li class="active"><a data-toggle="tab" href="#home-1">השקיה <i class="fa fa-tint color-green"></i></a></li>
                       <li><a data-toggle="tab" href="#home-2">שמש <i class="fa fa-sun-o color-green"></i></a></li>
                       <li><a data-toggle="tab" href="#home-3">צבע פרח <i class="fa fa-paint-brush color-green"></i></a></li>
                   </ul>
                   <div class="tab-content">
                       <div id="home-1" class="tab-pane active">
                         <div class="row">
                           <ul class="list-unstyled col-xs-12">
                             <li>
                               <div class="progress rounded-0">
                                 <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/watering/little/1">
                                 <div class="progress-bar progress-bar-watering" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                   <b>מועטה</b>
                                 </div>
                                 </a>
                               </div>
                              </li>
                              <li>
                                <div class="progress rounded-0">
                                  <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/watering/some/1">
                                    <div class="progress-bar progress-bar-watering" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                      <b>בינונית</b>
                                    </div>
                                  </a>
                                </div>
                               </li>
                               <li>
                                 <div class="progress rounded-0">
                                   <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/watering/no-wet/1">
                                   <div class="progress-bar progress-bar-watering" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                     <b>רגיש לעודף השקיה</b>
                                   </div>
                                   </a>
                                 </div>
                               </li>
                               <li>
                                 <div class="progress rounded-0">
                                   <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/watering/no-dry/1">
                                   <div class="progress-bar progress-bar-watering" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                     <b>רגיש ליובש</b>
                                   </div>
                                   </a>
                                 </div>
                               </li>
                               <li>
                                 <div class="progress rounded-0">
                                   <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/watering/lot/1">
                                     <div class="progress-bar progress-bar-watering" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                       <b>מרובה</b>
                                     </div>
                                   </a>
                                 </div>
                                </li>
                           </ul>
                         </div>
                       </div>
                       <div id="home-2" class="tab-pane magazine-sb-categories">
                           <div class="row">
                               <ul class="list-unstyled col-xs-12">
                                 <li>
                                   <div class="progress rounded-0">
                                     <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/light_conditions/full-shade/1">
                                     <div class="progress-bar progress-bar-sunlight" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                       <b>צל מלא</b>
                                     </div>
                                     </a>
                                   </div>
                                  </li>
                                  <li>
                                    <div class="progress rounded-0">
                                      <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/light_conditions/partly-shade/1">
                                        <div class="progress-bar progress-bar-sunlight" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                          <b>צל חלקי</b>
                                        </div>
                                      </a>
                                    </div>
                                   </li>
                                   <li>
                                     <div class="progress rounded-0">
                                       <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/light_conditions/partly-sun/1">
                                         <div class="progress-bar progress-bar-sunlight" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                           <b>שמש חלקית</b>
                                         </div>
                                       </a>
                                     </div>
                                    </li>
                                    <li>
                                      <div class="progress rounded-0">
                                        <a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/light_conditions/full-sun/1">
                                        <div class="progress-bar progress-bar-sunlight" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <b>שמש מלאה</b>
                                        </div>
                                        </a>
                                      </div>
                                    </li>
                               </ul>
                           </div>
                       </div>
                       <div id="home-3" class="tab-pane magazine-sb-categories">
                          <div class="row">
                              <ul class="list-unstyled col-xs-6">
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/red/1"><i class="fa fa-circle color-red"></i>  אדום</a></li>
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/orange/1"><i class="fa fa-circle color-orange"></i>  כתום</a></li>
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/pink/1"><i class="fa fa-circle color-pink"></i>  ורוד</a></li>
                              </ul>
                              <ul class="list-unstyled col-xs-6">
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/white/1"><i class="fa fa-circle color-white"></i>  לבן</a></li>
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/purple/1"><i class="fa fa-circle color-purple"></i>  סגול</a></li>
                                  <li><a href="<?php echo base_url();?>catalog/getSpeciesSorted/<?php echo $catalog; ?>/plant_properties/flower_color/yellow/1"><i class="fa fa-circle color-yellow"></i>  צהוב</a></li>
                              </ul>
                          </div>
                      </div>
                   </div>
               </div>
               <?php } ?>
               <!-- End Tabs Widget -->

               <!-- Photo Stream -->
               <!-- <div class="headline headline-md"><h2>Photo Stream</h2></div>
               <ul class="list-unstyled blog-photos margin-bottom-30">
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/5.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/6.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/8.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/10.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/11.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/1.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/2.jpg"></a></li>
                   <li><a href="#"><img class="hover-effect" alt="" src="<?php echo base_url();?>assets/img/sliders/elastislide/7.jpg"></a></li>
               </ul> -->
               <!-- End Photo Stream -->

               <!-- Blog Tags -->
               <?php if($kingdom == 1 || $cat_type == 1) { ?>
               <div class="headline headline-md"><h4>השקייה <i class="fa fa-tint color-blue"></i></h4></div>
               <ul class="list-unstyled blog-tags margin-bottom-30">
                   <li><a <?php if($sort_value == 'little') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/watering/little/1"><i class="fa fa-tint"></i> מועטה</a></li>
                   <li><a <?php if($sort_value == 'some') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/watering/some/1"><i class="fa fa-tint"></i> בינונית</a></li>
                   <li><a <?php if($sort_value == 'lot') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/watering/lot/1"><i class="fa fa-tint"></i> מרובה</a></li>
                   <li><a <?php if($sort_value == 'no-dry') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/watering/no-dry/1"><i class="fa fa-tint"></i> רגיש ליובש</a></li>
                   <li><a <?php if($sort_value == 'no-wet') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/watering/no-wet/1"><i class="fa fa-tint"></i> רגיש לעודף השקייה</a></li>
               </ul>
               <div class="headline headline-md"><h4>תנאי אור <i class="fa fa-sun-o color-yellow"></i></h4></div>
               <ul class="list-unstyled blog-tags margin-bottom-30">
                 <li><a <?php if($sort_value == 'full-shade') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/light_conditions/full-shade/1"><i class="fa fa-sun-o"></i> צל מלא</a></li>
                 <li><a <?php if($sort_value == 'partly-shade') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/light_conditions/partly-shade/1"><i class="fa fa-sun-o"></i> צל חלקי</a></li>
                 <li><a <?php if($sort_value == 'partly-sun') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/light_conditions/partly-sun/1"><i class="fa fa-sun-o"></i> שמש חלקית</a></li>
                 <li><a <?php if($sort_value == 'full-sun') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/light_conditions/full-sun/1"><i class="fa fa-sun-o"></i> שמש מלאה</a></li>
               </ul>
               <div class="headline headline-md"><h4>צבע הפרח <i class="fa fa-paint-brush color-red"></i></h4></div>               <ul class="list-unstyled blog-tags margin-bottom-30">
                 <li><a <?php if($sort_value == 'red') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/red/1"><i class="fa fa-paint-brush"></i> אדום</a></li>
                 <li><a <?php if($sort_value == 'pink') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/pink/1"><i class="fa fa-paint-brush"></i> ורוד</a></li>
                 <li><a <?php if($sort_value == 'orange') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/orange/1"><i class="fa fa-paint-brush"></i> כתום</a></li>
                 <li><a <?php if($sort_value == 'white') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/white/1"><i class="fa fa-paint-brush"></i> לבן</a></li>
                 <li><a <?php if($sort_value == 'purple') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/purple/1"><i class="fa fa-paint-brush"></i> סגול</a></li>
                 <li><a <?php if($sort_value == 'yellow') { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesSorted/plant_properties/flower_color/yellow/1"><i class="fa fa-paint-brush"></i> צהוב</a></li>
               </ul>
               <?php } ?>
               <!-- End Blog Tags -->
           </div>
           <!-- End Right Sidebar -->

          <div class="col-md-9" style="text-align: center; min-height:700px">

          <!-- Search Results Section -->
          <?php
          if($pageTitle) { ?>
          <div class="headline" style="text-align:right">
            <h2><?php echo $pageTitle; ?>
                <small><?php echo $subTitle; ?></small>
            </h2>
          </div>
          <?php } ?>
          <?php if($search != null){ ?>
          <div class="headline" style="text-align:right">
            <h2>
                  <?php  echo "תוצאות חיפוש עבור ביטוי - ";
                  echo '"'.htmlspecialchars($search).'"'; ?>
            </h2>
          </div>
          <?php } ?>
          <?php
          if($total_items <1){
              echo "<p>לא נמצאו תוצאות עבור הביטוי שחיפשת</p>";
              echo "<p>חפש שוב או  <a href=\"index.php/catalog\">נסה את האטלוג המלא</a></p>";
          }else { ?>
        <?php } ?>
        <!-- End Search Results Section -->

        <!-- Catalog Section -->

          <!-- Top Paginaton Section -->
          <?php if($pagination){
            echo $pagination;
          }?>
          <!-- End Top Paginaton Section -->


    		<div class="row margin-bottom-20">
            <?php
            foreach ($catalog as $species) { ?>
    				<div class="col-md-4 col-sm-6">
    						<div class="thumbnails thumbnail-style thumbnail-kenburn">
    								<div class="thumbnail-img">
    										<div class="overflow-hidden">
    												<a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><img class="img-responsive img-catalog" src="<?php echo base_url();?>assets/img/media/upload/<?php echo $species->picture;?>" alt=""></a>
    										</div>
    										<a class="btn-more hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo ' '.$species->name_lat;?></a>
    								</div>
    								<div class="caption" style="text-align:center">
    										<h3><a class="hover-effect" href="<?php echo base_url();?>index.php/catalog/getSpecies/<?php echo $species->id;?>"><?php echo $species->name_he;?></a></h3>
    								</div>
    						</div>
    				</div>
    				<?php } ?>
            <!-- Bottom Paginaton Section -->
            <?php if($pagination){
              echo '<hr>'.$pagination;
            }?>
            <!-- End Bottom Paginaton Section -->
    		</div>
    		<!-- End Catalog Section -->
          <!-- </div> -->
          <div style="text-align:center">
            <a class="btn-u btn-u-large" href="javascript:history.back()">חזרה</a>
          </div>
        </div>
        <!-- end row -->

        <div class="text-center">
          .
        <div>
