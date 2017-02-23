@extends('frontend.layouts.app')

@section('header')
  <link href="css/responsiveslides.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100vw;
  height: 100vh;
  border: 0;
  } 
</style>
@endsection

@section('scripts')
  <script src="js/responsiveslides.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: false,           // Boolean: Show pager, true or false
        nav: false,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
      });      
    $('.owl-carousel2').owlCarousel({
        loop:true,
        items:1
    })
  });  
</script>
@endsection

@section('media')
<div>
        <div class="" style="height: 672px;background: rgba(12, 14, 13, 0.6);">
          <br />
        </div>

        <div class="banner-caption">
            <h1>The Right Place of House Finding</h1>
            <h2 class="banner-sub-title">Search for a place to stay ?</h2>

            <div class="banner-search-taber">
               <ul class="banner-search-tabs">
                  <li class="search-tab active">
                     <div class="search-tab-inner">All</div>
                  </li>
                  <li class="search-tab">
                     <div class="search-tab-inner">For Sale</div>
                  </li>
                  <li class="search-tab">
                     <div class="search-tab-inner">For Rent</div>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active in">
                     <form class="form-inline banner-search-main">
                        <div class="form-group">
                           <div class="btn-group bootstrap-select">
                              <div class="dropdown-menu open" role="combobox">
                                 <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                    <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                 </ul>
                              </div>
                              <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Location" tabindex="-98">
                                 <option class="bs-title-option" value="">Location</option>
                                 <option>Location 1</option>
                                 <option>Location 2</option>
                                 <option>Location 3</option>
                                 <option>Location 4</option>
                                 <option>Location 5</option>
                              </select>
                           </div>
                           <div class="search input-search input-icon">
                              <input class="form-control" type="text" placeholder="Enter Keyword">
                           </div>
                           <div class="search-btn">
                              <button class="btn btn-secondary btn-block"><i class="fa fa-search"></i> Search</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane">
                     <form class="form-inline banner-search-main">
                        <div class="form-group">
                           <div class="btn-group bootstrap-select">
                             
                              <div class="dropdown-menu open" role="combobox">
                                 <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                    <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                 </ul>
                              </div>
                              <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Location" tabindex="-98">
                                 <option class="bs-title-option" value="">Location</option>
                                 <option>Location 1</option>
                                 <option>Location 2</option>
                                 <option>Location 3</option>
                                 <option>Location 4</option>
                                 <option>Location 5</option>
                              </select>
                           </div>
                           <div class="search input-search input-icon">
                              <input class="form-control" type="text" placeholder="Enter Keyword">
                           </div>
                           <div class="search-btn">
                              <button class="btn btn-secondary btn-block"><i class="fa fa-search"></i> Search</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane">
                     <form class="form-inline banner-search-main">
                        <div class="form-group">
                           <div class="btn-group bootstrap-select">
                              
                              <div class="dropdown-menu open" role="combobox">
                                 <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                    <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Location 5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                 </ul>
                              </div>
                              <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Location" tabindex="-98">
                                 <option class="bs-title-option" value="">Location</option>
                                 <option>Location 1</option>
                                 <option>Location 2</option>
                                 <option>Location 3</option>
                                 <option>Location 4</option>
                                 <option>Location 5</option>
                              </select>
                           </div>
                           <div class="search input-search input-icon">
                              <input class="form-control" type="text" placeholder="Enter Keyword">
                           </div>
                           <div class="search-btn">
                              <button class="btn btn-secondary btn-block"><i class="fa fa-search"></i> Search</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="row pull-right find-map" style="color: white;">
                    Busca en el Mapa 
                    <img src="{{ url('/images/icons/pin-apartments.png') }}"  style="width:14%" />
               </div>
            </div>
        </div>        
</div>

@endsection        

@section('content')


    <!--start carousel module-->
    <div class="houzez-module-main">
        <div class="houzez-module carousel-module">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                        <div class="module-title-nav clearfix">
                            <div>
                                <h2>ULTIMOS INMUEBLES EN ALQUILER</h2>
                            </div>
                        </div>
                        <div class="row grid-row">
                            <div class="carousel properties-carousel-grid-1 slide-animated">
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="module-title-nav clearfix">
                            <div>
                                <h2>ULTIMOS INMUEBLES EN VENTA</h2>
                            </div>
                        </div>
                        <div class="row grid-row">
                            <div class="carousel properties-carousel-grid-2 slide-animated">
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span data-toggle="tooltip" data-placement="top"
                                                                  title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                        </li>
                                                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top"
                                                                              title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                            <div class="item-body">

                                                <div class="body-left">
                                                    <div class="info-row">
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        class="fa fa-star-o"></span><span
                                                                        style="width: 70%"
                                                                        class="top-ratings"><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span><span
                                                                            class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a>
                                                        </h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami
                                                            Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i
                                                                            class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty
                                                        LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="houzez-module-main module-white-bg" style="background-color: #f6f6f6;">
                            <div class="houzez-module module-title text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-xs-12">
                                            <h2>Encuentra r&aacute;pida en las principales capitales</h2>
                                            <h3 class="sub-heading">Encuentra r&aacute;pida en las principales capitales</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   


                        <div class="owl-carousel2 owl-theme">
                            <div class="item">
                              <div class="col-lg-12">
                                  <div class="location-block">
                                      <figure>
                                          <a href="#">
                                              <img src="http://placehold.it/370x370" width="370" height="370" alt="Image" style="height: 370px;">
                                          </a>
                                          <div class="location-fig-caption">
                                              <h3 class="heading">Chicago</h3>
                                              <p class="sub-heading">Chicago</p>
                                          </div>
                                      </figure>
                                  </div>            
                              </div>    
                            </div>
                            <div class="item">
                              <div class="col-lg-12">
                                  <div class="location-block">
                                      <figure>
                                          <a href="#">
                                              <img src="http://placehold.it/370x370" width="370" height="370" alt="Image" style="height: 370px;">
                                          </a>
                                          <div class="location-fig-caption">
                                              <h3 class="heading">New York</h3>
                                              <p class="sub-heading">New York</p>
                                          </div>
                                      </figure>
                                  </div>            
                              </div>    
                            </div>
                            <div class="item">
                              <div class="col-lg-12">
                                  <div class="location-block">
                                      <figure>
                                          <a href="#">
                                              <img src="http://placehold.it/370x370" width="370" height="370" alt="Image" style="height: 370px;">
                                          </a>
                                          <div class="location-fig-caption">
                                              <h3 class="heading">Los Angeles</h3>
                                              <p class="sub-heading">Los Angeles</p>
                                          </div>
                                      </figure>
                                  </div>            
                              </div>
                            </div>
                            <div class="item">
                              <div class="col-lg-12">
                                  <div class="location-block">
                                      <figure>
                                          <a href="#">
                                              <img src="http://placehold.it/370x370" width="370" height="370" alt="Image" style="height: 370px;">
                                          </a>
                                          <div class="location-fig-caption">
                                              <h3 class="heading">Chicago</h3>
                                              <p class="sub-heading">Chicago</p>
                                          </div>
                                      </figure>
                                  </div>            
                              </div>
                            </div>
                            <div class="item">
                              <div class="col-lg-12">
                                  <div class="location-block">
                                      <figure>
                                          <a href="#">
                                              <img src="http://placehold.it/370x370" width="370" height="370" alt="Image" style="height: 370px;">
                                          </a>
                                          <div class="location-fig-caption">
                                              <h3 class="heading">Chicago</h3>
                                              <p class="sub-heading">Chicago</p>
                                          </div>
                                      </figure>
                                  </div>            
                              </div>    
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
                        <aside id="sidebar">
                            <div class="widget widget-recommend">
                                <div class="widget-top">
                                    <h3 class="widget-title">INMUEBLES DESTACADOS</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                            <h4>$350,000</h4>
                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                            <h4>$350,000</h4>
                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                            <h4>$350,000</h4>
                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-rated">
                                <div class="widget-top">
                                    <h3 class="widget-title">OPORTUNIDADES</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                            <div class="rating">
                                                <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                            </div>
                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>

                                            <div class="rating">
                                                <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                            </div>


                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="#">
                                                    <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>

                                            <div class="rating">
                                                <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                            </div>


                                            <div class="amenities">
                                                <p>3 beds â€¢ 2 baths â€¢ 1,238 sqft</p>
                                                <p>Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end carousel module-->


    <div id="services-module-3" class="houzez-module services-module style3">
                <div class="container">
                    <div class="service-blocks-main">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-block">
                                    <div class="block-icon">
                                        <img src="images/icons/rocket.png" alt="Rocket" width="50" height="50">
                                    </div>
                                    <div class="block-content">
                                        <h3>Your title here</h3>
                                        <p>Lorem ipsum dolor sit amet, cotetur
                                            adipiscing elit. Nam sollicitudin i
                                            n nulla vitae suscipit. Aenean quat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-block">
                                    <div class="block-icon">
                                        <img src="images/icons/briefcase.png" alt="Briefcase" width="50" height="50">
                                    </div>
                                    <div class="block-content">
                                        <h3>Your title here</h3>
                                        <p>Lorem ipsum dolor sit amet, cotetur
                                            adipiscing elit. Nam sollicitudin i
                                            n nulla vitae suscipit. Aenean quat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-block">
                                    <div class="block-icon">
                                        <img src="images/icons/wrench.png" alt="Wrench" width="50" height="50">
                                    </div>
                                    <div class="block-content">
                                        <h3>Your title here</h3>
                                        <p>Lorem ipsum dolor sit amet, cotetur
                                            adipiscing elit. Nam sollicitudin i
                                            n nulla vitae suscipit. Aenean quat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-block">
                                    <div class="block-icon">
                                        <img src="images/icons/globe.png" alt="Wrench" width="50" height="50">
                                    </div>
                                    <div class="block-content">
                                        <h3>Your title here</h3>
                                        <p>Lorem ipsum dolor sit amet, cotetur
                                            adipiscing elit. Nam sollicitudin i
                                            n nulla vitae suscipit. Aenean quat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="" style="background-color: white;">
      <div class="container" style="background-color: white;">
        <div class="">

          <div class="col-md-6 col-sm-6 col-xs-12">
              <h2>IMAGEN SERVICIOS PROFESIONALES</h2>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-small">
                  <form>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Conectar con potenciales clientes
                      </div>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Mejorar posicionamiento en el buscador
                      </div>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Publicar las fotos de tu trabajo
                      </div>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Promocionar las ofertas de tu negocio
                      </div>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Muestra que opinan tus clientes
                      </div>
                      <div class="form-group">
                          <i class="fa fa-check"></i>
                          Web adaptadas a m&oacute;viles
                      </div>
                      <button class="btn btn-secondary btn-block" style="width:250px;">Registrar mi empresa</button>
                  </form>
              </div>
          </div>

        </div>
      </div>
    </div>    

    <!--start agents carousel module-->
    <div id="partner-carousel-module" class="houzez-module agents-carousel-module">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="module-title-nav clearfix">
                        <div>
                            <h2><!--Partners Module--></h2>
                            <!-- <h3 class="sub-title">Carousel</h3> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div id="partner-carousel" class="partner-carousel">
                        <div class="item">
                            <div class="partner-block">
                                <div class="partner-logo">
                                    <img src="http://placehold.it/150x100" alt="logo" width="150" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner-block">
                                <div class="partner-logo">
                                    <img src="http://placehold.it/150x100" alt="logo" width="150" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner-block">
                                <div class="partner-logo">
                                    <img src="http://placehold.it/150x100" alt="logo" width="150" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner-block">
                                <div class="partner-logo">
                                    <img src="http://placehold.it/150x100" alt="logo" width="150" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner-block">
                                <div class="partner-logo">
                                    <img src="http://placehold.it/150x100" alt="logo" width="150" height="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end agents carousel module-->

    <section class="stats">
      <div class="container">
          <!-- STATS -->
          <div class="row">
              
              <!-- START COLUMN -->
              <div class="col-lg-3 col-sm-3" style="text-align: center;">
                  <div class="stat wow fadeInUp animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                      <div class="icon-top red-text">
                          <i class="icon-design-graphic-tablet-streamline-tablet"></i>
                      </div>
                      <div class="stat-text">
                      <h3 class="white-text red-border-bottom">1,223</h3>
                      <h6>agencias Inmoweb</h6>
                      </div>
                  </div>
              </div> <!-- / END COLUMN -->
              
              <!-- START COLUMN -->
              <div class="col-lg-3 col-sm-3" style="text-align: center;">
                  <div class="stat wow fadeInUp animated animated" data-wow-offset="30" data-wow-duration="1.75s" data-wow-delay="0.30s" style="visibility: visible;-webkit-animation-duration: 1.75s; -moz-animation-duration: 1.75s; animation-duration: 1.75s;-webkit-animation-delay: 0.30s; -moz-animation-delay: 0.30s; animation-delay: 0.30s;">
                      <div class="icon-top green-text">
                          <i class="icon-man-people-streamline-user"></i>
                      </div>
                      <div class="stat-text">
                      <h3 class="white-text green-border-bottom">5,047</h3>
                      <h6>agentes comerciales</h6>
                      </div>
                  </div>
              </div> <!-- / END COLUMN -->
              
              <!-- START COLUMN -->
              <div class="col-lg-3 col-sm-3" style="text-align: center;">
                  <div class="stat wow fadeInUp animated animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.45s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;-webkit-animation-delay: 0.45s; -moz-animation-delay: 0.45s; animation-delay: 0.45s;">
                      <div class="icon-top blue-text">
                          <i class="icon-email-mail-streamline"></i>
                      </div>
                      <div class="stat-text">
                      <h3 class="white-text blue-border-bottom">6,137</h3>
                      <h6>Inmuebles vendidos en 2015</h6>
                      </div>
                  </div>
              </div> <!-- / END COLUMN -->
              
              <!-- START COLUMN -->
              <div class="col-lg-3 col-sm-3" style="text-align: center;">
                  <div class="stat wow fadeInUp animated animated" data-wow-offset="30" data-wow-duration="2.25s" data-wow-delay="1s" style="visibility: visible;-webkit-animation-duration: 2.25s; -moz-animation-duration: 2.25s; animation-duration: 2.25s;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
                      <div class="icon-top yellow-text">
                          <i class="icon-picture-streamline-1"></i>
                      </div>
                      <div class="stat-text">
                      <h3 class="white-text yellow-border-bottom">+250,00</h3>
                      <h6>Inmuebles en MLS</h6>
                      </div>
                  </div>
              </div> <!-- / END COLUMN -->
          </div>
    </div>
    </section> 


    <div style="height: 250px;background: rgba(52, 210, 147, 0.8);">
           <div class="sabias-que" style="    font-size: 70px;  line-height: 75px;  font-weight: 400;  text-transform: inherit;  padding-top: 80px;  text-align: center;color:white !important;opacity: 1;">
                SABIAS QUE....?
           </div>
           <div class="" style="text-align: center; color: white !important;">
                We have 100+ happy customers in last few years. You can check what they're saying abaout us. 
           </div>
    </div>


    <!--start agents carousel module-->
    <div id="agents-carousel-module" class="houzez-module agents-carousel-module">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="module-title-nav clearfix">
                        <div>
                            <h2>AGENCIAS INMOBILIARIAS</h2>
                            <!-- <h4 class="sub-title">Carousel</h4> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div id="agents-carousel" class="agents-carousel">
                        <div class="item">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end agents carousel module-->





</section>        
@endsection