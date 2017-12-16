
<!DOCTYPE html>
<html>
<head>
	<title>Short Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		a:hover{
			text-decoration: none;
		}
		th{
			background: #1caff6;
    		color: #fff;
		}
		th,td{
			text-align: left;
		}
	</style>
</head>
<body>

	 <div class="col-md-12" style="padding: 0px;">
	 <!--begin header-->
		<div class="col-md-12" style="background-color: #34b1ee;border-bottom: 1px solid #ccc;">
			
			<div class="col-md-3" style="float: left;">
				<h2 style="float: left;color: #fff;">Teach English</h2>
			</div>
			<div class="col-md-3" style="padding: 15px;">
				<ul class="nav nav-pills">
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
			<div class="col-md-3" style="float: right;padding: 10px;">
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
									      	<img src="resources/assets/images/facebook.png" alt="Login with facebook" style="height: 30px; width: 30px;">
									      	<img src="resources/assets/images/googleplus.png" alt="Login with Google+" style="height: 30px; width: 30px;">
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
		<!--end header-->
		<div class="container" style="">
			<div class="col-md-12" style="text-align: center;padding-top: 10%; ">
				<h2 style="color: #ff9b00;margin-bottom: 40px; ">Thực hiện bài test để kết thúc nhanh chuyên đề: Động vật</h2>
				<button type="button" class="btn btn-success btn-lg" style="border-radius: 100px;background-color: #65ab00 !important;color: #fff;width: 15%;">Bắt đầu</button>
			</div>
			<style type="text/css">
				
				.as_ra{
				    border: 2px solid #dadada;
				    font-size: 20px;
				    height: 19px;
				    line-height: 19px;
				    width: 19px;
				}
				.as_1 span{
					font-size: 20px;
					color: #3c3c3c;
				}
			</style>
			<div class="col-md-12" style="padding: 15px;">
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 1: Chọn từ cho "Phụ nữ"</h3>
					<div class="container" style="">
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
							    <label onclick="">
							      	<input type="radio"  value="women" class="as_ra" name="optradio">
							      	<span> &nbsp; Woman</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="0" class="as_ra"   name="optradio">
							      	<span> &nbsp; Man</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="0" class="as_ra" name="optradio">
							      	<span> &nbsp; Lights</span>
							    </label>
							</div>
						</div>
					</div>
				</div>

				<!--dang 2-->
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 2: Dịch mục này ra tiếng việt: <span>Thank yoou, bye!</span></h3>

					<div class="container" style="">
						<span onclick ="playAudio_as_1();" class="glyphicon glyphicon-volume-up" style="    border: 1px solid #ccc;color: #fff;padding: 10px;border-radius: 20px; background-color: #34b1ee;font-size: 20px;margin-bottom: 10px;"></span>
						<audio controls hidden id="au_as_1">
						  	<source src="au_women.mp3" type="audio/mpeg">
						</audio>
						<script>
							
							function playAudio_as_1() { 
								var x = document.getElementById("au_as_1"); 
							    x.play(); 
							} 
							
						</script>
						<textarea class="form-control" rows="5" id="comment" placeholder="Nhập bằng tiếng việt" style="width: 50%;"></textarea>
					</div>
				</div>

				<!--dang 3-->
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 3: Điền từ vào chỗ trống: <span>this is ... apple</span></h3>

					<div class="container" style="">
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
							    <label onclick="">
							      	<input type="radio"  value="an" class="as_ra" name="optradio">
							      	<span> &nbsp; an</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="a" class="as_ra"   name="optradio">
							      	<span> &nbsp; a</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="is" class="as_ra" name="optradio">
							      	<span> &nbsp; is</span>
							    </label>
							</div>
						</div>
					</div>
				</div>

				<!--dang 4-->
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 4: Chọn từ khác loại với các từ còn lại</h3>

					<div class="container" style="">
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
							    <label onclick="">
							      	<input type="radio"  value="an" class="as_ra" name="optradio">
							      	<span> &nbsp; apple</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="a" class="as_ra"   name="optradio">
							      	<span> &nbsp; man</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="is" class="as_ra" name="optradio">
							      	<span> &nbsp; visit</span>
							    </label>
							</div>
						</div>
					</div>
				</div>

				<!--dang 5-->
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 5: Chọn từ cho "Women"</h3>
					<div class="container" style="">
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
							    <label onclick="">
							      	<input type="radio"  value="women" class="as_ra" name="optradio">
							      	<span> &nbsp; Phụ nữ</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="0" class="as_ra"   name="optradio">
							      	<span> &nbsp; Trẻ con</span>
							    </label>
							</div>
						</div>
						<div class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="text-align: left;">
								<label onclick="">
							      	<input type="radio"  value="0" class="as_ra" name="optradio">
							      	<span> &nbsp; Ô tô</span>
							    </label>
							</div>
						</div>
					</div>
				</div>

				<!--dang 6-->
				<div class="col-md-12" style="text-align: left;">
					<h3>Câu 6: Dịch mục này ra tiếng anh: <span>Cảm ơn Jerry!</span></h3>

					<div class="container" style="">
						<span onclick ="playAudio_as_1();" class="glyphicon glyphicon-volume-up" style="    border: 1px solid #ccc;color: #fff;padding: 10px;border-radius: 20px; background-color: #34b1ee;font-size: 20px;margin-bottom: 10px;"></span>
						<audio controls hidden id="au_as_1">
						  	<source src="au_women.mp3" type="audio/mpeg">
						</audio>
						<script>
							
							function playAudio_as_1() { 
								var x = document.getElementById("au_as_1"); 
							    x.play(); 
							} 
							
						</script>
						<textarea class="form-control" rows="5" id="comment" placeholder="Enter english" style="width: 50%;"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>