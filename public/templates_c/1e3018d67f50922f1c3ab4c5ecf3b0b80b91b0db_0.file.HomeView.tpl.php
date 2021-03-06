<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 16:30:02
  from 'C:\xampp\htdocs\SklepRPG\app\views\HomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0486ead8a835_59034610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3018d67f50922f1c3ab4c5ecf3b0b80b91b0db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SklepRPG\\app\\views\\HomeView.tpl',
      1 => 1594132201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0486ead8a835_59034610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3962155655f0486ead723d3_34233790', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_3962155655f0486ead723d3_34233790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3962155655f0486ead723d3_34233790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    
<section id="one" class="wrapper">
    <h3 style="margin-left: 50%"> Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </h3>
    <div class="row">
        <div class="2u" style="margin-left: 2% ">
            <?php if (core\RoleUtils::inRole("sprzedawca")) {?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AddItem" method="post"> 
                        <input type="submit" value="Dodaj nowy produkt" class="button special" style="margin-left: 2%"/>
                </form>
            <?php }?>

            <form id="search-form" class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Home">
                <fieldset>
                        <input type="text" style="width: 80%" placeholder="nazwa" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['search']->value->name;?>
" /><br />
                        <button type="submit" class="pure-button pure-button-primary" style="margin-left: 18%">Wyszukaj</button>
                </fieldset>
            </form>
 
            <div class="box" style="margin-right:20%" >
                 <h3> Gatunki: </h3>
                <ul class="alt">
                    <li></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'gen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
?>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Home/1?genre=<?php echo $_smarty_tpl->tpl_vars['gen']->value["idGenre"];?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value["Genname"];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <li></li>
                </ul>
            </div>
         </div>
                        
        <div class="inner">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rpg']->value, 'rypyg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rypyg']->value) {
?>
                    <div class="box 3u" style="margin-left:2%">
                        <p><?php echo $_smarty_tpl->tpl_vars['rypyg']->value["name"];?>
 |<br> Wydawca: <?php echo $_smarty_tpl->tpl_vars['rypyg']->value["publisher"];?>
 | Autor: <?php echo $_smarty_tpl->tpl_vars['rypyg']->value["author"];?>
 | <br> Cena: <?php echo $_smarty_tpl->tpl_vars['rypyg']->value['price'];?>
 zł <br> Gatunek: <?php echo $_smarty_tpl->tpl_vars['rypyg']->value['Genname'];?>
</p>
                        <a class="button special small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
HomeOrder/<?php echo $_smarty_tpl->tpl_vars['rypyg']->value['idRPG'];?>
/<?php echo $_smarty_tpl->tpl_vars['rypyg']->value['price'];?>
">Do koszyka</a>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
            </div>
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
    <div class="inner">
            <ul class="icons" style="margin-left: 50%">
                <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
                <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Home/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
?item_name=<?php echo $_smarty_tpl->tpl_vars['search']->value->name;?>
"><</a></li>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['temp']->step = 1;$_smarty_tpl->tpl_vars['temp']->total = (int) ceil(($_smarty_tpl->tpl_vars['temp']->step > 0 ? $_smarty_tpl->tpl_vars['maxpage']->value+1 - ($_smarty_tpl->tpl_vars['minpage']->value) : $_smarty_tpl->tpl_vars['minpage']->value-($_smarty_tpl->tpl_vars['maxpage']->value)+1)/abs($_smarty_tpl->tpl_vars['temp']->step));
if ($_smarty_tpl->tpl_vars['temp']->total > 0) {
for ($_smarty_tpl->tpl_vars['temp']->value = $_smarty_tpl->tpl_vars['minpage']->value, $_smarty_tpl->tpl_vars['temp']->iteration = 1;$_smarty_tpl->tpl_vars['temp']->iteration <= $_smarty_tpl->tpl_vars['temp']->total;$_smarty_tpl->tpl_vars['temp']->value += $_smarty_tpl->tpl_vars['temp']->step, $_smarty_tpl->tpl_vars['temp']->iteration++) {
$_smarty_tpl->tpl_vars['temp']->first = $_smarty_tpl->tpl_vars['temp']->iteration === 1;$_smarty_tpl->tpl_vars['temp']->last = $_smarty_tpl->tpl_vars['temp']->iteration === $_smarty_tpl->tpl_vars['temp']->total;?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Home/<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
?item_name=<?php echo $_smarty_tpl->tpl_vars['search']->value->name;?>
&genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
</a></li>
                <?php }
}
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['maxpage']->value) {?>
                <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Home/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
?item_name=<?php echo $_smarty_tpl->tpl_vars['search']->value->name;?>
">></a></li>
                <?php }?>
            </ul>
    </div>
</section>



<?php
}
}
/* {/block 'content'} */
}
