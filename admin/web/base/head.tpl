<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../static/bootstrap/css/admin.css">
    <script src='../static/jsAddress.js'></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <script src="../static/jquery-3.2.1.js"></script>
	  <script src="../static/bootstrap/js/bootstrap.min.js"></script>
	  {block name='head'}{/block}
  </head>
  <body>
     <div class="container-fluid">
        <ul class="nav nav-pills">
		  <li role="presentation" class="active"><a href="index.php">Home</a></li>
		  <li role="presentation"><a href="#">Profile</a></li>
		  <li role="presentation"><a href="#">Messages</a></li>
		  <li role="presentation"><a href="../index.php">前台首页</a></li>
		</ul>
     	    <div class="row cc">
			  <div class="col-md-2">
			  <form>
			    <table border="1" width="200px" style="height: 300px; text-align: center;">
			        <tr>
			        	<td style="font-size:25px; font-weight:100px;">商品管理</td>
			        </tr>
			        <tr>
			        	<td><a href="goodslist.php">...商品列表</a></td>
			        </tr>
			        <tr>
			        	<td><a href="addgoods.php">...商品添加</a></td>
			        </tr>
			        <tr>
			        	<td><a href="addclass.php">...商品分类</a></td>
			        </tr>
			         <tr>
			        	<td><a href="showdelet.php">...回收站</a></td>
			        </tr>
			    </table>
               </form>
			  </div>
			  <div class="col-md-10">
			  	    {block name='content'}
			  	    {/block}
			  </div>
			</div>
     </div>



