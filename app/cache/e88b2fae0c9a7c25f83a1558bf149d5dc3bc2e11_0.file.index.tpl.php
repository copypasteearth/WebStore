<?php
/* Smarty version 3.1.33, created on 2019-03-23 19:31:08
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c96c1bc610194_61535253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88b2fae0c9a7c25f83a1558bf149d5dc3bc2e11' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\index.tpl',
      1 => 1553383846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c96c1bc610194_61535253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16787761485c96c1bc3680b8_41750535', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2045899065c96c1bc369fa7_62972196', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_16787761485c96c1bc3680b8_41750535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16787761485c96c1bc3680b8_41750535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    table tr:first-child:hover {
      background: none;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_2045899065c96c1bc369fa7_62972196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2045899065c96c1bc369fa7_62972196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
  
 
  
  <h2>Products</h2>

  <form action="index.php" method="GET">
    <button type="submit">Choose category:</button>
    <select name="category_id">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

    </select>
  </form>
  <p></p>

  <table class="table table-hover table-sm">
    <tr>
      <th><a href="index.php?field=name">name</a></th>
      <th><a href="index.php?field=price">price</a></th>
      <th>category</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <tr>
        <td>
          <a href="showProduct.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

          </a>
        </td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
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
