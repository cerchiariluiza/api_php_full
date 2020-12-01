<?php
	$sql = mysqli_query($conecta, "SELECT * FROM imoveis") or die(mysqli_error($conn) );
	while ($linha = mysqli_fetch_assoc($sql)){
?>

<div class="item-wrapper">
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane  product-grid">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
													<img src="<?php echo $linha["imagempequena"]?>">
                                                    
                                                    <span class="trending-rating-green">7</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                     <h4><a href="single-listing-one.html"><?php echo $linha["titulo"]?></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">3 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                             <p><?php echo $linha["endereco"]?></p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                             <p><?php echo $linha["telefone"]?></p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.laresorta.com</p>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg pink"><i class="icofont-hotel"></i></span>
                                                            <p><a href="#">Hotel</a></p>

                                                        </div>
                                                        <div class="trend-right float-right">
                                                            <div class="trend-open"><i class="ion-clock"></i>
                                                                Open <p>till 11.00pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
                                                    <img src="images/category/places/cafe.jpg" alt="#">
                                                    <span class="trending-rating-pink">9</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                    <h4><a href="single-listing-two.html">Cafe Intermezzo</a></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">5 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                            <p>2721 Andy Street,ELLSWORTH,USA</p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                            <p>+605-344-1198</p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.cafemezzo.com</p>
                                                        </li>

                                                    </ul>

                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg green"><i class="icofont-tea"></i></span>
                                                            <p><a href="#">Cafe</a></p>
                                                        </div>

                                                        <div class="trend-right float-right">
                                                            <div class="trend-closed">
                                                                Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
                                                    <img src="images/category/places/place-5.jpg" alt="#">
                                                    <span class="trending-rating-orange">6.5</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                    <h4><a href="single-listing-one.html">Lagoon Theme Park</a></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">3 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                            <p>+44 20 7336 8898</p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.burgerandlobster.com</p>
                                                        </li>

                                                    </ul>

                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg red"><i class="icofont-travelling"></i></span>
                                                            <p><a href="#">Travel</a></p>
                                                        </div>
                                                        <div class="trend-right float-right">
                                                            <div class="trend-open"><i class="ion-clock"></i>
                                                                Open <p>till 10.00pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
                                                    <img src="images/category/places/place-4.jpg" alt="#">
                                                    <span class="trending-rating-pink">8</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                    <h4><a href="single-listing-one.html">The Katikies</a></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">3 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                            <p>+44 20 7336 8898</p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.burgerandlobster.com</p>
                                                        </li>

                                                    </ul>

                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg pink"><i class="icofont-hotel"></i></span>
                                                            <p><a href="#">Hotel</a></p>

                                                        </div>
                                                        <div class="trend-right float-right">
                                                            <div class="trend-open"><i class="ion-clock"></i>
                                                                Open <p>till 10.00pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
                                                    <img src="images/category/places/place-9.jpg" alt="#">
                                                    <span class="trending-rating-green">6.5</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                    <h4><a href="single-listing-two.html">Genji Restaurant</a></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">3 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                            <p>+44 20 7336 8898</p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.burgerandlobster.com</p>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg green"><i class="icofont-fast-food"></i></span>
                                                            <p><a href="#">Restaurant</a></p>
                                                        </div>
                                                        <div class="trend-right float-right">
                                                            <div class="trend-open"><i class="ion-clock"></i>
                                                                Open <p>till 10.00pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="trending-place-item">
                                                <div class="trending-img">
                                                    <img src="images/category/places/place-11.jpg" alt="#">
                                                    <span class="trending-rating-green">8</span>
                                                    <span class="save-btn"><i class="icofont-heart"></i></span>
                                                </div>
                                                <div class="trending-title-box">
                                                    <h4><a href="single-listing-one.html">The Straling</a></h4>
                                                    <div class="customer-review">
                                                        <div class="rating-summary float-left">
                                                            <div class="rating-result" title="60%">
                                                                <ul class="product-rating">
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                    <li><i class="ion-android-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-summury float-right">
                                                            <p><a href="#">3 Reviews</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="trending-address">
                                                        <li><i class="ion-ios-location"></i>
                                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                                        </li>
                                                        <li><i class="ion-ios-telephone"></i>
                                                            <p>+44 20 7336 8898</p>
                                                        </li>
                                                        <li><i class="ion-android-globe"></i>
                                                            <p>www.burgerandlobster.com</p>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom mar-top-15 pad-bot-30">
                                                        <div class="trend-left float-left">
                                                            <span class="round-bg green"><i class="ion-ios-cart"></i></span>
                                                            <p><a href="#">Shop</a></p>
                                                        </div>
                                                        <div class="trend-right float-right">
                                                            <div class="trend-closed">
                                                                closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="list-view" class="tab-pane active  product-list">
                                    <div class="row trending-place-item">
                                        <div class="col-md-6 no-pad-lr">
                                            <div class="trending-img">
                                                <img src="images/category/places/place-1.jpg" alt="#">
                                                <span class="trending-rating-green">7</span>
                                                <span class="save-btn"><i class="icofont-heart"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 no-pad-lr">
                                            <div class="trending-title-box">
                                                <h4><a href="single-listing-one.html"><h4><a href="single-listing-one.html"><?php echo $linha["titulo"]?></h4></a></h4>
                                                <div class="customer-review">
                                                    <div class="rating-summary float-left">
                                                        <div class="rating-result" title="60%">
                                                            <ul class="product-rating">
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star-half"></i></li>
                                                                <li><i class="ion-android-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="review-summury float-right">
                                                        <p><a href="#">3 Reviews</a></p>
                                                    </div>
                                                </div>
                                                <ul class="trending-address">
                                                    <li><i class="ion-ios-location"></i>
                                                        <p><a href="single-listing-one.html"><?php echo $linha["endereco"]?></p>
                                                    </li>
                                                    <li><i class="ion-ios-telephone"></i>
                                                        <p><a href="single-listing-one.html"><?php echo $linha["telefone"]?></p>
                                                    </li>
                                                    <li><i class="ion-android-globe"></i>
                                                        <p>www.laresorta.com</p>
                                                    </li>
                                                </ul>
                                                <div class="trending-bottom mar-top-15 pad-bot-30">
                                                    <div class="trend-left float-left">
                                                        <span class="round-bg pink"><i class="icofont-hotel"></i></span>
                                                        <p><a href="#">Hotel</a></p>

                                                    </div>
                                                    <div class="trend-right float-right">
                                                        <div class="trend-open"><i class="ion-clock"></i>
                                                            Open <p>till 11.00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    
                                   
                                </div>
                                
                            </div>
							
	<?php } ?>