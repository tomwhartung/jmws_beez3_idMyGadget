# jmws_beez3_idmygadget
I am using this repo to integrate the default joomla Beez3 template with idMyGadget.

## Dependencies
To function properly, this code requires installation of code in other reqpos.

### TODO:
Look into using Joomla Composer to manage these dependencies.

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

### Demo Article
The [Beez3 IdMyGadget Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-templates/demo-beez3-idmygadget) article gives an example of how this template looks.

Note that the configuration for that demo is unpolished and some fiddling with the configuration and a little CSS could go a long way in making it look much nicer.

### Future Work
The goal of this project is to integrate IdMYGadget with the Beez3 default Joomla template, and keep changes to a minimum.
Right now that goal is accomplished, so additional work on this is on hold for now.

I am currently using a similar template ([jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget)) on my site [JooMooWebSites.Com](http://joomoowebsites.com/), and have moved on to doing similar work in WordPress and Drupal.

Thus there is no real reason for me to continue work on this, without a new goal in mind, or some other compelling reason to start using this template rather than [jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget), which has a lot more options.

#### Self-Promotion Alert:
Of course, I'd certainly be happy to do additional work on this, for a fee!  ;-)

## Installation:

Installation of all jmws_* joomla extensions is the same.
For details, see the following documents in the [Jmws Accoutrements Repo on github](https://github.com/tomwhartung/jmws_accoutrements/):

* [Installing Jmws Joomla Extensions document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/joomla/install.md)
* [Jmws Github Strategy document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/devops/cms_github_strategy.md)

## Specific Changes Made to Beez3

### Integration With IdMyGadget
This template uses IdMyGadget to determine whether the user is accessing the site on a phone, tablet, or desktop, and changes the output accordingly.

This template adds the following tabs to the joomla administration console for it:

* IdMyGadget
* Hamburger Nav
* Phone Nav

These tabs contain options allowing administrators to customize the appearance of their site, especially the header, without the need for additional programming.

### Additional Admin Console Options
The following article walks through the options in these new tabs:
* [Beez3 IdMyGadget Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-templates/demo-beez3-idmygadget)

It contains screen shots of each tab and describes and demonstrates these options, and is an excellent supplement to the information in this README.md file.

#### New tab: IdMyGadget
Clicking on the IdMyGadget tab reveals the following options unique to this template:

* New: Device Detector
  * Allows quickly switching between third-party device detectors
  * Note that each of these is **released under a different license** and has massively different capabilities, but that the IdMyGadget Adapter API makes them "look the same" to joomla
  * Note that only the Detect Mobile Browsers detector works "out of the box," and it does not detect tablets
  * Mobile Detect requires installation from github, for more information see the (IdMyGadget README.md for Mobile Detect)[http://github.com/tomwhartung/idMyGadget/blob/master/gadget_detectors/mobile_detect/README.md]
  * Tera Wurfl requires installation from source forge and is dependent on a database. For more information see the (IdMyGadget README.md for Tera Wurfl)[https://github.com/tomwhartung/idMyGadget/blob/master/gadget_detectors/tera_wurfl/README.md]



## About IdMyGadget:

For information about the IdMyGadget Device Detection Adapter API&copy;, see the [About-IdMyGadget.md file in this directory](https://github.com/tomwhartung/jmws_beez3_idMyGadget/blob/master/ABOUT-IdMyGadget.md).

