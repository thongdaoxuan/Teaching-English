@extends('header')
@section('content')

	<title>Choose Skill</title>
	<meta charset="utf-8">
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
		.list-inline li a span{
			font-weight: bold;
			color: #1caff6;
			font-size: 18px;
		}
	</style>


	<div class="col-md-12" style="padding: 0px;">
		<div class="container" style="">
			<div class="col-md-12" style="padding: 15px ;text-align: center;">
			<!--begin-->
				<div class="" style=" border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);display: block;width: 400px;font-size: 17px;margin: 0 auto 40px;padding: 30px;text-align: center;">
					<h2 class="" style="color: #34b1ee;margin-bottom: 50px;">Chọn một bài học!</h2>
					
					<ul class="list-inline">
						<li class="">
							<a  class="listen.html" href="">
								<img src="resources/assets/images/listen.png" alt="Bat dau hoc" style="height: 100px;width: 100px;"><br/>
								<span class="" style="">Bài 1</span>
							</a>
						</li>
						<li class="">
							<a  class="" href="">
								<img src="resources/assets/images/read.png " alt="Test nhanh" style="height: 100px;width: 100px;"><br/>
								<span class="" style="">Bài 2</span>
							</a>
						</li>
						<li class="">
							<a  class="" href="">
								<img src="resources/assets/images/speak.png " alt="Test nhanh" style="height: 100px;width: 100px;"><br/>
								<span class="" style="">Bài 3</span>
							</a>
						</li>
					</ul>
				</div>
			<!--end-->
			</div>
			<hr style="border:  2px solid #e9e9e9;height: 3;margin: 40px 0;">
			<div class="col-md-12">
				<h2 style="color: #3c3c3c;font-size: 20px;font-weight: 500;line-height: 26px;margin: 0 0 25px;">Ngữ pháp và ghi chú</h2>
				<div class="">
					<p style="color: #999;">Một số danh từ chỉ động vật, và nghĩa chủa chúng: </p>
					<table class="table table-bordered" style="border: 1px solid #ddd;">
						<thead>
							<tr>
								<th>Đại từ</th>
								<th>Cách dịch</th>
								<th>Phiên âm</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td  >I</td>
								<td  >Tôi</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >He</td>
								<td  >Anh ấy</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >She</td>
								<td  >Cô ấy</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >It</td>
								<td  >Nó/Đó</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >We</td>
								<td  >Chúng tôi/ta</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >You</td>
								<td  >Bạn</td>
								<td> /sku:l/</td>
							</tr>
							<tr>
								<td  >They</td>
								<td  >Họ</td>
								<td> /sku:l/</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection