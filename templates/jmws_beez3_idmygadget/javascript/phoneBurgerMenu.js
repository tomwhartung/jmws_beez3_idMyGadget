/**
 * @package     jmws_tomh_idMyGadget
 * @subpackage  Templates.jmws_tomh_idMyGadget; Modules.jmws_mod_menu_idMyGadget
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 *
 * @copyright Copyright © 2015-2016 Tom W Hartung.  All rights reserved.
 * @license   GNU General Public License version 3; see COPYING.txt
 * This file is part of jmws_beez3_idmygadget.
 * jmws_beez3_idmygadget is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 * jmws_beez3_idmygadget is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 */

var phoneBurgerMenu = {};

(function($)
{
	$(document).ready(function()
	{
		phoneBurgerMenu.drawPhoneBurgerMenuIcons();
	})
})(jQuery);
/**
 * Driver function to draw zero, one, or both menu icons, as appropriate
 * @returns {undefined}
 */
phoneBurgerMenu.drawPhoneBurgerMenuIcons = function () {
	phoneBurgerMenu.leftElement = document.getElementById( 'phone-burger-icon-left' );
	phoneBurgerMenu.rightElement = document.getElementById( 'phone-burger-icon-right' );

	if ( phoneBurgerMenu.leftElement !== null &&
	     typeof phoneBurgerIconLeftOptions !== 'undefined' ) {     // options are set in the admin console
		phoneBurgerMenu.drawPhoneBurgerMenuIcon(
			phoneBurgerMenu.leftElement, phoneBurgerIconLeftOptions );
	}
	if ( phoneBurgerMenu.rightElement !== null &&
	     typeof phoneBurgerIconRightOptions !== 'undefined' ) {     // options are set in the admin console
		phoneBurgerMenu.drawPhoneBurgerMenuIcon(
			phoneBurgerMenu.rightElement, phoneBurgerIconRightOptions );
	}
};

/**
 * Draw three lines, using the options specified in the admin console
 * @param {type} canvasElement
 * @param {type} phoneBurgerIconOptions
 * @returns {undefined}
 */
phoneBurgerMenu.drawPhoneBurgerMenuIcon = function (canvasElement, phoneBurgerIconOptions ) {
	if ( canvasElement === null ) {
		console.log( 'phoneBurgerMenu.drawThinRoundedPhoneBurgerMenu error: passed-in canvasElement is null!' );
		return;
	}

	var context = canvasElement.getContext( '2d' );
	phoneBurgerMenu.setPhoneBurgerIconDimensions( canvasElement, phoneBurgerIconOptions );
	var leftMargin = phoneBurgerMenu.leftMargin;
	var topMargin = phoneBurgerMenu.topMargin;
	var barHeight = phoneBurgerMenu.barHeight;
	var barWidth = phoneBurgerMenu.barWidth;
	var gapHeight = phoneBurgerMenu.gapHeight;
	var firstBarMidpoint = topMargin;
	var secondBarMidpoint = topMargin+barHeight+gapHeight;
	var thirdBarMidpoint = topMargin + 2*(barHeight+gapHeight);

	context.save();
	context.beginPath();
	context.strokeStyle = phoneBurgerIconOptions.color;
	context.lineCap = phoneBurgerIconOptions.lineCap;
	context.lineWidth = barHeight;

	context.moveTo( leftMargin, firstBarMidpoint );
	context.lineTo( leftMargin+barWidth, firstBarMidpoint );

	context.moveTo( leftMargin, secondBarMidpoint );
	context.lineTo( leftMargin+barWidth, secondBarMidpoint );

	context.moveTo( leftMargin, thirdBarMidpoint );
	context.lineTo( leftMargin+barWidth, thirdBarMidpoint );

	context.stroke();
	context.restore();
};
/**
 * Use the options specified in the admin console to set the dimensions of lines in the icon
 * @param {type} canvasElement
 * @param {type} phoneBurgerIconOptions
 * @returns {undefined}
 */
phoneBurgerMenu.setPhoneBurgerIconDimensions = function ( canvasElement, phoneBurgerIconOptions ) {
	var topMargin;
	var barHeight;
	var gapHeight;
	var canvasWidth = canvasElement.width;
	var canvasHeight = canvasElement.height;
	var oneEleventh = Math.round( canvasHeight / 11 );

	if ( phoneBurgerIconOptions.lineSize === 'fat' ) {
		barHeight = oneEleventh * 3;
		gapHeight = oneEleventh;
		topMargin = Math.ceil( barHeight / 2 );
	}
	else if ( phoneBurgerIconOptions.lineSize === 'normal' ) {
		barHeight = oneEleventh * 2;
		gapHeight = oneEleventh * 2;
		topMargin = oneEleventh + Math.ceil( barHeight / 2 );
	}
	else {   // phoneBurgerIconOptions.lineSize === 'thin'
		barHeight = oneEleventh;
		gapHeight = oneEleventh * 2;
		topMargin = (oneEleventh * 2) + Math.ceil( barHeight / 2 );
	}

	phoneBurgerMenu.topMargin = topMargin;
	phoneBurgerMenu.barHeight = barHeight;
	phoneBurgerMenu.gapHeight = gapHeight;
	phoneBurgerMenu.leftMargin = Math.ceil( barHeight / 2 );
	phoneBurgerMenu.barWidth = Math.round( canvasWidth - (barHeight*2) );
};
