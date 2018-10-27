<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>AlanBlog</title>

	<!-- Bootstrap -->
	{{--<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
	<link href="{{asset('home/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">

	<!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
	<!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
	<!--[if lt IE 9]>
	<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		footer {
			background: #333;
			color: #eee;
			font-size: 11px;
			padding: 20px;
		}
		ul.unstyled {
			list-style: none;
			padding: 0;
		}
		footer h6 {
			color: white;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Example page header <small>Subtext for header</small></h1>
	</div>

	<div class="bs-example" data-example-id="inverted-navbar">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>

	<div class="row" >
		<div class="col-md-9" >
			<div class="panel panel-default">
				<div class="panel-body">
					Basic panel example
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					Basic panel example
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					Basic panel example
				</div>
			</div>
		</div>
		<div class="col-md-3" >
			<div class="panel panel-default">
				<div class="panel-body">
					<p>Basic panel example</p>
					<p>Basic panel example</p>
					<p>Basic panel example</p>
					<p>Basic panel example</p>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<h6>Copyright &copy;test</h6>
				</div>

				<div class="col-sm-4">
					<h6>关于我们</h6>
					<p>
						sdjgfkjhfkjsda jdfshjk sdhnkfhkj dsjkfhkjsad sdjhfjksa sdfhkjsadhk.这是个测试网站
					</p>
				</div>

				<div class="col-sm-2">
					<h6>导航</h6>
					<ul class="unstyled">
						<li><a href="">主页</a></li>
						<li><a href="">服务</a></li>
						<li><a href="">链接</a></li>
						<li><a href="">联系我们</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h6>Follow us</h6>
					<ul class="unstyled">
						<li><a href="">微博</a></li>
						<li><a href="">微信</a></li>
						<li><a href="">来往</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h6>本网站由<span class="glyphicon glyphicon-heart"></span>xxxxxxx制作</h6>
				</div>
			</div>
		</div>
	</footer><!--页脚结束-->


</div>



<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="{{asset('home/bootstrap/dist/js/bootstrap.js')}}"></script>
</body>
</html>