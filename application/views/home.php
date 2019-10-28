<?php $this->load->view('partials/header'); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="site-heading" style="padding-bottom: 50px;">
            <h1>Book Management <br> Code Igniter</h1>
            <span class="subheading">So many books, so little time.</span>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-5 mx-auto" style="padding-bottom: 80px;">
            <form>
                <div class="form-group">
                        <input type="text" name="find" class="form-control" placeholder="Book title...">
                    </div>
                </div>
            </form>
        </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

      <?php if($count == 0) {
        echo "<div class='alert alert-primary' role='alert'>
                Buku tidak tersedia
              </div>";
      } ?>

      <?php foreach ($bookList as $key => $book): ?>
        <div class="post-preview">
          <a href="<?php echo site_url('home/detail/').$book['url']; ?>">
            <h2 class="post-title">
              <?php echo $book['title']; ?>
            </h2>
          </a>
          <p class="post-meta">Posted by
            <?php echo $book['created_at']; ?> </p>
            <p class="post-meta">
              <a  href="<?php echo site_url('home/form_edit/'.$book['id']); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
              <a href="<?php echo site_url('home/delete_book/'.$book['id']); ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
            </p>
        </div>
        <hr>
      <?php endforeach; ?>
        
      </div>
    </div>
  </div>
  <hr>

<?php $this->load->view('partials/footer'); ?>

