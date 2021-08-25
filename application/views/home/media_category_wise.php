<section class="hero bg-cover bg-position py-4" style="background: url(<?php echo base_url('assets/');?>img/hero-banner-3.jpg)">
      <div class="container py-5 index-forward text-white">
        <h1>Media Coverage</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-none mb-0 p-0">
            <li class="breadcrumb-item pl-0"><a href="<?php echo base_url();?>"> <i class="fas fa-home mr-2"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Media Coverage</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="py-5 shadow-sm index-forward">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-8">
            <div class="container-fluid">
                <div class="row">
                  <?php foreach ($media_category_wise as $key): ?>
                  <div class="col-md-12">
                      <div class="card shadow m-2">
                         <div class="card-body">
                          <img src="<?php echo base_url($key->image);?>" width="100%">
                          <h3 class="text-primary pt-3"><?php echo $key->title;?></h3>
                          <p class="text-justify"><?php echo $key-> description; ?></p>
                         </div>
                       </div>
                  </div>
                  <?php endforeach ?>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
           <div class="card">
            <div class="card-header text-white bg-primary">
              Categories
            </div>
             <div class="card-body p-0">
               <ul style="list-style: none;font-weight: bold;">
                <?php foreach ($media_category as $key): ?>
                 <li><a href="<?php echo base_url('home/media_category_wise/'.$key->id);?>" style="text-decoration: none;padding: 5px;" ><?php echo $key->cat_name; ?></a></li>
                 <?php endforeach ?>
               </ul>
             </div>

           </div>
          </div>
        </div>
      </div>
    </section>