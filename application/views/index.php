<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>3monkeys Movies &amp; Reviews</title>
		<meta name="description" content="A really cool site!">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <style>
        .col-xs-4 {
            text-align: center;
        }

        .container {
            background:url('/assets/images/movie.png') no-repeat center center;
            height: 550px;
            text-align: center;
        }

        #sterm {
            margin-top: 8px;
            border: solid black 2px;
            border-radius: 10px;
            width: 230px;
        }

        .logo {
        	width: 140px;
        	height: auto;
        }

        a {
            background-color: black;
            color: white;
        }

        .carousel-inner {
        	max-height: 277px;
        	max-width: auto;
        }

        .carousel-inner > .item > img {
            margin: 0 auto;
        }
    </style>
    <script>
    $(function(){
        $('#mycarousel').carousel();
    });
    </script>
    </head>
    <body>
    	<div class="container"><!-- CONTAINER -->
            <div class="row"><!-- HEADER -->
                <div class="col-xs-4"><!-- HEADER LOGO -->
                    <img src="/assets/images/3monkeys.png" class="logo">
                </div>

                <div class="col-xs-4">
                    <form method="post" action="/reviews/search">
                        <input id="sterm" type="text" name="sterm" placeholder="movie title">
                    </form>
                </div>

                <div class="col-xs-4"><!-- LOGIN REG --> 
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="nav nav-pills">
                              <li role="presentation"><a href="#">Register</a></li>
                              <li role="presentation"><a href="">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6"></div>
                    </div><!-- END LOGIN REG -->
                </div>
            </div><!-- END HEADER -->
			<div class="row">
			    <div class="col-xs-4"></div>
			        <div class="col-xs-4">
			            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			                <!-- Indicators -->
			                  <ol class="carousel-indicators">
			                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			                  </ol>

			              	<!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox">
			                	<?php
			                		$active = true;
			                		for ($i=0; $i<count($results); $i++) {
			                			for ($x=0; $x<count($results[$i]['movies']); $x++) {
			                			if (!$active) {
			                				$cssTxt = "";
			                			} else {
			                				$cssTxt = "active";
			                				$active = false;
			                			}
			                	?>
			                    <div class="item <?=$cssTxt?>">
			                      <img src="<?=$results[$i]['movies'][$x]['urlPoster'];?>" alt="...">
			                      <div class="carousel-caption">...</div>
			                    </div>
			                    <?php
			                    		}
			                    	}
			                    ?>
			                </div>

			              <!-- Controls -->
			              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			                <span class="sr-only">Previous</span>
			              </a>
			              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			                <span class="sr-only">Next</span>
			              </a>
			            </div>
			        </div>
			    <div class="col-xs-4"></div>
			</div>
            <script src="/assets/js/bootstrap.min.js"></script>
            <script src="/assets/js/reviews.js"></script>
        </div><!-- END CONTAINER -->
    </body>
    </html>