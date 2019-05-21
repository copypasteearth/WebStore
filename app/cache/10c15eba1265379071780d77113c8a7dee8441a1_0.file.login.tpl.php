<?php
/* Smarty version 3.1.33, created on 2019-03-21 16:20:51
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93f223241536_86388620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10c15eba1265379071780d77113c8a7dee8441a1' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\login.tpl',
      1 => 1553199612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c93f223241536_86388620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17239662235c93f22322ff09_94516400', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20743816065c93f223231034_01256218', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_17239662235c93f22322ff09_94516400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_17239662235c93f22322ff09_94516400',
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
class Block_20743816065c93f223231034_01256218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20743816065c93f223231034_01256218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\include\\myplugins\\function.session_get_flash.php','function'=>'smarty_function_session_get_flash',),));
?>

<h2>Login</h2>

<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table class="table table-sm table-borderless">
    <tr>
      <th>user:</th>
      <td><input class="form-control" type="text" name="username"
                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="access">Access</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
  </table>
  
  <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
</form>
<?php
}
}
/* {/block "content"} */
}
