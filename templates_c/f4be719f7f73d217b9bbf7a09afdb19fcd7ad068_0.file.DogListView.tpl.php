<?php
/* Smarty version 3.1.30, created on 2023-03-31 19:53:13
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Schronisko\app\views\DogListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64271e09d4f6e9_42258550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4be719f7f73d217b9bbf7a09afdb19fcd7ad068' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Schronisko\\app\\views\\DogListView.tpl',
      1 => 1680283474,
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
function content_64271e09d4f6e9_42258550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52384522164271e09d4e890_46039491', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_52384522164271e09d4e890_46039491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Dog List</h1>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <div>
            <?php if (isset($_smarty_tpl->tpl_vars['dogs']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogs']->value, 'dog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dog']->value) {
?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogEdit" method="post">
                        <div>
                            <h2><?php echo $_smarty_tpl->tpl_vars['dog']->value['Name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['dog']->value['Age'];?>
</h2>
                            <img height="300px" width="300px" src="<?php echo $_smarty_tpl->tpl_vars['dog']->value['img'];?>
" />
                            <h3>Hair_Type: <?php echo $_smarty_tpl->tpl_vars['dog']->value['Hair_Type'];?>
</h3>
                            <h3>Breed: <?php echo $_smarty_tpl->tpl_vars['dog']->value['Breed'];?>
</h3>
                            <h3>Behaviors:
                                <?php if (isset($_smarty_tpl->tpl_vars['behaviors']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['myBehaviors']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myBehaviors']->value, 'myBehavior');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['myBehavior']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['dog']->value['idDog'] === $_smarty_tpl->tpl_vars['myBehavior']->value['Dog_idDog']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'] === $_smarty_tpl->tpl_vars['myBehavior']->value['Behavioral_BehaviorID']) {?>
                                                        <li><?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                            </h3>
                            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['dog']->value['idDog'];?>
" hidden="true" />
                            <input type="submit" value="Podgląd" />
                        </div>
                    </form>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogRent" method="post">
                        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['dog']->value['idDog'];?>
" hidden="true" />
                        <input type="submit" value="Wypożycz" />
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
