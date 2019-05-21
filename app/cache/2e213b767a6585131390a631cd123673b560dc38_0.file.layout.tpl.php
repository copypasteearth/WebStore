<?php
/* Smarty version 3.1.33, created on 2019-03-21 16:00:58
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\WebStore_JRowan\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c93ed7ac83556_78654627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e213b767a6585131390a631cd123673b560dc38' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\WebStore_JRowan\\templates\\layout.tpl',
      1 => 1553026449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_5c93ed7ac83556_78654627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? basename(dirname($_SERVER['PHP_SELF'])) : $tmp);?>

    </title>

    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"  
          crossorigin="anonymous" />
    <link href="css/layout.css" rel="stylesheet" />

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16884725535c93ed7ac7d862_61960426', "localstyle");
?>

</head>
<body>     
  <header>
    <div>
      <img class="img-fluid" src="img/header.png" />
      <span class='login'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['session']->value->login->name)===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>

    <nav class="navbar navbar-dark bg-info navbar-expand-sm">

      <a class="navbar-brand" href=".">Home</a>

      <button class="navbar-toggler navbar-toggler-icon" type="button" 
              data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
          <?php $_smarty_tpl->_subTemplateRender('file:links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </ul>
      </div>
    </nav>    

  </header>

  <section class="container-fluid"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10869295515c93ed7ac82764_59816359', "content");
?>
</section>

  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7573962425c93ed7ac82ff8_28709905', "localscript");
?>

</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_16884725535c93ed7ac7d862_61960426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16884725535c93ed7ac7d862_61960426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_10869295515c93ed7ac82764_59816359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10869295515c93ed7ac82764_59816359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_7573962425c93ed7ac82ff8_28709905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_7573962425c93ed7ac82ff8_28709905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localscript"} */
}
