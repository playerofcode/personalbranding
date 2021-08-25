    <section class="hero bg-cover bg-position py-4" style="background: url(<?php echo base_url('assets/');?>img/hero-banner-1.jpg)">
      <div class="container py-5 index-forward text-white">
        <h1>Achievements</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-none mb-0 p-0">
            <li class="breadcrumb-item pl-0"><a href="<?php echo base_url();?>"> <i class="fas fa-home mr-2"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Achievements</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-12">
            <p class="h6 mb-1 text-uppercase text-primary mb-3"><?php echo $name; ?></p>
            <p class="text-justify"><?php echo $achievements[0]->content;?></p>
          </div>
        </div>
      </div>
    </section>