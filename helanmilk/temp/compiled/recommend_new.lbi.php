<?php if ($this->_var['new_goods']): ?>
  <div class="cat_tit"> <span><a href="search.php?intro=new" >新品上架</a></span> <a  href="search.php?intro=new">更多>></a>   </div>

<div style="border-left:1px solid #e1e1e1; width:959px; float:left" class="pro_box">
 <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_62296500_1365907105');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_62296500_1365907105']):
        $this->_foreach['new_goods']['iteration']++;
?>
 
  <div class="goodsItem"  <?php if (($this->_foreach['new_goods']['iteration'] - 1) % 2 == 0): ?>
            style='width:225px'
            <?php endif; ?> >
         
           <a href="<?php echo $this->_var['goods_0_62296500_1365907105']['url']; ?>"><img src="<?php echo $this->_var['goods_0_62296500_1365907105']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_62296500_1365907105']['name']); ?>" class="goodsimg"  /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_62296500_1365907105']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_62296500_1365907105']['name']); ?>"><?php echo $this->_var['goods_0_62296500_1365907105']['short_style_name']; ?></a></p> 
          
          <?php if ($this->_var['goods_0_62296500_1365907105']['promote_price'] != ""): ?>
						
                       <font class="f1"><?php echo $this->_var['goods_0_62296500_1365907105']['promote_price']; ?></font><br />
                        <?php else: ?>
                      <font class="f1"><?php echo $this->_var['goods_0_62296500_1365907105']['shop_price']; ?></font><br />
                        <?php endif; ?>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="blank"></div>
<?php endif; ?>
