
<!-- jQuery -->
<script src="inc/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="inc/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="inc/js/jquery.easing.min.js"></script>
<script src="inc/js/jquery.fittext.js"></script>
<script src="inc/js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="inc/js/creative.js"></script>
<script src="inc/js/jquery.autosize.js"></script>
<script src="sanscript.js/sanscript/sanscript.js"></script>

<!--<script src="inc/js/nicEdit.js"></script>-->

<?php foreach ($js_file as $value) { ?>
    <script src="<?php echo base_js($value); ?>"></script>
<?php } ?>

<?php foreach ($js_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
