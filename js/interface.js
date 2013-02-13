 var pageHeight=0;
 var viewPort=0;
 var page = 0;
 var selOurItem='';
 var video = null;
$(document).ready(function(){

	//scroolbars
	//$('.jscroll').jScrollPane({showArrows: true});
	$('.jscroll').jScrollPane(
		{
			//definir a altura da margem da scroll
			verticalDragMinHeight: 15,
			verticalDragMaxHeight: 15,
			horizontalDragMinWidth: 15,
			horizontalDragMaxWidth: 15
		}

	);

	$('.textArea').clearInput();

	$('.videoBehind').stop().animate({'opacity': 0}, 0);
	$('.backVideo').stop().animate({'opacity': 0}, 0);


	$('#Glossary').bxSlider({
  mode: 'fade'
});;



	//tabs
	//changeTabs();

	//slideshow
	ssIframeConteudo();

	rizePages();
    $(window).bind('resize', rizePages);

    callMenuInit();
    $('.textOur').addClass('mouseBlock');
   	selOurItem='';
   //	$('.'+selOurItem+' .textOur').removeClass('mouseBlock');
   	//$('.'+selOurItem+' .topoOur').stop(true).animate({'height':'33px'}, 0);
   	/*$('.'+selOurItem+' .textOur').stop(true).animate({'height':($('.'+selOurItem+' .textOur').height()+240)+'px'}, 0,function(){$('.jscroll').jScrollPane(
		{
			//definir a altura da margem da scroll
			verticalDragMinHeight: 15,
			verticalDragMaxHeight: 15,
			horizontalDragMinWidth: 15,
			horizontalDragMaxWidth: 15
		}

	);});*/
	ourStuff();
	contactoStuff();

	video = document.getElementById('videoPLBehind');

});

window.onhashchange = callMenu;

/**
 *
 * @access public
 * @return void
 **/
function ourStuff(){
	if(selOurItem!=''){
		if(selOurItem!='why'){
			$('.why .fadeAction').css({ opacity: 0.4 });
		}
		if(selOurItem!='who'){
			$('.who .fadeAction').css({ opacity: 0.4 });
		}
		if(selOurItem!='what'){
			$('.what .fadeAction').css({ opacity: 0.4 });
		}
	}
	else
	{
		$('.why .fadeAction').css({ opacity: 1 });
		$('.who .fadeAction').css({ opacity: 1 });
		$('.what .fadeAction').css({ opacity: 1 });
	}
    $('.why').hover(function(){
    		if(selOurItem!='why'){
    			if(selOurItem!='')
    			{
    				$('.why .fadeAction').stop().animate({'opacity': 0.8}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.why .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	},function(){
    		if(selOurItem!='why' && selOurItem!=''){
    			$('.why .fadeAction').stop().animate({'opacity': 0.4}, 500);
    		}
    		else{
    			if(selOurItem!='')
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.why .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	});

    $('.what').hover(function(){
    		if(selOurItem!='what'){

    			if(selOurItem!='')
    			{
    				$('.what .fadeAction').stop().animate({'opacity': 0.8}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.what .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	},function(){
    		if(selOurItem!='what' && selOurItem!=''){
    			$('.what .fadeAction').stop().animate({'opacity': 0.4}, 500);
    		}
    		else{
    			if(selOurItem!='')
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.what .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	});
    $('.who').hover(function(){
    		if(selOurItem!='who'){
    			if(selOurItem!='')
    			{
    				$('.who .fadeAction').stop().animate({'opacity': 0.8}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.who .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	},function(){
    		if(selOurItem!='who' && selOurItem!=''){
    			$('.who .fadeAction').stop().animate({'opacity': 0.4}, 500);
    		}
    		else{
    			if(selOurItem!='')
    			{
    				$('.fadeAction').stop().animate({'opacity': 0.4}, 500);
    				$('.who .fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    			else
    			{
    				$('.fadeAction').stop().animate({'opacity': 1}, 500);
    			}
    		}
    	});
}

function contactoStuff(){

	$('.contactoCol .fadeImg').css({ opacity: 0.2 });

    $('.contacto1').hover(function(){
    		$('.contacto1 .imgcontacto1').stop(true,true).animate({'opacity': 1}, 500);
    	},function(){
    		$('.contacto1 .imgcontacto1').stop(true,true).delay(500).animate({'opacity': 0.2}, 500);
    	});

    $('.contacto2').hover(function(){
    		$('.contacto2 .imgcontacto2').stop(true,true).animate({'opacity': 1}, 500);
    	},function(){
    		$('.contacto2 .imgcontacto2').stop(true,true).delay(500).animate({'opacity': 0.2}, 500);
    	});
    $('.contacto3').hover(function(){
    		$('.contacto3 .imgcontacto3').stop(true,true).animate({'opacity': 1}, 500);
    	},function(){
    		$('.contacto3 .imgcontacto3').stop(true,true).delay(500).animate({'opacity': 0.2}, 500);
    	});


}

/**
 *
 * @access public
 * @return void
 **/
function activeOurCol(elem){

	if(elem!=selOurItem){
		if(selOurItem!=''){
			$('.'+selOurItem+' .fadeAction').stop(true,true).animate({'opacity': 0.4}, 500);
			$('.'+selOurItem+' .topoOur').stop(true,true).animate({'height':'274px'}, 500);
			$('.'+selOurItem+' .textOur').stop(true,true).animate({'height':'195px','opacity': 0.4}, 500,function(){
			//alert($(this).height());
			$(this).height(195);
			});

			$('.'+selOurItem+' .textOur').addClass('mouseBlock');
		}
		else{
			$('.fadeAction').stop(true,true).animate({'opacity': 0.4}, 500);
		}
		$('.'+elem+' .fadeAction').stop(true,true).animate({'opacity': 1}, 500);
		$('.'+elem+' .topoOur').stop(true,true).animate({'height':'33px','opacity': 1}, 500);
		if($('.'+elem+' .jspContainer').html())
			$('.'+elem+' .jspContainer').stop(true,true).animate({'height':(195+240)+'px'}, 500);
		$('.'+elem+' .textOur').stop(true,true).animate({'height':(195+240)+'px','opacity': 1}, 500,function(){
		$('.'+elem+' .textOur').removeClass('mouseBlock');
		$('.jscroll').jScrollPane(
		{
			//definir a altura da margem da scroll
			verticalDragMinHeight: 15,
			verticalDragMaxHeight: 15,
			horizontalDragMinWidth: 15,
			horizontalDragMaxWidth: 15
		}

	);});
		//alert('.'+elem+'.fadeAction');
		selOurItem=elem;

	}
}

/**
 *
 * @access public
 * @return void
 **/
function rizePages(){
	pageHeight=$(window).height()-162;
	if(pageHeight<596)
		pageHeight=596;
	viewPort=$(window).height()-162;
	//alert(pageHeight);
	$('.pageHolder').height(pageHeight);
	$('.pageViewPort').height($(window).height()-112);
	$('.subViewPort').height($(window).height()-112);
	$('.pageContender').css('margin-top','-'+(page*(viewPort+50))+'px');
}

/**
 *
 * @access public
 * @return void
 **/
function goToMenu(val){
//alert(val);
	addHash(val);


}

function addHash(value)
{
	window.location.hash = value;
	$('.menuTopoItem a').removeClass('selected');
	$('.item_'+value+' a').addClass('selected');
	callMenu();
}

function getHash()
{
	return window.location.hash;
}

/**
 *
 * @access public
 * @return void
 **/
function callMenu(){
	closeVideo();
	selOurItem='';

	$('.fadeAction').stop(true,true).animate({'opacity': 1}, 500);
	$('.topoOur').stop(true,true).animate({'height':'274px'}, 500);
	$('.textOur').stop(true,true).animate({'height':'195px','opacity': 0.4}, 500,function(){
	//alert($(this).height());
	$(this).height(195);
	});
	$('.textOur').addClass('mouseBlock');

	var hash='';
	if(getHash()!="")
		hash=getHash();
	else
		hash='#home';
	page=arrayPags[hash];
	//$('.pageContender').css('margin-top','-'+(page*(pageHeight+50))+'px');
	//$('.pageContender').animate({'margin-top','-'+(page*(pageHeight+50))+'px');
	var tempView = page*(viewPort+50);
	//if(tempView<)
	$('.arrowContender').stop().animate({
    	'opacity': 0
	}, 200);
	$('.pageContender').stop().animate({
    	'margin-top': -(page*(viewPort+50))
	}, 800, function(){
		$('.arrowContender').stop().animate({
	    	'opacity': 1
		}, 200);
	});

	if(hash=='#homepage')
		$('.imgArrowTop').css('opacity',0);
	else
		$('.imgArrowTop').css('opacity',1);

	if(countPages==page)
		$('.imgArrowBottom').css('opacity',0);
	else
		$('.imgArrowBottom').css('opacity',1);
}

/**
 *
 * @access public
 * @return void
 **/
function callMenuInit(){
	var hash='';
	if(getHash()!="")
		hash=getHash();
	else
		hash='#homepage';
	page=arrayPags[hash];

	var tempView = page*(viewPort+50);

	$('.pageContender').css('margin-top','-'+(page*(viewPort+50))+'px');

	$('.item_'+hash.replace('#','')+' a').addClass('selected');

	if(hash=='#homepage')
		$('.imgArrowTop').css('opacity',0);
	if(countPages==page)
		$('.imgArrowBottom').css('opacity',0);
}


/**
 *
 * @access public
 * @return void
 **/
function openTab(letter,tab){
	$('.tabsConteudo').addClass('displayNone');
	$('.'+tab).removeClass('displayNone');

	$('.listaitem_'+tab).jScrollPane(
		{
			//definir a altura da margem da scroll
			verticalDragMinHeight: 15,
			verticalDragMaxHeight: 15,
			horizontalDragMinWidth: 15,
			horizontalDragMaxWidth: 15
		}

	);

	$('.gcattitle').removeClass('selected');
	$('.'+letter).addClass('selected');
}

/* Mudar de tab*/
function changeTabs() {

	var current = $("#tabs li.selected");

	$('#tabs li').click(function(){
		$(this).toggleClass("selected");

		$('div#'+(current.attr('id'))).addClass('displayNone');

		current.removeClass("selected");

		$(this).addClass("selected");
		current = $(this);

		$('div#'+($(this).attr('id'))).removeClass('displayNone');
		var numb = current.attr('id').split('_');

	});
}

function ssIframeConteudo (){

	/* Apply fancybox ao glossario */
	$("a.grouped_elements").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		nextEffect  : 'none',
		prevEffect  : 'none',
		'showCloseButton': false
	});
}


/**
 *
 * @access public
 * @return void
 **/
function submitFormulario(form){
	var formValues = 'module=site&action=formSubmission&lang='+lang+'&'+$('#'+form).serialize();
	//alert(formValues);
	$.ajaxSetup ({cache: false});
    $.post(
        host+'/process.php',
        formValues,
        function(data){
        	//alert(data);
			$('#contactForm .textArea').removeClass('inputError');
			$('#newsLetterForm input').removeClass('inputError');

			if(data.code < 0)
			{
				if(data.fields && data.fields.length)
				{
					for(var i in data.fields)
					{
						$('#'+data.fields[i]).addClass('inputError');
					}
				}

			}
			else
			{
				if(form=="newsLetterForm")
					$('#email').val(tl.type);
				if(form=="contactForm")
					$('#mensagem').val(tl.send_us);
			}
			$('#msgForm').html(data.msg);
        },
        "json"
    );

}


/**
 *
 * @access public
 * @return void
 **/
function openVideo(){
	$('.videoBall').stop().animate({'opacity':0});
	$('.imageBehind').stop().animate({'width': 980}, 500);
	$('.videoBehind').removeClass('displayNone');
	$('.backVideo').removeClass('displayNone');
	$('.videoBehind').stop().delay(300).animate({'opacity': 1}, 500,function(){video.play();});
	$('.backVideo').stop().delay(300).animate({'opacity': 1}, 500);

}

/**
 *
 * @access public
 * @return void
 **/
function closeVideo(){
	video.load();
	video.pause();
	$('.videoBall').stop().delay(300).animate({'opacity':1});
	$('.imageBehind').stop().delay(300).animate({'width': 591}, 500);
	$('.videoBehind').stop().animate({'opacity': 0}, 500,function(){$('.videoBehind').addClass('displayNone');});
	$('.backVideo').stop().animate({'opacity': 0}, 500,function(){$('.backVideo').addClass('displayNone');});
}

/**
 *
 * @access public
 * @return void
 **/
function arrowClick(sentido){
	var tempHash='';
	//var count=0;
	if(sentido=='up'){
		for(var h in arrayPags)
		{
		    if(arrayPags[h]==page-1)
		    	tempHash=h;
		    //count++;
		}
	}
	else
	{
		for(var h in arrayPags)
		{
		    if(arrayPags[h]==page+1)
		    	tempHash=h;
		    //count++;
		}
	}
	if(tempHash!='')
		goToMenu(tempHash);
}

/**
 */
 var selWe=0;
 var numPosts=0;
 /*
 **/


 /**
 *
 * @access public
 * @return void
 **/
function setPostInit(key){
	selWe=key;
	$('.weLoveItem').css('opacity',0);
	$('.weLoveItem').addClass('displayNone');
	$('.we_'+key).css('opacity',1);
	$('.we_'+key).removeClass('displayNone');

	$('.itemCount').html(1);

}

/**
 *
 * @access public
 * @return void
 **/
function changeBlog(side){

	if(side=='left')
	{
		if(selWe>0){
			var oldSel=selWe;
			selWe--;
			$('.we_'+oldSel).stop().animate({'opacity':0},500,function (){$('.we_'+oldSel).addClass('displayNone');	});
			$('.we_'+selWe).removeClass('displayNone');
			$('.we_'+selWe).stop().animate({'opacity':1},500,function (){$('.itemCount').html(selWe+1);});
		}
	}
	else
	{
		if(selWe<numPosts-1){
			var oldSel=selWe;
			selWe++;
			$('.we_'+oldSel).stop().animate({'opacity':0},500,function (){$('.we_'+oldSel).addClass('displayNone');	});
			$('.we_'+selWe).removeClass('displayNone');
			$('.we_'+selWe).stop().animate({'opacity':1},500,function (){$('.itemCount').html(selWe+1);});
		}
	}
}

/* fades */

/**
 *
 * @access public
 * @return void
 **/
var countDest1=0;
var actDest1=0;
function starFadeAction1(number){

	countDest1=number;
	actDest1=number-1;

	if(countDest1>0){

		$('.destaque1_'+actDest1).delay(800).stop().animate({'opacity':0},500,completeFadeOut1);
	}
}

/**
 *
 * @access public
 * @return void
 **/
function completeFadeOut1(){
	var temp=actDest1;

	if(actDest1>=countDest1-1){
		actDest1 =0;
	} else
		actDest1++;
	//alert(actDest1+' '+temp);
	var rnd=Math.floor((Math.random()*2500)+1000);
	//alert(rnd);
	$('.destaque1_'+temp).delay(rnd).animate({'opacity':0},1000);
	$('.destaque1_'+actDest1).delay(rnd).animate({'opacity':1},1000,completeFadeOut1);

}

var countDest2=0;
var actDest2=0;
function starFadeAction2(number){

	countDest2=number;
	actDest2=number-1;

	if(countDest2>0){

		$('.destaque2_'+actDest2).delay(800).stop().animate({'opacity':0},500,completeFadeOut2);
	}
}

/**
 *
 * @access public
 * @return void
 **/
function completeFadeOut2(){
	var temp=actDest2;

	if(actDest2>=countDest2-1){
		actDest2 =0;
	} else
		actDest2++;
	//alert(actDest1+' '+temp);
	var rnd=Math.floor((Math.random()*2500)+1000);
	//alert(rnd);
	$('.destaque2_'+temp).delay(rnd).animate({'opacity':0},1000);
	$('.destaque2_'+actDest2).delay(rnd).animate({'opacity':1},1000,completeFadeOut2);
}

var countDest3=0;
var actDest3=0;
function starFadeAction3(number){

	countDest3=number;
	actDest3=number-1;

	if(countDest3>0){

		$('.destaque3_'+actDest3).delay(800).stop().animate({'opacity':0},500,completeFadeOut3);
	}
}

/**
 *
 * @access public
 * @return void
 **/
function completeFadeOut3(){
	var temp=actDest3;

	if(actDest3>=countDest3-1){
		actDest3 =0;
	} else
		actDest3++;
	//alert(actDest1+' '+temp);
	var rnd=Math.floor((Math.random()*2500)+1000);
	//alert(rnd);
	$('.destaque3_'+temp).delay(rnd).animate({'opacity':0},1000);
	$('.destaque3_'+actDest3).delay(rnd).animate({'opacity':1},1000,completeFadeOut3);
}

var countDest4=0;
var actDest4=0;
function starFadeAction4(number){

	countDest4=number;
	actDest4=number-1;

	if(countDest4>0){

		$('.destaque4_'+actDest4).delay(800).stop().animate({'opacity':0},500,completeFadeOut4);
	}
}

/**
 *
 * @access public
 * @return void
 **/
function completeFadeOut4(){
	var temp=actDest4;

	if(actDest4>=countDest4-1){
		actDest4 =0;
	} else
		actDest4++;
	//alert(actDest1+' '+temp);
	var rnd=Math.floor((Math.random()*2500)+1000);
	//alert(rnd);
	$('.destaque4_'+temp).delay(rnd).animate({'opacity':0},1000);
	$('.destaque4_'+actDest4).delay(rnd).animate({'opacity':1},1000,completeFadeOut4);
}

/* fim fades*/