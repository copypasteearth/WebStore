<?php
/* Smarty version 3.1.33, created on 2019-03-21 16:46:11
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93f8130ff2a4_94700600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e9166c0a367ed3d3468338008d8ac078279da8' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\links.tpl',
      1 => 1553201168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c93f8130ff2a4_94700600 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
<li class="nav-link"><a href="allorders.php">All Orders</a></li>
<li class="nav-link"><a href="addproduct.php">Add Product</a></li>
<li class="nav-link"><a href="addcategory.php">Add Category</a></li>
<?php } elseif ($_smarty_tpl->tpl_vars['session']->value->login) {?>
<li class="nav-link"><a href="cart.php">Cart</a></li>
<li class="nav-link"><a href="myorders.php">My Orders</a></li>
<?php }
if ($_smarty_tpl->tpl_vars['session']->value->login) {?>
  <li class="nav-link"><a href="logout.php">Logout</a></li>
<?php } else { ?>
<li class="nav-link"><a href="cart.php">Cart</a></li>
  <li class="nav-link"><a href="login.php">Login</a></li>
<?php }
}
}
