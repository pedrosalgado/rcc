/*
Lino Pereira - 2012/07/11

Usage:s

$('#myElem').myTransformOrigin({tox: 0, toy: 0});
$('#myElem').myTransform({
	rotate: 0,
	scale: 1,
	translateX: 0,
	translateY: 0,
	shewX: 0,
	shewY: 0
});

*/

(function($){
 	$.fn.extend({
 		//plugin name - myTransformOrigin
 		myTransformOrigin: function(options) {

			var defaults = {
				tox: 0,
				toy: 0
			};

			var options = $.extend(defaults, options);

    		return this.each(function() {
				var obj = $(this)
				var o = options;
				obj.css({
					'transform-origin': o.tox+'px '+o.toy+'px', '-ms-transform-origin': o.tox+'px '+o.toy+'px', '-webkit-transform-origin': o.tox+'px '+o.toy+'px', '-moz-transform-origin': o.tox+'px '+o.toy+'px', '-o-transform-origin': o.tox+'px '+o.toy+'px'
				});
    		});
    	},

    	myTransform: function(options) {

			var defaults = {
				rotate: 0,
				scale: 1,
				translateX: 0,
				translateY: 0,
				shewX: 0,
				shewY: 0
			};

			var options = $.extend(defaults, options);

    		return this.each(function() {
				var obj = $(this)
				var o = options;
				obj.css({
					'-moz-transform': 'translate('+o.translateX+'px, '+o.translateY+'px) rotate('+o.rotate+'deg) scale('+o.scale+')  skew('+o.shewX+'deg, '+o.shewY+'deg)',
					'-webkit-transform': 'translate('+o.translateX+'px, '+o.translateY+'px)  rotate('+o.rotate+'deg) scale('+o.scale+') skew('+o.shewX+'deg, '+o.shewY+'deg)',
					'-o-transform': 'translate('+o.translateX+'px, '+o.translateY+'px) rotate('+o.rotate+'deg) scale('+o.scale+') skew('+o.shewX+'deg, '+o.shewY+'deg)',
					'-ms-transform': 'translate('+o.translateX+'px, '+o.translateY+'px) rotate('+o.rotate+'deg) scale('+o.scale+') skew('+o.shewX+'deg, '+o.shewY+'deg)',
					'transform': 'translate('+o.translateX+'px, '+o.translateY+'px) rotate('+o.rotate+'deg) scale('+o.scale+') skew('+o.shewX+'deg, '+o.shewY+'deg)',
					'zoom' : '1'
				});
    		});
    	}
	});
})(jQuery);