<?php
/* Smarty version 3.1.33, created on 2019-03-23 19:35:46
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\modifyproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c96c2d21263b2_67122708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7874074650f6d85a0eaaf8fdd7c441703498c355' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\modifyproduct.tpl',
      1 => 1553384141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c96c2d21263b2_67122708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11221318395c96c2d2113af5_61057636', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2229651095c96c2d2114ab6_24213860', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19497034665c96c2d2125c45_40979204', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_11221318395c96c2d2113af5_61057636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_11221318395c96c2d2113af5_61057636',
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
class Block_2229651095c96c2d2114ab6_24213860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2229651095c96c2d2114ab6_24213860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\myplugins\\function.session_get_flash.php','function'=>'smarty_function_session_get_flash',),));
?>

   
  <h2>Modify Product</h2>
    <form action="modifyproduct.php" method="POST">
        <input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'  />
        <table class="table table-sm table-borderless">
        <tr>
        <th>name:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
        </tr>
        <tr>
            <th>category:</th>
            <td>
                <select name="category_id">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

    </select>
            </td>
        </tr>
        <tr>
        <th>price ($):</th>
        <td><input class="form-control" type="number" name="price" min="0.00"  step="0.01" value='<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
' required /></td>
        </tr>
        <tr>
        <th>desctiption:</th>
        <td><textarea class="form-control" name='textarea' rows='10' ><?php echo $_smarty_tpl->tpl_vars['textarea']->value;?>
</textarea></td>
        </tr>
        <tr>
            <th>photo:</th>
            <td>
                <select name="photo_id">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photos']->value,'selected'=>$_smarty_tpl->tpl_vars['photo_id']->value),$_smarty_tpl);?>

    </select>
            </td>
        </tr>
        <tr>
      <td></td>
      <td>
          <button type="submit" name="add">Modify</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
        </table>
    </form>
  <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
  

<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_19497034665c96c2d2125c45_40979204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_19497034665c96c2d2125c45_40979204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='name']").prop('disabled', true);
      $("input[name='price']").prop('disabled', true);
      $("input[name='textarea']").prop('disabled', true);
    });
   
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
