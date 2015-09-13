# jmws_beez3_idmygadget
Integrates the default joomla Beez3 template with idMyGadget.

## Dependencies
To function properly, this code requires installation of code in other repos.

**TODO: Look into using Joomla Composer to manage these dependencies.**

### Required: jmws_idMyGadget_for_joomla
For this template to work properly, the jmws_idMyGadget_for_joomla must be installed.

Note that although jmws_idMyGadget_for_joomla comes with a very simple device detector (detect_mobile_browsers) installed "out of the box," it works best when you add one or more of the more sophisticated third-party device detection tools.

Fret not, however!  You can accomplish much of this by running one or more "git clone" commands.

For information on how to install this required code, see the jmws_idMyGadget_for_joomla README.md file.

### Highly Recommended: jmws_mod_menu_idMyGadget
For best results, install the jmws_mod_menu_idMyGadget module.

This is required for the hamburger (aka. "PhoneBurger") and phone header and footer menus to work. Your joomla site may even whitescreen if you try to create a Hamburger Menu and this module is not present.

## Status:
The initial version of this template is complete, but thorough integration testing has been minimal, so there may be some rough edges.

This project could serve as a good starting point for someone who wants to use Device Detection in the Beez3 template.

#### Demo Article
The [Beez3 IdMyGadget Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-templates/demo-beez3-idmygadget) article gives an example of how this template looks.

Note that the configuration for that demo is unpolished and some fiddling with the configuration and a little CSS could go a long way in making it look much nicer.

#### Future Work
The goal of this project is to integrate IdMYGadget with the Beez3 default Joomla template, and keep changes to a minimum.

Right now that goal is accomplished, so additional work on this is on hold for now.

I am currently using a similar template ([jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget)) on my site [JooMooWebSites.Com](http://joomoowebsites.com/), and have moved on to doing similar work in WordPress and Drupal.

Thus there is no real reason for me to continue work on this, without a new goal in mind, or some other compelling reason to start using this template rather than [jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget), which has a lot more options.

#### Self-Promotion Alert!
Of course, I'd certainly be happy to do additional work on this, for a fee!  ;-)

## Installation:

Installation of all jmws_* joomla extensions is the same.
For details, see the following documents in the [Jmws Accoutrements Repo on github](https://github.com/tomwhartung/jmws_accoutrements/):

* [Installing Jmws Joomla Extensions document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/joomla/install.md)
* [Jmws Github Strategy document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/devops/cms_github_strategy.md)

## Specific Changes Made to Beez3
Integration of IdMyGadget with the template enables the addition of options to the template's administrator's console.

### Integration With IdMyGadget
This template uses IdMyGadget to determine whether the user is accessing the site on a phone, tablet, or desktop, and changes the output accordingly.

This template adds the following tabs to its configuration options in the joomla administration console:

* IdMyGadget
* Hamburger Nav
* Phone Nav

These tabs contain options allowing administrators to customize the appearance of their site, especially the header, without the need for additional programming.

### Additional Admin Console Options
The following article on [JooMooWebSites.Com](http://wwww.joomoowebsites.com) walks through the options in these new tabs:
* [Beez3 IdMyGadget Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-templates/demo-beez3-idmygadget)

It contains screen shots of each tab and describes and demonstrates these options, and is an excellent supplement to the information in this README.md file.

#### New tab: IdMyGadget
Clicking on the IdMyGadget tab reveals the following options unique to this template:

* Device Detector
  * Allows quickly switching between third-party device detectors
  * Note that each of these is **released under a different license** and has massively different capabilities, but that the IdMyGadget Adapter API makes them "look the same" to joomla
  * Note that only the Detect Mobile Browsers detector works "out of the box," and it does not detect tablets
  * Mobile Detect requires installation from github, for more information see the (IdMyGadget README.md for Mobile Detect)[http://github.com/tomwhartung/idMyGadget/blob/master/gadget_detectors/mobile_detect/README.md]
  * Tera Wurfl requires installation from source forge and is dependent on a database. For more information see the (IdMyGadget README.md for Tera Wurfl)[https://github.com/tomwhartung/idMyGadget/blob/master/gadget_detectors/tera_wurfl/README.md]

##### Site header params - Phones

* Logo (Phone) - Replaces Advanced -> Logo in Beez3 for phones
* Site Title (Phone) - Replaces Advanced -> Site Title in Beez3 for phones
* Tag Line (Phone) - Replaces Advanced -> Site Description in Beez3 for phones

##### Site header params - Tablets

* Logo (tablet) - Replaces Advanced -> Logo in Beez3 for tablets
* Site Title (tablet) - Replaces Advanced -> Site Title in Beez3 for tablets
* Tag Line (tablet) - Replaces Advanced -> Site Description in Beez3 for tablets

##### Site header params - Desktop Browsers

* Logo (Desktop) - Replaces Advanced -> Logo in Beez3 for desktop browsers
* Site Title (Desktop) - Replaces Advanced -> Site Title in Beez3 for desktop browsers
* Tag Line (Desktop) - Replaces Advanced -> Site Description in Beez3 for desktop browsers

#### New tab: Hamburger Nav

This template supports the creation and placement of hamburger menus on one or both sides of the site header.

Clicking on the Hamburger Nav tab reveals the following options unique to this template:

##### Hamburger Menu Icon Params, Left Side
* Show on tablets - menus placed in the **phone-burger-menu-left** position always appear on phones, pick yes to have this also display on tablets
* Show on desktops - menus placed in the **phone-burger-menu-left** position always appear on phones, pick yes to have this also display on desktops
* Left Hamburger Menu Size - choose one of the available values (in pixels)
* Left Hamburger Menu Color - use the color picker or type in a hexadecimal RGB value
* Left Hamburger Line Cap - select round, square, or butt
* Left Hamburger Line Size - select normal, fat, or thin

##### Hamburger Menu Icon Params, Right Side
* Show on tablets - menus placed in the **phone-burger-menu-right** position always appear on phones, pick yes to have this also display on tablets
* Show on desktops - menus placed in the **phone-burger-menu-right** position always appear on phones, pick yes to have this also display on desktops
* Right Hamburger Menu Size - choose one of the available values (in pixels)
* Right Hamburger Menu Color - use the color picker or type in a hexadecimal RGB value
* Right Hamburger Line Cap - select round, square, or butt
* Right Hamburger Line Size - select normal, fat, or thin

##### Setup
To make this work, you need to define an appropriate joomla menu and assign it to one of the new positions **phone-burger-menu-left** or **phone-burger-menu-right**.  Use the options on this tab if you define a menu and put it in one of these positions.

This template uses the jQuery Mobile JavaScript Library to display a mobile-friendly pop-up menu.  This may not be the best look, feel, and behavior on desktop browsers!

##### Demo Article Has Complete Setup Instructions

The [Hamburger Nav Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-modules/idmygadget-menus/hamburger-nav) article gives step-by-step instructions on how to set up these menus.

##### Known Issue and Work-around
This template uses the HTML5 canvas element to draw the hamburger navigation icons.  Not all devices fully support using this functionality in this context.

Placing one or more image files in the `templates/jmws_protostar_idmygadget/images/idMyGadget` directory causes this template to use the file instead of drawing the icons.  This can be a good workaround for devices that do not support the HTML5 canvas in this context.  These images must be named as the following table describes.

File Name | Position | Device
----------|----------|-------
phoneBurgerMenuIconLeftPhone | Left | Phone
phoneBurgerMenuIconRightPhone | Right | Phone
phoneBurgerMenuIconLeftTablet | Left | Tablet
phoneBurgerMenuIconRightTablet | Right | Tablet
phoneBurgerMenuIconLeftDesktop | Left | Desktop
phoneBurgerMenuIconRightDesktop | Right | Desktop

**Note that this template scales the image to the size set in the options (Left Hamburger Menu Size or Right Hamburger Menu Size, as approprate).**

For up-to-date information about compatibility with respect to all of this functionality, see the latest articles on [joomoowebsites.com](http://joomoowebsites.com).

#### New Tab: Phone Nav

Clicking on the Phone Nav tab reveals the following options unique to this template:

* Theme for Nav on Phones - value is passed to jQuery Mobile, which has customizable themes (but not many "out of the box")

### Changes to Template Positions

Positions were added, but none were harmed in the making of this template.

#### New Positions

The following positions appear in this template, but not in protostar:

* phone-header-nav
* phone-footer-nav
* phone-burger-menu-left
* phone-burger-menu-right

## Requests for Enhancements

I am open to doing additional work on this project.

Note however that I have invested a considerable amount of my own time on this, and depending on the nature of your request(s), I may request some sort of compensation.

## About IdMyGadget:

For information about the IdMyGadget Device Detection Adapter API&copy;, see the [About-IdMyGadget.md file in this directory](https://github.com/tomwhartung/jmws_beez3_idMyGadget/blob/master/ABOUT-IdMyGadget.md).

