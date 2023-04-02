<?php
/* Smarty version 3.1.30, created on 2023-03-12 10:17:13
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Schronisko\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640d98997c4093_19800473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f64baeecc8f49b065d2d0aa6da59e140ef1ee37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Schronisko\\app\\views\\templates\\header.tpl',
      1 => 1678612621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d98997c4093_19800473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">main page</a>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowAll" class="pure-menu-heading pure-menu-link">users</a>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin")) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorShowAll" class="pure-menu-heading pure-menu-link">behaviors</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorNew" class="pure-menu-heading pure-menu-link">new behavior</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogNew" class="pure-menu-heading pure-menu-link">new dog</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">rents</a>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorShowAll" class="pure-menu-heading pure-menu-link">behaviors</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorNew" class="pure-menu-heading pure-menu-link">new behavior</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogNew" class="pure-menu-heading pure-menu-link">new dog</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">rents</a>
    <?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->privilege;?>
</span>
</div>
<?php }
}
