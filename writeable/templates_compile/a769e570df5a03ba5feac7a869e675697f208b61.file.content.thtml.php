<?php /* Smarty version Smarty-3.0.6, created on 2011-04-11 23:23:48
         compiled from "/Volumes/MyData/WebSites/Caribou/trunk/themes/night_jungle/content.thtml" */ ?>
<?php /*%%SmartyHeaderCode:14377270004da3d3d469c718-64680316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a769e570df5a03ba5feac7a869e675697f208b61' => 
    array (
      0 => '/Volumes/MyData/WebSites/Caribou/trunk/themes/night_jungle/content.thtml',
      1 => 1300309859,
      2 => 'file',
    ),
    '55a98e19cadb50537f3a98fb4a10e63b5b753f3e' => 
    array (
      0 => '/Volumes/MyData/WebSites/Caribou/trunk/themes/night_jungle/layout.thtml',
      1 => 1300309859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14377270004da3d3d469c718-64680316',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_url')) include '/Volumes/MyData/WebSites/Caribou/trunk/themes/_plugins/function.url.php';
if (!is_callable('smarty_function_setting')) include '/Volumes/MyData/WebSites/Caribou/trunk/themes/_plugins/function.setting.php';
if (!is_callable('smarty_function_theme_url')) include '/Volumes/MyData/WebSites/Caribou/trunk/themes/_plugins/function.theme_url.php';
if (!is_callable('smarty_block_has_cart')) include 'app/modules/store/template_plugins/block.has_cart.php';
if (!is_callable('smarty_function_cart_items')) include 'app/modules/store/template_plugins/function.cart_items.php';
if (!is_callable('smarty_function_menu')) include 'app/modules/menu_manager/template_plugins/function.menu.php';
if (!is_callable('smarty_block_login_form')) include 'app/modules/users/template_plugins/block.login_form.php';
if (!is_callable('smarty_block_content')) include 'app/modules/publish/template_plugins/block.content.php';
if (!is_callable('smarty_modifier_date_format')) include '/Volumes/MyData/WebSites/Caribou/trunk/app/libraries/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<base href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
" />
<title>
<?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>

</title>
<link href="<?php echo smarty_function_theme_url(array('path'=>"css/universal.css"),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo smarty_function_url(array('path'=>"themes/_common/jquery-1.4.2.min.js"),$_smarty_tpl);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_theme_url(array('path'=>"js/universal.js"),$_smarty_tpl);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_theme_url(array('path'=>"js/form.js"),$_smarty_tpl);?>
"></script>


</head>
<body>
<div id="notices"></div>

<div class="container">
	<div id="top_bar">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('has_cart', array()); $_block_repeat=true; smarty_block_has_cart(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="top_cart">
			<a href="<?php echo smarty_function_url(array('path'=>"store/cart"),$_smarty_tpl);?>
">Shopping Cart (<?php echo smarty_function_cart_items(array(),$_smarty_tpl);?>
)</a>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_has_cart(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
		<div class="top_search">
			<form class="form" method="get" action="<?php echo smarty_function_url(array('path'=>"search"),$_smarty_tpl);?>
" class="validate">
				<input type="text" class="text required mark_empty" rel="Site search" name="q" /> <input type="submit" class="button small" name="" value="Search" />
			</form>
			<a class="small_link" href="<?php echo smarty_function_url(array('path'=>"search"),$_smarty_tpl);?>
">Advanced Search</a>
		</div>
	</div>
	
	<div id="sidebar_left">
		<div id="logo">
			<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_theme_url(array('path'=>"images/logo.png"),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->getVariable('setting')->value['site_name'];?>
" /></a>
		</div>
	
		<div id="navigation">
			<?php echo smarty_function_menu(array('name'=>"main_menu",'show_sub_menus'=>"yes"),$_smarty_tpl);?>

		</div>
		
		<div id="side_login">
			<h3>Members Area</h3>
		    
		    <?php if (!$_smarty_tpl->getVariable('logged_in')->value){?>
		    	<?php $_smarty_tpl->smarty->_tag_stack[] = array('login_form', array('var'=>"login",'return'=>"members")); $_block_repeat=true; smarty_block_login_form(array('var'=>"login",'return'=>"members"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			    <form class="form" method="post" action="<?php echo $_smarty_tpl->getVariable('login')->value['form_action'];?>
">
			        <input type="hidden" name="return" value="<?php echo $_smarty_tpl->getVariable('login')->value['return'];?>
">
			     
			        <ul class="form">
			            <li>
			                <label for="username">Username/Email</label>
			            </li>
			            <li>
			                <input type="text" class="text" id="username" name="username" value="<?php echo $_smarty_tpl->getVariable('login')->value['username'];?>
">
			            </li>
			            <li>
			                <label>Password</label>
			            </li>
			            <li>
			                <input type="password" class="text" id="password" name="password" />
			            </li>
			            <li>
			                <input type="checkbox" value="1" name="remember" /> Remember me?
			            </li>
			            <li>
			                <input type="submit" class="button" name="login" value="Log In" />
			            </li>
			            <li>
			                <a href="<?php echo smarty_function_url(array('path'=>"users/forgot_password"),$_smarty_tpl);?>
">Forgot your password?</a>
			            </li>
			        </ul>
			    </form>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_login_form(array('var'=>"login",'return'=>"members"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<p>You are logged in as <b><?php echo $_smarty_tpl->getVariable('member')->value['email'];?>
</b>.</p>
				
				<p><a href="<?php echo smarty_function_url(array('path'=>"members"),$_smarty_tpl);?>
">Click here to access the Members Area</a>.</p>
			<?php }?>
		</div>
	</div>
	
	<div id="content">
		
	<h1><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h1>
	<div class="article">
		<?php echo $_smarty_tpl->getVariable('body')->value;?>

	</div>

	</div>
	
	<div id="did_you_know">
		<h3>Did you know?</h3>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('content', array('var'=>"fact",'type'=>"did_you_know",'sort'=>"RAND()",'limit'=>"1")); $_block_repeat=true; smarty_block_content(array('var'=>"fact",'type'=>"did_you_know",'sort'=>"RAND()",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->getVariable('fact')->value['fact'];?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_content(array('var'=>"fact",'type'=>"did_you_know",'sort'=>"RAND()",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
	
	<div style="clear:both"></div>
</div>

<div class="container footer">
	<?php echo smarty_function_menu(array('name'=>"footer_menu",'class'=>"menu",'show_sub_menus'=>"no"),$_smarty_tpl);?>

	
	Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
, <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>
.  All Rights Reserved.
	<?php echo smarty_function_menu(array('name'=>"footer_menu_2",'class'=>"menu_2"),$_smarty_tpl);?>

</div>
</body>
</html>