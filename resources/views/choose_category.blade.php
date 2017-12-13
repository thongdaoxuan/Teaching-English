
<!DOCTYPE html>
<html>
<head>
	<title>Teaching-English</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					<img src="user.png" style="width: 40px; height: 40px;">
				</a>
				<ul class="dropdown-menu" style="left: 42% !important;">
					<li class="col-md-12">
						<div class="col-md-12" style="padding: 0px">
							<div class="col-md-4" style="padding: 0px 5px;">
								<img src="user.png" style="width: 40px; height: 40px;">
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
				<a href="" style="border-radius: 10px;padding: 10px;float: right;border: 1px solid #fff;color: #fff;" data-toggle="modal" data-target="#dangky"><span>Đăng ký</span></a>
				<div id="dangky" class="modal fade" role="dialog">
				  	<div class="modal-dialog">
				    <!-- Modal content-->
					    <div class="modal-content">
					    	<form class="form-horizontal">
						      	<div class="modal-header">
						        	<button type="button" class="close" data-dismiss="modal">&times;</button>
						       	 	<h4 class="modal-title">Đăng ký tài khoản trong TeachEnglish</h4>
						      	</div>
						      	<div class="modal-body">
						        	<div class="form-group">
									    <label class="control-label col-sm-2" for="name">Name:</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="name" placeholder="Enter your name">
									    </div>
									</div>
						        	<div class="form-group">
									    <label class="control-label col-sm-2" for="email">Email:</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="email" placeholder="Enter email">
									    </div>
									</div>
									<div class="form-group">
									    <label class="control-label col-sm-2" for="pwd">Password:</label>
									    <div class="col-sm-10"> 
									      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
									    </div>
									</div>
									
						      	</div>
						      	<div class="modal-footer">
						      		<button type="submit" class="btn btn-primary">Đăng ký</button>
						       		<button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>

						      	</div>
					      	</form>
					    </div>

				  	</div>
				</div>

				<a href="" style="border-radius: 10px;padding: 10px;float: right;border: 1px solid #fff;color: #fff;margin-right: 5px; " data-toggle="modal" data-target="#dangnhap"><span>Đăng nhập</span></a>
				<div id="dangnhap" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<form class="form-horizontal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 class="modal-title">Đăng nhập Teaching English</h3>
								</div>
								<div class="modal-body">
									
									<div class="form-group">
									    <label class="control-label col-sm-2" for="email">Email:</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="email" placeholder="Enter email">
									    </div>
									</div>
									<div class="form-group">
									    <label class="control-label col-sm-2" for="pwd">Password:</label>
									    <div class="col-sm-10"> 
									      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
									    </div>
									</div>
									<div class="form-group"> 
										<div class="col-md-2"></div>
									    <div class="col-sm-5 col-md-5">
									      	<a href="">Quên mật khẩu</a>
									    </div>
									    <div class="col-sm-5 col-md-5 checkbox" style="padding: 0px 15px;">
									      	<a href=""><label><input type="checkbox" value="">Remember me</label></a>
									    </div>
									</div>
									<div class="form-group"> 
									    <div class="col-sm-6 col-md-6 col-md-offset-2">
									      	<img src="facebook.png" alt="Login with facebook" style="height: 30px; width: 30px;">
									      	<img src="googleplus.png" alt="Login with Google+" style="height: 30px; width: 30px;">
									    </div>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Đăng nhập</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Huy</button>
								</div>
							</form>
						</div>

					</div>
				</div>
				
			</div>
			
		</div>
		<div class="container" style="">
			<div class="col-md-12" style="padding: 15px ;">
			<!--begin-->
				<div class="col-md-4" style="padding: 10px;">
					<a href="detail_category.html">
						<div class="col-md-12" style="padding: 15px;border: 1px solid #ccc;border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);">
							<div class="col-md-6" style="padding: 15px 0px;">
								<img src="1405503301_tienganhtreem_3.jpg" class="img-circle" alt="Cinque Terre" style="height: 150px; width: 150px;">
							</div>
							<div class="col-md-6" style="padding: 0px 5px;">
								<h4>Chủ đề: Động vật</h4>
								<span>Abalone :bào ngư <br/>
									Aligator :cá sấu nam mỹ<br/>
									Anteater :thú ăn kiến<br/>
									Armadillo :con ta tu<br/>
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4" style="padding: 10px;">
					<a href="">
						<div class="col-md-12" style="padding: 15px;border: 1px solid #ccc;border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);">
							<div class="col-md-6" style="padding: 15px 0px;">
								<img src="1405503301_tienganhtreem_3.jpg" class="img-circle" alt="Cinque Terre" style="height: 150px; width: 150px;">
							</div>
							<div class="col-md-6" style="padding: 0px 5px;">
								<h4>Chủ đề: Động vật</h4>
								<span>Abalone :bào ngư <br/>
									Aligator :cá sấu nam mỹ<br/>
									Anteater :thú ăn kiến<br/>
									Armadillo :con ta tu<br/>
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4" style="padding: 10px;">
					<a href="">
						<div class="col-md-12" style="padding: 15px;border: 1px solid #ccc;border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);">
							<div class="col-md-6" style="padding: 15px 0px;">
								<img src="1405503301_tienganhtreem_3.jpg" class="img-circle" alt="Cinque Terre" style="height: 150px; width: 150px;">
							</div>
							<div class="col-md-6" style="padding: 0px 5px;">
								<h4>Chủ đề: Động vật</h4>
								<span>Abalone :bào ngư <br/>
									Aligator :cá sấu nam mỹ<br/>
									Anteater :thú ăn kiến<br/>
									Armadillo :con ta tu<br/>
								</span>
							</div>
						</div>
					</a>
				</div>
				
				<!--end-->
			</div>
		</div>
	</div>
	
</body>
</html>