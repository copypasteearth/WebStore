<?php
/* Smarty version 3.1.33, created on 2019-03-21 20:36:06
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\showProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c942df6cc5b67_72547510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105d4b3ef5f259ec3445860f28d9fee4af1fddeb' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\showProduct.tpl',
      1 => 1553214457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c942df6cc5b67_72547510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17787304565c942df6cb3df5_42798990', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20892293885c942df6cb4bb1_48636001', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14955084105c942df6cc5406_13280608', "localscript");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_17787304565c942df6cb3df5_42798990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_17787304565c942df6cb3df5_42798990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    table.info td:first-child, table.info th:first-child {
      white-space: nowrap;
      width: 10px;
    }
    table.info th, table.info td {
      line-height: 10px;
    }
    input {
      width: 5em;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_20892293885c942df6cb4bb1_48636001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20892293885c942df6cb4bb1_48636001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Show Product</h2>

  <table class='info table table-sm table-borderless'>
    <tr>
      <th colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</th>
    </tr>
    <tr>
      <td>product id:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
    </tr>
    <tr>
      <td>price:</td>
      <td>$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
    </tr>
    <tr>
      <td>category:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
    </tr>
  </table>
  
  <table class='table-sm'>
    <tr>
      <td>       
        <img class='img-fluid' src="img/<?php echo $_smarty_tpl->tpl_vars['image_src']->value;?>
" />
      </td>
      <td>
          <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
              <form action="modifyproduct.php" method="POST">
          <button type="submit" name='modify'>Modify</button>
          <input type="hidden" name='id' value=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 />
        </form>
              
              <?php } else { ?>
        <form action="showProductButtons.php" method="GET">
          <b>Quantity:</b>
          <input name="quantity" type="number" required min="1" value=<?php if (($_smarty_tpl->tpl_vars['quantity']->value > 0)) {?> <?php echo $_smarty_tpl->tpl_vars['quantity']->value;
}?> />
          <p></p>
          <button type="submit" name='set'>Set Quantity</button>
          <button type="submit" name='cancel'>Cancel</button>
          <button type="submit" name='remove'>Remove From Cart</button>
          <input type="hidden" name='hidden' value=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 />
        </form>
        <?php }?>
        <p></p>
      </td>
    </tr>
  </table>
  <p>
    <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
  
  </p>

<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_14955084105c942df6cc5406_13280608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_14955084105c942df6cc5406_13280608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
    $("button[name='remove']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
