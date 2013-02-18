<?php include("config.php"); ?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<title>RCC</title>
	<meta name="description" content="RCC" />
	<meta name="keywords" content="RCC" />
	<meta name="author" content="RCC" />
	<meta name="copyright" content="GEMA" />
	<meta name="generator" content="GEMA - INTERACTIVE MEDIA" />
	<meta name="rating" content="general" />
	<meta name="distribution" content="global" />
	<meta name="revisit-after" content="15 days" />
	<meta name="expires" content="never" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />


	<link rel="stylesheet" href="http://www.rcc.pt/templates/css/resets.css" />
        <link rel="stylesheet" href="http://www.rcc.pt/templates/css/jquery.jscrollpane.css" />
        <link rel="stylesheet" href="http://www.rcc.pt/templates/css/bx_styles/bx_styles2.css" />
        <link rel="stylesheet" href="http://www.rcc.pt/templates/css/fancybox/fancybox.css" />
        <!--<link rel="stylesheet" href="http://www.rcc.pt/templates/css/styles.css" />-->
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
	<link rel="stylesheet" href="css/tabs.css" type="text/css" />
	<link rel="stylesheet" href="css/colorbox.css" />


        <link rel="shortchut icon" href="http://www.rcc.pt/templates/images/favicon.png" />

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/mwheelIntent.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.bxSlider.min.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.clearinput.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/frontend/site/langs/en.js"></script>
        <script type="text/javascript" src="http://www.rcc.pt/templates/js/interface.js"></script>
        <script type="text/javascript" src="js/chili-1.7.pack.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script src="js/jquery.colorbox.js"></script>

        <script type="text/javascript">
		var host = "http://www.rcc.pt";
		var lang = "en";
	</script>


        <script>
            $(function() {
              $( "#accordion" ).accordion(
				{active:false, collapsible: true, heightStyle: "content"});
            });
        </script>

	<script>
		var fabrics = {};
		var patTypes = {};
		var dislayPeca = {};
	</script>

	<script>
        $(document).ready(function() {


        $('.favSlider').bxSlider({
        	mode:'fade',
        	auto: false
		});

        //function insertCount(curr,count){
		//	$('#slide-counter').html('<strong>'+ (curr + 1) +'</strong>/'+ count);
		//};

        var slideCart = $('.cartSlider').bxSlider({
			  mode: 'fade',
			  auto: false,
			  adaptiveHeight: true,

			onSliderLoad: function (){
			var count = slideCart.getSlideCount();
			var curr = slideCart.getCurrentSlide();
			insertCount(curr,count);
			$('#slide_counter').html(count);
			},

			onSlideNext: function (){
			var count = slideCart.getSlideCount();
			var curr = slideCart.getCurrentSlide();
			insertCount(curr,count);
			},
			onSlidePrev: function (){
			var count = slideCart.getSlideCount();
			var curr = slideCart.getCurrentSlide();
			insertCount(curr,count);
			}



			});

			//var count = slideCart.getSlideCount();

			//var curr = slideCart.getCurrentSlide();

			//var count = slideCart.getSlideCount();
			//var curr = slideCart.getCurrentSlide();

        //dropdown
         $('#nav li').hover(
			function () {
			$('ul', this).stop().slideDown(100);
			},

			function () {
				$('ul', this).stop().slideUp(100);
			}
			);



		// assign the slider to a variable
		var slider = $('#banner-slider').bxSlider({
		    controls: false,
		    adaptiveHeight: true,
		    auto: false
		});

		// assign a click event to the external thumbnails
		$('.banner-pager a').click(function() {
		    var thumbIndex = $('..banner-pager a').index(this);
		    // call the "goToSlide" public function
		    slider.goToSlide(thumbIndex);

		    // remove all active classes
		    $('.banner-pager a').removeClass('pager-active');
		    // assisgn "pager-active" to clicked thumb
		    $(this).addClass('pager-active');
		    // kill the links default behavior
		    return false;
		});

		// assign "pager-active" class to the first thumb
		$('.banner-pager a:first').addClass('pager-active');

	    });

	</script>

        <script type="text/javascript">
            $.fn.cycle.defaults.timeout = 6000;
            $(function() {
                $('.s2').cycle({
                        fx:     'fade',
                        speed:  'fast',
                        timeout: 0,
                        //fit: 1,
                        //height: auto,
                        //containerResize: 0,
                        slideResize:   1,
                        next:   '.next2',
                        prev:   '.prev2'
                        });
                });
        </script>


        <script>
		$(function() {
		  $("#tabs").tabs();
		  $("#tabsMyRcc").tabs();
		});
		</script>


        <script src="js/jquery-ui.js"></script><!--accordion-->

	<!--[if gte IE 9]>
	<style type="text/css">
	.gradient {filter: none;}
	.gradient:hover {filter: none;}
	</style>
	<![endif]-->
</head>
<body>

    <?php
        $query_tecidos = mysql_query("Select * from tecidos");
        $query_tipoPeca = mysql_query("Select * from tipoPeca");
    ?>
        <div class="topMenu">
            <div class="container">
                <div>
                    <div class="logoTopo">
                        <a href="javascript:void(0)" onClick="goToMenu('homepage')" >
                            <img src="http://www.rcc.pt/templates/images/logo-client.png" /></a>
                    </div>
                    <div class="topRightMenu">

                    	<div class="menuTopoItem menuHeaderItem item_my-rcc">
                        	<a  href="javascript:void(0)" onClick="goToMenu('my-rcc')">
                            <span class="firstWord">My</span><span class="secondWord"> RCC</span></a>
                        </div>

                    	<div class="menuTopoItem menuHeaderItem item_my-cart">
                        	<a  href="javascript:void(0)" onClick="goToMenu('my-cart')">
                            <span class="firstWord">My</span><span class="secondWord"> CART</span></a>
                        </div>

                        <a class="redesLink tweeter" href="#"></a>
                        <a class="redesLink thumbler" href="#"></a>
                        <a class="redesLink facebook" href="#"></a>

						<div class="menuTopoItem menuHeaderItem item_my-login">
                        	<a  href="javascript:void(0)" onClick="goToMenu('my-login')">
                            <span class="firstWord">My</span><span class="secondWord"> LOGIN</span></a>
                        </div>

					</div>
                    <div class="clearer"></div>
                </div>
                <div class="menuTopo">
                    <div class="menuTopoItem item_our-story firstItem">
                        <a  href="javascript:void(0)" onClick="goToMenu('our-story')">
                            <span class="preWord">Our</span> story</a>
                    </div>
                    <div class="menuTopoItem item_behind-the-scenes">
                        <a  href="javascript:void(0)" onClick="goToMenu('behind-the-scenes')">
                            <span class="preWord">Behind</span> the Scenes</a>
                    </div>
                    <div class="menuTopoItem item_we-love">
                        <a  href="javascript:void(0)" onClick="goToMenu('we-love')">
                            <span class="preWord">We</span> Love</a>
                    </div>
                    <div class="menuTopoItem item_the-glossary">
                        <a  href="javascript:void(0)" onClick="goToMenu('the-glossary')">
                            <span class="preWord">The</span> Glossary</a>
		    </div>
		    <div class="menuTopoItem item_create-your-shirt">
                        <a  href="javascript:void(0)" onClick="goToMenu('create-your-shirt')">
                            <span class="preWord">Create</span> Your Shirt</a>
		    </div>
                    <div class="menuTopoItem item_contact-us">
                        <a  href="javascript:void(0)" onClick="goToMenu('contact-us')">
                            <span class="preWord">Contact</span> Us</a>
                    </div>
                    <script type="text/javascript">
				var arrayPags = new Array();
				arrayPags['#homepage']=0;
                arrayPags['#our-story']=1;
                arrayPags['#behind-the-scenes']=2;
                arrayPags['#we-love']=3;
                arrayPags['#the-glossary']=4;
				arrayPags['#create-your-shirt']=5;
                arrayPags['#contact-us']=6;
                arrayPags['#my-cart']=7;
                arrayPags['#my-rcc']=8;
				arrayPags['#my-login']=9;
				arrayPags['#my-buy']=10;
				var countPages = 11;
		    </script>
                    <div class="clearer"></div>
                    <div class="boxMenu"></div>
                </div>
                <div class="clearer"></div>
            </div>
        </div>
        <div class="pageViewPort">
            <div class="pageContender">
                <div class="subViewPort">
                    <div class="pageHolder">
                        <script type="text/javascript" >
                        $(document).ready(function(){starFadeAction1(2)});
                        </script>
                        <script type="text/javascript" >
                        $(document).ready(function(){starFadeAction2(2)});
                        </script>
                        <script type="text/javascript" >
                        $(document).ready(function(){starFadeAction3(2)});
                        </script>
                        <script type="text/javascript" >
                        $(document).ready(function(){starFadeAction4(2)});
                        </script>
                        <div class="conteudo">
                            <div class="container">
                                <div class="homeContainer">
                                    <div class="blocoLeft">
                                        <div class="destaque1">
                                            <div class="maskedImage">
                                                <img class="destaque1_0" style="margin-left:-94.712643678161px;
                                                margin-top:0px;" width="509.42528735632" height="277"
                                                src="http://www.rcc.pt/media/destaques/elem_media/5.thumb.jpg" />
                                                <img class="destaque1_1" style="margin-left:-2.9411764705882px;
                                                margin-top:0px;" width="325.88235294118" height="277"
                                                src="http://www.rcc.pt/media/destaques/elem_media/1.thumb.jpg" />
                                                <div class="textoDestaque1">
                                                    <p class="title1">Nothing great was ever achieved</p>
                                                        <p><span class="title1">without</span><span class="title2"> enthusiasm...</span></p>
                                                </div>
                                                <div class="topMask"></div></div>
                                            <div class="descricaoDestaque">
                                                <p>Here at RCC we aim to deliver an experience. One of distinction and quality,
                                                brought together by more than 30 years of know-how and true passion for our heritage
                                                and tradition.</p>
                                                        <p> </p>
                                                        <p>Deeply rooted within our company, our Portuguese ancestorsÕ spirit for
                                                        discovering new worlds and overcoming obstacles has driven us to pursue
                                                        excellence in the art of shirtmaking since 1978.</p>
                                            </div>
                                            <div class="linkDestaque1">
                                                <a href="javascript:void(0)" onclick="goToMenu('#')">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blocoRight">
                                        <div class="destaque2">
                                            <div class="destaquethumb">
                                                <div class="width:320px; height:210px; overflow:hidden">
                                                    <img class="destaque2_0" style="margin-left:0px; margin-top:-15px;"
                                                         width="320" height="240"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/6.thumb.jpg" />
                                                    <img class="destaque2_1" style="margin-left:0px; margin-top:-0.5px;"
                                                         width="320" height="211"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/2.thumb.jpg" />
                                                </div>
                                                <div class="textoDestaque2">
                                                    <p class="title1">Outstanding lead time and</p>
                                                        <p class="title2">Product Quality</p>
                                                </div></div></div>
                                        <div class="destaque2">
                                            <div class="destaquethumb">
                                                <div class="width:320px; height:210px; overflow:hidden">
                                                    <img class="destaque3_0" style="margin-left:0px; margin-top:-31px;"
                                                         width="320" height="272"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/7.thumb.jpg" />
                                                    <img class="destaque3_1" style="margin-left:0px; margin-top:0px;"
                                                         width="320" height="210"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/3.thumb.jpg" />
                                                </div>
                                                <div class="textoDestaque2">
                                                    <p class="title1">Create</p>
                                                        <p class="title2">Your Shirt</p></div>
                                                <div class="topRightLabel">
                                                    <span>made to</span> measure</div></div></div>
                                        <div class="clearer"></div>
                                        <div class="destaque4">
                                            <div class="destaquethumb">
                                                <div class="width:650px; height:354px; overflow:hidden">
                                                    <img class="destaque4_0" style="margin-left:0px; margin-top:0px;"
                                                         width="650" height="354"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/8.pos.jpg" />
                                                    <img class="destaque4_1" style="margin-left:0px; margin-top:0px;"
                                                         width="650" height="354"
                                                         src="http://www.rcc.pt/media/destaques/elem_media/4.pos.jpg" />
                                                </div>
                                                <a class="howButton" href="javascript:void(0)" onclick="goToMenu('behind-the-scenes')"></a>
                                            </div></div>
                                        <div class="clearer"></div>
                                    </div>
                                    <div class="clearer"></div>
                                </div></div></div></div></div>

                <div class="subViewPort">
                    <div class="pageHolder">
                        <div class="grayBar">
                            <div class="grayBarTitle">
                                <span class="firstWord">Our</span> <span class="secondWord">story</span></div></div>
                        <div class="container">
                            <div class="ourStory">
                                <div class="itemOur why" onClick="activeOurCol('why')">
                                    <div class="topoOur">
                                        <img width="320"  class="imageTopThumb fadeAction"
                                             src="http://www.rcc.pt/media/paginas/cat_media/6.pos2.png" alt="" />
                                        <div class="titleOur">Why</div></div>
                                    <div class="gradMaskTop ourMaskingTop"></div><div class="textOur jscroll fadeAction">
				    <p>With a well-established team of highly specialized professionals in the art of shirtmaking,
				    we are able to deliver the highest levels of service to our clients. Either in a Business-to-Business
				    or Business-to-Consumer approach, we have developed well articulated platforms to better
				    suit and accommodate your every need. We are currently offering a custom Made-to-Measure
				    service, available to both clients and partners worldwide, with an estimated delivery time of
				    10 working days. In order to comply with the highest quality standards, our Made-to-Measure (MTM)
				    line resorts only to Thomas Mason Bespoke fabrics, some of the finest in the world.</p>
                                                        <p> </p>
                                                        <p>We believe our shirts are quite unique, exuding a perfect mix of timeless elegance and state-of-the-art manufacturing techniques, resulting in a high-end product valued by handcraft, attention to detail and combined years of experience. As such, we are able to meet the demands of a wide client spectrum while maintaining our excellency standards and delivering luxury understated elegance.</p>
                                                        <p> </p>
                                                        <p> </p></div><div class="gradMaskBottom ourMaskingBottom"></div></div><div class="itemOur what" onClick="activeOurCol('what')"><div class="topoOur"><img width="320"  class="imageTopThumb fadeAction" src="http://www.rcc.pt/media/paginas/cat_media/5.pos2.png" alt="" /><div class="titleOur">What</div></div><div class="gradMaskTop ourMaskingTop"></div><div class="textOur jscroll fadeAction"><p>RCC shirts combine the best fabrics and materials with state-of-the-art development processes and the irreplaceable touch of skilled craftsmen. Our fabrics are sourced from the worldÕs leading mills, an unmistakable quality assurance that only the very best make it to our production. GRITTI provides us with a never ending array of button possibilities, from luxury mother-of-pearl to natural horn or bone, whereas WENDLER assures our outstanding interlinings.</p>
                                                        <p> </p>
                                                        <p>Every shirt we produce undergoes thorough quality control by experienced professionals, from development to production, to ensure a premium final product. All our shirts are hand-finished and we provide several options such as overdyeing, tie and dye, placed hand-grinding, worn-out effects, printing, embroidery and non-fused or stitch less collars. Split yokes, perfectly lined weaving rapports and 8 stitches per cm, some of the defining traits of luxury shirts, are the basic standard of an RCC shirt.</p>
                                                        <p> </p>
                                                        <p> </p></div><div class="gradMaskBottom ourMaskingBottom"></div></div><div class="itemOur who" onClick="activeOurCol('who')"><div class="topoOur"><img width="320"  class="imageTopThumb fadeAction" src="http://www.rcc.pt/media/paginas/cat_media/4.pos2.png" alt="" /><div class="titleOur">Who</div></div><div class="gradMaskTop ourMaskingTop"></div><div class="textOur jscroll fadeAction"><p>Here at RCC we aim to deliver an experience. One of distinction and quality, brought together by more than 30 years of know-how and true passion for our heritage and tradition. Deeply rooted within our company, our Portuguese ancestorsÕ spirit for discovering new worlds and overcoming obstacles has driven us to pursue excellence in the art of shirtmaking since 1978.</p>
                                                        <p> </p>
                                                        <p>ÒNothing great was ever achieved without enthusiasm...Ó</p>
                                                        <p> </p>
                                                        <p>Enthusiasm for the art, craftsmanship, manufacturing process and most of all, enthusiasm for creating the ultimate luxury shirt. This ever going quest for perfection and excellency, visible in each of our shirts, has allowed us to work with some of the worldÕs most renowned brands and fabric suppliers. Believing that confidentiality and discretion are key, we have established long lasting business relations with our partners, some of which for more than 15 years.</p>
                                                        <p> </p>
                                                        <p> </p></div><div class="gradMaskBottom ourMaskingBottom"></div></div><div class="clearer"></div></div></div></div></div><div class="subViewPort"><div class="pageHolder"><div class="grayBar"><div class="grayBarTitle"><span class="firstWord">Behind</span> <span class="secondWord"> the Scenes</span></div></div><div class="conteudo"><div class="container"><div class=imageContainer><div class="imageBehind"><img src="http://www.rcc.pt/templates/images/screenshot-video.jpg" /></div><div class="videoBall" onClick="openVideo()"></div><div class="videoBehind displayNone"><video id="videoPLBehind" width="980" height="488" controls="controls" >
                                                        <source src="http://www.rcc.pt/media/video.mp4" type="video/mp4" />
                                                        <source src="http://www.rcc.pt/media/video.ogv" type="video/ogg" />
                                                        Your browser does not support the video tag.
                                                        </video></div><div class="backVideo displayNone" onClick="closeVideo()"></div></div><div class="textContainer"><div class="gradMaskTop howWeDoItMask"></div><div class="titleLabel">How we do it</div><div class="textBehind jscroll"><p>At RCC we believe people are not replaceable: despite the overwhelming technological advances, an 8 stitches/cm premium shirt with the attention to detail we aim to deliver, is only possible to attain by means of a highly specialized and experienced hand.</p>
                                                    <p>By adapting our manufacturing process to bring the best of both worlds together, we are able to achieve a compelling craftsmanship/technology ratio that continuously sets new standards on our never-ending search for perfection. &#8203;</p>
                                                    <p>Our team is comprised of passion-driven professionals working together for a common purpose: producing the best luxury shirts in the world. We are a fully factored shirt company with a highly articulated manufacturing process, which ranges from fabric and product development to modeling and production... all done in-house with tight quality control throughout. To learn more about how our shirts are made click the video on the left.</p>
                                                    <p> </p>
                                                    <p class="contactostitle">Our fabrics</p>
                                                    <p class="contactostitle"> </p>
                                                    <p>Although manufacturing a premium shirt requires extensive know-how and skill, the materials used in the process are just as, if not more important than the experienced craftsmen who work them. In order to produce luxury shirts we need luxury fabrics and thatÕs why we go to lengths to source the best available worldwide. To deliver our clients a wide array of superior qualities, we work with high-end mills located in Europe but also in Brazil and Japan. Besides sourcing exquisite fabrics, we are proud of being of service when it comes to developing exclusive designs for our clients, allowing them to produce unique creations for their collections.</p>
                                                    <p>Our suppliers include ALBIATE, ALBINI, ALUMO, ARCO, BRENNET, CANCLINI, DAVID &amp; JOHN ANDERSON, GETZNER, HAUSAMANN + MOOS AG, LEGGIUNO, LIBERTY, MONTI, RIOPELE, SIC-TESS, SOKTAS, SOMELOS, TAKIHYO-MARUWA, THOMAS MASON AND THOMAS MASON BESPOKE, among others. For our menswear exclusive MTM service, we developed a collaboration with Thomas Mason Bespoke, ensuring our clients only the highest grade fabrics.</p>
                                                    <p> </p>
                                                    <p class="contactostitle">Our trimmings</p>
                                                    <p class="contactostitle"> </p>
                                                    <p>It is important that the remaining shirt components (trimmings) do justice quality-wise, to both fabric and know-how employed in its manufacturing. We offer a wide selection of luxury buttons from Gritti which range from mother-of-pearl to horn or bone, sourced from different parts of the world. Our interlinings come from Wendler and may be adjusted according to our clientsÕ liking, providing a softer or harder feel on collars, plackets and cuffs.</p>
                                                    <p> </p>
                                                    <p> </p>
                                                    <p> </p>
                                                    <p> </p>
                                                <p> </p></div>
                                                        <div class="gradMaskBottom howWeDoItMaskBottom"></div>
                                                        <div class="dowloadIcon" onClick="window.open('http://www.rcc.pt/media/RCC_Greetings.pdf')"><div class="dowload1">DOWNLOAD HERE</div>
                                                            <div class="dowload2">RCC presentation</div></div></div>
                                                        <div class="clearer"></div></div></div></div></div>
                <div class="subViewPort">
                    <div class="pageHolder">
                        <div class="grayBar">
                            <div class="grayBarTitle">
                                <span class="firstWord">We</span>
                                <span class="secondWord">Love</span>
                            </div></div>
                        <div class="conteudo">
                            <div class="container">
                                <div class="weLoveContainer">
                                    <div class="weLoveItem we_0 ">
                                        <div class="leftWeLove">
                                            <img style="margin-left:0px; margin-top:-0.37459283387622px;"
                                                 width="615" height="460.74918566775"
                                                 src="http://www.rcc.pt/media/posts/elem_media/3.pos.jpg"/>
                                            <div class="clearer"></div></div><div class="rightWeLove">
                                            <div class="blogData">2012-10-24 ¥ 12:34</div>
                                            <div class="blogTitle">Testing Blog Posts</div>
                                            <div class="blogText"><p>Our blog is coming soon, stay tuned!!</p></div>
                                            <div class="blogHashTags">#fashion #style #dondraper #madmen </div></div>
                                        <div class="clearer"></div>
				    </div>
                                    <div class="weLoveItem we_1 ">
					<div class="leftWeLove">
						<img style="margin-left:0px; margin-top:-23.94973070018px;"
						     width="615" height="507.89946140036"
						     src="http://www.rcc.pt/media/posts/elem_media/5.pos.jpg"/>
						<div class="clearer"></div>
					</div>
					<div class="rightWeLove">
						<div class="blogData">2012-12-11 ¥ 19:48</div>
						<div class="blogTitle">Teste Blog</div>
						<div class="blogText"><p>Testing the blog posts</p></div>
						<div class="blogHashTags">#teste </div>
					</div>
					<div class="clearer"></div>
				    </div>
				    <div class="clearer"></div>
				    <div class="controlls">
					<div><a href="javascript:void(0);" onClick="changeBlog('left')" class="weArrow leftWe"></a></div>
					<div class="itemCount countText"></div>
					<div class="numPost countText">/2</div>
					<div><a href="javascript:void(0);" onClick="changeBlog('right')" class="weArrow rightWe"></a></div>
				    </div>
				</div>
			    </div>
			</div>

			<script type="text/javascript">
				setPostInit('0');
				numPosts=2
			</script>

		    </div>
		</div>

		<div class="subViewPort">
			<div class="pageHolder">
				<div class="grayBar">
					<div class="grayBarTitle">
						<span class="firstWord">The</span> <span class="secondWord">Glossary</span>
					</div>
				</div>
				<div class="conteudo">
					<div class="container">
						<div>
							<div class="glossaryCat">
								<div class="contenderLetras">
									<a href="javascript:void(0)"
									   onclick="openTab('letter_13','tabs_13')"
									   class="gcattitle letter_13  selected">A</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_14','tabs_14')"
									   class="gcattitle letter_14  class=""">B</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_15','tabs_15')"
									   class="gcattitle letter_15  class=""">C</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_29','tabs_29')"
									   class="gcattitle letter_29  class=""">D</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_30','tabs_30')"
									   class="gcattitle letter_30  class=""">E</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_32','tabs_32')"
									   class="gcattitle letter_32  class=""">F</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_33','tabs_33')"
									   class="gcattitle letter_33  class=""">G</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_34','tabs_34')"
									   class="gcattitle letter_34  class=""">H</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_35','tabs_35')"
									   class="gcattitle letter_35  class=""">I</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_36','tabs_36')"
									   class="gcattitle letter_36  class=""">J</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_38','tabs_38')"
									   class="gcattitle letter_38  class=""">K</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_39','tabs_39')"
									   class="gcattitle letter_39  class=""">L</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_40','tabs_40')"
									   class="gcattitle letter_40  class=""">M</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_41','tabs_41')"
									   class="gcattitle letter_41  class=""">N</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_42','tabs_42')"
									   class="gcattitle letter_42  class=""">O</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_43','tabs_43')"
									   class="gcattitle letter_43  class=""">P</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_44','tabs_44')"
									   class="gcattitle letter_44  class=""">Q</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_45','tabs_45')"
									   class="gcattitle letter_45  class=""">R</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_46','tabs_46')"
									   class="gcattitle letter_46  class=""">S</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_47','tabs_47')"
									   class="gcattitle letter_47  class=""">T</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_48','tabs_48')"
									   class="gcattitle letter_48  class=""">U</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_49','tabs_49')"
									   class="gcattitle letter_49  class=""">V</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_50','tabs_50')"
									   class="gcattitle letter_50  class=""">W</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_51','tabs_51')"
									   class="gcattitle letter_51  class=""">X</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_52','tabs_52')"
									   class="gcattitle letter_52  class=""">Y</a>
									<a href="javascript:void(0)"
									   onclick="openTab('letter_53','tabs_53')"
									   class="gcattitle letter_53  class=""">Z</a>
									<div class="clearer"></div>
								</div>
								<div class="glossaryMedia">
									<ul id="Glossary">
										<li><img style="margin-left:0px; margin-top:-8.6142322097378px;"
											 width="290" height="217.22846441948"
											 src="http://www.rcc.pt/media/paginas/cat_media/7.pos.jpg" />
										</li>
										<li><img style="margin-left:0px; margin-top:-8.6142322097378px;"
											 width="290" height="217.22846441948"
											 src="http://www.rcc.pt/media/paginas/cat_media/8.pos.jpg" />
										</li>
										<li><img style="margin-left:-32.514792899408px; margin-top:0px;"
											 width="355.02958579882" height="200"
											 src="http://www.rcc.pt/media/paginas/cat_media/9.pos.png" />
										</li>
									</ul>
								</div>
							</div>
							<div class="glossaryElem">
								<div class="gradMaskTop glossaryMaskingTop"></div>
								<div class="tabsConteudo tabs_13 " >
									<div class="lista_item listaitem_tabs_13">
										<p class="itemtitle">Armhole</p>
										<p>is the opening in the shirt where your arm goes. Usually, armhole is used to express the measure from the shirt's shoulder to its armpit, allowing to perceive the arm's mobility when wearing the shirt. Most commonly, armholes are either "high", meaning that the shirt has a sleeker silhouette and tight sleeves or "low" if the sleeves are baggier and allow for added mobility.</p>
										<p class="itemtitle"><span>Albiate</span></p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Albini</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Alumo</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p> </p></div></div><div class="tabsConteudo tabs_14 displayNone" ><div class="lista_item listaitem_tabs_14"><p class="itemtitle">Buttons</p>
										<p>are a shirt's main trimmings and are responsible for securing it to our body. They can come in a variety of materials, shapes and sizes, where mother-of-pearl is the top and plastic the lowest grade.</p>
										<p class="itemtitle">Broadcloth</p>
										<p>a thin, breathable and durable tight weave featuring a slight sheen. Its lighweight and thinness make it appropriate for dressier shirts. </p></div></div><div class="tabsConteudo tabs_15 displayNone" ><div class="lista_item listaitem_tabs_15"><p class="itemtitle">Canclini</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Collar</p>
										<p>is a specific component of the shirt that frames the neck. It is folded over itself, allowing the use of neckwear such as ties or bowties and may come in a wide range of designs. Collars have evolved through history, reflecting trends and cultures and the different models apply to a variety of occasions, from formal to casual. In what regards the application of interlinings, we offer the option of choosing between fused or non-fused/floating collars.</p>
										<p class="itemtitle">Collar Stays</p>
										<p>are small strips of plastic or other more luxurious materials (silver, horn, gold), with one rounded edge and another pointy, which are meant to keep the collar looking sharp and imacculate. They are usually included in luxury shirts with wider colars and are placed underneath the collar in a specific pouch.&#8203;</p>
										<p class="itemtitle">Cuff</p>
										<p>is the lower part of the sleeve which covers the wrist. They can be simple if an extra layer of fabric is sewn to the sleeve, or double (also known as French) if the fabric is folded back over itself. Button cuffs are more casual and use buttons as a fasten mechanism, whereas link cuffs are more formal and meant to be worn with cufflinks or knots.</p>
										<p class="itemtitle">Cuff Placket</p>
										<p>w&#8203;hen sleeves feature tight fitting cuffs, there is the need for an additional opening before the cuff to insert the hand. That opening is usually finished with the so called cuff or sleeve placket and may have buttons to prevent the forearm from showing.</p>
										<p class="itemtitle">Cufflinks</p>
										<p>are the most common way to fasten french cuffs and were originally considered to be one of the only acceptable pieces of jewelry for a man, along with a watch. The cufflink locks together both ends of the double cuff securing it in place and preventing it from opening. Cufflinks come in a variety of shapes, sizes, materials and designs.</p>
										<p class="itemtitle">Collar Pin</p>
										<p>reminiscent of gentlemen of old, the collar pin is another piece of men's jewelry meant to bring both ends of a shirt collar together. Much like a collar tab, it holds the collar in place and allows for an elevated tie knot, creating that much<strong>&#8203;</strong>.</p>
										<p class="itemtitle">Chambray</p>
										<p>a particular type of End on End weaving, where the different colored warp and weft yarns create a distinct iridiscent effect. </p>
										<p class="itemtitle">Cotton</p>
										<p>One of the first natural fibers to be used by Man, cotton dates back to Biblical times. The amount of varieties available and its unique characteristics, has placed cotton at the top of the most used materials in the textile industry. Most of our premium shirts are made from 100% cotton or rich cotton blended fabrics, resorting only to the most exquisite varieties known for their luxurious aspect, texture, resistance and feel. </p>
										<p> </p></div></div><div class="tabsConteudo tabs_29 displayNone" ><div class="lista_item listaitem_tabs_29"><p class="itemtitle">Darts</p>
										<p>back darts are stitched folds of fabric running down the back of the shirt to give it a fitted appearance and sleek silhouette. They are usually found in most slim fitting shirt to further emphasize the tailored look and slimming effect.</p>
										<p class="itemtitle">David &amp; John Anderson</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Dobby</p>
										<p>are all the different weaving effects possible to reproduce on a fabric by using a specific loom called Dobby. Higher complexity effects are usually reffered to as Jacquard.</p>
										<p class="itemtitle">Dip Dye</p>
										<p>is a process where garments are partially dipped into a contrasting color dye. As only part of the garment absorbs the dye, the remaining fabric maintains its original color, creating a unique transitioning faded effect from one shade to the next.</p></div></div><div class="tabsConteudo tabs_30 displayNone" ><div class="lista_item listaitem_tabs_30"><p class="itemtitle">End on End</p>
										<p>is a unique texture attained by mixing different colored threads, usually a proeminent shade combined with white. It was originally invented by the French and goes by the name "fil-ˆ-fil".</p>
										<p class="itemtitle">Embroidering</p>
										<p>is the technique of embellishing fabrics by stitching yarns or other elements onto them. In shirtmaking, embroidery usually relates to monograms of the client's initials or the brand's logo or motif.</p>
										<p> </p></div></div><div class="tabsConteudo tabs_32 displayNone" ><div class="lista_item listaitem_tabs_32"><p class="itemtitle">Fit</p>
										<p>also reffered to as wearability, it translates the cut of the shirt and how it fits the body. We currently offer three different fits: classic, modern and slim, to accomodate all our customers' needs.</p>
										<p class="itemtitle">Fly Front</p>
										<p>when the front buttons are hidden by a flap of fabric, the shirt is called fly front. This is the most formal type of front and is usually advised for black tie events as it gives the shirt a pristine, sharp look. </p>
										<p class="itemtitle">Fused Collars</p>
										<p>a shirt's collar is comprised of two pieces, top and bottom with an interlining in between to add support and stiffness. These two pieces can be secured together either by fusing or sewing. Fused collars are made by heating the interlining and glueing it together with a fusing machine; this results in a sturdy, stiff collar which make them ideal from dress shirts.</p>
										<p class="itemtitle">Fully Factored Manufacturing</p>
										<p>is a complete production model where a company sources the fabrics, develops and models its product which then goes into manufacturing. RCC is proud of working within this model.</p></div></div><div class="tabsConteudo tabs_33 displayNone" ><div class="lista_item listaitem_tabs_33"><p class="itemtitle">Gusset</p>
										<p>is a piece of fabric of polygonal shape which is inserted into seams for added resistance at particular points subject to stress. They are usually triangular and can be found at the hemline seam where the shirt's front and back panels meet.<strong>&#8203;</strong></p>
										<p class="itemtitle">Giza 45 Cotton</p>
										<p>One of the extra long staple (36.0 mm) Egyptian cottons, the Giza 45 is renowned for having the finest  fibers of all varieties. However, it still produces highly resistant fabrics with a silky-smooth feel.</p>
										<p> </p>
										<p class="itemtitle">Giza 87 Cotton</p>
										<p>One of the extra long staple (35.1 mm) Egyptian cottons, the Giza 87 is renowned for the high brightness of its fibers. Although similar to Giza 45 in fiber length, the resulting fabrics present lower stretching and resistance.</p>
										<p> </p>
										<p class="itemtitle">Giza 88 Cotton</p>
										<p>One of the extra long staple (35.0mm) Egyptian cottons, the Giza 88 has the highest production of all, being the most suitable to produce yarns thanks to its combination of resistance, brightness and texture.</p>
										<p class="itemtitle">Gingham</p>
										<p>originally a striped pattern from Malaysia, gingham later evolved into its checked nature upon being imported to Europe. </p></div></div><div class="tabsConteudo tabs_34 displayNone" ><div class="lista_item listaitem_tabs_34"><p class="itemtitle">Hang Loop</p>
										<p>as the name states, this strip of fabric located at the shirt's back was originally meant to leave it hanging on closet hanger hooks. This is believed to be an American heritage reminiscent of college life and is usually associated with casual shirts such as oxford cloth button downs. </p>
										<p class="itemtitle">Hem</p>
										<p>is the lower end of the shirt where the fabric is sewn over itself to prevent it from tearing apart. There are several models of hemlines that serve different purposes: for instance, a shirt with a short, straight hemline is appropriate to wear untucked whereas a business shirt usually has a long curved hemline which is better to tuck it in.</p>
										<p class="itemtitle">Herringbone</p>
										<p>creates a unique zigzag effect by reversing a diagonal pattern in equal width bands. The name comes from the pattern's resemblance to the herring's skeleton. </p></div></div><div class="tabsConteudo tabs_35 displayNone" ><div class="lista_item listaitem_tabs_35"><p>No definitions!</p></div></div><div class="tabsConteudo tabs_36 displayNone" ><div class="lista_item listaitem_tabs_36"><p>No definitions!</p></div></div><div class="tabsConteudo tabs_38 displayNone" ><div class="lista_item listaitem_tabs_38"><p>No definitions!</p></div></div><div class="tabsConteudo tabs_39 displayNone" ><div class="lista_item listaitem_tabs_39"><p class="itemtitle">Long and Extra Long Staples</p>
										<p>Staple refers to the length of cotton fibers. Long staple fibers measure over 33.0 mm and are stronger, more expensive and luxurious than shorter staple cottons. Egyptian, Sea Island and Pima cottons are known for their long staples.</p>
										<p> </p></div></div><div class="tabsConteudo tabs_40 displayNone" ><div class="lista_item listaitem_tabs_40"><p class="itemtitle">Monogram</p>
										<p>is the combination of two or more letters, usually portraying the client's initials, which is then embroidered onto the shirt. They can be featured in a variety of places within the shirt, use different fonts and contrasting color threads for extra visual impact.<strong>&#8203;</strong></p>
										<p class="itemtitle">Monti</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Mother-of-Pearl</p>
										<p>is a composite material produced by some molusks to use as inner shell. It is a resistant and iridescendent material, producing different efects according to the light. Considered to be the best choice for luxury short buttons.<strong>&#8203;</strong></p></div></div><div class="tabsConteudo tabs_41 displayNone" ><div class="lista_item listaitem_tabs_41"><p class="itemtitle">Non-Fused Collars</p>
										<p>a shirt's collar is comprised of two pieces, top and bottom with an interlining in between to add support and stiffness. These two pieces can be secured together either by fusing or sewing. Non-fused collar are made by meticulously stitching the interlining together as done traditionally by tailors; this results in a softer, more comfortable collar which is also more resistant. </p>
										<p class="itemtitle">Needle Table</p>
										<p>as the name states this table allows for the application of several needles and is a crucial part of manufacturing a perfectly balanced premium shirt. It allows for a perfect alignment of the shirt's raport/pattern on its individual components, ensuring a paramount final product.</p></div></div><div class="tabsConteudo tabs_42 displayNone" ><div class="lista_item listaitem_tabs_42"><p class="itemtitle">Oxford Cloth</p>
										<p>the epytome of casual, relaxed shirts, oxford cloth owes its name to the British city of Oxford where it was worn by college students. It's heavier and more resistant than most fabrics, and usually features a colored fine warp against a wider white weft, resulting in a basket weave effect. Perfect for casual button down shirts.</p>
										<p class="itemtitle">Overdyeing</p>
										<p>originally<strong>, </strong>yarn threads come in natural or raw and are later dyed to achieve specific coloring. Overdyeing is a technique where the dyeing process is repeated several times so the garment conveys a unique look and feel.<strong>&#8203;</strong></p></div></div><div class="tabsConteudo tabs_43 displayNone" ><div class="lista_item listaitem_tabs_43"><p class="itemtitle">Premium Shirt </p>
										<p>is a luxury shirt made using only the finest fabrics and trimmings, whilst incorporating outstanding attention to detail. Such a high-end shirt is only achievable through extensive know-how and experienced craftsmen.</p>
										<p class="itemtitle">Placket Front</p>
										<p>on a shirt front, the placket reverts to the edge of the overlapping left panel with the buttonholes in it. It is often comprised of more than one layer of fabric with interlining in between, for added support and resistance when worn. On a placket front shirt, the placket is a separate piece all together.</p>
										<p class="itemtitle">Plain/French Front</p>
										<p>when there is no separate placket element on the shirt front, the edge of the fabric is folded over and creased being held together simply by the button holes. This gives the shirt a cleaner look and is a more formal approach. <strong>&#8203;</strong></p>
										<p class="itemtitle">Pleats</p>
										<p>back pleats are meant to better adapt the shirt to the shape of its wearer's back. As the human back is not plain, pleats allow the fabric to drape better over the back. Box pleats are located at the center back, whereas side pleats are placed towards the edges of the shirt. Although common in ready-to-wear alternatives, custom made shirts should be able to fit perfectly without the need for pleats which make the shirt more casual and busy at the back.</p>
										<p class="itemtitle">Pocket</p>
										<p>shirts may include one or two chest pockets according to their model. It is usually associated with more relaxed shirts, although some business versions do carry a left chest pocket. Dual chest pockets relate to workwear and are usually sported in cowboy / denim shirts.</p>
										<p class="itemtitle">Ply</p>
										<p>is the amount of yarns which are twisted together to make a single thread. Fabrics can be single-ply, two-ply or three-ply depending if one, two or three yarns are twisted together to make a single thread which is then woven into the fabric. Usually, higher ply counts mean higher quality fabrics.</p>
										<p class="itemtitle">Poplin</p>
										<p>Also known as tabinet, it is one the most traditional weaves used in dress shirts, dating back to the 1960s. Poplin weave features a 1/2 ratio between weft picks and warp ends. It produces rigid fabrics which do not wrinkle easily and make it easy to iron.</p>
										<p class="itemtitle">Piquet</p>
										<p>is a double faced cotton cloth characterized by raised weaving effects. This gives it a perforated feel with added breathability.</p>
										<p class="itemtitle">Pinpoint Oxford</p>
										<p>is similar to the traditional oxford but with a finer yarn and tighter weave. It's between broadcloth and oxford when it comes to weight and formality.</p>
										<p class="itemtitle">Panama</p>
										<p>is reminiscent from a plain weave but in this case warp and weft threads are crossed in pairs, two picks and two ends. The result is a unique weave resembling that found on Panama straw hats.</p></div></div><div class="tabsConteudo tabs_44 displayNone" ><div class="lista_item listaitem_tabs_44"><p class="itemtitle">Quintessential</p>
										<p>a commonly used term when it comes to custom made or bespoke garments, it means to embody the purest essense of something, to be its perfect representation.</p></div></div><div class="tabsConteudo tabs_45 displayNone" ><div class="lista_item listaitem_tabs_45"><p class="itemtitle">Royal Oxford</p>
										<p>although bearing the same name as the abovementioned, Royal Oxford is in a league of its own when it comes to high-end fabrics. It features great texture, shine and softness and the use of fine yarns such as 80s or 100s make it perfect for elegant dress shirts with a regal feel.</p>
										<p class="itemtitle">Rich Blends</p>
										<p>Although most of our luxury fabrics are 100% cotton, there are a few alternatives which combine other natural or synthetic fibres to suit particular purposes or give the shirt a certain feel. These are called rich blends and include combinations of cotton and: linen (breathability), nylon/lycra (stretching), satin (cerimonial) or silk (lightweight and softness).  </p></div></div><div class="tabsConteudo tabs_46 displayNone" ><div class="lista_item listaitem_tabs_46"><p class="itemtitle">Sleeve</p>
										<p>is the part of the shirt attached to the armhole which covers the arm up to the cuff. Sleeves width vary according to the shirt's fit, being wider in the "Classic" model and tighter in the "Slim Fit" version. Sleeves can also be long or short, although short sleeve shirts are only acceptable in very casual scenarios, whereas long sleeves are an all rounder.<strong>&#8203;</strong></p>
										<p class="itemtitle">Sic-Tess</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Somelos</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Supima Cotton</p>
										<p>Is grown in West/South-West areas of the United States and represents the go to choice for white fabric shirts. Due to residual pollution levels in this area, Supima cotton fibers are much more pristine than their counterparts, making them perfect for use in white fabrics.</p>
										<p class="itemtitle">Sea Island Cotton</p>
										<p>It is the longest staple cotton (reaching up to 39.0 mm) and can be found in top-quality shirting fabrics. Sea Island cotton is sourced from the West Indies and processed manually so as not to ruin the fibers.</p>
										<p class="itemtitle">Single-Needle</p>
										<p>is a type of fine seam using only one line of stitching, which gives it a more polished look for dress shirts. However, in some of the shirt's stress points this type of stitching is less resistant than its double counterpart.</p></div></div><div class="tabsConteudo tabs_47 displayNone" ><div class="lista_item listaitem_tabs_47"><p class="itemtitle">Takihyo-Maruwa</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Thread</p>
										<p>is a type of yarn intended for sewing by hand or machine. Modern manufactured sewing threads may be finished with wax or other lubricants to withstand the stresses involved in sewing. Embroidery threads are yarns specifically designed for hand or machine embroidery.</p>
										<p class="itemtitle">Thread Count</p>
										<p>is the number of hanks per pound of fabric: 1 hank = 840 yards is the number of threads woven together in a square inch of fabric and can be identified by the numbers that accompany the fabricÕs reference, such as 50s, 80s, 100s, etc. Usually, higher thread counts result in silkier, smoother, higher quality fabrics which accounts for the increase in price. </p>
										<p class="itemtitle">Thomas Mason</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC.</p>
										<p class="itemtitle">Thomas Mason Bespoke</p>
										<p>One of the worldÕs top leading mills and premium supplier of outstanding fabrics to RCC, dedicated to our MTM service.</p>
										<p class="itemtitle">Twill</p>
										<p>is easily recognized by its distinct diagonal pattern. The parallel lines are accomplished by crossing the weft threads over and under the warp threads. Due to this type of construction, twill fabrics drape well.</p>
										<p class="itemtitle">Tie and Dye</p>
										<p>is a dyeing process where the fabric is folded into a specific pattern and tied with rubber bands. Dye in then applied only to some parts of the fabric, allowing for an uneven effect as the dye is unable to penetrate the tied portions. Several colors may be applied to create one of a kind patterns. </p>
										<p class="itemtitle">Twin-Needle</p>
										<p>a more resistant type of seam using double stitching lines, which despite not portraying such a clean look makes the shirt more durable. </p></div></div><div class="tabsConteudo tabs_48 displayNone" ><div class="lista_item listaitem_tabs_48"><p>No definitions!</p></div></div><div class="tabsConteudo tabs_49 displayNone" ><div class="lista_item listaitem_tabs_49"><p class="itemtitle">Voile</p>
										<p>a very light, translucent fabric mostly used in more fashionable garments. Its open, breathable feel is the result of twisting the yarns together very tightly.</p></div></div><div class="tabsConteudo tabs_50 displayNone" ><div class="lista_item listaitem_tabs_50"><p class="itemtitle">Warp</p>
										<p>fabrics consist in a web of threads running vertically and horizontally. Warp is the name given to the vertical threads.</p>
										<p class="itemtitle">Weft</p>
										<p>fabrics consist in a web of threads running vertically and horizontally. Weft is the name given to the horizontal threads.</p>
										<p class="itemtitle">&#8203;Washes</p>
										<p>in order to create unique textures and feel, we offer a variety of washes that tweak fabrics in unique ways. Softening, distressing, or crinkling are some of the effects we are able to create, always while ensuring minimal shrinkage. </p>
										<p class="itemtitle">Worn-Out Effects</p>
										<p>We are able to give our shirts different types of worn-out effects, resorting to several techniques such as particular washes, placed grinding and abrasion. Doing it by hand allows us to accurately determine which areas to distress, in order to achieve a unique result according to the client's liking.</p>
										<p class="itemtitle">Weaving</p>
										<p>is a method of fabric production in which two distinct sets of yarns or threads are interlaced at right angles to form a fabric or cloth.</p></div></div><div class="tabsConteudo tabs_51 displayNone" ><div class="lista_item listaitem_tabs_51"><p>No definitions!</p></div></div><div class="tabsConteudo tabs_52 displayNone" ><div class="lista_item listaitem_tabs_52"><p class="itemtitle">Yoke</p>
										<p>is the part of a shirt's back which stretches across the shoulders. Most shirts present a single yoke, meaning that only one piece of fabric is used. However, luxury or custom made shirts often present the option of a split yoke, meaning that the yoke is actually made from two separate pieces of fabric, joint at an angle at the center of the shoulder line. This allows for added comfort and mobility, since the biased fabric moves along with each individual shoulder. </p>
										<p class="itemtitle">Yarn</p>
										<p>is a long continuous length of interlocked fibres, suitable for use in the production of textiles, sewing, crocheting, knitting, weaving, embroidery and ropemaking.</p>
									</div>
								</div>
							<div class="tabsConteudo tabs_53 displayNone" >
								<div class="lista_item listaitem_tabs_53"><p>No definitions!</p></div>
							</div>
							<div class="gradMaskBottom glossaryMaskingBottom"></div>
							</div>
							<div class="clearer"></div>
						</div>
						<div class="clearer"></div>
					</div>
				</div>
			</div>
		</div>

	<div class="subViewPort">
        <div class="pageHolder">
            <div class="grayBar">
                <div class="grayBarTitle">
                    <span class="firstWord">Create</span>
                    <span class="secondWord">YOUR SHIRT</span>
                </div>
            </div>
            <div class="conteudo createYour">
                <div class="container">
                    <div class="createContainer">

	<div id="banner">

                <div class="banner-nav">

                    <div class="banner-pager">
                      <a href="">CREATE YOUR SHIRT</a>
                      <a href="">COSTUMER SERVICE</a>
                      <a href="">LIMITED EDITIONS</a>
                      <a href="">RCC EXPERIENCE</a>
                    </div>

                </div>

                <div class="banner-wrap">

                    <ul id="banner-slider">

                        <li class="list-slide">
                            <div class="banner-slide">
				<!--Start of create your shirt-->

			<div class="blocoLeft">
                        <div class="titleYourCustom">Your custom Shirt</div>
                        <div class="pieceSlider">
                            <form action="">
                                <div id="accordion" class=" basic slider">
                               <!--
                                <ul class="sliderPeca">
								  <li>um lojerwadfsipoj ipsjadfij</li>
								  <li>dois lkjewfdsj ljasdfk lisjdf</li>
								  <li>tres lkjdfs lkjafsd </li>
								</ul>
								-->
                                  <?php

                                        $counter2 = 0;

                                        while ($result_tipoPeca = mysql_fetch_array($query_tipoPeca))
                                        {
                                        ?>

                                        <h3 class="pieceTitle">
                                        <span class="adjust"><?php echo $result_tipoPeca['nomeTipoPeca']?></span>
                                        </h3>
                                       <div>
                                            <div class="s2" class="pics">
                                            <?php
                                                $query_pecas = mysql_query("Select * from peca
                                                            where idTipoPeca = ".$result_tipoPeca['idTipoPeca']."");

                                                while($result_pecas = mysql_fetch_array($query_pecas)){

                                                    if(($counter2 % 3) == 0){
                                                        echo "<div class='teste'>";
                                                    }
                                            	?>
                                                    <table>
                                                        <tr>
                                                            <td><input type="radio" name="peca" onchange=""/>
                                                            <br/>
                                                            <img src="<?php echo $result_pecas['image'];?>" width="90"/>
                                                            <br/>
                                                            <?php echo $result_pecas['nomePeca']; ?></td>
                                                        </tr>
                                                    </table>

                                            <?php
                                                    if ((($counter2 + 1)% 3) == 0)
                                                    {
                                                        echo "</div>";
                                                    }
                                                        $counter2 ++;
                                                }
                                            ?>

                                            </div> <!--fecha o s2 -->
                                            <div class="clearer"></div>
                                            <div class="nav">
                                            <a class="prev2" href="javascript:void(0)">Prev</a>
                                            <a class="next2" href="javascript:void(0)">Next</a>
                                            </div>



										</div>

                                        <?php
                                        }
                                        ?>

                                </div><!-- acodrion-->
                                </form>
                        </div><!--pieceslider-->
                        </div><!-- blocoLeft-->

                        <div class="blocoCenter">
                            <img src="images/camisa.png" width="330"/>
                        </div>


				<script>

				/*
				function testeTecido(str){
					alert(str);
				}
				*/

				function showTecido(str)
				{
				if (str=="")
				  {
				  document.getElementById("tabs-1").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    document.getElementById("tabs-1").innerHTML=xmlhttp.responseText;
				    }
				  }
				xmlhttp.open("GET","getTecido.php?q="+str,true);
				xmlhttp.send();
				}

				</script>


                        <div class="blocoRight">
                            <div class="titleYourFabrics">Your Fabrics</div>

                            <div id="tabs">
                                <ul>
                                  <li><a href="#tabs-1">MAIN</a></li>
                                  <li><a href="#tabs-2">CONTRASTS</a></li>
                                </ul>

								<?php
								$query_padroes = mysql_query("Select * from padrao");
								?>

                                <div class="filters">
                                    	<ul id="nav">
										<li class="mostPopular"><a href="javascript: void(0)" onclick="showTecido('popular')">Most Popular</a></li>
                                    	<li><a href="javascript: void(0)" onclick="showTecido('all')">View All</a></li>

											<li><a href="javascript: void(0)">Smart Filter</a>
												<ul>
												<?php
													while($result_padroes = mysql_fetch_array($query_padroes))
													{
												?>
													<li class="filhos">
														<a href="javascript: void(0)" onclick="showTecido('<?php echo $result_padroes['0'];?>')">
															<?php echo $result_padroes['nome'];?>
														</a>
													</li>
												<?php
													}
												?>
												</ul>
												<div class="clearer"></div>

											</li>
                            			</ul>
                                    	<!--
                                    	<input type="button" value="Most Popular" onclick="showTecido('popular')"/>
                                    	<input type="button" value="View All" onclick="showTecido('all')"/>
                                    	<input type="button" value="Smart Filter" onclick="testeTecido(this.value)"/>
                                    	-->

									</div>

                                <div class="tabs_border jscroll">



                        <div id="tabs-1">

                        <table>

                        <?php

                            $counter = 0;

                            while ($result_tecidos = mysql_fetch_array($query_tecidos))
                            {
                            	if (($counter % 3) == 0){
                                echo "<tr>";
                            }
						?>


                        <td>
                        <a class='group2' href='#create-your-shirt' ondblclick="callColor()" data-img="<?php echo $result_tecidos['imageBig']; ?>">
						<img src=" <?php echo ($result_tecidos['image']); ?> " width='74' height='74'/></a>
						</td>

						<?php
                            if ((($counter+1) % 3) == 0){
                            echo "</tr>";
                            }

                            $counter ++;

                        }

                        ?>
                      </table>

                      <script>
                      function callColor(){
                      	$.colorbox({href:event.currentTarget.getAttribute('data-img')})
					  }
					     //$("a.group2").on("click", function(event){
					     	//$.colorbox({href:event.currentTarget.getAttribute('data-img')})
						 //});
						</script>

                    </div>



                                    <div id="tabs-2">
                                      <p>Morbi tincidunt, dui sit amet facilisis feugiat,
                                      odio metus gravida ante, ut pharetra massa.</p>
                                    </div>

                                </div><!--fecha tabs_border-->
                                <!--<div class="coverBlock"></div>-->
                            </div><!--fecha tabs-->

                            <div class="autoPriceText">
	                            <span class="estimatedText">Your Estimated Price:</span><span class="estimatedPrice"> 78.00&euro;</span>
                            </div>
                            <div class="autoPriceButton">
								<input type="button" class="butaoenviar fontLight colorGold" value="ADD TO CART"/>
	                            <input type="button" class="butaoenviar fontLight" value="CHECKOUT"/>
                            </div>
                            <div class="clearer"></div>
                        </div>
                        <div class="clearer"></div>


			    </div>
                        </li>
                        <li class="list-slide">
                            <div class="banner-slide">
				<div class="blocoLeft_costumerPage">
					<div class="costumer_contact">
						<div class="contactostitle">Contact US</div>
						<form id="costumerForm" action="#" method="post" onsubmit="return false">
							<div>
							<textarea class="costumer_textArea" id="costumer_message" name="form[costumer_messagem]">Text here...</textarea>
							</div>
							<div>
								<input class="butaoEnviar" type="button" value="SUBMIT"
								       onclick="submitFormulario('contactForm')"></div>
							<input type="hidden" name="form[from]"  value="message"/></form>
					</div>
				</div>

				<div class="blocoCenter_costumerPage">
					<div class="costumer_contact">
						<div class="contactostitle">How to measure</div>
						<div class="costumerText jscroll">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus urna orci,
							vehicula vel interdum pellentesque, auctor auctor nibh. Fusce faucibus luctus
							sem quis aliquet. In hac habitasse platea dictumst. Maecenas sit amet arcu nisl.
							Ut vitae arcu eu justo vestibulum rhoncus sed non massa. Vestibulum a nisl nibh,
							quis aliquet orci. Donec urna ante, scelerisque sed euismod in, commodo ac justo.
							Maecenas vel nisl diam.</p>
							<br/>
							<p>Nam imperdiet metus a eros blandit ac rhoncus nisi pharetra. Cum sociis natoque
							penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sagittis
							feugiat ligula ac accumsan. Aenean quis lacus dolor. Nunc tincidunt metus vel
							augue sodales auctor volutpat eros fermentum.</p>
						</div>
					</div>
				</div>

				<div class="blocoRight_costumerPage">
					<div class="costumer_contact">
						<div class="costumerImage">
							<img src="images/costumer_service.png" width="385" height="379" />
						</div>
					</div>
				</div>

			    </div>
                        </li>
                        <li class="list-slide">
                            <div class="banner-slide">
				<div class="blocoLeft">
					<div class="titleYourCustom">Your custom Shirt</div>

					<img src="images/limited_left.png" width="178"/>
				</div>

				<div class="blocoLeft">

					<img class="limitedMid" src="images/limited_center.png" width="348"/>
				</div>

			    </div>
                        </li>
                        <li class="list-slide">
                            <div class="banner-slide">

				<div class="blocoLeft_RCC">
					<div class="costumer_contact">
						<div class="contactostitle">RCC experience</div>
						<div class="costumerText jscroll">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus urna orci,
							vehicula vel interdum pellentesque, auctor auctor nibh. Fusce faucibus luctus
							sem quis aliquet. In hac habitasse platea dictumst. Maecenas sit amet arcu nisl.
							Ut vitae arcu eu justo vestibulum rhoncus sed non massa. Vestibulum a nisl nibh,
							quis aliquet orci. Donec urna ante, scelerisque sed euismod in, commodo ac justo.
							Maecenas vel nisl diam.</p>
							<br/>
							<p>Nam imperdiet metus a eros blandit ac rhoncus nisi pharetra. Cum sociis natoque
							penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sagittis
							feugiat ligula ac accumsan. Aenean quis lacus dolor. Nunc tincidunt metus vel
							augue sodales auctor volutpat eros fermentum.</p>
							<p>
							Proin rutrum dolor sit amet metus molestie ultrices. Aenean non leo sem,
							ut dignissim sem. Cras non imperdiet metus. Morbi condimentum, eros a
							scelerisque laoreet, est lorem malesuada turpis, ut convallis felis nibh
							sit amet libero. Integer augue tellus, commodo sit amet egestas nec, lacinia
							at nibh. Cras ornare velit felis. Proin sed justo eget enim rutrum adipiscing.
							Aliquam fringilla eleifend tellus in mattis.</p>
							<p>
							Integer vehicula, neque vitae porta viverra, velit nunc pretium nisi, ut mollis
							nisi nisl eu nisi. Praesent rhoncus laoreet nisi, nec ultricies purus dignissim
							ac. Cras lacus nisi, pulvinar vitae porttitor eget, consequat et elit. Donec
							sagittis enim massa, eget semper lorem. Duis vulputate mattis malesuada. Phasellus
							in nulla a nisl accumsan imperdiet. Nullam vestibulum elit sed magna consectetur
							lobortis. Sed a lectus mauris, id elementum quam. Duis vel dui ante, nec ultrices
							erat.</p>
							<p>
							Mauris et eros turpis. Maecenas ac magna sit amet ligula dictum facilisis eget
							nec augue. Sed tempor ullamcorper sem. Aenean vel sem dolor. Integer ligula justo,
							fringilla sed vulputate vel, scelerisque at urna. Suspendisse auctor lobortis
							dignissim. Donec malesuada fermentum convallis. Suspendisse bibendum tempus nisl,
							placerat ultricies risus scelerisque sit amet. Proin tristique, lectus vel auctor
							volutpat, lorem leo fermentum dolor, eget volutpat mi justo ac nulla. Integer at
							rhoncus eros. Vestibulum vitae libero id tortor lacinia rutrum. Suspendisse quis
							tortor ipsum. Pellentesque dui augue, tristique id tincidunt id, pulvinar eget neque.
							Etiam mi ante, tristique a tincidunt eu, venenatis non magna. Maecenas eget diam
							felis.
							</p>
						</div>
					</div>
				</div>

				<div class="blocoRight_RCC">
					<div class="costumer_contact">
						<div class="costumerImage">
							<img src="images/rcc_experience.png" width="355" height="380" />
						</div>
					</div>
				</div>
			    </div>
                        </li>
                    </ul>

                </div>

    </div>


                    </div><!-- createContainer-->
                </div><!-- container-->
            </div><!-- conteudo-->
        </div><!-- pageholder-->
    </div><!--viewport-->


		<div class="subViewPort">
			<div class="pageHolder">
				<div class="grayBar">
					<div class="grayBarTitle">
						<span class="firstWord">Contact</span>
						<span class="secondWord">Us</span>
					</div>
				</div>
				<div class="conteudo"><div class="container"><div><div class="contactosInfo"><div class="contactoCol contacto1"><div class="texto"><p class="contactostitle">Address</p>
<p>Rua do Emissor, 208</p>
<p>4400-436 VN Gaia</p>
<p>Portugal</p>
<p> </p>
<p class="contactostitle">GPS</p>
<p>Lat: 41.1322787¼</p>
<p>Long: -8.646544¼</p>
<p> </p>
<p class="contactostitle">Phone</p>
<p>+351 22 772 7260</p>
<p> </p>
<p class="contactostitle">Email</p>
<p><a href="mailto:%20info@rcc.pt">info@rcc.pt</a></p><div class="clearer"></div></div><div class="imgcontacto1 fadeImg"><img src="http://www.rcc.pt/templates/images/contactos1.png" /></div></div>
				<div class="contactoCol contacto2">
					<div class="contactostitle">We love</div>
					<div class="texto">hearing from our friends...</div>
					<form id="contactForm" action="#" method="post" onsubmit="return false">
						<div>
							<textarea class="textArea" id="mensagem" name="form[mensagem]">
								send us a message!</textarea>
						</div>
						<div>
							<input class="butaoEnviar" type="button" value="SUBMIT"
							       onclick="submitFormulario('contactForm')"></div>
						<input type="hidden" name="form[from]"  value="message"/></form>
					<div class="contactostitle">We promise</div>
					<div class="texto">to get back to you on short notice.</div>
					<div class="imgcontacto2 fadeImg">
						<img src="http://www.rcc.pt/templates/images/contactos2.png" />
					</div>
				</div>
				<div class="contactoCol contacto3">
					<div class="contactostitle">Newsletter</div>
					<form id="newsLetterForm" action="#" method="post" onsubmit="return false">
						<input class="inputText clear-input" id="email"
						       name="form[email]" type="text" value="Type your E-mail here"/>
						<input class="butaoEnviar" type="button" value="SUBSCRIBE"
						       onclick="submitFormulario('newsLetterForm')">
							<input type="hidden" name="form[from]"  value="news"/></form>
					<div class="imgcontacto3 fadeImg">
						<img src="http://www.rcc.pt/templates/images/contactos3.png" />
					</div></div></div><div class="clearer"></div>
				</div>
				</div>
				</div>
			</div>
		</div>

			       <div class="subViewPort">
                    	<div class="pageHolder">
	                        <div class="grayBar">
	                            <div class="grayBarTitle">
	                                <span class="firstWord">My</span>
	                                <span class="secondWord">cart</span>
	                            </div>
	                        </div>
	                        <div class="conteudo">
	                            <div class="container">
	                                <div class="cartContainer">
	                                     <div class="cartLeft">

	                                    <?php
										$query_client = mysql_query("Select * From client where idClient = 1");
										$result_client = mysql_fetch_array($query_client);
										?>

											<span class="big gold divTitle">My ACCOUNT </span>
											<span class="cartText">profile</span>

										<hr/>

										<img src="<?php echo $result_client['photo']; ?>"/>

										<fieldset>
											<span class="gold big">Mr.</span>
											<input class="clientData big locked" type="text" readonly value="<?php echo $result_client['name']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">My e-mail address:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['email']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Address Line:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['address']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Town/City:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['town']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Country:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['country']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Postcode:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['postcode']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Phone Number:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['phoneNumber']; ?>"/>
										</fieldset>
										<!--Target text field: <input type="text" id="target" />-->
										<br />
										<!--<a href="#" id="control" />Disable target</a>-->
										<input type="button" class=" edit butaoEnviar fontLight white" value="EDIT"/>
										<input type="button" class="save hide edit butaoEnviar fontLight" value="SAVE"/>

					    				</div>
					    				<script>

					    				$(".edit").toggle(
					    				function ()
										{
										    $('.clientData').removeAttr("readonly");
										    $('.clientData').removeClass('locked').addClass('editable');
										 	$('.save').removeClass('hide').addClass('show');


										},
										function ()
										{
										    $('.clientData').attr("readonly", true);
										    $('.clientData').addClass('locked').removeClass('editable');
										    $('.save').removeClass('show').addClass('hide');
										});
										</script>

										<div class="cartCenter">
												<div class="previewBorder">
													<span class="previewTitle gold divTitle">Preview</span>
													<hr/>
													<ul class="cartSlider">
													  <li><img src="preview/camisa1.png"/></li>
													  <li><img src="preview/camisa2.png"/></li>
													  <li><img src="preview/camisa3.png"/></li>
													</ul>
													<hr/>
												</div>

										<!--<span id="slide_counter"></span>-->

										</div>

										<div class="cartRight">
											<span class="gold divTitle">Basket</span>
											<hr/>
												<div class="basketContent">
													<div class="basketText">
														<p><span class="gold">Shirt's Name A: </span></p>
														<p><span class="gold">Shirt's Name B: </span></p>
														<p><span class="gold">Shirt's Name C: </span></p>
													</div>
												</div>
											<hr/>
											<span class="gold">Your Estimated Price: </span>
										</div>
										<div class="clearer"></div>
									</div>
				    			</div>
							</div>
		    			</div>
					</div>


			<div class="subViewPort">
                    	<div class="pageHolder">
	                        <div class="grayBar">
	                            <div class="grayBarTitle">
	                                <span class="firstWord">My</span>
	                                <span class="secondWord">rcc</span>
	                            </div>
	                        </div>
	                        <div class="conteudo">
	                            <div class="container">
	                                <div class="cartContainer">
	                                    <div class="cartLeft">

	                                    <?php
											$query_client = mysql_query("Select * From client where idClient = 1");
											$result_client = mysql_fetch_array($query_client);
										?>

											<span class="big gold divTitle">My ACCOUNT </span>
											<span class="cartText">profile</span>

										<hr/>

										<img src="<?php echo $result_client['photo']; ?>"/>

										<fieldset>
											<span class="gold big">Mr.</span>
											<input class="clientData big locked" type="text" readonly value="<?php echo $result_client['name']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">My e-mail address:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['email']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Address Line:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['address']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Town/City:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['town']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Country:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['country']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Postcode:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['postcode']; ?>"/>
										</fieldset>

										<fieldset>
											<span class="gold">Phone Number:</span>
											<input class="clientData locked" type="text" readonly value="<?php echo $result_client['phoneNumber']; ?>"/>
										</fieldset>
										<!--Target text field: <input type="text" id="target" />-->
										<br />
										<!--<a href="#" id="control" />Disable target</a>-->
										<input type="button" class=" edit butaoEnviar fontLight white" value="EDIT"/>
										<input type="button" class="save hide edit butaoEnviar fontLight" value="SAVE"/>

					    				</div>
					    				<script>

					    				$(".edit").toggle(
					    				function ()
										{
										    $('.clientData').removeAttr("readonly");
										    $('.clientData').removeClass('locked').addClass('editable');
										 	$('.save').removeClass('hide').addClass('show');


										},
										function ()
										{
										    $('.clientData').attr("readonly", true);
										    $('.clientData').addClass('locked').removeClass('editable');
										    $('.save').removeClass('show').addClass('hide');
										});
										</script>


				<script>


				function testeFavBought(str){
					alert(str);
				}


				function showFavBought(str)
				{
				if (str=="")
				  {
				  document.getElementById("fav_bought").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    document.getElementById("fav_bought").innerHTML=xmlhttp.responseText;
				    }
				  }
				xmlhttp.open("GET","getfavBought.php?q="+str,true);
				xmlhttp.send();
				}

				</script>

											<div class="myListCenter">
												<div class="previewBorder">

													<div  id="tabsMyRcc">
						                                <ul>
						                                  <li><a href="#myFav" onclick="showFavBought('fav');">Your Favorites</a></li>
						                                  <li><a href="#yourBought" onclick="showFavBought('bought');">Your Bought</a></li>
						                                </ul>
                                						<!--<div class="tabs_border">-->



                        								<div id="myFav">
														<hr/>
	                        								<div class="camisaPreview">
																<img src="products/camisa_list1.jpg" name="mainPic" class="mainImage" width="200px" height="200px">
															</div>
                    									<hr/>
														</div>

					                                    <div id="yourBought">
					                                    <hr/>
	                        								<div class="camisaPreview">
																<img src="products/camisa_list1.jpg" name="mainPic2" class="mainImage" width="200px" height="200px">
															</div>
                    									<hr/>
														</div>

                                						<!--</div><!--fecha tabs_border-->
						                                <!--<div class="coverBlock"></div>-->
						                            </div><!--fecha tabs-->

												</div>
										</div>

										<div class="myListRight">
										<div class="englobaListRight">
											<span class="gold myListTitle divTitle">My List</span>
											<hr/>

											<div class="contentList">
												<ul id="fav_bought" class="favSlider">

												<?php

													$query_list= mysql_query("SELECT * FROM favourites F, product P
																				Where F.idProduct = P.idProduct");

													$counter3 = 0;

													while($result_list = mysql_fetch_array($query_list))
														{

														if(($counter3 % 6) == 0){
															echo "<li>";
														}

												?>

													<a href="javascript:void(0)" onclick="changeImg('<?php echo $result_list['image'];?>')" >
													<img src="<?php echo $result_list['image'];?>" width="90" height="90"/></a>



												<?php

														if ((($counter3 + 1)% 6) == 0)
														{
															echo "</li>";
														}
														$counter3 ++;


													}
												?>
												</ul>
											</div>

											<script>
											function changeImg(camisa){
    											document.mainPic.src = camisa;
    											return false;
    										}

    										function changeImg2(camisa){
    											document.mainPic2.src = camisa;
    											return false;
    										}
											</script>

											<hr/>

										</div>


										<div class="autoPriceText">
				                            <span class="estimatedText">Your Estimated Price:</span><span class="estimatedPrice"> 78.00&euro;</span>
			                            </div>
			                            <div class="autoPriceButton">
											<input type="button" class="butaoenviar fontLight colorGold" value="ADD TO CART"/>
				                            <input type="button" class="butaoenviar fontLight" value="CHECKOUT"/>
			                            </div>
			                            <div class="clearer"></div>
			                        	</div>
			                        	<div class="clearer"></div>
									</div>

									</div>
				    			</div>
							</div>
		    			</div>
					</div>




	       <div class="subViewPort">
                    <div class="pageHolder">
                        <div class="grayBar">
                            <div class="grayBarTitle">
                                <span class="firstWord">My</span>
                                <span class="secondWord">Login</span>
                            </div></div>
                        <div class="conteudo">
                            <div class="container">
                                <div class="loginContainer">
                                    <div class="loginLeft">
					<span class="titleLogin">Sign In</span>
					<br/>
					<fieldset>
						<span class="login_title">What is your email adress?</span><br/>
						<span class="login_text">My email adress is:</span>
						<input class="login_input" id="loginEmail" type="text"/>

					</fieldset>

					<fieldset>
						<span class="login_title">Do you have an RCC password?</span><br/>
						<span class="login_text">Yes, I have a password:</span>
						<input class="login_input" id="loginPassword" type="password"/>
						<br/>
						<a class="forgot" href="#">Forgot your password?</a>

					</fieldset>
					<div class="clearer"></div>
					<fieldset>
						<input class="butaoEnviar" type="button" value="SUBMIT"/>
					</fieldset>


					<span class="titleLogin">Sign In Help</span>
					<br/>
					<br/>
					<span class="login_text">Forgot your password?</span>
					<a class="login_text" href="">Get password help.</a>

				    </div>

				    <div class="loginRight">
				    	<span class="titleLogin">Registration</span>
					<br/>
					<br/>
					<span class="login_title">New to RCC.pt? Register Below</span>

					<fieldset class="firstField">

						<span class="login_text">My name is:</span>
						<input class="login_input" id="registerName" type="text"/>
					</fieldset>

					<fieldset>
						<span class="login_text">My email address is:</span>
						<input class="login_input" id="registerEmail" type="text"/>
					</fieldset>

					<fieldset>
						<span class="login_text">Type it again:</span>
						<input class="login_input" id="registerEmailV" type="text"/>
					</fieldset>


					<div class="clearer"></div>
					<br/>
					<span class="login_title">Protect your information with a password</span><br/>
					<span class="login_text">This will be your only RCC.pt password.</span>

					<fieldset class="firstField">
						<span class="login_text">Enter a new password:</span>
						<input class="login_input" id="registerPassword" type="password"/>
					</fieldset>

					<fieldset>
						<span class="login_text">Type it again:</span>
						<input class="login_input" id="registerPasswordV" type="password"/>
					</fieldset>

					<div class="clearer"></div>
					<fieldset>
						<input class="butaoEnviar" type="button" value="CREATE ACCOUNT"/>
					</fieldset>

					</div>
				    <div class="clearer"></div>

				</div>
			    </div>
			</div>



		    </div>
		</div>


			       <div class="subViewPort">
                    <div class="pageHolder">
                        <div class="grayBar">
                            <div class="grayBarTitle">
                                <span class="firstWord">My</span>
                                <span class="secondWord">Buy</span>
                            </div></div>
                        <div class="conteudo">
                            <div class="container">
                                <div class="loginContainer">
                                    <div class="loginLeft">
					<span class="titleLogin">Sign In</span>
					<br/>
					<fieldset>
						<span class="login_title">What is your email adress?</span><br/>
						<span class="login_text">My email adress is:</span>
						<input class="login_input" id="loginEmail" type="text"/>

					</fieldset>

					<fieldset>
						<span class="login_title">Do you have an RCC password?</span><br/>
						<span class="login_text">Yes, I have a password:</span>
						<input class="login_input" id="loginPassword" type="password"/>
						<br/>
						<a class="forgot" href="#">Forgot your password?</a>

					</fieldset>
					<div class="clearer"></div>
					<fieldset>
						<input class="butaoEnviar" type="button" value="SUBMIT"/>
					</fieldset>


					<span class="titleLogin">Sign In Help</span>
					<br/>
					<br/>
					<span class="login_text">Forgot your password?</span>
					<a class="login_text" href="">Get password help.</a>

				    </div>

				    <div class="loginRight">
				    	<span class="titleLogin">Registration</span>
					<br/>
					<br/>
					<span class="login_title">New to RCC.pt? Register Below</span>

					<fieldset class="firstField">

						<span class="login_text">My name is:</span>
						<input class="login_input" id="registerName" type="text"/>
					</fieldset>

					<fieldset>
						<span class="login_text">My email address is:</span>
						<input class="login_input" id="registerEmail" type="text"/>
					</fieldset>

					<fieldset>
						<span class="login_text">Type it again:</span>
						<input class="login_input" id="registerEmailV" type="text"/>
					</fieldset>


					<div class="clearer"></div>
					<br/>
					<span class="login_title">Protect your information with a password</span><br/>
					<span class="login_text">This will be your only RCC.pt password.</span>

					<fieldset class="firstField">
						<span class="login_text">Enter a new password:</span>
						<input class="login_input" id="registerPassword" type="password"/>
					</fieldset>

					<fieldset>
						<span class="login_text">Type it again:</span>
						<input class="login_input" id="registerPasswordV" type="password"/>
					</fieldset>

					<div class="clearer"></div>
					<fieldset>
						<input class="butaoEnviar" type="button" value="CREATE ACCOUNT"/>
					</fieldset>

					</div>
				    <div class="clearer"></div>

					</div>
			    	</div>
				</div>
		    </div>
		</div>




<script type="text/javascript">
				setPostInit('0');
				numPosts=2
</script>

	    </div>
<div class="arrowContender"><div class="imgArrowTop"><a href="javascript:void(0)" onClick="arrowClick('up')" class="topArrow arrowUp"></a></div><div class="imgArrowBottom"><a href="javascript:void(0)" onClick="arrowClick('down')" class="topArrow arrowDown"></a></div></div>
<!-- FOOTER -->
</body>
</html>