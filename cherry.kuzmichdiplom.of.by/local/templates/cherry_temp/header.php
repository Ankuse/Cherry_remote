<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
$assets = \Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zxx" lang="zxx">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=< ?echo LANG_CHARSET? >">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <?
        $APPLICATION->ShowCSS();
	    $APPLICATION->ShowHead();

		$assets->addCss(SITE_TEMPLATE_PATH . '/vendor/components/jqueryui/themes/base/jquery-ui.css');
		$assets->addCss(SITE_TEMPLATE_PATH . '/vendor/components/font-awesome/css/font-awesome.min.css');
		$assets->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

        $assets->addJs(SITE_TEMPLATE_PATH . '/vendor/components/jquery/jquery.min.js');
        $assets->addJs(SITE_TEMPLATE_PATH . '/vendor/components/jqueryui/jquery-ui.min.js');
		$assets->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
	?>
</head>

<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<header>
    <div class="top_line">
        <div class="container align">
            <div class="col">
                <div class="col_logo">
                    <a href="#">
                        <p>cherry</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="search_top">
                    <input type="text" placeholder="Search...">
                    <button><span></span></button>
                </div>
            </div>
        </div>
    </div>
        <div class="slider">
            <div class="container">
                <div class="slider_inside">
                    <div class="slider_inside_txt">
                        <p>Eaten berry</p>
                        <p>and go for a walk</p>
                        <p>Today good weather...</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_menu container">
            <i class="fa fa-bars" aria-hidden="true" id="menu-toggle"></i>
            <ul>
                <li><a href="#1">Home</a></li>
                <li><a href="#2">Sliders</a></li>
                <li><a href="#3">Portfolio</a></li>
                <li><a href="#4">Styles</a></li>
                <li><a href="#5">Blog</a></li>
                <li><a href="#6">Cherry</a></li>
                <li><a href="#7">Contact</a></li>
            </ul>

        </div>
        <div class="breadcrump container">
            <ul>
                <li><a href="#1">Home</a></li>
                <li><a href="#2">Another page</a></li>
                <li><a href="#3">This page</a></li>
            </ul>
        </div>
</header>