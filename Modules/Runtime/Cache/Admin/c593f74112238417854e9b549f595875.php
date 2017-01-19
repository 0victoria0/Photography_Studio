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
			.item-title-row .item-after {
				color: orangered;
			}
			/*去除商品列表tab左右padding 顶部的margin*/
			
			.content-block {
				padding: 0.0rem;
			}
			
			.card {
				width: 45%;
				margin-right: 0;
				float: left;
				/*				height: 8.0rem;*/
			}
			/*推荐页面的价格颜色*/
			
			.card-footer.no-border .price {
				color: orange;
			}
			
			.card-header p {
				margin: 0;
				text-align: left;
			}
			/*搜索框位置调整*/
			
			.bar.bar-header-secondary {
				position: initial;
			}
			
			#page-me .item-title-row .item-title {
				font-size: 1.3rem;
			}
			
			#page-me .price {
				color: orangered;
				font-size: 0.8rem;
			}
			
			.activity {
				color: red;
				font-size: 0.8rem;
			}
			
			.page-main .swiper-container {
				height: 10.0rem;
				padding-bottom: 0;
				margin-bottom: 0.5rem;
			}
			
			.swiper-slide img {
				height: 100%;
				width: 100%;
				display: inline;
			}
			
			.swiper-pagination.swiper-pagination-bullets {
				position: relative;
				bottom: 1.0rem;
			}
			
			.swiper-container {
				padding-bottom: 0rem;
			}
			
			.icon.icon-cart {
				font-size: 1.5rem;
			}
			
			.recommend.price {
				font-size: 1.4rem;
			}
		</style>
	</head>

	<body>
		<div  class="page page-settings">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back">
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">用户管理</h1>
				<a  onclick="$.editUser('add')" class="button button-link pull-right">
					<span  class="icon icon-plus"></span> 新增用户
				</a>
			</header>
			<div class="content">
				<div class="bar bar-header-secondary">
					<div class="searchbar">
						<a class="searchbar-cancel">Cancel</a>
						<div class="search-input">
							<label class="icon icon-search" for="search"></label>
							<input type="search" id='search' placeholder='关键字过滤用户' />
						</div>
					</div>
				</div>
						
							<div class="list-block media-list">
								<ul id="userContainer">

								</ul>
							</div>
				
					
					
			</div>
		</div>
		
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Admin/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/hsylglxt/View/Admin/Public/js/app.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/shop/public.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/home.js"></script>
		<script>
			$.loadUserMessageList = function(orderStatus) {
					$.ajax({
						type: "post",
						url: "<?php echo U('admin/loadUserMessageList');?>",
						async: true,
						data: {
							
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									tempStr.push('<li  id="user' + arg.id + '" onclick="$.editUser(\'' + arg.id + '\');"  class="swipeout outter">');
									tempStr.push('<div class="swipeout-content">');
									tempStr.push('<label class="label-checkbox item-content">');
									tempStr.push('<div class="item-media">');
									tempStr.push('<img src=' + arg.headimgsrc + ' width="80">');
									tempStr.push('</div>');
									tempStr.push('<div class="item-inner">');
									tempStr.push('<div class="item-title-row">');
									tempStr.push('<div class="item-title">' + arg.nickname + '</div>');
									tempStr.push('<div class="item-title price">余额￥' + arg.balance + '</div>');
									tempStr.push('</div>');
									tempStr.push('<div class="item-text">'+arg.lovewords+'</div>');
									tempStr.push('<div class="item-title-row">');
									tempStr.push('<div class="item-title">结婚日期：'+arg.weddingdate+'</div>');
									tempStr.push('</div>');
									tempStr.push('</div>');
									tempStr.push('</label>');
									tempStr.push('</div>');
									tempStr.push('<div class="swipeout-actions-right">');
									tempStr.push('<a onclick="$.deleteUser(\'' + arg.id + '\');" class="bg-danger swipeout" href="#">删除用户</a>');
									tempStr.push('</div>');
									tempStr.push('</li>');
								});
								$('#userContainer').empty();
								$('#userContainer').append(tempStr.join(''));
							} else {
								$.toast("通讯异常");
							}

						}
					});

				}
			$.loadUserMessageList();
			/*删除用户的方法*/
			$.deleteUser = function(userID) {
					$.confirm("是否要删除这个用户?", function() {
						$.ajax({
							type: "post",
							url: "<?php echo U('admin/deleteUser');?>",
							async: true,
							data: {
								userID: userID
							},
							success: function(d) {
								var data = JSON.parse(d);
								/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
								if(data.code == "0000") {
									$("#user" + userID).remove();
									$.toast("用户删除成功");
								} else {
									$.toast("通讯异常");
								}
							}
						});
					})
				}
			$.editUser = function(userID){
				window.location.href="http://localhost/hsylglxt/admin.php/index/editUser.html?userID="+userID;
			}
			/*搜索热门商品的方法,在这里不适用于后台数据库的交互，直接在推荐商品里面挑选*/
			$.searchGood = function(keyword) {
				$(".swipeout.outter").forEach(function(arg, index) {
					/*console.log($(arg));*/
					if(arg.firstChild.firstChild.lastChild.firstChild.firstChild.innerHTML.indexOf(keyword) == -1) {
						arg.style.display = "none";
					}
				});
			}
			$("#search").on("input", function() {
				
					$(".swipeout.outter").forEach(function(arg, index) {
						/*console.log(arg);*/
						arg.style.display = "block";
					});
					$.searchGood($("#search").val())
				})
		</script>
	</body>

</html>