<?php
//echo file_get_contents('https://news.bitcoin.com/feed/');
$xml = simplexml_load_file('https://news.bitcoin.com/feed/');
$images = [];
foreach ($xml->channel->item as $pos => $v) {
  // echo((string)$v->description)."\n";
  preg_match('/src="(.*?)"/is', (string)$v->description, $match);
  $images[] = $match[1];
}

$News = simplexml_load_file('https://www.investing.com/rss/news_301.rss');
?>
<!doctype html>
<html lang="en">
	<!-- Google Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">
	<!-- Basic Page Needs
	================================================== -->
	<title>TIMES.CAPITAL</title>
  
  <!--meta info-->
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Vendor CSS
	============================================ -->
	
	<link rel="stylesheet" href="font/demo-files/demo.css">
	<!-- CSS theme files
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <div class="loader"></div>
  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->
  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
  <div id="wrapper" class="wrapper-container">
    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->
    <nav id="mobile-advanced" class="mobile-advanced"></nav>
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <header id="header" class="header sticky-header">
      
      <!-- searchform -->
      <div class="searchform-wrap">
        <div class="vc-child h-inherit">
          <form class="search-form">
            <button type="submit" class="search-button"></button>
            <div class="wrapper">
              <input type="text" name="search" placeholder="Start typing...">
            </div>
          </form>
          <button class="close-search-form"></button>
        </div>
      </div>
      
      <!-- pre-header -->
      <!-- top-header -->
      <div class="top-header">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              
              <!-- Socials -->
              <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-rss"></i></a></li>
                <li><a href="#"><i class="icon-hash"></i></a></li>
              </ul>
            </div>
            
            <div class="col">
              
              <!-- logo -->
              <div class="clearfix">  
                <div class="logo-container">
                <img src="images/logo2.png">
                </div>
                <div class="title-box">
                <div class="top-title">time.Capital</div>
              </div>
            </div>
            </div>
            <div class="col align-right">
              
              <a href="#"><i class="licon-mailbox-full"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->
      <!--main menu-->
      <div class="menu-holder">
        
        <div class="container">
          
          <div class="menu-wrap">
            <div class="nav-item">
              
              <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->
              <nav id="main-navigation" class="main-navigation">
                <ul id="menu" class="clearfix">
                  <li><a href="index.html">Home</a>
                  </li>
                  <li><a href="CryptoMarketing.html">Crypto Marketing</a>
                  </li>
                  <li><a href="ATM.html">BitCoin ATM</a>
                  </li>
                  <li><a href="FinancialNews.html">Financial News</a>
                  </li>
                  <li><a href="CryptoLending.html">Crypto Lending</a>
                  </li>
                  <li><a href="CryptoInvestment.html">Crypto Investment</a>
                  </li>
                  <li><a href="ContactUs.html">Contact Us</a>
                  </li>
                </ul>
              </nav>
              <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->
            </div>
            <div class="search-holder">
                
              <button type="button" class="search-button"></button>
    
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
    <div class="breadcrumbs-wrap no-title">
      <div class="container">
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a></li>
          <li>ICO List</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">
          
            <h2 class="title">Financial News</h2>
            <div class="content-element3">
              
              <div class="news-holder">
                <img src="<?php echo $images[0]; ?>" alt="">
                <div class="entry-box"> 
                  <div class="active entry">
                    
                    <div class="entry-body">
                      <div class="entry-meta">
                        
                        <a href="javascript:void(0);" class="entry-label"><?php echo $xml->channel->item[0]->category[0]; ?></a>
                        <time class="entry-date"><?php echo date('M d, Y, H:i', strtotime($xml->channel->item[0]->pubDate)) ?></time>
                      </div>
                      <h4 class="entry-title"><a href="<?php echo $xml->channel->item[0]->link; ?>" target="_blank"><?php echo $xml->channel->item[0]->title; ?></a></h4>
                      
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="entry-box style-2">
            
              <div class="content-element4">
                <div class="row">
                  <?php 
                  $index = 0;
                  foreach ($xml->channel->item as $v) {
                    $index++;
                    if($index == 1){continue;}
                    ?>
                    <div class="col-lg-6 col-md-12">
                      <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                      <div class="entry entry-small">
                        <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                        <div class="thumbnail-attachment">
                          <a href="<?php echo $v->link; ?>" target="_blank"><img src="<?php echo $images[$index-1]; ?>" alt=""></a>
                          <div class="entry-label"><?php echo $v->category[0]; ?></div>
                        </div>
                        <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                        <div class="entry-body">
                          <h5 class="entry-title"><a href="<?php echo $v->link; ?>" target="_blank"><?php echo $v->title; ?></a></h5>
                          <div class="entry-meta">
                            <time class="entry-date"><?php echo date('M d, Y, H:i', strtotime($v->pubDate)) ?></time>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                  } ?>
                </div>
              </div>
<!--               <ul class="pagination">
                <li><a href="#" class="prev-page"></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" class="next-page"></a></li>
              </ul> -->
            </div>
          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">
<!--             <div class="widget">
              
              <form>
                
                <a href="#" class="btn btn-style-4 icon-btn f-right"><i class="licon-magnifier"></i></a>
                <div class="wrapper">
                  <input type="text" placeholder="Search">
                </div>
              </form>
            </div> -->
            <!-- Widget -->
            <div class="widget">
            
              <h6 class="widget-title">Cryptocurrency News</h6>
              <ul class="most-read">
                
                <li><h6><a href="#">Coinbase to Probe for Breach in Bitcoin Cash Listing</a></h6></li>
                <li><h6><a href="#">How Low Can Bitcoin Go? Charts Hint $11k in Play</a></h6></li>
                <li><h6><a href="#">Singapore Central Bank Urges 'Extreme Caution' on Bitcoin Investment</a></h6></li>
                <li><h6><a href="#">Morgan Stanley: Hedge Funds Poured $2 Billion into Cryptos in 2017</a></h6></li>
                <li><h6><a href="#">The 2017 Tapscott Blockchain Prediction Scorecard</a></h6></li>
              </ul>
            </div>

          </aside>
        </div>
      </div>
      
    </div>
    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
    <footer id="footer" class="footer style-2">
      <div class="container">
      <!-- top footer -->
      <!-- main footer -->
      <div class="main-footer">
          
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            
            <div class="widget">
              
              <div class="content-element2">
                
                <a href="index.html" class="logo"><img src="images/logo2.png" alt=""></a>
              </div>
              <p>TIMES CAPITAL is a blockchain-related investment and asset management institution.</p>
              <p>TIMES CAPITAL is in a leading position in the industry. We currently provide the most comprehensive cryptocurrency and blockchain consulting services, and our investments involve various blockchain fields.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            
            <div class="widget">
              
              <h6 class="widget-title">Company</h6>
              <ul class="chart-list">
              
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Experts</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            
            <div class="widget">
              
              <h6 class="widget-title">Live Charts</h6>
              <ul class="chart-list">
                <?php foreach ($News->channel->item as $v) { ?>
                  <li><a href="<?php echo $v->link; ?>" target="_blank"><?php echo $v->title; ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            
            <div class="widget">
              
              <h6 class="widget-title">Contact Us</h6>
              <div class="our-info">
                  
                <div class="info-item">
                  <i class="licon-map-marker"></i>
                  <div class="wrapper">
                    8901 Marmora Road, Glasgow, D04 89GR. <br>
                    <a href="https://www.google.com/maps/dir//2032+S+Elliott+Ave,+Aurora,+MO+65605/@36.9487043,-93.7878472,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x87cf4b1a194c90e1:0xba30bfe0c0a857c!2m2!1d-93.7178072!2d36.9487249" class="link-text">Get Direction</a>
                  </div>
                </div>
                <div class="info-item">
                  <i class="licon-telephone"></i>
                  <div class="wrapper">
                    <span content="telephone=no">+1 800 559 6580</span>
                  </div>
                </div>
                <div class="info-item">
                  <i class="licon-at-sign"></i>
                  <div class="wrapper">
                    <a href="mailto:">paul@time.capit</a>
                  </div>
                </div>
                <div class="info-item">
                  <i class="licon-clock3"></i>
                  <div class="wrapper">
                    Monday - Saturday: 8am - 9pm
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
          
        <p>Copyright ?? 2022 times.CAPITAL. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
  </div>
  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->
  <!-- JS Libs & Plugins
  ============================================ -->
  <script src="js/libs/jquery.modernizr.js"></script>
  <script src="js/libs/jquery-2.2.4.min.js"></script>
  <script src="js/libs/jquery-ui.min.js"></script>
  <script src="js/libs/retina.min.js"></script>
  <script src="plugins/twitter/jquery.tweet.js"></script>
  <script src="plugins/jquery.queryloader2.min.js"></script>
  <script src="plugins/owl.carousel.min.js"></script>
  <!-- JS theme files
  ============================================ -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>