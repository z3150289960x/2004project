<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>我的店铺</title>
    <link rel="icon" href="/assets//layui/img/favicon.ico">


    <link rel="stylesheet" type="text/css" href="/layui/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/layui/css/widget-jquery.autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="/layui/css/pages-shop.css" />
</head>

<body>
    <!-- 头部栏位 -->
    <!--页面顶部-->
<div id="nav-bottom">
	<!--顶部-->
	<div class="nav-top">
		<div class="top">
			<div class="py-container">
				<div class="shortcut">
					<ul class="fl">
						<li class="f-item">品优购欢迎您！</li>
						<li class="f-item">
							请<a href={{url('login')}} target="_blank">登录</a>　<span><a href="{{url('register')}}" target="_blank">免费注册</a></span>
							<span>	<button id="btn-prize" target="_blank">抽奖</button></span>
						</li>
					</ul>
					<ul class="fr">
						<li class="f-item">我的订单</li>
						<li class="f-item space"></li>
						<li class="f-item"><a href="home.html" target="_blank">我的品优购</a></li>
						<li class="f-item space"></li>
						<li class="f-item">品优购会员</li>
						<li class="f-item space"></li>
						<li class="f-item">企业采购</li>
						<li class="f-item space"></li>
						<li class="f-item">关注品优购</li>
						<li class="f-item space"></li>
						<li class="f-item" id="service">
							<span>客户服务</span>
							<ul class="service">
								<li><a href="cooperation.html" target="_blank">合作招商</a></li>
								<li><a href="shoplogin.html" target="_blank">商家后台</a></li>
								<li><a href="cooperation.html" target="_blank">合作招商</a></li>
								<li><a href="#">商家后台</a></li>
							</ul>
						</li>
						<li class="f-item space"></li>
						<li class="f-item">网站导航</li>
					</ul>
				</div>
			</div>
		</div>

		<!--头部-->
		<div class="header">
			<div class="py-container">
				<div class="yui3-g Logo">
					<div class="yui3-u Left logoArea">
						<a class="logo-bd" title="品优购" href="JD-index.html" target="_blank"></a>
					</div>
					<div class="yui3-u Center searchArea">
						<div class="search">
							<form action="" method="get"  class="sui-form form-inline">
								<div class="input-append">
								<input type="text" name="name" value="{{$query['name']??''}}" class="input-error input-xxlarge" />
								<button class="sui-btn btn-xlarge btn-danger">搜索</button>
									</div>
							</form>
							{{--<form action="" class="sui-form form-inline"  method="get">--}}
								{{--<!--searchAutoComplete-->--}}
								{{--<div class="input-append">--}}
									{{--<input type="text" name="name" value="{{$query['name']??''}}"  id="autocomplete"  class="input-error input-xxlarge" />--}}
									{{--<button class="sui-btn btn-xlarge btn-danger" type="button">搜索</button>--}}
								{{--</div>--}}
							{{--</form>--}}
						</div>
						<div class="hotwords">
							<ul>
								<li class="f-item">品优购首发</li>
								<li class="f-item">亿元优惠</li>
								<li class="f-item">9.9元团购</li>
								<li class="f-item">每满99减30</li>
								<li class="f-item">亿元优惠</li>
								<li class="f-item">9.9元团购</li>
								<li class="f-item">办公用品</li>

							</ul>
						</div>
					</div>
					<div class="yui3-u Right shopArea">
						<div class="fr shopcar">
							<div class="show-shopcar" id="shopcar">
								<span class="car"></span>
								<a class="sui-btn btn-default btn-xlarge" href="cart.html" target="_blank">
									<span>我的购物车</span>
									<i class="shopnum">0</i>
								</a>
								<div class="clearfix shopcarlist" id="shopcarlist" style="display:none">
									<p>"啊哦，你的购物车还没有商品哦！"</p>
									<p>"啊哦，你的购物车还没有商品哦！"</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="yui3-g NavList">
					<div class="yui3-u Left all-sort">
						<h4>全部商品分类</h4>
					</div>
					<div class="yui3-u Center navArea">
						<ul class="nav">
							<li class="f-item">服装城</li>
							<li class="f-item">美妆馆</li>
							<li class="f-item">品优超市</li>
							<li class="f-item">全球购</li>
							<li class="f-item">闪购</li>
							<li class="f-item">团购</li>
							<li class="f-item">有趣</li>
							<li class="f-item"><a href="seckill-index.html" target="_blank">秒杀</a></li>
						</ul>
					</div>
					<div class="yui3-u Right"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="/layui/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/layui/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	//抽奖
$(document).on('click','#btn-prize',function(){
	$.ajax({
		url:'prize',
		type:'get',
//		dataType:'json',
		success:function(d){
			alert(d);
			console.log(d);
		}
	});
})


	$("#service").hover(function(){
		$(".service").show();
	},function(){
		$(".service").hide();
	});
	$("#shopcar").hover(function(){
		$("#shopcarlist").show();
	},function(){
		$("#shopcarlist").hide();
	});

})
</script>
<script type="text/javascript" src="/layui/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/layui/js/widget/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/layui/js/widget/nav.js"></script>
<script type="text/javascript" src="/layui/js/pages/seckill-index.js"></script>
<script type="text/javascript" src="/layui/js/pages/shop.js"></script>
<script>
	   $(function(){
		   $("#code").hover(function(){
			   $(".erweima").show();
		   },function(){
			   $(".erweima").hide();
		   });
	   })
	</script>
</body>

    <div class="py-container shop">
        <!--header-->
        <div class="shop-name">红袖官方旗舰店</div>

        <div class="shop-logo">
            <div class="fl logo-img">
                <img src="/layui/img/_/shop-logo.png" />
            </div>
            <div class="shop-vip">
                <div class="pay">
                    <img src="/layui/img/_/car.png" alt="">
                    <span>
                         全场免运费<br />
                         货到付款
                    </span>
                </div>
                <div class="vip">
                    会员权益<br/>
                    VIP PRIVILEGE
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="head-nav" id="headnav-fixed">
            <div class="sui-navbar">
                <div class="navbar-inner">
                    <ul class="sui-nav ">
                        <li><a href="#">首页</a></li>
                        <li id="li-1" class="all-list">全部分类<span></span></li>
                        <li  class="active"><a href="#tab-one" data-toggle="tab">热卖爆款</a></li>
                        <li><a href="#tab-two" data-toggle="tab">秋装新品</a></li>
                        <li><a href="#tab-three" data-toggle="tab">连衣裙</a></li>
                        <li><a href="#tab-four">T恤</a></li>
                        <li><a href="#tab-five">衬衫雪纺</a></li>
                        <li><a href="#tab-six">半身裙</a></li>
                        <li><a href="#tab-seven">裤装</a></li>
                        <li><a href="#tab-eight">商场同款</a></li>
                    </ul>

                    <form class="sui-form sui-form pull-right">
                        <input type="text" placeholder="连衣裙...">
                        <button class="sui-btn">搜索</button>
                    </form>
                    <div class="clearfix"></div>
                    <!--下拉的菜单-->
                    <div id="box-1" class="hidden-box hidden-loc-index">
                        <ul id="listall">
                            <li>热卖爆款</li>
                            <li>今日推荐</li>
                            <li>秋装新品</li>
                            <li>T恤</li>
                            <li>连衣裙</li>
                            <li>衬衫雪纺</li>
                            <li>半身裙</li>

                        </ul>
                    </div>
                    <!--下拉的菜单end-->
                </div>
            </div>
        </div>

        <div class="banner">
            <img src="/layui/img/_/shop-intro.png" alt="">
        </div>

        {{--@foreach ($data as $v)--}}
            {{--<tr>--}}
                {{--<td>{{$v->brand_id}}</td>--}}
                {{--<td><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="20"/>{{$v->brand_name}}</td>--}}
                {{--<td>{{$v->brand_url}}</td>--}}
                {{--<td>{{$v->brand_desc}}</td>--}}
                {{--<td><a href="{{url('/brand/edit/' . $v->brand_id)}}" class="btn btn-primary">编辑</a>|<a href="{{url('/brand/destroy/' . $v->brand_id)}}" class="btn btn-danger">删除</a></td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}

        <div class="default-list">
            <div class="title">
                <h1>Must have+</h1>
                <h2>畅销夏日装备</h2>
            </div>
            <div class="goods-list">
                <ul class="yui3-g" id="goods-list">
                    @foreach ($data as $v)
                    <li class="yui3-u-1-4">
                        <div class="list-wrap">
                            <div class="p-img"><img src="/upload/{{$v->goods_img}}" width="400px" height="500"/></div>
                            <div class="price"><strong><em>¥</em> <i>{{$v->shop_price}}</i></strong></div>
                            <div class="attr"><em>{{$v->goods_name}}</em></div>
                            <div class="cu"><em><span>促</span>满一件可参加超值换购</em></div>
                            <div class="operate">
                                <a href="{{url('goods' . $v->goods_id)}}" target="_blank" class="sui-btn btn-bordered btn-danger">加入购物车</a>
                                <a href="javascript:void(0);" class="sui-btn btn-bordered">对比</a>
                                <a href="javascript:void(0);" class="sui-btn btn-bordered">关注</a>
                            </div>
                        </div>
                    </li >
                     {{--<li class="yui3-u-1-4">--}}
                        {{--<div class="list-wrap">--}}
                            {{--<div class="p-img"><img src="/layui/img/_/t.jpg" alt=''></div>--}}
                            {{--<div class="price"><strong><em>¥</em> <i>139.00</i></strong></div>--}}
                            {{--<div class="attr"><em>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</em></div>--}}
                            {{--<div class="cu"><em><span>促</span>满一件可参加超值换购</em></div>--}}
                            {{--<div class="operate">--}}
                                {{--<a href="success-cart.html" target="_blank" class="sui-btn btn-bordered btn-danger">加入购物车</a>--}}
                                {{--<a href="javascript:void(0);" class="sui-btn btn-bordered">对比</a>--}}
                                {{--<a href="javascript:void(0);" class="sui-btn btn-bordered">关注</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li >--}}
                    @endforeach
                    </ul>
                </div>
			{{$data->appends($query??'')->links()}}
                {{--<div id="tab-two" class="tab-pane">2</div>--}}
                {{--<div id="tab-three" class="tab-pane">3</div>--}}
            </div>
            <!--tab list end-->
        </div>


        <!--回到顶部-->
        <div class="cd-top">
            <div class="top">
                <img src="/layui/img/_/gotop.png" />
                <b>TOP</b>
            </div>
            <div class="code" id="code">
                <span><img src="/layui/img/_/code.png"/></span>
            </div>
            <div class="erweima">
                <img src="/layui/img/_/erweima.jpg" alt="">
                <s></s>
            </div>
        </div>
    </div>

    <!-- 底部栏位 -->
    <!--页面底部-->
<div class="clearfix footer">
	<div class="py-container">
		<div class="footlink">
			<div class="Mod-service">
				<ul class="Mod-Service-list">
					<li class="grid-service-item intro  intro1">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item  intro intro2">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item intro  intro3">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item  intro intro4">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item intro intro5">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
				</ul>
			</div>
			<div class="clearfix Mod-list">
				<div class="yui3-g">
					<div class="yui3-u-1-6">
						<h4>购物指南</h4>
						<ul class="unstyled">
							<li>购物流程</li>
							<li>会员介绍</li>
							<li>生活旅行/团购</li>
							<li>常见问题</li>
							<li>购物指南</li>
						</ul>

					</div>
					<div class="yui3-u-1-6">
						<h4>配送方式</h4>
						<ul class="unstyled">
							<li>上门自提</li>
							<li>211限时达</li>
							<li>配送服务查询</li>
							<li>配送费收取标准</li>
							<li>海外配送</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>支付方式</h4>
						<ul class="unstyled">
							<li>货到付款</li>
							<li>在线支付</li>
							<li>分期付款</li>
							<li>邮局汇款</li>
							<li>公司转账</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>售后服务</h4>
						<ul class="unstyled">
							<li>售后政策</li>
							<li>价格保护</li>
							<li>退款说明</li>
							<li>返修/退换货</li>
							<li>取消订单</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>特色服务</h4>
						<ul class="unstyled">
							<li>夺宝岛</li>
							<li>DIY装机</li>
							<li>延保服务</li>
							<li>品优购E卡</li>
							<li>品优购通信</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>帮助中心</h4>
						<img src="/layui/img/wx_cz.jpg">
					</div>
				</div>
			</div>
			<div class="Mod-copyright">
				<ul class="helpLink">
					<li>关于我们<span class="space"></span></li>
					<li>联系我们<span class="space"></span></li>
					<li>关于我们<span class="space"></span></li>
					<li>商家入驻<span class="space"></span></li>
					<li>营销中心<span class="space"></span></li>
					<li>友情链接<span class="space"></span></li>
					<li>关于我们<span class="space"></span></li>
					<li>营销中心<span class="space"></span></li>
					<li>友情链接<span class="space"></span></li>
					<li>关于我们</li>
				</ul>
				<p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</p>
				<p>京ICP备08001421号京公网安备110108007702</p>
			</div>
		</div>
	</div>
</div>
<!--页面底部END-->
undefined

</html>