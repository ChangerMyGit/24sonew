<?php /* Smarty version 2.6.18, created on 2014-05-27 16:48:01
         compiled from 1/91a640349ffb396/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '1/91a640349ffb396/index.html', 34, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['header'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="clear"></div><div data-role="content" class="content_i">
  
  <div class="big-pic big-pic<?php if ($this->_tpl_vars['focusCount']): ?><?php echo $this->_tpl_vars['focusCount']; ?>
<?php endif; ?>">
    <div class="big-pic-in">
        <div class="pic-list" >
        	     <?php if ($this->_tpl_vars['channel_focus_contents']): ?>
			<?php $_from = $this->_tpl_vars['channel_focus_contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['a']):
?>
			<?php if ($this->_tpl_vars['k'] < 5): ?>
                                <a href="<?php echo $this->_tpl_vars['a']['link']; ?>
"><p><img src="<?php echo $this->_tpl_vars['a']['thumb']; ?>
" width="100%"></p></a>
								<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
                    </div>
        <div class="slide-dot">
			       <?php if ($this->_tpl_vars['channel_focus_contents']): ?>
			<?php $_from = $this->_tpl_vars['channel_focus_contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['a']):
?>
			<?php if ($this->_tpl_vars['k'] < 5): ?>
			 <span<?php if ($this->_tpl_vars['k'] == 0): ?> class="slide-dot-cur"<?php endif; ?>></span>
                    <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
                    </div>
    </div>
</div>
  <div class="clear"></div>
  <div class="product">
    <div class="title_i"><span class="fl"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/ico1.png" tppabs="/3g/images/ico1.png" alt="<?php echo $this->_tpl_vars['pictureChannel']['name']; ?>
"/><?php echo $this->_tpl_vars['pictureChannel']['name']; ?>
</span></div>
    <div class="productmain">
      <ul class="ui-grid-b">
	  <?php if ($this->_tpl_vars['pictureContents']): ?>
			<?php $_from = $this->_tpl_vars['pictureContents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['a']):
?>
			<?php if ($this->_tpl_vars['k'] < 6): ?>
                    <li class="ui-block-<?php echo smarty_function_cycle(array('values' => "a,b,c"), $this);?>
"><a href="<?php echo $this->_tpl_vars['a']['link']; ?>
" title="<?php echo $this->_tpl_vars['a']['title']; ?>
"><img src="<?php echo $this->_tpl_vars['a']['thumb']; ?>
" style="width:73px;height:73px;" />
          <h2><?php echo $this->_tpl_vars['a']['title']; ?>
</h2>
          </a></li>
          <?php endif; ?>
		  <?php endforeach; endif; unset($_from); ?>
		  <?php endif; ?>
                 </ul>
    </div>
  </div>
  <div class="case">
    <div class="title_i"><span class="fl"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/ico2.png" tppabs="/3g/images/ico2.png" alt="<?php echo $this->_tpl_vars['textChannel']['name']; ?>
"/><?php echo $this->_tpl_vars['textChannel']['name']; ?>
</span></div>
    <div class="casemain">
      <ul>
             <?php if ($this->_tpl_vars['textContents']): ?>
			<?php $_from = $this->_tpl_vars['textContents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['a']):
?>
			<?php if ($this->_tpl_vars['k'] < 5): ?>
    	    	<li><a href="<?php echo $this->_tpl_vars['a']['link']; ?>
" title="<?php echo $this->_tpl_vars['a']['title']; ?>
"><?php echo $this->_tpl_vars['a']['title']; ?>
</a></li>
            	<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
            </ul>
    </div>
  </div>
</div>
<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footer'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>