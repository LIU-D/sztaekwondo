<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/sztaekwondo/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/sztaekwondo/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/sztaekwondo/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/sztaekwondo/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/sztaekwondo/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加图片','<?php echo U("Image/addImage");?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加图片</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">图片ID</th>
					<th width="100">图片分类</th>
					<th width="100">缩略图</th>
					<th>标题</th>
					<th width="150">发布时间</th>
					<th width="150">创建时间</th>
					<th width="60">发布状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list_slide)): foreach($list_slide as $key=>$v): ?><tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo ($v["img_id"]); ?></td>
					<td><?php echo ($v["type_name"]); ?></td>
					<td><a href="javascript:;"><img width="210" class="picture-thumb" src="/sztaekwondo<?php echo ($v["img_small_logo"]); ?>"></a></td>
					<td class="text-l"><a class="maincolor" href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')"><?php echo ($v["img_title"]); ?></a></td>
					<td class="text-c"><?php echo ($v["img_pubtime"]); ?></td>
					<td><?php echo ($v["img_addtime"]); ?></td>
					<td class="td-status">
						<?php if($v["img_isdel"] == '已发布' ): ?><span class="label label-success radius"><?php echo ($v["img_isdel"]); ?></span>
						<?php elseif($v["img_isdel"] == '未发布' ): ?>
							<span class="label label-dafault radius"><?php echo ($v["img_isdel"]); ?></span>
						<?php else: ?>
							<span class="label label-default radius">待审核</span><?php endif; ?>

					</td>
					<td class="td-manage">
						<?php if($v["img_isdel"] == '已发布' ): ?><a style="text-decoration:none" onClick="picture_stop(this,'<?php echo ($v[img_id]); ?>')" href="javascript:;" title="下架">
								<i class="Hui-iconfont">&#xe6de;</i>
							</a>
							<?php else: ?>
							<a style="text-decoration:none" onclick="picture_start(this,'<?php echo ($v[img_id]); ?>')" href="javascript:;" title="发布">
								<i class="Hui-iconfont">&#xe603;</i>
							</a><?php endif; ?>

						<a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="javascript:;" title="编辑">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a>
						<a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'<?php echo ($v[img_id]); ?>')" href="javascript:;" title="删除">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/sztaekwondo/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/sztaekwondo/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/sztaekwondo/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});



Date.prototype.Format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1, //月份
        "d+": this.getDate(), //日
        "H+": this.getHours(), //小时
        "m+": this.getMinutes(), //分
        "s+": this.getSeconds(), //秒
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度
        "S": this.getMilliseconds() //毫秒
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}



/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}

/*图片-发布*/
function picture_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
        var url = "<?php echo U('Image/stopImage');?>";
        var time = new Date().Format("yyyy-MM-dd HH:mm:ss");
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data:{
                id: id,
                state: '已发布',
				time:time
            },
            success: function(data){
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe6de;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                $(obj).remove();
                layer.msg('已发布!',{icon: 6,time:1000});
            },
            error:function(data) {
                console.log(data.msg);
            },
		});
	});
}

/*图片-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要取消发布吗？',function(index){
        var url = "<?php echo U('Image/stopImage');?>";
        var time = new Date().Format("yyyy-MM-dd HH:mm:ss");
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data:{
                id: id,
                state: '未发布',
				time:time
            },
            success: function(data){
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已下架</span>');
                $(obj).remove();
                layer.msg('已取消发布!',{icon: 5,time:1000});
            },
            error:function(data) {
                console.log(data.msg);
            },
        });

	});
}

/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-删除*/
function picture_del(obj,id){
    // var url = /sztaekwondo/index.php/Admin/Image/Image/delImage;
	layer.confirm('确认要删除吗？',function(index){
	    var url = "<?php echo U('delImage');?>";
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			data:{
			    id:id
        	},
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
    });
}
</script>
</body>
</html>