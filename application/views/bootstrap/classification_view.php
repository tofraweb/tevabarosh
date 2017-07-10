
    <!-- Page Content -->
    <div class="container">

          <!-- Right Sidebar -->
          <div class="col-md-3 magazine-page">

            <!-- Blog Tags -->
            <?php if($all_orders) { ?>
             <div class="headline headline-md"><h2><small>סדרות בקטגוריית </small><?php echo $classification_sidebar_header;?></h2></div>
             <ul class="list-unstyled blog-tags margin-bottom-40">
               <?php
               foreach($all_orders as $order) {
                 if($kingdom == $order->kingdom_id) { ?>
                    <li><a <?php if($current_order == $order) { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><i class="fa fa-tags"></i> <?php echo $order->name_he;?></a></li>
                 <?php } } ?>
             </ul>
             <?php } ?>


             <?php if($all_families) { ?>
              <div class="headline headline-md"><h2><small>משפחות בסדרת </small><a href="<?php echo base_url();?>catalog/getSpeciesListInOrder/<?php echo $order->id;?>"><?php echo $order->name_he;?></a></h2></div>
              <ul class="list-unstyled blog-tags margin-bottom-90">
                <?php
                foreach($all_families as $family) {
                  if($order->id == $family->order_id) { ?>
                     <li><a <?php if($current_family == $family) { ?> style="color:#61b714; border-bottom: solid 1px"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><i class="fa fa-tags"></i> <?php echo $family->name_he;?></a></li>
                  <?php } } ?>
              </ul>
              <?php } ?>


            <?php if($all_genus) { ?>
             <div class="headline headline-md"><h3><small>סוגים במשפחת </small><a href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><?php echo $family->name_he;?></a></h3></div>
             <ul class="list-unstyled blog-tags margin-bottom-90">
               <?php
               foreach($all_genus as $genus) {
                 if($family->id == $genus->family_id) { ?>
                    <li><a <?php if($current_genus == $genus) { ?> style="color:#61b714; border-bottom: solid 1px;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesListInGenus/<?php echo $genus->id;?>"><i class="fa fa-tags"></i> <?php echo $genus->name_he;?></a></li>
                 <?php } } ?>
             </ul>
             <?php } ?>
            </div>
            <!-- End Blog Tags -->

          <!-- /.row -->

        <div class="col-md-9" style="text-align: center; min-height:500px">

          <!-- Upper Cassification Section -->
          <div style="text-align:right">
            <!-- Families in Order -->
            <?php if($all_orders) { ?>
            <div class="headline headline-md"><h2><small>סדרת </small><a href=""><?php echo $current_order->name_he;?></a></h2></div>
            <ul class="list-unstyled blog-tags margin-bottom-40">
              <?php if(count($families_in_order) > 1) {
              foreach($families_in_order as $family) { ?>
                   <li><a <?php if($current_family == $family) { ?> style="color:#61b714; font-weight:bold;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesListInFamily/<?php echo $family->id;?>"><i class="fa fa-tags"></i> <?php echo $family->name_he;?></a></li>
                <?php  } } ?>
            </ul>
            <?php } ?>
            <!-- End Families in Order -->

            <!-- Genus in Family -->
            <?php if($all_families) { ?>
            <div class="headline headline-md"><h2><small>משפחת </small><a href=""><?php echo $current_family->name_he;?></a></h2></div>
            <ul class="list-unstyled blog-tags margin-bottom-40">
              <?php if(count($genus_in_family) > 1) {
              foreach($genus_in_family as $genus) { ?>
                   <li><a <?php if($current_genus == $genus) { ?> style="color:#61b714; font-weight:bold;"<?php } ?> href="<?php echo base_url();?>catalog/getSpeciesListInGenus/<?php echo $genus->id;?>"><i class="fa fa-tags"></i> <?php echo $genus->name_he;?></a></li>
                <?php  } } ?>
            </ul>
            <?php } ?>
            <!-- End Genus in Family -->

            <!-- Genus Title -->
            <?php if($all_genus) { ?>
              <div class="headline headline-md"><h2><small>סוג </small><a href=""><?php echo $current_genus->name_he;?></a></h2></div>
            <?php } ?>
            <!-- End Genus Title -->
          </div>
          <!-- End Upper Cassification Section -->

        <!-- Catalog Section -->

          <!-- Top Paginaton Section -->
          <?php if($pagination){
            echo $pagination;
          }?>
          <!-- End Top Paginaton Section -->


    		<div class="row margin-bottom-20">
            <?php foreach ($catalog as $species) { ?>
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
