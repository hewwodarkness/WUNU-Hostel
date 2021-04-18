<?php
        require 'db.php';
        include 'goodconnection.php';

        include 'menu.php';

    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 1000;
    $offset = $limit * ($page - 1);

    $sql_select =  "SELECT * 
                    FROM post 
                    order by dateCreated DESC
                    LIMIT $limit OFFSET $offset";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $sql_select456 =  "SELECT *
                    FROM tags 
                    order by tag_count_visit DESC
                    LIMIT 5";
    $result456 = mysqli_query($conn, $sql_select456);
    $row456 = mysqli_fetch_all($result456, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/review.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/js/libs.min.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <title>IOSU</title>
</head>
<body> 
<div class="reviewwholeblock">
	<div class="kekw">

		
		<div id="contentContainer" class="trans3d"> 
			<section id="carouselContainer" class="trans3d">
				<figure id="item1" class="carouselItem trans3d"><img class="carouselItemInner trans3d" src="img/3.png"></figure>
				<figure id="item2" class="carouselItem trans3d"><img class="carouselItemInner trans3d" src="img/wunu2.jpg"></figure>
				<figure id="item3" class="carouselItem trans3d"><img class="carouselItemInner trans3d" src="img/wunu2.jpg"></figure>
				<figure id="item4" class="carouselItem trans3d"><img class="carouselItemInner trans3d" src="img/wunu2.jpg"></figure>
				<figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d">5</div></figure>
				<figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d">6</div></figure>
				<figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d">7</div></figure>
				<figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d">8</div></figure>
				<figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d">9</div></figure>
				<figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d">10</div></figure>
				<figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d">11</div></figure>
				<figure id="item12" class="carouselItem trans3d"><div class="carouselItemInner trans3d">12</div></figure>	
			</section>
		</div> 
	</div>

	<div class="review">
		<div class="review1">
			<video autoplay muted width="170" class="uu">
				<source src="img/1.mp4" type="video/mp4">
				
			</video>
			<p>
				Логістика на сьогоднішній день стала досить популярною сферою діяльності, оскільки дозволяє компаніям вигідно закуповувати товар у виробника, перевозити продукцію, зберігати її, знаходити вигідні точки збуту, а також розподіляти її по торговим мережам.
			</p>

		</div>
	</div>
</div>

<div class="main-bottom">

    <div class="main-bottom-left">
        <div class="bottom-single-block">

            <div class="single-block">
                <h3>Email</h3>
                <p>kniosutneu@gmail.com</p>
            </div>

            <div class="single-block">
                <h3>Локація</h3>
                <p>м. Тернопіль, майдан Перемоги буд.3</p>
            </div>

            <div class="single-block">
                <h3>Офіс</h3>
                <p>ЗУНУ, корпус №2, Кабінет №2301</p>
            </div>

            <div class="single-block">
                <h3>Телефон</h3>
                <p>0985865006 | 0968000965</p>
            </div>


        </div>
    </div>

    <div class="main-bottom-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10353.746570075997!2d25.5642565!3d49.5517839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67e9a4189a2e63b3!2sKafedra%20Informatsiyno-Obchyslyuval%CA%B9nykh%20System%20Ta%20Upravlinnya%20Tneu!5e0!3m2!1sen!2sus!4v1589356212197!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</div>
</body>
</html>

<script type="text/javascript">
  // set and cache variables
  var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
		var mouseX = 0;
		var mouseY = 0;
		var mouseZ = 0;
		var addX = 0;
		
		
		// fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
		// no need to create my own :)
		var fps_counter = {
			
			tick: function () 
			{
				// this has to clone the array every tick so that
				// separate instances won't share state 
				this.times = this.times.concat(+new Date());
				var seconds, times = this.times;
        
				if (times.length > this.span + 1) 
				{
					times.shift(); // ditch the oldest time
					seconds = (times[times.length - 1] - times[0]) / 1000;
					return Math.round(this.span / seconds);
				} 
				else return null;
			},
 
			times: [],
			span: 20
		};
		var counter = Object.create(fps_counter);
		
		
		
		$(document).ready( init )
		
		function init()
		{
			w = $(window);
			container = $( '#contentContainer' );
			carousel = $( '#carouselContainer' );
			item = $( '.carouselItem' );
			itemLength = $( '.carouselItem' ).length;
			fps = $('#fps');
			rY = 360 / itemLength;
			radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
			
			// set container 3d props
			TweenMax.set(container, {perspective:600})
			TweenMax.set(carousel, {z:-(radius)})
			
			// create carousel item props
			
			for ( var i = 0; i < itemLength; i++ )
			{
				var $item = item.eq(i);
				var $block = $item.find('.carouselItemInner');
				
        //thanks @chrisgannon!        
        TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
				
				animateIn( $item, $block )						
			}
			
			// set mouse x and y props and looper ticker
			window.addEventListener( "mousemove", onMouseMove, false );
			ticker = setInterval( looper, 1000/60 );			
		}
		
		function animateIn( $item, $block )
		{
			var $nrX = 360 * getRandomInt(2);
			var $nrY = 360 * getRandomInt(2);
				
			var $nx = -(2000) + getRandomInt( 4000 )
			var $ny = -(2000) + getRandomInt( 4000 )
			var $nz = -4000 +  getRandomInt( 4000 )
				
			var $s = 1.5 + (getRandomInt( 10 ) * .1)
			var $d = 1 - (getRandomInt( 8 ) * .1)
			
			TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
			TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
			TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
			TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
		}
		
		function onMouseMove(event)
		{
			mouseX = -(-(window.innerWidth * .5) + event.pageX) * .0025;
			mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
			mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
		}
		
		// loops and sets the carousel 3d properties
		function looper()
		{
			addX += mouseX
			TweenMax.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
			TweenMax.set( carousel, {z:mouseZ } )
			fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
		}
		
		function getRandomInt( $n )
		{
			return Math.floor((Math.random()*$n)+1);	
		}
  </script>
