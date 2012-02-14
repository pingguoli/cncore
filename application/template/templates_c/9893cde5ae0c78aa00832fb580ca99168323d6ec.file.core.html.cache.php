<?php /* Smarty version Smarty-3.0.7, created on 2011-05-23 14:47:30
         compiled from "application/template\templates\default\core.html" */ ?>
<?php /*%%SmartyHeaderCode:278354dda7382b91795-99788413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9893cde5ae0c78aa00832fb580ca99168323d6ec' => 
    array (
      0 => 'application/template\\templates\\default\\core.html',
      1 => 1306161188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278354dda7382b91795-99788413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("var.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="at-wrapper">
	<div class="at-70 content">
		<div class="padding">
			<h2>站点开发中，请定期关注、、、</h2>

            <hr />
            <div class="notification notice">
                <h3>DB示例</h3>
                <ul>
                    <li>序号:<?php echo $_smarty_tpl->getVariable('userinfo')->value['id'];?>
</li>
                    <li>用户名:<?php echo $_smarty_tpl->getVariable('userinfo')->value['username'];?>
</li>
                    <li>密码:<?php echo $_smarty_tpl->getVariable('userinfo')->value['userpass'];?>
</li>
                </ul>
            </div>
            
            
			
		</div>
	</div>

	<div id="sidebar" class="at-30">
		

		<h2>关于我们</h2>
		<p>
            it's intresting!
        </p>

		<hr />	
        
        <h2>联系方式：</h2>
        <blockquote class="clear">
            <p>
                QQ:<?php echo $_smarty_tpl->getConfigVariable('qq');?>
<br/>
                Email:<?php echo $_smarty_tpl->getConfigVariable('email');?>

            </p>
        </blockquote>
	</div>
</div>


<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>