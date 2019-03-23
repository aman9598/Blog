<?php include('header.php'); ?>
<div class="container" style="margin-top: 20px">
  <h1>Add Articles</h1>
<?php echo form_open('admin/userValidation'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
<div class="row">
 <div class="col-lg-6">
  <div class="form-group">
	<label>Article Title:</label>
	<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Title','name'=>'article_title','value'=>set_value('article_title')]); ?>
  </div>
 </div>
  <div class="col-lg-6" style="margin-top: 40px">
    <?php echo form_error('article_title'); ?>
  </div>
</div> 
<div class="row">
 <div class="col-lg-6"> 
  <div class="form-group">
	<label>Article Body:</label>
	<?php echo form_textarea(['class'=>'form-control','type'=>'text','placeholder'=>'Enter Article Body','name'=>'article_body','value'=>set_value('body')]); ?>
  </div>
 </div> 
  <div class="col-lg-6" style="margin-top: 40px"> 
  	<?php echo form_error('article_body'); ?>
  </div>
</div>
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'SUBMIT']); ?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'RESET']); ?>
</form>
</div>
<?php include('footer.php'); ?>