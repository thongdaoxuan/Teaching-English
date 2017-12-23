
<!DOCTYPE html>
<html>
<head>
	<title>Short Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/glyphicon.css') }}">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
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
</head>
<body>

	 <div ng-app="testShort" ng-controller="testCtrl" class="col-md-12" style="padding: 0px;">
		<div class="container"  style="">
			<!--
			<div class="col-md-12" style="text-align: center;padding-top: 10%; ">
				<h2 style="color: #ff9b00;margin-bottom: 40px; ">Thực hiện bài test để kết thúc nhanh chuyên đề: Động vật</h2>
				<button type="button" class="btn btn-success btn-lg" style="border-radius: 100px;background-color: #65ab00 !important;color: #fff;width: 15%;">Bắt đầu</button>
			</div>
			-->
			<div ng-repeat="question in questions" class="col-md-12" style="padding: 15px;">
				<div ng-if="question.qu_type==1" class="col-md-12" style="text-align: left;">
					<h3>Câu [[$index+1]]: <span ng-bind="question.qu_content"></span></h3>

					<div class="col-md-12" style="">
						<div ng-repeat="answer in question.answers" class="col-md-4 as_1" style="">
							<div class="col-md-12 radio" style="float:left; text-align: left;">
							    <label ng-click="answerTrueFalseQuestion(question.answers,answer.an_id,$index);">
							      	<input type="radio"  value="women" class="as_ra" name="optradio">
							      	<span  ng-bind="answer.an_content"> </span>
							    </label>
							</div>
						</div>
						
					</div>
				</div>

				<!--dang 2-->
				<div ng-if="question.qu_type!=1 && question.qu_type==2" class="col-md-12" style="text-align: left;">
					<h3>Câu [[$index+1]]: Dịch mục này ra tiếng việt: <span ng-bind="question.qu_content"></span></h3>

					<div class="container" style="">
						<span  class="glyphicon glyphicon-volume-up" style="border: 1px solid #ccc;color: #fff;padding: 10px;border-radius: 20px; background-color: #34b1ee;font-size: 20px;margin-bottom: 10px;"></span>
						<audio controls hidden id="au_as_1">
						  	<source ng-src="[[question.an_audio]]" type="audio/mpeg">
						</audio>
						
						<textarea class="form-control" ng-model="question.answers[0].user_answer" rows="5" id="comment1" placeholder="Nhập bằng tiếng việt" style="width: 50%;"></textarea>
					</div>
				</div>
				
			</div>
			<!--them-->
			<div class="col-md-12" style="background-color: #e7e7e7;height: auto; padding: 30px; margin-top: 50px;">
				<div class="col-md-6" style="text-align: center;">
					<button data-toggle="modal" data-target="#xem_lai_bai" data-test="player-skip" class="btn btn-lg " style="border-radius: 100px;background-color: #fbfbfb;color: #65ab00;width: 30%;">Xem lại bài học</button>
					<!-- Modal -->
					<div class="modal fade" id="xem_lai_bai" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h3 class="modal-title">Xem bảng điểm của bạn</h3>
							</div>
							<div class="modal-body row">
							  <!--begin content-->
								<div class="col-md-12" style="height: 300px; overflow-y: auto;">
									<!-- mau cau dung-->
									<div class="col-md-4">
										
										<div class="col-md-12"  style="padding:0px;border: 1px solid #ccc;border-radius: 5px;box-shadow: 0 1px 5px rgba(0,0,0,.2);background-color: #def0a5;color: #90b84a;">
											<div class="col-md-12" style="padding: 5px;">
												<div class="col-md-10" style="padding: 5px; font-weight: bold;">
													Nội dung câu hỏi da hoi
												</div>
												<div class="col-md-2" style="padding: 0px;">
													<span class="glyphicon glyphicon-ok" style="    border: 1px solid #ccc;border-radius: 20px;padding: 5px;background-color: #fff;"></span>
												</div>
											</div>
											<div class="col-md-12">
												<span>Nội dung nhập vào</span>
											</div>
										</div>
									</div>

									<!-- mau cau sai-->
									<div class="col-md-4" >
										<div class="col-md-12" style="padding:0px;border: 1px solid #ccc;border-radius: 5px;box-shadow: 0 1px 5px rgba(0,0,0,.2);background-color: #ffd4cc;color: #df472c;">
											<div class="col-md-12" style="padding: 5px;">
												<div class="col-md-10" style="padding: 5px; font-weight: bold;">
													Nội dung câu hỏi da hoi
												</div>
												<div class="col-md-2" style="padding: 0px;">
													<span class="glyphicon glyphicon-remove" style="    border: 1px solid #ccc;border-radius: 20px;padding: 5px;background-color: #fff;"></span>
												</div>
											</div>
											<div class="col-md-12">
												<span>Nội dung nhập vào</span>
											</div>
										</div>
										
									</div>
								</div>
							  <!--end content-->
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>
				</div>
				<div class="col-md-6" style="text-align: center;">
					<button data-test="player-skip" class="btn btn-lg" style="border-radius: 100px;background-color: #65ab00 !important;color: #fff;width: 30%;">Tiếp tục học</button>
				</div>
			</div>
			<!--them-->
			<div  class="col-md-12" style="text-align: center;">
				<button class="btn btn-default" ng-click="checkAnswer()">Check</button>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-sanitize.js"></script>
	<script>
		var app = angular.module('testShort',['ngSanitize'], function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
		});
		
		app.controller('testCtrl', function($scope,$sce,$http) {
			
			var jsvar = <?php echo json_encode($ca_id); ?>;
			$scope.questions=[];
			
			$scope.markCheck=0;
			
			$scope.getAllQuestion = function() {
				var url = "http://localhost:8080/TeachingEnglish/api/get-question/"+jsvar;
				$http.get(url).then( function(response) {
					$scope.questions = response.data;
					for(var i=0;i<$scope.questions.length;i++){
						$scope.questions[i].answers=JSON.parse("["+$scope.questions[i].answers+"]");
						for(var j=0;j<$scope.questions[i].answers.length;j++){
							$scope.questions[i].answers[j].user_answer="";
						}
							
					}
					console.log($scope.questions);
				});
			};
			// $scope.generateQuestion=function(){
				// $scope.itemQuestion=$scope.questions[$scope.indexQuestion];
				// $scope.itemQuestion.answers=JSON.parse("["+$scope.itemQuestion.answers+"]");
				
				// for(var i=0;i<$scope.itemQuestion.answers.length;i++){
					// $scope.itemQuestion.answers[i].user_answer="";
				// }
				// console.log($scope.itemQuestion);
			// }
			
			$scope.checkAnswer = function() {
				
				for(var i=0;i<$scope.questions.length;i++){
						
					for(var j=0;j<$scope.questions[i].answers.length;j++){
						if($scope.questions[i].answers[j].user_answer!=$scope.questions[i].answers[j].an_correct){
							$scope.markCheck++;
							continue;
						}
					}
						
				}
				$scope.markCheck=$scope.questions.length-$scope.markCheck;
				console.log("mark: "+$scope.markCheck);
			};
			
			$scope.getAllQuestion();
			
			$scope.answerTrueFalseQuestion= function(answer,id,index) { 
				for(var i=0;i<answer.length;i++){
					answer[i].user_answer=(i==index)?"true":"false";
				}
				var x = document.getElementById("au_as_"+id); 
				//x.play(); 
				console.log($scope.questions[index].answers);
			} ;
			
		});
		</script>
</body>
</html>