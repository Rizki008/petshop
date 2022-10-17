<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="#">Ulasan</a></li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>


<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->

        <div class="row">
            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab3">Ulasan </a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in active">
                            <div class="row">
                                <!-- Rating -->
                                <?php $no = 1;
                                foreach ($pesanan_detail as $key => $value) { ?>
                                    <!-- Review Form -->
                                    <div class="col-md-12">
                                        <div id="review-form">
                                            <form class="review-form" action="<?= base_url('pesanan_saya/insert_riview') ?>" method="POST">
                                                <textarea class="input" name="review" id="review" placeholder="Your Review"></textarea>
                                                <input name="id_produk" class="form-control" type="hidden" value="<?= $value->id_produk ?>" hidden></input>
                                                <div class="input-rating">
                                                    <!-- <span>Your Rating: </span> -->
                                                    <!-- <div class="stars">
                                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                    </div> -->
                                                </div>
                                                <button type="submit" class="primary-btn">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->