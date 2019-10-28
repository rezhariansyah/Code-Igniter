<?php $this->load->view('partials/header'); ?>
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="site-heading" style="padding-bottom: 50px; padding-top: 100px">
                    <h3>Edit Book</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto mb-5">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $book['title']; ?>" placeholder="Title">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $book['price']; ?>" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $book['url']; ?>" placeholder="Book-title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="3"><?php echo $book['description']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</header>
<?php $this->load->view('partials/footer') ?>