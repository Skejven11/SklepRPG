<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 20:03:35
  from 'C:\xampp\htdocs\SklepRPG\app\views\RegiView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef8db77bfdde2_34974067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd71b8fe9ef6c7a4810f918bda579d0d503b1315c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SklepRPG\\app\\views\\RegiView.tpl',
      1 => 1593366396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef8db77bfdde2_34974067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13588614995ef8db77a714c7_13080609', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_13588614995ef8db77a714c7_13080609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13588614995ef8db77a714c7_13080609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="one" class="wrapper">
                <div class="inner">
                    <h3 style="text-align: center"> Zarejestruj się </h3>
                                <div class="box login inner" >
                                    <div class="inner">
                                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RegiSave">  

                                            <div class="inner 7u">
                                                    <input type="text" name="login" id="name" value="" placeholder="Pseudonim" />
                                            </div>
                                            <h5 style="text-align: center">Pseudonim powinien składać się z 3 do 16 znaków</h5>

                                            <div class="inner 7u">
                                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                            </div>
                                            <h5></h5>

                                            <div class="inner 7u">
                                                    <input type="password" name="password" id="email" value="" placeholder="Hasło" />
                                            </div>
                                            <h5 style="text-align: center">Hasło powinno składać się z 3 do 16 znaków</h5>

                                            <div class="inner 7u">
                                                <input type="checkbox" id="copy" name="checkmark">
                                                <label for="copy">Zgadzam się na coś</label>
                                            </div>

                                    <ul class="actions" style="margin-left: 32%">
                                                        <li><input type="submit" value="Dalej" class="button special"/></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="button">Powrót</a></li>
                                    </ul>
                                    </form>                     		
                                </div>

                                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                                   <div class="messages bottom-margin">
                                           <ul>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                           <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                           </ul>
                                   </div>
                                   <?php }?>    
                                </div>

        </section>
<?php
}
}
/* {/block 'content'} */
}
