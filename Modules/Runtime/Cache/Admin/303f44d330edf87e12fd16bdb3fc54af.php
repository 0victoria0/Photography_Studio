<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>婚纱影楼管理端</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/hsylglxt/View/Admin/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="../../../assets/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/app.css">
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: skyblue;
			}
			/*去除婚纱服务列表tab左右padding 顶部的margin*/
			
			.tab-link.button.active {
				color: #8B008B;
				border-color: #8B008B;
			}
			
			.bar-tab .tab-item.active,
			a {
				color: #8B008B;
			}
			/*卡片样式布局调整*/
			
			.card-header.no-border .facebook-name,
			.card-header.no-border .facebook-date {
				margin-left: 0rem;
			}
			
			.set-title {
				font-size: 1.0rem;
				color: black;
			}
			
			.facebook-date span {
				margin: 0 1.0rem 0 0;
			}
			
			#tab2 .content-block,
			#tab3 .content-block {
				margin: 0px;
				padding: 0px;
			}
			
			#tab2 .list-block.media-list,
			#tab3 .list-block.media-list {
				margin: 0px;
			}
			/*page-me样式修改*/
			
			#page-me .item-title {
				font-size: 1.0rem;
				font-weight: bold;
			}
			/*我的页面头像背景*/
			
			.list-block.media-list.person-card {
				background-image: url(/hsylglxt/View/Admin/Public/img/adminBG.jpg);
				background-size: cover;
			}
			/*popup-search的背景样式*/
			
			.popup.popup-search {
				background-color: rgba(255, 255, 255, 0.2);
			}
			/*搜索结果的左右贴边调整*/
			
			.list-block.media-list.inset {
				margin: 1.0rem 0;
			}
			
			.card {
				margin-bottom: 1.0rem;
			}
			
			.introduction {
				margin-left: 0.5rem;
			}
			
			#change_head {
				width: 4.0rem;
				height: 4.0rem;
			}
			
			.imgBox {
				width: 32%;
				display: inline-block;
				margin-bottom: 0.5rem;
			}
			
			.imgBox img {
				width: 85%;
				border-radius: 100%;
			}
			
			.imgBox span {
				position: relative;
				top: 0rem;
				right: -13%;
			}
		</style>
	</head>

	<body>
		<div id="page-main" class="page page-main  page-current">
			<header class="bar bar-nav">
				<h1 class="title">婚纱影楼管理端</h1>
				<!--<a class="icon icon-search pull-right open-popup" data-popup=".popup-search"></a>-->
			</header>
			<div class="content">
				<div class="page-settings">
					<div class="list-block media-list person-card">
						<ul>
							<li>
								<div href="#" class="item-content">

									<div class="item-media"><img id="userAvatar" src='/hsylglxt/View/Admin/Public/img/adminIcon.jpg' width="80"></div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">管理员名称：</div>
										</div>
										<div class="item-subtitle"></div>
										<div class="item-text"><strong id="adminName">dfsdf</strong></div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!--<div class="row text-center">
						<div onclick="" class="col-33">
							<h4 id="status0">0</h4>
							<div class="color-gray">待付款</div>
						</div>
						<div onclick="" class="col-33">
							<h4 id="status1">0</h4>
							<div class="color-gray">待发货</div>
						</div>
						<div onclick="" class="col-33">
							<h4 id="status2">0</h4>
							<div class="color-gray">待收货</div>
						</div>
					</div>-->
					<div class="content-block">
						<div onclick="$.linkToManage(0)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/manageIcon (7).png">
							<span>用户管理</span>
						</div>
						<div onclick="$.linkToManage(1)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/manageIcon (5).png">
							<span>套餐管理</span>
						</div>
						<div onclick="$.linkToManage(6)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/manageIcon (1).png">
							<span>订单管理</span>
							
						</div>
						<div onclick="$.linkToManage(3)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/manageIcon (4).png">
							<span>摄影师管理</span>
						</div>
						
						<!--<div onclick="$.linkToManage(3)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/i-form-name.png">
							<span>婚纱管理</span>
						</div>
						<div onclick="$.linkToManage(4)" class="imgBox">
							<img src="/hsylglxt/View/Admin/Public/img/i-form-name.png">
							<span>广告管理</span>
						</div>-->
					</div>
				</div>

			</div>
		</div>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/hsylglxt/View/Admin/Public/js/app.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/homepage.js"></script>
		<script>
			//加载信息的方法
			$.loadMyMessage = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('admin/loadAdminMessage');?>",
					async: true,
					data: {
						adminID: sessionStorage.getItem("adminID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							$("#adminName").text(data.data[0]["nickname"]);
						} else {
							$.toast("用户信息加载异常");
						}
					}
				});
			}
			$.loadMyMessage();

			//跳转到修改用户信息的链接
			$.linkToManage = function(addressBiz) {
				var Url = "";
				switch(addressBiz) {
					case 0:
						Url = "http://localhost/hsylglxt/admin.php/index/userManage.html";
						break;
					case 1:
						Url = "http://localhost/hsylglxt/admin.php/index/setsManage.html";
						break;
					case 2:
						Url = "";
						break;
					case 3:
						Url = "http://localhost/hsylglxt/admin.php/index/photographerManage.html";
						break;
					case 4:
						Url = "";
						break;
					case 5:
						Url = "";
						break;
					case 6:
						Url = "http://localhost/hsylglxt/admin.php/index/orderMange.html";
						break;
					case 7:
						Url = "";
						break;
					case 8:
						Url = "";
						break;
				}
				window.location.href = Url;
			}
		</script>
	</body>

</html>