<?php $this->load->view('partials/header'); ?>
<!-- Page Header -->
<?php
if (empty($book['image']))
  $image = base_url() . 'assets/img/post-bg.jpg';
else
  $image = base_url() . 'uploads/' . $book['image'];
?>
<header class="masthead" style="background-image: url('<?php echo $image; ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $book['title']; ?></h1>
          <span class="meta">Posted on <?php echo $book['created_at']; ?></span> <br>
          <a href="<?php echo site_url('home/form_edit/' . $book['id']); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
          <a href="<?php echo site_url('home/delete_book/' . $book['id']); ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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