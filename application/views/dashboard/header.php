<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $title ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.default.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.navyblue.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" type="text/css" />
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<script type="text/javascript">
	base_url = "<?php echo base_url() ?>";
</script>

<body >
	<div class="leftpanel">
    <h5 class="header">Cross Border Vehicle Transport</h5>
    </div>
    <div class="rightpanel" style="margin-left:260px;">
    <?php if ($this->session->logged_in) { ?>
    	<a href="<?=base_url()?>user/logout" class="btn-danger logout">Logout</a>
    <?php } ?>