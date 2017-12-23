
<!DOCTYPE html>
<html>
<head>
	<title>Type 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
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

		#myProgress {
		  width: 100%;
		  height: 2px;
		  background-color: #ddd;
		}

		#myBar {
		  width: 1%;
		  height: 5px;
		  background-color: #4CAF50;
		}
	</style>
</head>
<body>

		
			<style type="text/css">
				
				.as_1:hover{
					border: 2px solid #1caff6 !important;
				}
				.as_ra{
				    border: 2px solid #dadada;
				    font-size: 20px;
				    height: 19px;
				    line-height: 19px;
				    width: 19px;
				}
			
				.as_1{
					margin-right: 10px;
				}
				.as_2 span{
					font-size: 18px;
					color: #3c3c3c;
				}
				.itemSpanStyle{
					color: red;
				}
			</style>
	<div class="col-md-12" style="padding: 0px;">
		
		<div ng-app="myApp" ng-controller="personCtrl" class="col-md-12" style="">
			
			<div class="col-md-12" style="padding: 30px 150px;">
				<div class="col-md-1">
					<a href="" title="Tro lai" style="color: #ccc;font-size: 20px;float: right;">X</a>
				</div>
				<div class="col-md-9" style="padding: 10px 0px;">
					<div id="myProgress">
					  	<div data-ng-bind-html="trustAsHtml(myProgress)"></div>
					</div>
				</div>
				<div class="col-md-2" style="padding-left: 0px;">
					<span ng-class="{'itemSpanStyle': lifeMax>2}" ><span style=" font-size: 22px; float: right;" class="glyphicon glyphicon-heart"></span></span>
					<span ng-class="{'itemSpanStyle': lifeMax>1}" ><span style=" font-size: 22px; float: right;" class="glyphicon glyphicon-heart"></span></span>
					<span ng-class="{'itemSpanStyle': lifeMax>0}" ><span style=" font-size: 22px; float: right;" class="glyphicon glyphicon-heart"></span></span>
					
				</div>
			</div>
			
		
			<div class="col-md-12" ng-if="itemQuestion!=null">
				<!--kieu cau hoi 1-->
				
				<div  ng-if="itemQuestion.qu_type==1" class="col-md-12" style="text-align: center;">
					<h3 ng-bind="itemQuestion.qu_content"></h3>
					<div class="container" style="width: 60%;">
						<div class="col-md-1"></div>
						<div ng-repeat="answer in itemQuestion.answers" class="col-md-3 as_1" style="border: 2px solid #dadada;color: #3c3c3c;border-radius: 10px;font-size: 15px;">
							<div class="col-md-12" style="padding: 10px 0px;">
								<img ng-src="[[answer.an_image]]" style="width: 140px; height: 200px;"/>
							</div>
							<div class="col-md-12 radio" style="text-align: left;">
							    <label ng-click="answerTrueFalseQuestion(itemQuestion.answers,answer.an_id,$index);">
							      	<input type="radio" class="as_ra" name="optradio">
							      	<span ng-bind="answer.an_content"></span>
							    </label>
							</div>
							<audio controls hidden id="au_as_[[answer.an_id]]">
							  	<source ng-src="[[answer.an_audio]]" type="audio/mpeg"/>
							</audio>
							

						</div>
						
					</div>
				</div>
				<!--ket thuc kieu cau hoi 1-->
				<!--kieu cau hoi 2-->
				
				<!--<div ng-if="itemQuestion.qu_type!=1 && itemQuestion.qu_type==2" class="col-md-12 " style="text-align: center;">
					<h3>Điền từ còn thiếu vào chỗ trống</h3>
					<div class="col-md-12">
						<img src="resources/assets/images/women.jpg" style="width: 200px; height: 250px;"/>
					</div>
					<div class="col-md-12" style="padding: 15px;">
						<span style="font-size: 20px;font-weight: bold;" ng-bind="itemQuestion.qu_content"></span>
					</div>
					<div class="col-md-12 as_2" >
						<div class="col-md-1"></div>
						<div class="col-md-3">
							<label onclick="playAudio_as_1();">
						      	<input type="radio"  value="women" class="as_ra" name="optradio">
						      	<span>Woman</span>
						    </label>
						</div>
						<div class="col-md-3">
							<label onclick="playAudio_as_1();">
						      	<input type="radio"  value="Man" class="as_ra" name="optradio">
						      	<span>Man</span>
						    </label>
						</div>
						<div class="col-md-3">
							<label onclick="playAudio_as_1();">
						      	<input type="radio"  value="Apple" class="as_ra" name="optradio">
						      	<span>Apple</span>
						    </label>
						</div>

						
					</div>
				</div>
				<!--ket thuc kieu cau hoi 2-->
				<!--kieu cau hoi 3-->
				<div ng-if="itemQuestion.qu_type!=1 && itemQuestion.qu_type==2" class="col-md-12 " style="text-align: center;">
					<h3>Viết từ này bằng tiếng Anh</h3>
					
					<div class="col-md-12" style="padding: 15px;">
						<span style="font-size: 20px;font-weight: bold;" ng-bind="itemQuestion.qu_content"></span>
						
					</div>
					<div class="col-md-12"  style="padding: 15px;">
						
						<textarea rows="6" cols="50" name="text" ng-model="itemQuestion.answers[0].user_answer">
						</textarea>
					</div>
					
				</div>
				<!--ket thuc kieu cau hoi 3-->
			</div>

			
			<div ng-if="typeButton==1 " class="col-md-12" style="background-color: #e7e7e7;height: auto; padding: 30px; margin-top: 50px;">
				<!--kiem tra dap an-->
				<div class="col-md-6" style="text-align: center;">
					<button data-test="player-skip" class="btn btn-default btn-lg btn_leave" ng-click="skipQuestion()" style="border-radius: 100px;width: 30%;">Bỏ qua</button>
				</div>
				<div class="col-md-6" style="text-align: center;">
					<button data-test="player-skip" class="btn btn-lg btn_leave" style="border-radius: 100px;background-color: #65ab00 !important;color: #fff;width: 30%;" ng-click="checkAnswer()">Kiểm tra</button>
				</div>				
			</div>
			<div ng-if="typeButton!=1 && typeButton==2 " class="col-md-12" style="background-color: #e7e7e7;height: auto; padding: 30px; margin-top: 50px;">
				<!--Thong bao kiem tra dap an neu dung-->
				<div class="col-md-6" style="">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-ok" style="font-size: 40px;border: 1px solid #ccc;padding: 15px;border-radius: 100px;background: #fff;color: #65ab00;float: right;"></span>
					</div>
					<div class="col-md-6" >
						<h3 style="float: left;font-weight: bold;color: #65ab00;">Chính xác</h3>
					</div>
				</div>
				<div class="col-md-6" style="text-align: center;">
					<button data-test="player-skip" class="btn btn-lg btn_leave" style="border-radius: 100px;background-color: #65ab00 !important;color: #fff;width: 30%;" ng-click="nextQuestion()">Tiếp tục</button>
				</div>
			</div>
			<div ng-if="typeButton!=1 && typeButton!=2 && typeButton==3" class="col-md-12" style="background-color: #e7e7e7;height: auto; padding: 30px; margin-top: 50px;">
				<!--Thong bao sai-->
				<div class="col-md-6" style="">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-remove" style="font-size: 40px;border: 1px solid #ccc;padding: 15px;border-radius: 100px;background: #fff;color: red;float: right;"></span>
					</div>
					<div class="col-md-6" >
						<div class="col-md-12"><h3 style="float: left;font-weight: bold;color: red;">Đáp án đúng: </h3></div>
						<div class="col-md-12"><span style="font-size: 18px; color: red;">[[correctAnswer]]</span></div>
						
					</div>
				</div>
				<div class="col-md-6" style="text-align: center;">
					<button data-test="player-skip" class="btn btn-lg btn_leave"ng-click="nextQuestion()" style="border-radius: 100px;background-color: red !important;color: #fff;width: 30%;">Tiếp tục</button>
				</div>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-sanitize.js"></script>
	<script>
		var app = angular.module('myApp',['ngSanitize'], function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
		});
		
		app.controller('personCtrl', function($scope,$sce,$http) {
			$scope.trustAsHtml = function(string) {
				return $sce.trustAsHtml(string);
			};
			var jsvar = <?php echo json_encode($ca_id); ?>;
			$scope.questions=[];
			$scope.itemQuestion=null;
			$scope.indexQuestion=0;
			$scope.typeButton=1;
			
			$scope.correctAnswer="";
			$scope.lifeMax=3;
			$scope.myProgress="";
			
			
			$scope.reloadProgressBar= function() { 
				$scope.myProgress="<div style='float:left;width:1%;margin-top:-1px ; height: 5px;  background-color: green;'></div>";
				var onePercent=(1.0/$scope.questions.length)*99;
				for(var i=0;i<$scope.questions.length;i++){
					var item =$scope.questions[i];
					if(item.isCorrect==undefined){
						break;
					}
					if(item.isCorrect){
						$scope.myProgress+="<div style='float:left;width:"+onePercent+"%; height: 5px; margin-top:-1px ; background-color: green;'></div>";
					}else{
						$scope.myProgress+="<div style='float:left;width:"+onePercent+"%; height: 5px; margin-top:-1px ;  background-color: red;' ></div>";
					}
				
					
				}
				
			} ;
			$scope.getAllQuestion = function() {

				var url = "http://localhost:8080/TeachingEnglish/api/get-question/"+jsvar;

				$http.get(url).then( function(response) {
					$scope.questions = response.data;
					$scope.firstQuestion();
				});
				$scope.reloadProgressBar();
			};
			$scope.generateQuestion=function(){
				$scope.itemQuestion=$scope.questions[$scope.indexQuestion];
				$scope.itemQuestion.answers=JSON.parse("["+$scope.itemQuestion.answers+"]");
				
				for(var i=0;i<$scope.itemQuestion.answers.length;i++){
					$scope.itemQuestion.answers[i].user_answer="";
				}
				console.log($scope.itemQuestion);
			}
			$scope.firstQuestion = function() {
				$scope.indexQuestion=0;
				$scope.generateQuestion();
			}
			$scope.nextQuestion = function() {
				$scope.indexQuestion++;
				if($scope.indexQuestion>$scope.questions.length-1){
					return;
				}
				$scope.generateQuestion();
				$scope.typeButton=1;
			}
			$scope.previewQuestion = function() {
				$scope.indexQuestion--;
				$scope.generateQuestion();
			}
			
			$scope.checkAnswer = function() {
				$scope.itemQuestion=$scope.questions[$scope.indexQuestion];
				var temp = true;
				for(var i=0;i<$scope.itemQuestion.answers.length;i++){
					if($scope.itemQuestion.answers[i].user_answer!=$scope.itemQuestion.answers[i].an_correct){
						temp=false;
					}
					if(($scope.itemQuestion.answers[i].an_correct=="true" && $scope.itemQuestion.qu_type==1)|| ($scope.itemQuestion.qu_type==2)){
						$scope.correctAnswer=$scope.itemQuestion.answers[i].an_content;
					}
				}
				$scope.itemQuestion.isCorrect=temp;
				if(temp==true){
					$scope.typeButton=2;
					
				}else{
					$scope.typeButton=3;
					$scope.lifeMax--;
				}
				$scope.reloadProgressBar();
				
			}
			$scope.skipQuestion = function() {
				$scope.itemQuestion=$scope.questions[$scope.indexQuestion];
				
				for(var i=0;i<$scope.itemQuestion.answers.length;i++){
					
					if(($scope.itemQuestion.answers[i].an_correct=="true" && $scope.itemQuestion.qu_type==1)|| ($scope.itemQuestion.qu_type==2)){
						$scope.correctAnswer=$scope.itemQuestion.answers[i].an_content;
					}
				}
				$scope.typeButton=3;
				
			}
			$scope.getAllQuestion();
			
			$scope.answerTrueFalseQuestion= function(answer,id,index) { 
				for(var i=0;i<answer.length;i++){
					answer[i].user_answer=(i==index)?"true":"false";
				}
				var x = document.getElementById("au_as_"+id); 
				//x.play(); 
			} ;
			
			
			
		});
		</script>
</body>
</html>