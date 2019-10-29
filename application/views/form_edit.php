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
                <?php echo form_open_multipart(); ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <?php echo form_input('title', $book['title'], 'class="form-control" placeholder="Title"'); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Price</label>
                        <?php echo form_input('price', $book['price'], 'class="form-control" type="number" placeholder="Price"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <?php echo form_input('url', $book['url'], 'class="form-control" placeholder="Book-title"'); ?>
                </div>
                <div class="form-group">
                    <label>Upload Image <span>(max-size : 100mb, max-dimension: 1024x768 )</span></label>
                    <?php echo form_upload('image', $book['image'], 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <?php echo form_textarea('description', $book['description'], 'class="form-control"'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</header>
<?php $this->load->view('partials/footer') ?>