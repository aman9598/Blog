<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/css/bootstrapmin.css") ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
   if($this->session->userdata('id'))
   {
?>
<li><a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">Logout</a></li>
  <?php
   }
   ?>
</nav>