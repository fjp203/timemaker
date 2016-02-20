<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    
        <title>网站标题</title>
    

    <!-- bootflat -->
    <link rel="stylesheet" href="/timemaker/Public/bootflat/css/bootstrap.min.css">
    <link rel="stylesheet" href="/timemaker/Public/bootflat/bootflat/css/bootflat.css">
    <link rel="stylesheet" href="/timemaker/Public/css/mystyle.css">
    <link rel="stylesheet" href="/timemaker/Public/iconfont/iconfont.css">

       <!-- Bootstrap -->
    <script src="/timemaker/Public/bootflat/js/jquery-1.10.1.min.js"></script>
    <script src="/timemaker/Public/bootflat/js/bootstrap.min.js"></script>
 <script src="/timemaker/Public/js/angular.js"></script>
  <script src="/timemaker/Public/js/angular-animate.js"></script>
 
 <!-- ng-table -->
 <link href="//cdn.bootcss.com/ng-table/1.0.0-beta.9/ng-table.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/ng-table/1.0.0-beta.9/ng-table.min.js"></script>
    <script src="/timemaker/Public/js/myjs.js"></script>
    
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Title</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>    
        
<style>
@keyframes myChange {
  from {
      height: 300px;
  } to {
      height: 0;
  }
}
.btn-group-xs .btn .iconfont{
	font-size: 12px;
}
.toolbar{
	position: absolute;top: 0;right: 0;

}
.ss{
	background-color: #FFCE54;
}
.tztable input{
	border: none;
}
.tztable input:focus{
	border: 1px solid #3bafda;
}
.intable.ng-hide {
    animation: 0.5s myChange;
}
</style>
	<div class="panel panel-default" ng-app="myApp" ng-controller="ctrl.show.panel">
		  <div class="panel-heading" style="background-color: #AAB2BD">
				 <!-- <h3 class="panel-title">Panel title</h3> -->
				 <div  class="container-fluid">
				 	<div class="row">
				 		<div class="form-group col-md-10">
				 		
				 			<textarea name="" id="input" class="form-control" rows="2" required="required" placeholder="通知标题">
				 				
				 			</textarea>
				 		</div>
				 		<div class="col-md-2">
				 			
				 			<div class="row">
				 				<div class="col-xs-12">
				 					<div class="form-group">

				 							<div class="input-group">
				 								<div class="input-group-addon">车间</div>
				 								<select class="form-control">
				 									>
				 									<option>1</option>
				 									<option>2</option>
				 									<option>3</option>
				 									<option>4</option>
				 									<option>5</option>
				 								</select>
				 							</div>
				 						</div>
				 				</div>
				 			</div>
				 			<div class="row">
				 				<div class="col-xs-12">
				 					<div class="form-group">

				 							<div class="input-group">
				 								<div class="input-group-addon">编号</div>
				 								<input type="text" class="form-control" id="exampleInputAmount" placeholder="1601"></div>
				 						</div>
				 				</div>
				 			</div>
				 				
				 			
				 		</div>
				 	</div>
				 </div>
			
				
		  </div>
		  <div class="panel-body" style="background-color: #CCD1D9;">
				<div class="container-fluid" ng-repeat="el in vm.els">
	
			
				 
<div class="row">

	<div class="panel panel-default panel-el">

		<div class="panel-heading" style="position: relative;">
	

				<!-- 工具栏 -->
					<div class="btn-toolbar pull-right toolbar" role="toolbar" aria-label="...">


			  				  	
			  			<div class="btn-group btn-group-xs " role="group" aria-label="...">
			  			
			  				<button type="button" class="btn btn-success"  ng-click="vm.addEl($index)"><i class="iconfont icon-zengjia"></i></button>
			  				
			  				<button type="button" class="btn btn-warning"  ng-click="vm.clearEl($index)"><i class="iconfont icon-qingkong"></i></button>
			  				<button type="button" class="btn btn-danger"  ng-click="vm.delEl($index)"><i class="iconfont icon-icon52"></i></button>
			  			</div>

			  		</div>
	
				<div class="row" style="padding-top: 20px;">
					<div class="col-xs-8 col-md-11 ">
						<div class="input-group"  ng-class="{hidden: el.titlehide}">
							<div class="input-group-addon">说明</div>
							<input type="text" class="form-control" id="exampleInputAmount" placeholder=""  ng-model="el.title" focus-me="{{!el.titlehide}}"></div>
					</div>
					<div class="col-xs-2 col-md-1 ">
						<div class="btn-group btn-group" role="group" aria-label="..." style="padding-top: 6px">

							<button type="button" class="close" ng-class="{hidden: !el.titlehide}"  ng-click="vm.addElTitle($index)"> <i class="iconfont icon-zengjia" style="font-size: 16px;"></i>
							</button>
							<button type="button"class="close"  ng-class="{hidden: el.titlehide}" ng-click="vm.delElTitle($index)"> <i class="iconfont icon-icon52" style="font-size: 16px;"></i>
							</button>
							<button type="button" class="close"  ng-class="{hidden: el.titlehide}" ng-click="vm.clearElTitle($index)">

								<i class="iconfont icon-qingkong" style="font-size: 16px;"></i>
							</button>
						</div>
						

					</div>

				</div>
			

		</div>

<!-- 主体内容 -->
			<table class="table table-striped table-bordered table-hover tztable table-responsive table-condensed">
				<tr>
					<th class="col-xs-2 col-md-1">工位</th>
					<th class="col-xs-6 col-md-6">内容</th>
					<th class="col-xs-2 col-md-1">范围</th>
					<th class="col-xs-2 col-md-1">定额工时</th>
					<th class="col-xs-2 col-md-1">操作</th>
				</tr>
				<table ng-repeat="row in el.rows" class="table table-striped table-bordered table-hover tztable table-responsive table-condensed">
					<tr>
					
 				<td class="col-xs-2 col-md-1">
 					<input type="text" class="form-control" ng-model="row.gw"  style="width:100%;"></div>
 				</td>
 				<td class="col-xs-2 col-md-6">
 					<input type="text" class="form-control" ng-model="row.nr" style="width:100%;"></div>
 				</td>
 				
 				<td class="col-xs-2 col-md-1">
 					<input type="number" class="form-control" ng-model="row.gs" style="width:100%;"></div>
 				</td>
 				<td class="col-xs-2 col-md-1">
 					<input type="number" class="form-control" ng-model="row.gs" style="width:100%;"></div>
 				</td>
 				<td class="col-xs-2 col-md-1">
 					<!-- 工时行操作 -->
 					<div class="btn-group btn-group" role="group" aria-label="..." style="padding-top: 6px">


<button type="button" class="close" ng-class="" ng-click="row.collapsed = !row.collapsed"><i ng-class="row.collapsed?'iconfont icon-chevroncircleup':'iconfont icon-chevroncircledown'"></i>
						</button>
						<button type="button" class="close" ng-class="{hidden: !el.footerhide}" ng-click="vm.addElfooter($index)"><i class="iconfont icon-zengjia"></i>
						</button>
						<button type="button"class="close"  ng-class="{hidden: el.footerhide}" ng-click="vm.delElfooter($index)"> <i class="iconfont icon-icon52" ></i>
						</button>
						<button type="button" class="close" ng-class="{hidden: el.footerhide}" ng-click="vm.clearElfooter($index)">

							<i class="iconfont icon-qingkong"></i>
						</button>
					</div>
 				</td>

 				</tr>
					</tr>
					<tr>
						<td class="intable" ng-hide="!row.collapsed" colspan="5">
						<div class="col-md-6">
							<div class="panel panel-default">


							<!--   <table class="table table-striped table-bordered table-hover tztable table-responsive table-condensed" style="height:200px;">
								<tr>
									<th>序号</th>
									<th>名称</th>
									<th>图号</th>
									<th>数量</th>
								</tr>
								<tr>
									<td>1111</td>
									<td>1111</td>
									<td>1111</td>
									<td>1111</td>
								</tr>
							</table> -->

							<table ng-table="vm.tableParams" class="table" show-filter="true">
    <tr ng-repeat="user in $data">
        <td title="'Name'" filter="{ name: 'text'}" sortable="'name'">
            {{user.name}}</td>
        <td title="'Age'" filter="{ age: 'number'}" sortable="'age'">
            {{user.age}}</td>
    </tr>
</table>
							  <div class="panel-footer">
									Panel footer
								</div>
						</div>
						</div>
						
							

							<div class="col-md-6">
								<!-- 此处建立图片工具栏 -->
								<div class="panel panel-default">
									  <div class="panel-body" style="height:200px;">
											图片区域
									  </div>
									  <div class="panel-footer">
											工具栏
										</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
 			

  			</table>
		
		<div class="panel-footer" >	
			<div class="row">
				<div class="col-xs-8 col-md-11 ">
					<div class="input-group"  ng-class="{hidden: el.footerhide}">
						<div class="input-group-addon">
					<i class="iconfont icon-tongji"></i>
						</div>
						<input type="text" class="form-control" id="exampleInputAmount" placeholder=""  ng-model="el.footer"  focus-me="{{!el.footerhide}}"/></div>
				</div>
				<div class="col-xs-2 col-md-1 ">
					<div class="btn-group btn-group" role="group" aria-label="..." style="padding-top: 6px">

						<button type="button" class="close" ng-class="{hidden: !el.footerhide}" ng-click="vm.addElfooter($index)"><i class="iconfont icon-zengjia" style="font-size: 16px;"></i>
						</button>
						<button type="button"class="close"  ng-class="{hidden: el.footerhide}" ng-click="vm.delElfooter($index)"> <i class="iconfont icon-icon52" style="font-size: 16px;"></i>
						</button>
						<button type="button" class="close" ng-class="{hidden: el.footerhide}" ng-click="vm.clearElfooter($index)">

							<i class="iconfont icon-qingkong" style="font-size: 16px;"></i>
						</button>
					</div>
				</div>			
			</div>				
		</div>
	</div>
</div>
	</div>
	<button class="btn btn-default" ng-click="vm.addEl()">添加</button>
		  </div>


		   <div class="panel-footer" style="background-color: #AAB2BD">
		   	<form class="form-inline">
		   		<div class="form-group">
		   			<div class="input-group">
		   				<div class="input-group-addon">编制</div>
		   				<label class="sr-only" for="exampleInputEmail3">编制</label>
		   				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="范建鹏"></div>
		   		</div>
		   		<div class="form-group">
		   			<div class="input-group">
		   				<div class="input-group-addon">校对</div>
		   				<label class="sr-only" for="exampleInputEmail3">校对</label>
		   				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="范建鹏"></div>
		   		</div>
		   		<div class="form-group">
		   			<div class="input-group">
		   				<div class="input-group-addon">审核</div>
		   				<label class="sr-only" for="exampleInputEmail3">审核</label>
		   				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="范建鹏"></div>
		   		</div>
		   		<div class="form-group">
		   			<div class="input-group">
		   				<div class="input-group-addon">会签</div>
		   				<label class="sr-only" for="exampleInputEmail3">会签</label>
		   				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="范建鹏"></div>
		   		</div>
		   		<div class="form-group">
		   			<div class="input-group">
		   				<div class="input-group-addon">批准</div>
		   				<label class="sr-only" for="exampleInputEmail3">批准</label>
		   				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="范建鹏"></div>
		   		</div>

		   	</form>

		   </div>
	</div>
	<script>
	'use strict';
var myApp=angular.module('myApp',['ngAnimate','ngTable']);
myApp.controller('ctrl.show.panel', function ($scope) {
  var vm = $scope.vm = {};
 vm.els = [
    {title:'SX2110转向机装配',
    footer:'合计3.0H',
    rows:[{gw:'1',nr:'装配是是是',gs:12},
  {gw:'1',nr:'装配是是是',gs:12},
  {gw:'1',nr:'装配是是是',gs:12}]
},
    {title:'SX2120转向机装配',footer:'合计3.0H'},
  ];


var self = this;
var data = [{name: "Moroni", age: 50} /*,*/];
//self.tableParams = new ngTableParams({}, { dataset: data});

// 删除标题
 vm.delElTitle = function (index) {
 	vm.els[index].title='';
	 vm.els[index].titlehide=true;
};
// 添加标题
 vm.addElTitle = function (index) {
 	vm.els[index].title='';
	 vm.els[index].titlehide=false;
};
// 清空标题
 vm.clearElTitle = function (index) {
 	vm.els[index].title='';
};

// 删除表尾
 vm.delElfooter = function (index) {
 	vm.els[index].footer='';
	 vm.els[index].footerhide=true;
};
// 添加表尾
 vm.addElfooter = function (index) {
 	vm.els[index].footer='';
	 vm.els[index].footerhide=false;
};
// 清空表尾
 vm.clearElfooter = function (index) {
 	vm.els[index].footer='';
};


    //添加el
  vm.addEl = function (index) {
var data={
        title:'',
        footer:'',
        rows:[{gw:'',nr:'',gs:0},
        {gw:'',nr:'',gs:0},
        {gw:'',nr:'',gs:0}]
      };
vm.els.insert(index-1,data)
  };
    vm.delEl = function (index) {
  	 vm.els.splice(index, 1);
  };
    vm.clearEl = function (index) {
    	var data={
        title:'',
        footer:'',
        rows:[{gw:'',nr:'',gs:0},
        {gw:'',nr:'',gs:0},
        {gw:'',nr:'',gs:0}]
      };
  	 vm.els[index] = data;
  };





});


// 获取焦点指令
myApp.directive('focusMe', ['$timeout', function($timeout) {  
  return {  
    scope: { trigger: '@focusMe' },  
    link: function(scope, element) {  
      scope.$watch('trigger', function(value) {  
        if(value === "true") {  
          $timeout(function() {  
            element[0].focus();  
          });  
        }  
      });  
    }  
  };  
}]); 
Array.prototype.insert = function (index, item) {  
  this.splice(index, 0, item);  
};


	</script>

        footer.html    
    </div>



 


    
    <script>
    var APP = "/timemaker/index.php";
    var MODULE = "/timemaker/index.php/Home";
    var CONTROLLER = "/timemaker/index.php/Home/Index";
    var ACTION = "/timemaker/index.php/Home/Index/create";
    </script>
    
</body>
</html>