<?php
/* Smarty version 3.1.30, created on 2023-03-10 19:30:43
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Schronisko\app\views\BehaviorListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b7753a55422_66807111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bcbb1194f338b70e9e7c521bb9017901592a314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Schronisko\\app\\views\\BehaviorListView.tpl',
      1 => 1678473042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:header.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_640b7753a55422_66807111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1454333469640b7753a54755_38519320', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1454333469640b7753a54755_38519320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Behaviors</h1>
        <div>
            <?php if (isset($_smarty_tpl->tpl_vars['behaviors']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorEdit" method="post">
                        <h3><?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</h3>
                        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'];?>
" hidden="true" />
                        
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
