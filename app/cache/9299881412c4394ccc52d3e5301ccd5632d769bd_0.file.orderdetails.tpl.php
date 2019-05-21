<?php
/* Smarty version 3.1.33, created on 2019-04-02 11:11:24
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\orderdetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca37b9c9c8755_98024074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9299881412c4394ccc52d3e5301ccd5632d769bd' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\orderdetails.tpl',
      1 => 1554217774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca37b9c9c8755_98024074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9067872225ca37b9c9aacb9_70693038', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11132539345ca37b9c9ab781_53849170', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_9067872225ca37b9c9aacb9_70693038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_9067872225ca37b9c9aacb9_70693038',
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
class Block_11132539345ca37b9c9ab781_53849170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11132539345ca37b9c9ab781_53849170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\myplugins\\function.session_get_flash.php','function'=>'smarty_function_session_get_flash',),));
?>


<h2>Order #<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
<pre>
User: <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>

Email: <?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>

</pre>
    
    <?php }?>
<table class="table table-hover table-sm">
    <tr>
    <th>product name</th>
    <th>id</th>
    <th>category</th>
      <th>purchase price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          
      <tr>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['category'];?>
</td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value['price'],2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['quantity'];?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value['subtotal'],2);?>
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
<?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
    <?php ob_start();
echo smarty_function_session_get_flash(array('var'=>'confirm'),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <form action="deleteorder.php" method="GET">
            <input type="hidden" name="idhid" value=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
  />
            <input type='hidden' name='confirm' value='confirm' />
            <button type="submit" >Process</button>
            <button type="submit" name="cancel">Cancel</button>
            <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
        </form>
        <?php } else { ?>
            <form action="deleteorder.php" method="GET">
            <input type="hidden" name="idhid" value=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
  />
            <button type="submit" >Process</button>
            <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
        </form>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block "content"} */
}
