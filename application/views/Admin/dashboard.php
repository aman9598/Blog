<?php include('header.php'); ?>
<div class="container">
  <div class="row" style="margin-top: 40px">
    <a href="adduser" class="btn btn-lg btn-primary">Add Articles</a>
   </div>
</div> 

  <div class="container" style="margin-top: 40px">
  <?php if($error=$this->session->flashdata('msg')) : 
   $msg_class=$this->session->flashdata('msg_class');
  ?>
  <div class="row">
  <div class="col-lg-6">
  <div class="aler <?= $msg_class ?> ">
   <strong><?php echo $error; ?></strong>
  </div>
  </div>
  </div>
  <?php  endif; ?>  
    <div class="table">
      <table>
      <tr>
      	<th>Article Title</th>
      	<th>Edit</th>
      	<th>Delete</th>
      </tr>
      <?php if(isset($articles) && count($articles)) : ?>
      <?php foreach ($articles as $art): ?>
      <tr>
      	<td><?php echo $art->article_title; ?></td>
      	<td><a href="#" class="btn btn-primary">Edit</a></td>
        <td>
        <?=
          form_open('admin/delarticles'),
          form_hidden('id',$art->id),
          form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
          form_close();
        ?>
      	</td>
      </tr>
      <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="3">Not Data Available</td>
        <tr>
      <?php endif; ?>
      </table> 
</div>
<?php include('footer.php'); ?>
