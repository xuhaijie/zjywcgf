<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
            __     __
           /  \~~~/  \                                                                       |      金华激石信息技术有限公司      |
     ,----(     ..    )
    /      \__     __/
   /|         (\  |(
  ^ \   /___\  /\ |
     |__|   |__|-"
-->
<html>
<head>
	
<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
<base href="__APP__/">
	<meta name="keywords" content="<?php echo ($web_keywords); ?>">
	<meta name="description" content="<?php echo ($web_description); ?>">
	<meta http-equiv="x-ua-compatible" content="ie-edge,chrome=1"><!--//低版本IE支持CSS3属性-->
	<?php if($config["switch_mbaidu"] == '1'): ?><link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="http://<?php echo ($config["web_url"]); ?>/m/"/><?php endif; ?>
	<script src="__TMPL__Public/js/jquery1.8.js"></script>
	<script src="__TMPL__Public/js/pic.js"></script>
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/style.css">
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/animate.min.css">
	<!--[if lte IE 7]><script src="__TMPL__Public/css/lte-ie7.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="__TMPL__Public/Css/skrles.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/skrles.less">
	<script src="__TMPL__Public/css/less.js" type="text/javascript"></script>
	<script src="__TMPL__Public/js/sky.js" type="text/javascript"></script>
    <script src="__TMPL__Public/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="__TMPL__Public/js/selectivizr.js"></script><!--//低版本IE支持CSS3属性-->
<script type="text/javascript" src="__TMPL__Public/js/superslide.2.1.js"></script><!--//大图效果-->
<script>
	document.createElement("section");
	document.createElement("article");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");
	document.createElement("menu");
</script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>


	<script>
		$(function() {
			var $nav=$("#Nav-1"),
				$lido=$(".<?php echo ($lid['name']); echo ($lid['id2']); ?>"),
				$sfl=$("#S-fl");
				$yido=$("#Nav-1").find('>li').eq(<?php echo ($yid); ?>);
			$yido.addClass("lon");
			gezong($yido,$nav);

			if($lido){
				$lido.addClass("lon");
				gezong($lido,$sfl);
			}
			
			function gezong ($a,$b) {
				$b.find(">li").hover(function(){
					var $this=$(this);
						$a.removeClass("lon");
						$this.addClass("lon");
				},function(){
					var $this=$(this);
						$this.removeClass("lon");
						$a.addClass("lon");
				});
			}
		});
	</script>
<?php echo ($config["code_head"]); ?>



</head>
<body>

<div class="header">
	<div class="top">
			<a href="__ROOT__/" titile="<?php echo ($config['name']); ?>">
				<img  src="__ROOT__/__UPLOAD__/<?php echo ($config['logo']); ?>" alt="Logo" class="logo wow zoomInLeft">
			</a>
		<img src="../Public/images/tel.jpg" style="float: right;">
	</div>
	<div class="header_nav_k">
		<div class="header_nav">
			<ul class="nav" id="Nav-1">
				<?php function scnav($str,$a=1) { $att=""; if($str['cun']){ $att=$a>1?'<ul style="top:-7px;left:106px;" class="dropdown-menu">':'<ul class="dropdown-menu">'; foreach ($str['cun'] as $k => $v) { $hlz=scnav($v,$a+1); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s</a>',$v['tid'],$v['url'],$hlz?$v['name']:$v['name']); $att.=$hlz; $att.='</li>'; } $att.='</ul>'; } return $att; } $att=''; foreach ($fnav as $k => $v) { $nav_arr= explode(',',$v['name']) ; $hlz=scnav($v); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s<br /><font class="en">%s</font></a>',$v['tid'],$v['url'],$nav_arr[0],$nav_arr[1]); $att.=$hlz; $att.='</li>'; } echo($att); ?>
			</ul>
		</div>
	</div>
</div>

<div class="main">
	<ul class="fenlei">
		<li><a href="product/type/43"></a></li>
		<li><a href="product/type/44"></a></li>
		<li><a href="product/type/41"></a></li>
		<li><a href="product/type/39"></a></li>
		<li><a href="product/type/42"></a></li>
		<li><a href="product/type/40"></a></li>
	</ul>
</div>
<div class="clear2"></div>
<div class="banner">
    <div id="KinSlideshow" >
        <ul>
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>') no-repeat 50% 0;"><a href="<?php echo ($vo["link"]); ?>"  alt="<?php echo ($vo["title"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>




	<div class="main">
		<div class="custom">
			<ul>
				<li><a href="custom/26"></a></li>
				<li><a href="custom/27"></a></li>
				<li><a href="custom/28"></a></li>
				<li><a href="custom/29"></a></li>
				<li><a href="custom/30"></a></li>
				<li><a href="custom/31 "></a></li>
			</ul>
		</div>
	</div>
<div class="shop">
	<div class="shop-dh"></div>
	<div class="main">
		<div class="shop-nr">
			<?php if(is_array($factory)): $i = 0; $__LIST__ = array_slice($factory,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
					<div class="picture1">
						<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,245,245)"/></a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="clear2"></div>
	<a href="product/type/27" class="more btn-span-17" ><span>了解更多</span></a>
</div>
<div class="pinpai">
	<div class="main">
		<div class="pinpai-dh"></div>
		<div class="pinpai-nr">
			<div id="demo" style=" width:100%; overflow:hidden;">
				<table align=left cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td id="demo1" valign=top ><div style="width:1230px; ">
							<?php if(is_array($pinpai)): $i = 0; $__LIST__ = array_slice($pinpai,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
									<div class="picture1"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/im_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,230,294)"/></a></div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?></div>
						</td>
						<td id="demo2" valign=top></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clear2"></div>
		<a href="product/type/29" class="more btn-span-20" ><span data-hover="了解更多">了解更多</span></a>
	</div>
</div>

<div class="main">
	<div class="gaizhuang1">
		<div class="gai-left gai1"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/32">更多案例</a>
				<h4><em>NEW</em>最新改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g32)): $i = 0; $__LIST__ = array_slice($g32,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai2"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/33">更多案例</a>
				<h4><em>BMW</em>宝马改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g33)): $i = 0; $__LIST__ = array_slice($g33,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai3"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/34">更多案例</a>
				<h4><em>ETON</em>德国ETON改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g34)): $i = 0; $__LIST__ = array_slice($g34,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai4"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/35">更多案例</a>
				<h4><em>ARC</em>美国ARC改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g35)): $i = 0; $__LIST__ = array_slice($g35,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai5"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/36">更多案例</a>
				<h4><em>BKELL</em>美国霸克改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g36)): $i = 0; $__LIST__ = array_slice($g36,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai6"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/37">更多案例</a>
				<h4><em>TEC</em>意大利TEC改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g37)): $i = 0; $__LIST__ = array_slice($g37,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<div class="gaizhuang1">
		<div class="gai-left gai7"></div>
		<div class="gai-right">
			<div class="gai-dh">
				<a href="product/type/38">更多案例</a>
				<h4><em>HYBIRD AUDIO</em>美国HYBRID AUDIO改装案例</h4>
			</div>
			<div class="gai-nr">
				<?php if(is_array($g38)): $i = 0; $__LIST__ = array_slice($g38,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
						<div class="picture-pic">
							<div class="picture1">
								<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,203,203)"/></a>
							</div>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="footer">
    <div class="ff">
        版权所有：　<?php echo ($config['web_name']); ?> 　联系人：<?php echo ($config['linkman']); ?> 　手机：<?php echo ($config['mobile']); ?>　手机1：<?php echo ($config['standby1']); ?><br>
        地址：<?php echo ($config['address']); ?>　
        　网页设计：激石信息技术<a href="__APP__/admin" target="_blank">[后台登陆]</a>
        </a><a href="__ROOT__/Sitemap">　网站地图</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261204113'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261204113%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>


<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>
<!--图标左右切换效果- <i class = "btn-i-1"></i>----->
<script>
    $(function(){
        $(".btn-i-1").each(function(){
            $(this).wrap("<div class='btn1'><div class='btn2'></div></div>");
            var btnI = $(this).clone();
            $(this).parent().append(btnI);
            var btnWidth = $(this).width();
            var btnHeight = $(this).height();
            var left = "46px";//图标距离左边的距离
            var top = "60px";//图标距离顶部的距离
            $(this).css({display:"block",position:"absolute",left:0,margin:0,padding:0,});
            $(this).next(".btn-i-1").css({display:"block",position:"absolute",margin:0,padding:0,left:btnWidth});
            $(this).parents(".btn1").css({width:btnWidth,height:btnHeight,overflow:"hidden",left:left,top:top,position:"absolute"});
            $(this).parent(".btn2").css({position: "relative",left:0});
            $(this).parents(".btn1").parent().hover(function() {
                $(this).find(".btn2").stop().animate({left: -btnWidth});
            },function(){
                $(this).find(".btn2").stop().animate({left:0});
            })
        })
    })
</script>
<?php echo ($liuliangbao); ?>
</body>
</html>

<script language="javascript">
	var speed=30;
	var demo=document.getElementById('demo');
	var demo1=document.getElementById('demo1');
	var demo2=document.getElementById('demo2');
	demo2.innerHTML=demo1.innerHTML;
	function Marquee(){
		if(demo2.offsetWidth-demo.scrollLeft<=0)
		{
			demo.scrollLeft-=demo1.offsetWidth;
		}
		else
		{demo.scrollLeft++;}
	}
	var MyMar=setInterval(Marquee,speed);
	demo.onmouseover=function(){
		clearInterval(MyMar)
	}
	demo.onmouseout=function(){
		MyMar=setInterval(Marquee,speed)
	}

</script>