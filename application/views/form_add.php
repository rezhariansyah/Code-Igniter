<?php $this->load->view('partials/header'); ?>
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="site-heading" style="padding-bottom: 50px; padding-top: 100px">
                    <h3>Add Book</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto mb-5">
                <?php echo form_open_multipart(); ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <?php echo form_input('title',null,'class="form-control" placeholder="Title"'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <?php echo form_input('price',null,'class="form-control" type="number" placeholder="Price"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <?php echo form_input('url',null,'class="form-control" placeholder="Book-title"'); ?>
                    </div>
                    <div class="form-group">
                        <label>Upload Image <span>(max-size : 100mb, max-dimension: 1024x768 )</span></label>
                        <?php echo form_upload('image',null,'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <?php echo form_textarea('description',null,'class="form-control"'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</header>
<?php $this->load->view('partials/footer') ?>