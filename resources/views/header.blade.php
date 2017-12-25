
<!DOCTYPE html>
<html>
<head>
	<title>Teaching-English</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/glyphicon.css') }}">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-sanitize.js"></script>
	
	
	<style type="text/css">
		a:hover{
			text-decoration: none;
		}
		.list_choose ul li{
				border: 1px solid #54c4eb;
			    margin-bottom: 10px;
   				border-radius: 50px !important;
		}
		.nav li a:hover,.nav li a:visited ,.nav li a:active{
			    background-color: rgb(20, 147, 209);
		}

	</style>
</head>
<body>

	 <div class="col-md-12" style="padding: 0px;">
		<div class="col-md-12" style="background-color: #34b1ee;border-bottom: 1px solid #ccc;">
			<div class="col-md-3" style="float: left;">
				<h2 style="float: left;color: #fff;">Teach English</h2>
			</div>
			<div class="col-md-3" style="padding: 15px;">
				<ul class="nav nav-pills list-inline">
					<li >
						<a href="" style="display: block;color: #fff;padding: 8px 15px;font-weight: bold;font-size: 16px;">Trang chủ</a>
					</li>
					<li  class="">
						<a class="dropdown-toggle" data-toggle="dropdown" href="" style="display: block;color: #fff;padding: 8px 15px;font-weight: bold;font-size: 16px;">Thảo luận <span class="caret"></span></a>
						<ul class="dropdown-menu">
					      	<li><a href="#">Submenu 1-1</a></li>
					      	<li><a href="#">Submenu 1-2</a></li>
					      	<li><a href="#">Submenu 1-3</a></li> 
					    </ul>
					</li>
					
				</ul>
			</div>
			<div class="col-md-3 dropdown" style="float: right;padding: 10px;">
				<a class="btn  dropdown-toggle" type="button" data-toggle="dropdown" href="" style="float: right;margin-right: 5px; padding: 0px 5px;" >
					<img src="{{ asset('public/images/user.png')}}" style="width: 40px; height: 40px;">
				</a>
				<ul class="dropdown-menu" style="left: 42% !important;">
					<li class="col-md-12">
						<div class="col-md-12" style="padding: 0px">
							<div class="col-md-4" style="padding: 0px 5px;">
								<img src="{{ asset('public/images/user.png')}}" style="width: 40px; height: 40px;">
							</div>
							<div class="col-md-8" style="padding: 0px">
								<h3 style="margin:0px;">User</h3>
								<span>Level: 5</span>
							</div>
						</div>
					</li>
					<li class="col-md-12 divider"></li>
					<li class="col-md-12">
						<button type="button" class="btn btn-info btn-xs">Logout</button>
					</li>
				</ul>
				<a href="{{ route('register') }}" style="border-radius: 10px;padding: 10px;float: right;border: 1px solid #fff;color: #fff;" ><span>Đăng ký</span></a>
				<a href="{{ route('login') }}" style="border-radius: 10px;padding: 10px;float: right;border: 1px solid #fff;color: #fff;margin-right: 5px; "><span>Đăng nhập</span></a>
				
			</div>
			
		</div>
		<div class="container" style="">
			@yield('content')
		</div>
	</div>
	
</body>
</html>