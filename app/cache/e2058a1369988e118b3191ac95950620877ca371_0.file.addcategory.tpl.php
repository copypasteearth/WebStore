<?php
/* Smarty version 3.1.33, created on 2019-03-21 21:01:15
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\addcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9433db6be6e3_46940277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2058a1369988e118b3191ac95950620877ca371' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\addcategory.tpl',
      1 => 1553216470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9433db6be6e3_46940277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10400042105c9433db6aea97_87362835', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6327307065c9433db6af687_91902921', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4096929005c9433db6be089_70459375', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_10400042105c9433db6aea97_87362835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_10400042105c9433db6aea97_87362835',
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
class Block_6327307065c9433db6af687_91902921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6327307065c9433db6af687_91902921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\myplugins\\function.session_get_flash.php','function'=>'smarty_function_session_get_flash',),));
?>

  <h2>Add Category</h2>
  <h5><b>Current Categories:</b></h5>
  
    <ul>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
          
       <li><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</li>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  
    <form action="addcategory.php" method="POST">
        <table class="table table-sm table-borderless">
            <tr>
        <th>category name:</th>
        <td><input class="form-control" type="text" name="cat" required /></td>
        </tr>
        <tr>
      <td></td>
      <td>
        <button type="submit" name="add">Add</button>
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
class Block_4096929005c9433db6be089_70459375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_4096929005c9433db6be089_70459375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='cat']").prop('disabled', true);
    });
   
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
