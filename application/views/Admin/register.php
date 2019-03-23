<?php include('header.php'); ?>
<div class="container" style="margin-top: 20px">
<h1>Register Form</h1>
<?php echo form_open('admin/sendemail'); ?>
<div class="row">
 <div class="col-lg-6">
  <div class="form-group">
  <label>Username:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]); ?>
  </div>
 </div>
 <div class="col-lg-6" style="margin-top: 40px">
    <?php echo form_error('username'); ?>
 </div>
</div>
<div class="row">
 <div class="col-lg-6"> 
  <div class="form-group">
  <label>Password:</label>
  <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
  </div>
 </div> 
 <div class="col-lg-6" style="margin-top: 40px">
    <?php echo form_error('password'); ?>
 </div>
</div>
<div class="row"> 
<div class="col-lg-6">
  <div class="form-group">
  <label>First Name:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter FirstName','name'=>'firstname','value'=>set_value('firstname')]); ?>
  </div>
 </div>
 <div class="col-lg-6" style="margin-top: 40px">
  <?php echo form_error('firstname'); ?>
 </div>
</div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
  <label>Last Name:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter LastName','name'=>'lastname','value'=>set_value('lastname')]); ?>
  </div>
 </div>
 <div class="col-lg-6" style="margin-top: 40px">
  <?php echo form_error('lastname'); ?>
 </div>
</div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
  <label>Email:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]); ?>
  </div>
 </div>
 <div class="col-lg-6" style="margin-top: 40px">
  <?php echo form_error('email'); ?>
 </div>
</div>
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'SUBMIT']); ?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'RESET']); ?>
</form>
</div>
<?php include('footer.php'); ?>
