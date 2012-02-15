<?php /* Smarty version Smarty-3.0.7, created on 2012-02-15 04:36:34
         compiled from "application/template/templates/default/core.html" */ ?>
<?php /*%%SmartyHeaderCode:4193324014f3b2842c92240-36055424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac927845eb6c8e32e529d601b40b1486254fbe4' => 
    array (
      0 => 'application/template/templates/default/core.html',
      1 => 1329206455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4193324014f3b2842c92240-36055424',
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