<?php
/* Smarty version 3.1.30, created on 2023-03-10 19:30:50
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Schronisko\app\views\BehaviorEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b775a6458b1_12725805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700d0a43998a5b3f98c33587aa6bbe78afbc2bfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Schronisko\\app\\views\\BehaviorEditView.tpl',
      1 => 1678472993,
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
function content_640b775a6458b1_12725805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_378780121640b775a6452c0_77482977', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_378780121640b775a6452c0_77482977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1><?php if ($_smarty_tpl->tpl_vars['form']->value->behaviorID) {?>
                Behavior
            <?php } else { ?>
                New Behavior
            <?php }?> </h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="behaviorID" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->behaviorID;?>
" hidden="true" />
            <input name="behavior_type" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->behavior_type;?>
" />
            <input type="submit" value="Zapisz" />
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
