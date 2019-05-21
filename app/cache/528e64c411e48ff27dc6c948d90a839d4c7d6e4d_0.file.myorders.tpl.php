<?php
/* Smarty version 3.1.33, created on 2019-03-21 17:19:53
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\myorders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93fff9990428_54924600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '528e64c411e48ff27dc6c948d90a839d4c7d6e4d' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\myorders.tpl',
      1 => 1553203177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c93fff9990428_54924600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16600605525c93fff9984367_55406521', "localstyle");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10052042895c93fff9985807_70679779', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_16600605525c93fff9984367_55406521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16600605525c93fff9984367_55406521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    td:first-child, th:first-child {
      width: 10px;
      white-space: nowrap;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_10052042895c93fff9985807_70679779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10052042895c93fff9985807_70679779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>My Orders</h2>

  <table class="table table-sm table-borderless">
    <tr>
    <th>Order Id</th>
    <th>Date/Time</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
          
      <tr>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
<a href="orderdetails.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
            (details)
          </a>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['created_at'];?>
</td>
      </tr>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
  
 

<?php
}
}
/* {/block "content"} */
}
