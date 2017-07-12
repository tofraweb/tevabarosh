  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="<?php echo base_url();?>admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/user_management')?>"><i class="fa fa-fw fa-user"></i> Users </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/species_management')?>"><i class="fa fa-fw fa-cubes"></i> Species </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/posts')?>"><i class="fa fa-fw fa-pencil-square-o"></i> Posts </a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#taxonomy"><i class="fa fa-fw fa-tag"></i> Taxonomy <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="taxonomy" class="collapse">
                    <li>
                        <a href="<?php echo site_url('admin/orders')?>"> Order Management </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/family_management')?>"> Family Management </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/genus_management')?>"> Genus Management </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#scripts"><i class="fa fa-fw fa-code"></i> Scripts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="scripts" class="collapse">
                    <li>
                        <a href="<?php echo site_url('admin/update_species_pictures')?>"> Species Pictures Update </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#media"><i class="fa fa-fw fa-picture-o"></i> Media <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="media" class="collapse">
                    <li>
                        <a href="<?php echo site_url('admin/pictures_management')?>"> Picture Management </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/video_management"> Video Management </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/audio_management"> Audio Management </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#properties"><i class="fa fa-fw fa-cog"></i> Properties <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="properties" class="collapse">
                    <li>
                        <a href="<?php echo site_url('admin/plant_properties_management')?>"> Plant Properties </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/bird_properties_management"> Bird Properties </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_SESSION['title']; ?> <small><?php echo $_SESSION['subtitle']; ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Admin Content Section -->
        <div class="row">
            <div class="col-lg-12" style="min-height:500px">
              <div>
          		    <?php echo $output; ?>
              </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
