<?php
/* Smarty version 3.1.30, created on 2023-03-10 19:31:20
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Schronisko\app\views\DogEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b7778372da6_17345118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251f7d23e867e0c27bdc6438658dee65e8d618d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Schronisko\\app\\views\\DogEditView.tpl',
      1 => 1678473078,
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
function content_640b7778372da6_17345118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339218792640b7778372732_54068513', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_339218792640b7778372732_54068513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Dog</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogID;?>
" hidden="true" />
            <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogName;?>
" />
            <input type="number" max="20" min="0" name="age" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogAge;?>
" />
            <input name="breed" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogBreed;?>
">
            <select name="hair_type">
                <option value="Włosy" <?php if ($_smarty_tpl->tpl_vars['form']->value->dogHairType == "Włosy") {?> selected="true" <?php }?>>Włosy</option>
                <option value="Śierść" <?php if ($_smarty_tpl->tpl_vars['form']->value->dogHairType == "Śierść") {?> selected="true" <?php }?>>Śierść</option>
            </select>
            <fieldset>
                <?php if (($_smarty_tpl->tpl_vars['form']->value->dogID == '')) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
?>
                        <label><input type="checkbox" name="behaviors" value="<?php echo $_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'];?>
" /><?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</label>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
?>
                        <label><?php echo $_smarty_tpl->tpl_vars['behavior']->value;?>
</label>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            </fieldset>
            <input name="img" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogImage;?>
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
