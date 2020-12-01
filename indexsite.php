<?php include('conexao.php');?>



<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!--localidades_filtro-->
	   <script src="js/localidades_filtro.js"></script>
    <!--color switcher css-->
    <link rel="stylesheet" href="css/switcher/skin-aqua.css" media="screen" id="style-colors" />
    <!-- Document Title -->
    <title>imobiliaria</title>
</head>

<body>
    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="images/preloader.gif" alt="...">
    </div>
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header-fixed">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap v2">
                <div class="container-fluid">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4 col-6">
                                <a class="navbar-brand" href="#"></a>
                            </div>
                            <?php include('cabecalho.html');?>
                        </div>
                    </div>
                    <!--mobile-menu starts -->
                    <div class="site-mobile-menu">
                        <div class="site-mobile-menu-header">
                            <div class="site-mobile-menu-close  js-menu-toggle">
                                <span class="ion-ios-close-empty"></span>
                            </div>
                        </div>
                        <div class="site-mobile-menu-body"></div>
                    </div>
                    <!--mobile-menu ends-->
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--Header ends-->
        <!--lista de buscas start-->
        <div class="filter-wrapper style1 mar-top-100 half-map">
            <div class="container-fluid">
                <div class="row">
                    <div class="explore__map-side v2">
                        <!--Leaflet Map starts-->
                        <div id="map-container">
                            <div id="map" data-map-scroll="true">
                            </div>
                        </div>
						<div class="col-md-6 col-12">
                                    <input type="text" class="form-control filter-input" id="search-filter" name="search-bar" placeholder="Digite o bairro . . .">
                                </div>
                                <div class="col-md-6  col-12">
                                    <input type="text" class="form-control filter-input" id="location-filter" name="search-bar" placeholder="Digite o tamanho">
                                </div>
                                <div class="col-md-12  col-12">
                                    <select class="filter-input" id="option-select" style="display: none;">
                                        <option>Selecione a cidade</option>
                                        <option>SP</option>
                                        <option>Osasco</option>
                                        <option>Sbc</option>
                                        <option>Santo Andre</option>
                                  
                                    </select>
                                </div>
                        <!--Leaflet Map ends-->
                    </div>
                    <div class="col-lg-7 offset-lg-5 col-md-12">
                        <div class="form-group filter-group">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <input type="text" class="form-control filter-input" id="search-filter" name="search-bar" placeholder="I'm looking for . . .">
									
                                </div>
                                <div class="col-md-6  col-12">
                                    <input type="text" class="form-control filter-input" id="location-filter" name="search-bar" placeholder="Location">
                                </div>
                                <div class="col-md-12  col-12">
                                    <select class="filter-input" id="option-select" style="display: none;">
                                        <option>Select Categories</option>
                                        <option>Art's</option>
                                        <option>Health</option>
                                        <option>Hotels</option>
                                        <option>Real Estate</option>
                                        <option>Rentals</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="filter-sub-area style1">
                                        <div class="filter-title  mar-top-20 mar-bot-15">
                                            <p>Choose distance : <span><input type="text" id="amount"></span></p>
                                        </div>
                                        <div id="slider-range" class="price-range mar-bot-40"></div>
                                    </div>
                                </div>
                                <div class="col-md-6  col-12">
                                    <div class="filter-sub-menu style1">
                                        <ul>
                                            <li class="has-sub"><a href="# ">More Filters</a>
                                                <ul class="explore__form-checkbox-list half-filter">
                                                    <div class="filter-checkbox">
                                                        <p>Sort By Features</p>
                                                        <li><input id="check-a" type="checkbox" name="check">
                                                            <label for="check-a">Open Now</label></li>
                                                        <li> <input id="check-b" type="checkbox" name="check">
                                                            <label for="check-b">Near me</label></li>
                                                        <li><input id="check-c" type="checkbox" name="check">
                                                            <label for="check-c">Child Friendly</label></li>
                                                        <li><input id="check-d" type="checkbox" name="check">
                                                            <label for="check-d">Free Parking</label></li>
                                                        <li><input id="check-f" type="checkbox" name="check">
                                                            <label for="check-f">Events</label></li>
                                                        <li><input id="check-e" type="checkbox" name="check">
                                                            <label for="check-e">Free Wifi</label></li>
                                                    </div>
                                                    <div class="filter-checkbox">
                                                        <p>Sort By Ratings</p>
                                                        <input id="check-w" type="checkbox" name="check">
                                                        <label for="check-w">
                                                            <div class="list-ratings">
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                            </div>
                                                        </label>
                                                        <input id="check-x" type="checkbox" name="check">
                                                        <label for="check-x">
                                                            <div class="list-ratings">
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                            </div>
                                                        </label>
                                                        <input id="check-y" type="checkbox" name="check">
                                                        <label for="check-y">
                                                            <div class="list-ratings">
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                            </div>
                                                        </label>
                                                        <input id="check-z" type="checkbox" name="check">
                                                        <label for="check-z">
                                                            <div class="list-ratings">
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-android-star"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="filter-checkbox">
                                                        <p>Cidade</p>
                                                        <input id="check-ab" type="checkbox" name="check">
                                                        <label for="check-ab">São Paulo</label>
                                                        <input id="check-bc" type="checkbox" name="check">
                                                        <label for="check-bc">SBC</label>
                                                        <input id="check-cd" type="checkbox" name="check">
                                                        <label for="check-cd">Diadema</label>
                                                        <input id="check-df" type="checkbox" name="check">
                                                        <label for="check-df">Osasco </label>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6  col-12 text-right sm-left">
                                    <button type="submit" class="btn v1 mar-top-10">Apply</button>
                                </div>
                            </div>
                        </div>
												
                         <div class="row mar-top-25 pad-bot-30 align-items-center">
                            <div class="col-lg-4 col-sm-4 col-12">
                                <div class="item-view-mode res-box">
                                    <!-- item-filter-list start -->
                                    <ul class="nav item-filter-list" role="tablist">
                                        <li><a  data-toggle="tab" href="#grid-view"><i class="ion-grid"></i></a></li>
                                        <li class="active"><a class="active"  data-toggle="tab" href="#list-view"><i class="ion-ios-list"></i></a></li>
                                    </ul>
                                    <!-- item-filter-list end -->
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-8 col-12">
                                <div class="item-element res-box  text-right xs-left">
                                    <p>Mostrando <span>1-15 de 69</span> da lista</p>
                                </div>
                            </div>
                        </div>
					
				
								 <?php require("listafotos.php"); ?>
                    </div>

                </div>
            </div>
        </div>
		<!--pagination starts-->
                                <div class="post-nav nav-res pad-bot-80">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2  col-xs-12 ">
                                            <div class="page-num text-center">
                                                <ul>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--pagination ends-->
		
        <!--Listing section ends-->
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="ion-arrow-up-c"></i></span>
        <!-- Scroll to top ends-->
    </div>
		  
  
    <!--Page Wrapper ends-->
    <!--Scripts starts-->	
    <!--plugin js-->
    <script src="js/plugin.js"></script>
    <!-- Leaflet js -->
    <script src="js/leaflet.min.js"></script>
    <!-- Leaflet Maps Scripts -->
    <script src="js/leaflet-markercluster.min.js"></script>
    <script src="js/leaflet-gesture-handling.min.js"></script>
    <script src="js/leaflet-custom.js"></script>
    <script src="js/leaflet-autocomplete.js"></script>
    <script src="js/leaflet-control-geocoder.js"></script>
    <!--Main js-->
    <script src="js/main.js"></script>
    <!--Scripts ends-->
	

</body>

</html>
