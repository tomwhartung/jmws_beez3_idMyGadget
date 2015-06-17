<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$showRightColumn = 0;
$showleft        = 0;
$showbottom      = 0;

// Get params
$app         = JFactory::getApplication();
$params      = $app->getTemplate(true)->params;
$color       = $params->get('templatecolor');
$navposition = $params->get('navposition');

// Get language and direction
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;

//
// Initialize Device Detection
//
$jmwsIdMyGadget = null;
require_once 'jmws_idMyGadget_for_joomla/JmwsIdMyGadget.php';
$gadgetDetector = $params->get('gadgetDetector');

if ( $gadgetDetector == 'mobile_detect' )
{
	$jmwsIdMyGadget = new JmwsIdMyGadget( 'mobile_detect' );
}
else if ( $gadgetDetector == 'tera_wurfl' )
{
	$jmwsIdMyGadget = new JmwsIdMyGadget( 'tera_wurfl' );
}
else
{
	$jmwsIdMyGadget = new JmwsIdMyGadget( 'detect_mobile_browsers' );
}
//
// If device is a phone, add in the jquery mobile css and library
//
if ( $jmwsIdMyGadget->getGadgetString() === JmwsIdMyGadget::GADGET_STRING_PHONE )
{
	$doc->addStyleSheet( JmwsIdMyGadget::JQUERY_MOBILE_CSS_URL );
	$doc->addScript( JmwsIdMyGadget::JQUERY_MOBILE_JS_URL );
}
//
// Set the logo (file) and sitetitle and sitedescription (text) to one of the device-specific values
//
if ( $jmwsIdMyGadget->getGadgetString() === JmwsIdMyGadget::GADGET_STRING_PHONE )
{
	$logo = $params->get('logoFilePhone');
	$sitetitle = $params->get('sitetitlePhone');
	$sitedescription = $params->get('sitedescriptionPhone');
}
else if ( $jmwsIdMyGadget->getGadgetString() === JmwsIdMyGadget::GADGET_STRING_TABLET )
{
	$logo = $params->get('logoFileTablet');
	$sitetitle = $params->get('sitetitleTablet');
	$sitedescription = $params->get('sitedescriptionTablet');
}
else   // default to/assume we are on a desktop browser
{
	$logo = $params->get('logoFileDesktop');
	$sitetitle = $params->get('sitetitleDesktop');
	$sitedescription = $params->get('sitedescriptionDesktop');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $this->error->getCode(); ?> - <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>

	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/error.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/position.css" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="Print" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/<?php echo htmlspecialchars($color); ?>.css" type="text/css" />

	<?php $files = JHtml::_('stylesheet', 'templates/' . $this->template . '/css/general.css', null, false, true); ?>
	<?php if ($files) : ?>
		<?php if (!is_array($files)) : ?>
			<?php $files = array($files); ?>
		<?php endif; ?>
	<?php foreach ($files as $file) : ?>
		<link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" />
	<?php endforeach; ?>
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/<?php echo htmlspecialchars($color); ?>.css" type="text/css" />
	<?php if ($this->direction == 'rtl') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_rtl.css" type="text/css" />
		<?php if (file_exists(JPATH_SITE . '/templates/' . $this->template . '/css/' . $color . '_rtl.css')) : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/<?php echo $color ?>_rtl.css" type="text/css" />
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($app->get('debug_lang', '0') == '1' || $app->get('debug', '0') == '1') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" />
	<?php endif; ?>
	<!--[if lte IE 6]>
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->

	<style type="text/css">
	<!--
		#errorboxbody
		{margin:30px}
		#errorboxbody h2
		{font-weight:normal;
		font-size:1.5em}
		#searchbox
		{background:#eee;
		padding:10px;
		margin-top:20px;
		border:solid 1px #ddd
		}
	-->
	</style>
</head>
	<body>
		<div id="all">
			<div id="back">
				<div id="header">
					<div class="logoheader">
						<h1 id="logo">
							<?php if ($logo) : ?>
								<img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($logo); ?>"
									  alt="<?php echo htmlspecialchars($sitetitle); ?>" />
							<?php else : ?>
								<?php echo htmlspecialchars($sitetitle); ?>
							<?php endif; ?>
							<span class="header1">
								<?php echo htmlspecialchars($sitedescription); ?>
							</span>
						</h1>
					</div><!-- end logoheader -->
					<ul class="skiplinks">
						<li>
							<a href="#wrapper2" class="u2">
								<?php echo JText::_('TPL_BEEZ3_SKIP_TO_ERROR_CONTENT'); ?>
							</a>
						</li>
						<li>
							<a href="#nav" class="u2">
								<?php echo JText::_('TPL_BEEZ3_ERROR_JUMP_TO_NAV'); ?>
							</a>
						</li>
					</ul>
					<div id="line">
					</div><!-- end line -->
				</div><!-- end header -->
				<div id="contentarea2" >
					<div class="left1" id="nav">
						<h2 class="unseen">
							<?php echo JText::_('TPL_BEEZ3_NAVIGATION'); ?>
						</h2>
						<?php $module = JModuleHelper::getModule('menu'); ?>
						<?php echo JModuleHelper::renderModule($module); ?>
					</div><!-- end navi -->
					<div id="wrapper2">
						<div id="errorboxbody">
							<h2>
								<?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?>
							</h2>
							<h3><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></h3>
							<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
							<ul>
								<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
							</ul>
							<?php if (JModuleHelper::getModule('search')) : ?>
								<div id="searchbox">
									<h3 class="unseen">
										<?php echo JText::_('TPL_BEEZ3_SEARCH'); ?>
									</h3>
									<p>
										<?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?>
									</p>
									<?php $module = JModuleHelper::getModule('search'); ?>
									<?php echo JModuleHelper::renderModule($module); ?>
								</div><!-- end searchbox -->
							<?php endif; ?>
							<div><!-- start gotohomepage -->
								<p>
								<a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
								</p>
							</div><!-- end gotohomepage -->
							<h3>
								<?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?>
							</h3>
							<h2>#<?php echo $this->error->getCode(); ?>&nbsp;<?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>
							</h2>
							<br />
						</div><!-- end errorboxbody -->
					</div><!-- end wrapper2 -->
				</div><!-- end contentarea2 -->
				<?php if ($this->debug) :
					echo $this->renderBacktrace();
				endif; ?>
			</div><!--end back -->
		</div><!--end all -->
		<div id="footer-outer">
			<div id="footer-sub">
				<div id="footer">
				<p>
					<?php echo JText::_('TPL_BEEZ3_POWERED_BY'); ?>
					<a href="http://www.joomla.org/">
						Joomla!&#174;
					</a>
				</p>
				</div><!-- end footer -->
			 </div><!-- end footer-sub -->
		</div><!-- end footer-outer-->
	</body>
</html>
