<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Blog</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
       		</div>
       		<div class="container-fluid">
       			<div class="row wizard-content">
       				<div class="col-sm-12">
       					 <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-warning"><?php echo $responce;?></div>
            <?php endif;?>
       			<div class="card ">
       				<div class="card-header bg-primary text-white">
       					Edit Blog
       				</div>
       				<div class="card-body">
       					<?php foreach ($bloginfo as $key):?>
          <form action="<?php echo base_url('admin/updateblog');?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo set_value('title',$key->title); ?>">
            <?php echo form_error('title');?>
          </div>
          <div class="form-group">
            <label>Image</label><br>
            <img src="<?php echo base_url($key->image); ?>" alt="" style="height: 100px;width:100px;">
            <input type="file" name="image" class="form-control" >
            <?php if(isset($upload_error)){echo $upload_error; } ?>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control" ><?php echo set_value('description',$key->description); ?></textarea>
            <?php echo form_error('description');?>
          </div>
          <input type="hidden" name="id" value="<?php echo $key->id;?>">
          <div class="form-group">
            <input type="submit" name="submitblog" class="btn btn-primary form-control" value="Update">
          </div>
        </form>
      <?php endforeach;?>
       				</div>
       			</div>
       			</div>
       		</div>
       		</div>
</div>