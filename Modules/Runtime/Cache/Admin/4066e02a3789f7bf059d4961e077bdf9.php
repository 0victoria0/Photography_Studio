<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>婚纱影楼管理端</title>
		<meta name="description" content="light7: Build mobile apps with simple HTML, CSS, and JS components.">
		<meta name="author" content="任行">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/hsylglxt/View/Admin/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7e0da.css?r=201603281">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swipeout.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/demos.css">

		<link rel="apple-touch-icon-precomposed" href="/hsylglxt/View/Admin/Public/img/apple-touch-icon-114x114.png">
		<script src="/hsylglxt/View/Admin/Public/js/jquery-2.1.4.js"></script>
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: skyblue;
			}
		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back">
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">订单详情查看</h1>
			</header>
			<div class="content" style="top: 0.2rem;">
				<div class="list-block">
					<ul>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">订单编号</div>
									<div class="item-input">
										<input disabled="true"disabled="true"id="orderID" type="text" placeholder="">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">客户ID</div>
									<div class="item-input">
										<input disabled="true"id="customerID" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">订单金额</div>
									<div class="item-input">
										<input disabled="true"id="totalMoney" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">订单状态</div>
									<div class="item-input">
										<input disabled="true"id="orderStatus" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">下单时间</div>
									<div class="item-input">
										<input disabled="true"id="orderTime" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">对应套餐编号</div>
									<div class="item-input">
										<input disabled="true"id="setID" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">客户备注</div>
									<div class="item-input">
										<input disabled="true"id="mark" type="tel">
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!--<div class="content-block">
					<div class="row">
						<div class="col-100">
							<a id="submitChange" class="button button-big button-fill">提交修改</a>
						</div>
					</div>
				</div>-->
			</div>
		</div>
		<script src="/hsylglxt/View/Admin/Public/js/light7.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-swiper.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-city-picker.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-swipeout.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/demose0da.js?r=201603281"></script>
		<script src="/hsylglxt/View/Admin/Public/js/shop/my_message.js"></script>
		<script>
			/*截取URL中的参数值,为公共函数*/
			$.getQueryString = function(name) {
				var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if(r != null) {
					return decodeURIComponent(r[2]);
				} else {
					return "";
				}
			};
			$("#birthday").calendar();
			$.loadConfirmOrder = function(orderID) {
				$.ajax({
					type: "post",
					url: "<?php echo U('admin/loadConfirmOrder');?>",
					async: true,
					data: {
						orderID: orderID
					},
					success: function(d) {
						var data = JSON.parse(d);
						if(data.code == "0000") {
							$("#orderID").val(data.data[0]["id"]);
							$("#customerID").val(data.data[0]["customerid"]);
							$("#totalMoney").val(data.data[0]["totalmoney"]);
							$("#orderStatus").val(data.data[0]["orderstatus"]);
							$("#orderTime").val(data.data[0]["ordertime"]);
							$("#setID").val(data.data[0]["setid"]);
							$("#mark").val(data.data[0]["mark"]);
						} else {
							$.toast("信息加载异常");
						}
					}
				});
			}

			$.loadConfirmOrder($.getQueryString("orderID"));

		</script>
	</body>

</html>