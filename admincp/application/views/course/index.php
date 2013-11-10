<a href="<?php echo base_url();?>index.php/course/"><span class="label"><i class="icon-th"></i> 详细视图</span></a>
<a href="<?php echo base_url();?>index.php/course/list_mode"><span class="label label-info"><i class="icon-list-ul"></i> 列表视图</span></a>
<a href="<?php echo base_url();?>index.php/course/update_cache"><span class="label label-success"><i class="icon-list-ul"></i> 更新缓存</span></a>


<hr />

<form action="" method="post">
<table class="table table-striped table-bordered table-condensed" width="100%">
    <tr>
        <td class="span1">编号</td>
        <td class="span2">封面</td>
        <td class="span3">标题</td>
        <td class="span4">状态</td>
        <td class="span2">操作</td>
    </tr>

<?php
global $constant;

foreach ($list as $course) {
?>
    <tr>  
    <td><input name="<?php echo $course['id'];?>" value="<?php echo $course['sortid'];?>" class="span1" type="text"  /></td>
    <td><img class="grayscale" src="<?php echo $constant['discuz_url']?>uploads/course/<?php echo $course['logo']?>" style="width:80px;height:40px;"/>
    </td>
    <td>
    <p class="lead"><a href="<?php echo base_url()?>index.php/course/edit_course/<?php echo $course['id']?>"><?php echo $course['fullname']?></a></p>
    </td>
    <td>
        <ul class="nav nav-pills">
            <li class="dropdown active"><a class="dropdown-toggle <?php echo $course['id'];?>" data-toggle="dropdown" href="#"><?php echo $course['category']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php foreach( $category as $key => $value){?>
                        <li><a href="javascript:void(0);" class="category" rel="<?php echo $key;?>" data="<?php echo $course['id'];?>"><?php echo $value;?></a></li>
                    <?php }?>
                </ul>
            </li>

            <li class="dropdown active">

            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
            <?php echo $course['is_free'] ? '免费' : '收费'?> 
            <b class="caret"></b></a>
            
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0);" class="status" rel="0" data="<?php echo $course['id'];?>">收费</a></li>
                    <li><a href="javascript:void(0);" class="status" rel="1" data="<?php echo $course['id'];?>">免费</a></li>
                </ul>
            </li>

            <li class="dropdown active">

            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
            <?php echo $course['is_hidden'] ? '隐藏' : '可见'?>
            <b class="caret"></b>
            </a>
            
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0);" class="visible" rel="1" data="<?php echo $course['id'];?>">隐藏</a></li>
                    <li><a href="javascript:void(0);" class="visible"  rel="0" data="<?php echo $course['id'];?>">可见</a></li>
                </ul>
            </li>

        </ul>
    </td>
    <td>
        <a href="<?php echo base_url()?>index.php/course/edit_course/<?php echo $course['id']?>"><i class="icon-edit"></i> 编辑</a>
        <a href="<?php echo base_url()?>index.php/course/del_course/<?php echo $course['id']?>"><i class="icon-remove"></i> 删除</a>
     </td>
    
    </tr>


<?php
}
?>
</table>
<button class="btn btn-primary" name="update_sortid" value="1">更新序号</button>
</form>


<script type="text/javascript">
$(function(){

    $('.category').on('click',function(){
        var id = $(this).attr('data');
        var category = $(this).attr('rel');
        $.ajax({  
            url : "<?php echo site_url('course/update_category');?>" , 
            data : {'id' : id , 'category' : category}  ,
            type : "POST" , 
            success: function( data){
                $('.dropdown-toggle.'+id).html( data+' <b class="caret"></b>');
            },
        });
    });

    $('.status').on('click',function(){
        var id = $(this).attr('data');
        var value = $(this).attr('rel');
        $obj = $(this).parent().parent().parent().find('a').first();
        $.ajax({
            url : "<?php echo site_url('course/update_status');?>" , 
            data : { 'id' : id , 'is_free' : value} , 
            type : "POST" , 
            success : function(data){
                $obj.html( data + ' <b class="caret"></b>');
            } , 
        })
    });

    $('.visible').on('click',function(){
        var id = $(this).attr('data');
        var value = $(this).attr('rel');
        $obj = $(this).parent().parent().parent().find('a').first();
        $.ajax({
            url : "<?php echo site_url('course/update_visible');?>" , 
            data : { 'id' : id , 'is_hidden' : value} , 
            type : "POST" , 
            success : function(data){
                $obj.html( data + ' <b class="caret"></b>');
            } , 
        })
    });
});
</script>