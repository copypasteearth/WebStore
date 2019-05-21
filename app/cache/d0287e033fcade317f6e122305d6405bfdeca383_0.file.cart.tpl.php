<?php
/* Smarty version 3.1.33, created on 2019-03-21 18:08:17
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c940b51cd3836_59563824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0287e033fcade317f6e122305d6405bfdeca383' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\cart.tpl',
      1 => 1553206094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c940b51cd3836_59563824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16657982835c940b51cb8a71_09839993', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2494453895c940b51cb9555_52667589', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_16657982835c940b51cb8a71_09839993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16657982835c940b51cb8a71_09839993',
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
class Block_2494453895c940b51cb9555_52667589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2494453895c940b51cb9555_52667589',
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



<pre>
<b>Total = $<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2);?>
</b>
</pre>
<?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['cart_info']->value) {?>
    <form action="makeorder.php" method="post" autocomplete="off">
        <button type="submit">Make an Order from Cart</button>
    </form>
<?php }?>

<?php
}
}
/* {/block "content"} */
}
