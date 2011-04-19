<?php /* Smarty version Smarty-3.0.6, created on 2011-04-11 23:03:10
         compiled from "/Volumes/MyData/WebSites/Caribou/trunk/themes/orchard/search.thtml" */ ?>
<?php /*%%SmartyHeaderCode:11942408724da3cefee6a2c2-28318967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a3ff091769a4dd32f6f0ea96c7f555f03b3a33' => 
    array (
      0 => '/Volumes/MyData/WebSites/Caribou/trunk/themes/orchard/search.thtml',
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
  'nocache_hash' => '11942408724da3cefee6a2c2-28318967',
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
			
	<h1><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h1>
	
	<div id="search_form">
	<form method="get" action="<?php echo smarty_function_url(array('path'=>"search"),$_smarty_tpl);?>
" class="validate">
	<input id="query" class="text mark_empty required" rel="search keyword(s)" name="q" value="<?php if ($_smarty_tpl->getVariable('query')->value){?><?php echo $_smarty_tpl->getVariable('query')->value;?>
<?php }?>" />&nbsp;<input id="submit" class="button" type="submit" name="go" value="Search" />
	</form>
	</div>
	
	<?php if ($_smarty_tpl->getVariable('searching')->value==true){?>
		<div class="num_results"><?php echo $_smarty_tpl->getVariable('num_results')->value;?>
 Results</div>
		
		<?php if ($_smarty_tpl->getVariable('num_results')->value==0){?>
			<p>Your search did not return any results.</p>
		<?php }else{ ?>
			<ul class="search_results">
			<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['result']->value['result_type']=="content"){?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['result']->value['relevance']!=0){?> <span class="relevance">relevance: <?php echo $_smarty_tpl->tpl_vars['result']->value['relevance'];?>
</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['summary']){?><br /><p><?php echo $_smarty_tpl->tpl_vars['result']->value['summary'];?>
</p><?php }?>
					</li>
				<?php }elseif($_smarty_tpl->tpl_vars['result']->value['result_type']=="product"){?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</a> <?php echo smarty_function_setting(array('name'=>"currency_symbol"),$_smarty_tpl);?>
<span class="price"><?php echo $_smarty_tpl->tpl_vars['result']->value['price'];?>
</span> <span class="relevance">relevance: <?php echo $_smarty_tpl->tpl_vars['result']->value['relevance'];?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['summary']){?><br /><p><?php echo $_smarty_tpl->tpl_vars['result']->value['summary'];?>
</p><?php }?>
					</li>
				<?php }?>
			<?php }} ?>
			</ul>
			
			<?php echo $_smarty_tpl->getVariable('pagination')->value;?>

		<?php }?>
	<?php }else{ ?>
		<p>Enter your keyword(s) above to search <?php echo smarty_function_setting(array('name'=>"site_name"),$_smarty_tpl);?>
.</p>
	<?php }?>

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