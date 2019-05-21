<?php
/* Smarty version 3.1.33, created on 2019-03-19 16:15:57
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore\templates\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c914dfdd6ffa0_84970763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0747ecc42c6f900040847234d1c04081ab4a55c6' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore\\templates\\links.tpl',
      1 => 1553026449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c914dfdd6ffa0_84970763 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-link"><a href="cart.php">Cart</a></li>

<?php if ($_smarty_tpl->tpl_vars['session']->value->login) {?>
  <li class="nav-link"><a href="logout.php">Logout</a></li>
<?php } else { ?>
  <li class="nav-link"><a href="login.php">Login</a></li>
<?php }
}
}
