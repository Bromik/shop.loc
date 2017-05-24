<?php /* Smarty version 3.1.27, created on 2017-05-12 12:19:04
         compiled from "C:\OpenServer\domains\shop.loc\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:797759157e083fe556_51604006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7586818995e874a737a8221c3737fbb2ab40746d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\shop.loc\\manager\\templates\\default\\welcome.tpl',
      1 => 1492061282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797759157e083fe556_51604006',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59157e0840d690_82878466',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59157e0840d690_82878466')) {
function content_59157e0840d690_82878466 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '797759157e083fe556_51604006';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>