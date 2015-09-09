<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<title>HelloWorld后台管理系统</title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/hw/Public/Admin/css/index.css">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body>
	<!-- 头部 -->
	<header>

<nav class="navbar navbar-default">
	<div class="container-fluid">
	<div class="navbar-header">
  		<a class="navbar-brand" href="<?php echo U('admin/index/index');?>">
    		<!--<img alt="Brand" src="logo1.jpg">-->HelloWorld后台管理系统
  			
  		</a>
	</div>
	<div class="btn-group">
		<span class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></span>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
		    <li><a href="<?php echo U('admin/user/logout');?>">退出</a></li>
		</ul>
	</div>
	</div>
</nav>

</header>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div class="row">
<div class="col-md-2">
<ul class="nav nav-pills nav-stacked" id="nav">
<li><a href="<?php echo U('admin/news/newslist');?>">新闻动态模块</a></li>
<li><a href="<?php echo U('admin/produce/producelist');?>">产品展示模块</a></li>
<li><a href="<?php echo U('admin/partner/partnerlist');?>">合作伙伴展示模块</a></li>
<li><a href="<?php echo U('admin/registration/registration');?>">报名数据模块</a></li>
</ul> 
</div> 
<div class="col-md-8">
</div>
</include>


<div class="col-md-8">
	<table class="table table-hover">
		<tr>
		  	<th>#</th>
		  	<th>标题</th>
		  	<th>作者</th>
		  	<th>发布时间</th>
		  	<th>操作</th>
		</tr>
		<tr>
			<td>1</td>
			<td>标题1</td>
			<td></td>
			<td></td>
			<td>
				<a href="" style="text-decoration:none"><span style="text-align:center;color:red">编辑</span></a>
				<span style="text-align:center;color:red">删除</span>
			</td>
		</tr>
	</table>
	<a class="btn btn-success btn-lg btn-block" href="<?php echo U('publish');?>" role="button">添加</a>
</div>
	


</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<footer>
<!--底部-->


</footer>

	<!-- /底部 -->
</body>
</html>