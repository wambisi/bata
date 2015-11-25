<!DOCTYPE html>
<html>
<head>
	<title>Bata Shop</title>
	<link rel="stylesheet" type="text/css" href="assets/bower_components/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bower_components/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/bower_components/slick-carousel/slick/slick-theme.css"/>


	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="assets/bower_components/semantic/dist/semantic.min.js"></script>
	<script src="assets/extra/ResponsiveSlides/responsiveslides.min.js"></script>
  <script src="assets/carousel.js"></script> 

  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/slick-carousel/slick/slick.min.js"></script>

	<style>
		.ui.segment{
		    /*box-shadow: 0px 0px 0px 0 rgba(34, 36, 38, 0.15);
		    margin: 0rem 0em;
		    padding: 1em 1em;
		    border-radius: 0.28571429rem;
		    border: 0px;*/
        /*background: #827F7F;*/
		}
    .your-class{
        margin-left:1%;
        margin-right:1%;
    }
    .slick-slide
{
width: 200px;
}
    .card{
      margin-left:5%;
    }

    .slick-prev:before {
  content: "<";
  color: black !important;
  font-weight: bold;
}
.slick-next:before {
  content: ">";
  color: black !important;
  font-weight: bold;
}

		.ui.menu{
			    margin: 0rem 0; 

     border: 0px; 
    box-shadow: 0 0px 0px 0;
    border-radius: 0px;
    margin-left: 8%;
		}

		.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  /*margin-left: 4%;*/
  }

  #mobileslides{
    margin-left: 0px;
  }
  #capmobile{
    max-width:607px;
  }
  #tabletslides{
    margin-left: 30px;
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
  width: 100%;
  border: 0;
  }
  /*.caption {
  position: absolute;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 15px;
  text-align: center;
  background: #1C7D33;
  background: rgba(0,0,0, .8);
  color: #fff;
  width: 960px;
}*/
#segment_container{
	width:85%;margin-left:8%;
}

	</style>
</head>
<body style="background:#AF4343;">
	<div class="ui center aligned segment">
    <div class="ui menu">
        <img src="img/logo_kilimall.png">
      <a class="item">
        <div class="item">
              <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
              </div>
            </div>
      </a>
      <a class="item"><img class="ui small image" src="img/delivery.png"></a>
      <a class="item"><img class="ui small image" src="img/7days.png"></a>
      <a class="item"><img class="ui small image" src="img/pay_on_delivery.png"></a>
    </div>
		<div class="ui borderless menu">
  		  <div class="item">
  		    <img class="ui small image" src="img/bata_logo.png">
  		  </div>
  		  <a class="item"><h4 class="ui header">Women</h4></a>
  		  <a class="item"><h4 class="ui header">Men</h4></a>
  		  <a class="item"><h4 class="ui header">Kids</h4></a>
		  </div>
		</div>
	</div>

  <ul class="rslides">
    <li>
      <img src="img/gallery1.jpg" alt="">
      <!-- <p class="caption">Beef Stew & Chapati</p> -->
    </li>
    <li>
      <img src="img/gallery2.jpg" alt="">
      <!-- <p class="caption">Pilau & Vegetable Rice</p> -->
    </li>
    <!-- <li>
      <img class="ui massive image" src="img/Toughees-bis.jpg" alt="">
      <p class="caption">This is the third picture</p> 
    </li> -->
  </ul>

      <div class="ui segment" id="segment_container">
        <img width="1100" src="img/bootsketchers.jpg" />
        <img width="1100" src="img/bootsketchers.jpg" />
     
          <img src="img/hot_tops.png" alt=""/>
          <div class="ui two column grid">
            <div class="column"><img src="img/people.jpg" alt=""/></div>
            <div class="column">
                <div class="two column row">
                  <div class="ui two item borderless menu">
                      <a class="item"><img class="ui medium image" src="img/sketchers_shoe.png" alt=""/></a>
                      <a class="item"><img class="ui medium image" src="img/sketchers_shoe2.png" alt=""/></a>
                  </div>
                </div>
                <div class="two column row">
                  <div class="ui two item borderless menu">
                      <a class="item"><img class="ui medium image" src="img/sk3.png" alt=""/></a>
                      <a class="item"><img class="ui medium image" src="img/sk4.png" alt=""/></a>
                  </div>
                </div>
                <div class="two column row">
                  <div class="ui two item borderless menu">
                      <a class="item"><img class="ui medium image" src="img/sk5.png" alt=""/></a>
                      <a class="item"><img class="ui medium image" src="img/sk6.png" alt=""/></a>
                  </div>
                </div>
            </div>
          </div>
          <img  src="img/person_shoes2.png" /><br /><br />
          <img  src="img/person_shoes.png" />

          <h2 class="ui centered header">Limited Offer!!</h2>
          <div class="your-class">
            <div>
                <div class="card">
                    <div class="image">
                      <img src="img/batas1.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas2.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas3.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas4.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas5.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas6.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas7.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas8.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batas9.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
          </div>
          <h2 class="ui centered header">Top Selling Women Shoes</h2>
          <div class="your-class">
            <div>
                <div class="card">
                    <div class="image">
                      <img src="img/bataw1.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/bataw2.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/bataw4.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/bataw5.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/bataw6.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
          </div> <!-- Women Sales -->

          <h2 class="ui centered header">Top Selling Men Shoes</h2>
          <div class="your-class">
            <div>
                <div class="card">
                    <div class="image">
                      <img src="img/batam1.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batam2.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batam3.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batam4.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batam5.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
          </div> <!-- Men Sales -->

          <h2 class="ui centered header">Top Selling Kids Shoes</h2>
          <div class="your-class">
            <div>
                <div class="card">
                    <div class="image">
                      <img src="img/batak1.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batak2.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batak3.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batak4.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
            <div>
              <div class="card">
                    <div class="image">
                      <img src="img/batak5.jpg">
                    </div>
                    <div class="content">
                      <div class="header">Leather Lace Shoe Black Up</div>
                      <div class="meta">
                        <a>Bata</a>
                      </div>
                      <div class="description">
                        Kshs.2000
                      </div>
                    </div>
                    <!-- <div class="extra content">
                      <span class="right floated">
                        Joined in 2013
                      </span>
                      <span>
                        <i class="user icon"></i>
                        75 Friends
                      </span>
                    </div> -->
                </div>
            </div>
          </div> <!-- Kids Sales -->

      </div> <!-- end segment -->
      <script>
    		$(function() {
    		    $(".rslides").responsiveSlides();
    		  });
	    </script>

</body>
</html>