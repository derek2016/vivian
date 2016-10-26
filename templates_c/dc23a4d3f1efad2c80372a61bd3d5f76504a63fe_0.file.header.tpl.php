<?php
/* Smarty version 3.1.30, created on 2016-10-26 07:51:40
  from "D:\ECProject\vivian\vivian\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5810446c614c70_75527535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc23a4d3f1efad2c80372a61bd3d5f76504a63fe' => 
    array (
      0 => 'D:\\ECProject\\vivian\\vivian\\templates\\header.tpl',
      1 => 1477461038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5810446c614c70_75527535 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['web_title']->value;
if ($_smarty_tpl->tpl_vars['page_name']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['page_name']->value;
}?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="webthemez">
<!-- core CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/animate.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/owl.carousel.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/owl.transitions.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_css']->value;?>
/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['web_js']->value;?>
/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['web_js']->value;?>
/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['web_images']->value;?>
/ico/favicon.ico">
</head>
<body id="home">

	<header id="header">
		<nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">VIVIAN & DEREK</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="<?php echo $_smarty_tpl->tpl_vars['web_images']->value;?>
/logo.png" alt="logo">
					</a>
				</div>

				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="scroll active">
							<a href="#home">Home</a>
						</li>
						<li class="scroll">
							<a href="#services">Our Picture</a>
						</li>
						<li class="scroll">
							<a href="#about">BLOG</a>
						</li>
						<li class="scroll">
							<a href="#portfolio">GuestBook</a>
						</li>
						<li class="scroll">
							<a href="#our-team">MEWS</a>
						</li>
						<li class="scroll">
							<a href="#pricing">Source</a>
						</li>
						<li class="scroll">
							<a href="#contact-us">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<!--/.container-->
		</nav>
		<!--/nav-->
	</header>
	<!--/header--><?php }
}
