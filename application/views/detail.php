<?php $this->load->view('partials/header'); ?>
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $book['title']; ?></h1>
            <span class="meta">Posted on <?php echo $book['created_at']; ?></span> <br> 
            <button type="button" class="btn btn-primary btn-sm"><a  href="<?php echo site_url('home/form_edit/'.$book['id']); ?>">Edit</a></button>
            <button type="button" class="btn btn-danger btn-sm"><a href="<?php echo site_url('home/delete_book/'.$book['id']); ?>">Delete</a></button>   
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h5>Price : Rp. <?php echo $book['price']; ?></h5>
            <p><?php echo $book['description']; ?></p>
        </div>
      </div>
    </div>
  </article>

  <hr>

<?php $this->load->view('partials/footer'); ?>

