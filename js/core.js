$(document).ready(function() {

	$('#color-form').submit(function() {
		return false;
	});

	// color input
	$('#color-form input').minicolors({
		changeDelay			: 200,
		defaultValue 		: '326DA8',
		letterCase 			: 'uppercase',
		change 				: function(hex, opacity) {
			$('header').animate({ backgroundColor : hex });

			var color = $.Color(hex);

			var dark65 = $.fn.shadeColor(hex, -65);
			var dark45 = $.fn.shadeColor(hex, -45);
			var dark35 = $.fn.shadeColor(hex, -35);
			var dark25 = $.fn.shadeColor(hex, -25);
			var dark15 = $.fn.shadeColor(hex, -15);
			var dark5 = $.fn.shadeColor(hex, -5);
			var light5  = $.fn.shadeColor(hex, 5);
			var light15  = $.fn.shadeColor(hex, 15);
			var light25  = $.fn.shadeColor(hex, 25);
			var light35  = $.fn.shadeColor(hex, 35);
			var light45  = $.fn.shadeColor(hex, 45);
			var light65  = $.fn.shadeColor(hex, 65);
			var textColor = $.fn.shadeColor(hex, 65);

			// percentage boxes
			$('#dark-65 .percentage-box').animate({ backgroundColor : dark65.hex });
			$('#dark-45 .percentage-box').animate({ backgroundColor : dark45.hex });
			$('#dark-35 .percentage-box').animate({ backgroundColor : dark35.hex });
			$('#dark-25 .percentage-box').animate({ backgroundColor : dark25.hex });
			$('#dark-15 .percentage-box').animate({ backgroundColor : dark15.hex });
			$('#dark-5 .percentage-box').animate({ backgroundColor : dark5.hex });

			$('#light-5 .percentage-box').animate({ backgroundColor : light5.hex });
			$('#light-15 .percentage-box').animate({ backgroundColor : light15.hex });
			$('#light-25 .percentage-box').animate({ backgroundColor : light25.hex });
			$('#light-35 .percentage-box').animate({ backgroundColor : light35.hex });
			$('#light-45 .percentage-box').animate({ backgroundColor : light45.hex });
			$('#light-65 .percentage-box').animate({ backgroundColor : light65.hex });

				// percentage boxes info
				$('#dark-65 pre').html(dark65.hex + '<br>' + dark65.rgb);
				$('#dark-45 pre').html(dark45.hex + '<br>' + dark45.rgb);
				$('#dark-35 pre').html(dark35.hex + '<br>' + dark35.rgb);
				$('#dark-25 pre').html(dark25.hex + '<br>' + dark25.rgb);
				$('#dark-15 pre').html(dark15.hex + '<br>' + dark15.rgb);
				$('#dark-5 pre').html(dark5.hex + '<br>' + dark5.rgb);

				$('#light-5 pre').html(light5.hex + '<br>' + light5.rgb);
				$('#light-15 pre').html(light15.hex + '<br>' + light15.rgb);
				$('#light-25 pre').html(light25.hex + '<br>' + light25.rgb);
				$('#light-35 pre').html(light35.hex + '<br>' + light35.rgb);
				$('#light-45 pre').html(light45.hex + '<br>' + light45.rgb);
				$('#light-65 pre').html(light65.hex + '<br>' + light65.rgb);

			// header change
			$('header h1 a').animate({
				color : textColor.hex,
				textShadow : '1px 1px 0 ' + dark45.hex
			});
			$('header h1 a i').animate({ color : dark25.hex });
			$('.page-header h2 i').animate({ color : dark25.hex });
			$('footer h3 i').animate({ color : dark25.hex });

			// gradients =======================================================

				// gradient example -------------------------------------------------
				var bigGradientOptions = {
					firstColor		: hex,
					secondColor 	: dark15.hex,
					textColor 		: light65.hex,
					borderColor 	: dark15.hex
				}
				var bigGradient = $.fn.gradient(bigGradientOptions);
				var bigGradientCSS = $.fn.gradientCSS(bigGradientOptions);
				$('#gradients pre').html(bigGradient);
				$('#gradient-example').css(bigGradientCSS);

					// set the text colors
					$('#gradient-text span').css({
						color				: light65.hex,
						textShadow 			: '1px 1px 0 ' + dark45.hex
					});
					$('#gradient-text i').css('color', dark45.hex);

				// button light -------------------------------------------------
				$('#light-button').css(bigGradientCSS);
				$('#light-button i').css({ color : dark65.hex });
				$('#light-button-modal pre').html(bigGradient);

				// button dark -------------------------------------------------
				var darkGradientOptions = {
					firstColor		: dark35.hex,
					secondColor 	: dark45.hex,
					textColor 		: light45.hex,
					borderColor 	: dark65.hex
				}
				var darkGradient = $.fn.gradient(darkGradientOptions);
				var darkGradientCSS = $.fn.gradientCSS(darkGradientOptions);
				$('#dark-button').css(darkGradientCSS);
				$('#dark-button i').css({ color : light65.hex });
				$('#dark-button-modal pre').html(darkGradient);

				// reset build buttons to 15%, base, bordered, light text, textshadow
				$('#gradient-first .active').removeClass('active');
				$('gradient-second .active').removeClass('active');

				$('#gradient-first button[value="15"]').addClass('active');
				$('#gradient-second button:first-child').addClass('active');

		}
	});

	// GRADIENT BUILDER ================================================
	$('.btn-group button').click(function() {
		var section = $(this).parent().attr('id');

		if (section == 'gradient-first')
			$('#gradient-first .active').removeClass('active');

		if (section == 'gradient-second')
			$('gradient-second .active').removeClass('active');

		$(this).addClass('active');

		var hex = $('#color').val();

		// get the first gradient
		// get the second gradient
		var firstValue = $('#gradient-first .active').val();
		var secondValue = $('#gradient-second .active').val();

		var firstColor = $.fn.shadeColor(hex, firstValue);
		var secondColor = $.fn.shadeColor(hex, secondValue);

		var textColor = $.fn.shadeColor(hex, firstValue);
		var borderColor = $.fn.shadeColor(hex, secondValue);

		var gradientOptions = {
			firstColor		: firstColor.hex,
			secondColor 	: secondColor.hex,
			textColor 		: textColor.hex,
			borderColor 	: borderColor.hex
		}

		console.log(gradientOptions);

		var bigGradient = $.fn.gradient(gradientOptions);
		var bigGradientCSS = $.fn.gradientCSS(gradientOptions);
		$('#gradients pre').html(bigGradient);
		$('#gradient-example').css(bigGradientCSS);
	});

});

$.fn.shadeColor = function(color, percent) {
	var num = parseInt(color.slice(1), 16);
	var amt = Math.round(2.55 * percent);

	R = (num >> 16) + amt;
	B = (num >> 8 & 0x00FF) + amt;
	G = (num & 0x0000FF) + amt;

	var hexValue = '#' + (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 + (B < 255 ? B < 1 ? 0 : B : 255) * 0x100 + (G < 255 ? G < 1 ? 0 : G : 255)).toString(16).slice(1);
	var rgbValue = $.Color(hexValue).toRgbaString(hexValue);

	colorData = {
		hex : hexValue,
		rgb : rgbValue
	}

	return colorData;
}

$.fn.gradient = function(options) {
	var defaults = {
		firstColor 		: '#5893ce',
		secondColor 	: '#326da8',
		textColor 		: '#d8ffff',
		borderColor 	: '#0c4782'
	}

	var options = $.extend({}, defaults, options);

	var gradient = '';
	gradient += 'color: ' + options.textColor + ';<br>',
	gradient += 'border: 1px solid ' + options.borderColor + ';<br>';
	gradient += 'background: ' + options.firstColor + ';<br>';
	gradient += 'background: -moz-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%);<br>';
	gradient += 'background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, ' + options.firstColor + '), color-stop(100%, ' + options.secondColor + '));<br>';
	gradient += 'background: -webkit-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%);<br>'
	gradient += 'background: -o-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%);<br>';
	gradient += 'background: -ms-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%);<br>';
	gradient += 'background: linear-gradient(to bottom, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%);<br>';
	gradient += "filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='" + options.firstColor + "', endColorstr='" + options.secondColor + "', GradientType=0);";

	return gradient;
}

$.fn.gradientCSS = function(options) {
	var defaults = {
		firstColor 		: '#5893ce',
		secondColor 	: '#326da8',
		textColor 		: '#d8ffff',
		borderColor 	: '#0c4782'
	}

	var options = $.extend({}, defaults, options);

	var gradientArray = {
		color			: options.textColor,
		border 			: '1px solid ' + options.borderColor,
		background		: options.firstColor,
		background		: 'background: -moz-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)',
		background		: 'background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, ' + options.firstColor + '), color-stop(100%, ' + options.secondColor + '))',
		background		: 'background: -webkit-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)',
		background		: 'background: -o-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)',
		background		: 'background: -ms-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)',
		background		: 'background: -o-linear-gradient(top, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)',
		background		: 'linear-gradient(to bottom, ' + options.firstColor + ' 0%, ' + options.secondColor + ' 100%)'
	}

	return gradientArray;
}