
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/admin/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url();?>assets/admin/js/plugins/morris/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/morris/morris-data.js"></script>

<?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

</body>

</html>
