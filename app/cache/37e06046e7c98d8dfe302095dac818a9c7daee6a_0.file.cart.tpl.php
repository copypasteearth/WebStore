<?php
/* Smarty version 3.1.33, created on 2019-03-21 15:56:28
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93ec6c6f6270_78983682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e06046e7c98d8dfe302095dac818a9c7daee6a' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore\\templates\\cart.tpl',
      1 => 1553198186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c93ec6c6f6270_78983682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14051724755c93ec6c6dfc08_06394835', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18825243825c93ec6c6e09c9_09773702', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_14051724755c93ec6c6dfc08_06394835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_14051724755c93ec6c6dfc08_06394835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_18825243825c93ec6c6e09c9_09773702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18825243825c93ec6c6e09c9_09773702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>My Cart</h2>
<table class="table table-hover table-sm">
    <tr>
    <th>name</th>
    <th>id</th>
    <th>category</th>
      <th>price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_info']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          
      <tr>
        <td>
          <a href="showProduct.php?product_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

          </a>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['category'];?>
</td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value['price'],2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['quantity'];?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value['quantity']*$_smarty_tpl->tpl_vars['info']->value['price'],2);?>
</td>
      </tr>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table>

<?php echo "\$session = ".((string)$_smarty_tpl->tpl_vars['session']->value);?>


<pre>
$cart_info =
<?php echo var_export($_smarty_tpl->tpl_vars['cart_info']->value,true);?>


<b>total = $<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2);?>
</b>
</pre>

<?php
}
}
/* {/block "content"} */
}
