<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Categories</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li class="active">Product name goes here</li>
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
            <?php foreach ($profil as $key => $value) { ?>
                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"><?= $value->nama ?></h2>
                        <div>
                            <div class="product-rating">
                            </div>
                            <!-- <a class="review-link" href="#">10 Review(s) | Add your review</a> -->
                        </div>
                        <div>
                            <h3 class="product-price">Email : <?= $value->email ?> </h3>
                            <span class="product-available">No HP <?= $value->no_tlpn ?></span>
                        </div>
                        <p><?= $value->alamat ?></p>
                        <ul class="product-links">
                            <li>Kode Post:</li>
                            <li><a href="#"><?= $value->kode_post ?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Product details -->
            <?php } ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->