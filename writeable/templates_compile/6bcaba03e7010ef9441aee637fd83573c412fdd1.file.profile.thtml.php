<?php /* Smarty version Smarty-3.0.6, created on 2011-04-11 13:38:16
         compiled from "/Volumes/MyData/WebSites/Caribou/trunk/themes/orchard/account_templates/profile.thtml" */ ?>
<?php /*%%SmartyHeaderCode:16832992694da34a98617761-97749804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bcaba03e7010ef9441aee637fd83573c412fdd1' => 
    array (
      0 => '/Volumes/MyData/WebSites/Caribou/trunk/themes/orchard/account_templates/profile.thtml',
      1 => 1300309857,
      2 => 'file',
    ),
    'ce343879aec0a59ba7a607753dabbd839bb143a0' => 
    array (
      0 => '/Volumes/MyData/WebSites/Caribou/trunk/themes/orchard/layout.thtml',
      1 => 1300309857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16832992694da34a98617761-97749804',
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
if (!is_callable('smarty_modifier_date_format')) include '/Volumes/MyData/WebSites/Caribou/trunk/app/libraries/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_menu')) include 'app/modules/menu_manager/template_plugins/function.menu.php';
if (!is_callable('smarty_block_content')) include 'app/modules/publish/template_plugins/block.content.php';
if (!is_callable('smarty_function_custom_field')) include 'app/modules/custom_fields/template_plugins/function.custom_field.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<base href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
" />
<title>
Edit Your Profile - <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>

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
	<div id="header">
		<a class="logo" href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
">
			<img src="<?php echo smarty_function_theme_url(array('path'=>"images/logo.jpg"),$_smarty_tpl);?>
" alt="<?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>
" />
			
			<div class="logo_text">
				<?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>

				
				<div class="slogan">
					Orchard, a simple theme for business
				</div>
			</div>
		</a>

		<div class="date">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('has_cart', array()); $_block_repeat=true; smarty_block_has_cart(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a href="<?php echo smarty_function_url(array('path'=>"store/cart"),$_smarty_tpl);?>
">Shopping Cart (<?php echo smarty_function_cart_items(array(),$_smarty_tpl);?>
)</a> | 
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_has_cart(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php echo smarty_modifier_date_format(time(),"%A, %B %e, %Y");?>

		</div>
		
		<div class="search">
			<form method="get" action="<?php echo smarty_function_url(array('path'=>"search"),$_smarty_tpl);?>
" class="validate">
				<input type="text" class="text required mark_empty" rel="search query" name="q" /> <input type="submit" class="button small" name="" value="Search" />
			</form>
		</div>
	</div>
	
	<div id="navigation">
		<?php echo smarty_function_menu(array('name'=>"main_menu",'show_sub_menus'=>"yes"),$_smarty_tpl);?>

		<div style="clear:both"></div>
	</div>
	
	<div id="banner">
		<img src="<?php echo smarty_function_theme_url(array('path'=>"images/banner.jpg"),$_smarty_tpl);?>
" alt="" />
	</div>
	
	<div id="content">
		<div class="sidebar">
			<h3>Latest News</h3>
			
			<ul class="news">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('content', array('var'=>"news",'type'=>"news",'limit'=>"5")); $_block_repeat=true; smarty_block_content(array('var'=>"news",'type'=>"news",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('news')->value['date'],"%B %e, %Y");?>
</span>
					<a href="<?php echo $_smarty_tpl->getVariable('news')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('news')->value['title'];?>
</a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_content(array('var'=>"news",'type'=>"news",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			
			<a class="rss" href="<?php echo smarty_function_url(array('path'=>"news_rss"),$_smarty_tpl);?>
">RSS Feed</a>
		</div>
		
		<div class="inner_content">
			
	<h1>Edit Your Profile</h1>
	<p>Complete the fields below to update your <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>
 account profile.</p>
	<form class="form validate" enctype="multipart/form-data" method="post" action="<?php echo smarty_function_url(array('path'=>"users/post_profile"),$_smarty_tpl);?>
">
		<?php if ($_smarty_tpl->getVariable('validation_errors')->value){?>
			<div class="errors">
				<?php echo $_smarty_tpl->getVariable('validation_errors')->value;?>

			</div>
		<?php }?>
	
		<fieldset>
			<legend>Access Information</legend>
			<ul class="form">
				<li>
					<label for="username">Username</label>
					<input type="text" class="text required" id="username" name="username" value="<?php if ($_smarty_tpl->getVariable('values')->value['username']){?><?php echo $_smarty_tpl->getVariable('values')->value['username'];?>
<?php }?>">
				</li>
				<li>
					<label for="email">Email</label>
					<input type="email" class="text required" id="email" name="email" value="<?php if ($_smarty_tpl->getVariable('values')->value['email']){?><?php echo $_smarty_tpl->getVariable('values')->value['email'];?>
<?php }?>" />
				</li>
			</ul>
		</fieldset>
		
		<fieldset>
			<legend>Profile Information</legend>
			<ul class="form">
				<li>
					<label class="full" for="first_name">First Name</label>
				</li>
				<li>
					<input type="text" class="text required" id="first_name" name="first_name" value="<?php if ($_smarty_tpl->getVariable('values')->value['first_name']){?><?php echo $_smarty_tpl->getVariable('values')->value['first_name'];?>
<?php }?>">
				</li>
				<li>
					<label class="full" for="last_name">Last Name</label>
				</li>
				<li>
					<input type="text" class="text required" id="last_name" name="last_name" value="<?php if ($_smarty_tpl->getVariable('values')->value['last_name']){?><?php echo $_smarty_tpl->getVariable('values')->value['last_name'];?>
<?php }?>">
				</li>
				<?php if ($_smarty_tpl->getVariable('custom_fields')->value){?>
					<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('custom_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
?>
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']!='checkbox'){?>
						<li>
							<label class="full" for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['friendly_name'];?>
</label>
						</li>
						<li>
							<?php echo smarty_function_custom_field(array('field'=>$_smarty_tpl->tpl_vars['field']->value,'value'=>$_smarty_tpl->getVariable('values')->value[$_smarty_tpl->tpl_vars['field']->value['name']],'default'=>false),$_smarty_tpl);?>

						</li>
					<?php }else{ ?>
						<li>
							<?php echo smarty_function_custom_field(array('field'=>$_smarty_tpl->tpl_vars['field']->value,'value'=>$_smarty_tpl->getVariable('values')->value[$_smarty_tpl->tpl_vars['field']->value['name']],'default'=>false),$_smarty_tpl);?>
 <label style="display: inline; float: none" for="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['friendly_name'];?>
</label>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['field']->value['help']){?>
					<li>
						<div class="help"><?php echo $_smarty_tpl->tpl_vars['field']->value['help'];?>
</div>
					</li>
					<?php }?>
					<?php }} ?>
				<?php }?>
			</ul>
		</fieldset>
		
		<input type="submit" class="button" name="go" value="Save Changes" />
	</form>

		</div>
		
		<div style="clear:both"></div>
	</div>
</div>

<div class="container footer">
	Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
, <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>
.  All Rights Reserved.
	<?php echo smarty_function_menu(array('name'=>"footer_menu",'class'=>"menu"),$_smarty_tpl);?>

</div>
</body>
</html>