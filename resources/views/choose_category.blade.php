@extends('header')
@section('content')
	<title>Choose Category</title>
	<meta charset="utf-8">
	
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

	 <div class="col-md-12" style="padding: 0px;">
		<div class="container" style="">
			<div class="col-md-12" style="padding: 15px ;">
			<!--begin-->
				<div class="col-md-4" style="padding: 10px;">
					<div class="col-md-1" style="z-index: 1;position: absolute;right: 20px;top: 15px;border: 1px solid #ccc;border-radius: 100px;padding: 5px;text-align: center;background: #65ab00;color: #fff;">
					 	<span class="glyphicon glyphicon-ok"></span>
					</div>
					<a href="detail_category.html">
						<div class="col-md-12" style="padding: 15px;border: 1px solid #ccc;border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);">
							<div class="col-md-6" style="padding: 15px 0px;">
								<img src="resources/assets/images/1405503301_tienganhtreem_3.jpg" class="img-circle" alt="Cinque Terre" style="height: 150px; width: 150px;">
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
	
@endsection