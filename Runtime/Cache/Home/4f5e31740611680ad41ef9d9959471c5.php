<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WeiPHP-简洁而强大的开源微信公众平台开发框架 weiphp.cn</title>
<meta content="遵循Apache2开源协议,免费提供使用,微信功能插件化开发,多公众号管理,配置简单" name="keywords"/>
<meta content="weiphp 简洁而强大的开源微信公众平台开发框架微信功能插件化开发,多公众号管理,配置简单" name="description"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="/wp2/Public/Home/css/about.css?v=<?php echo SITE_VERSION;?>" />
<link type="text/css" rel="stylesheet" href="/wp2/Public/Home/css/forum.css?v=<?php echo SITE_VERSION;?>" />
<script type="text/javascript" src="/wp2/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/wp2/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wp2/Public/Home/js/admin_common.js?v=<?php echo SITE_VERSION;?>"></script>
</head>
<body>
	<div class="head">
    	<div class="wrap">
        	<h1 class="fl"><a class="logo" href="<?php echo SITE_URL;?>" title="返回首页">首家开源的微信公众平台开发框架微信功能插件化开发,多公众号管理,配置简单</a></h1>
            <div class="nav">
            	<a <?php if(ACTION_NAME == 'index' and CONTROLLER_NAME == 'Index'): ?>class="cur"<?php endif; ?> href="<?php echo U('home/index/index');?>">首页</a>
                <!--<a <?php if(ACTION_NAME == 'index' and CONTROLLER_NAME == 'Forum'): ?>class="cur"<?php endif; ?> href="<?php echo U('home/forum/index');?>">讨论区</a>-->
                <!--<a <?php if(ACTION_NAME == 'store' and CONTROLLER_NAME == 'Forum'): ?>class="cur"<?php endif; ?> href="<?php echo U('home/forum/store');?>">插件商店</a>-->
                
                <a <?php if(ACTION_NAME == 'help'): ?>class="cur"<?php endif; ?> href="<?php echo U('home/index/help');?>">帮助中心</a>
                <a href="<?php echo U('home/index/main');?>">管理中心</a>
                <a href="http://www.weiphp.cn/wiki" target="_blank">二次开发手册</a>
                <a href="http://bbs.weiphp.cn" target="_blank">论坛</a>
            </div>
        </div>
    </div>

    <div class="wrap">
    	<div class="content" style="min-height:400px">
    		<h5>WeiPHP 商标和著作权所有者为WeiPHP开发团队</h5>
			<p>WeiPHP遵循Apache Licence2开源协议，并且免费使用（但不包括其衍生产品、插件或者服务）。Apache   Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，允许代码修改，再作为开源或商业  软件发布。</p>
            <h5>需要满足的条件：</h5>
    		      <ul>
    		        <li>需要给用户一份Apache Licence ； </li>
    		        <li>如果你修改了代码，需要在被修改的文件中说明； </li>
    		        <li>在延伸的代码中（修改和有源代码衍生的代码中）需要带有原来代码中的协议，商标，专利声明和其他原来作者规定需要包含的说明； </li>
    		        <li>如果再发布的产品中包含一个Notice文件，则在Notice文件中需要带有本协议内容。你可以在Notice中增加自己的许可，但不可以表现为对Apache Licence构成更改。</li>
  		        </ul>
		</div>
    </div>
    <div class="footer">
    	<div class="wrap foot_wrap">
        	<div class="foot_div">
            	<h6>关于我们</h6>
                <a href="<?php echo U('about');?>">关于我们</a><br/>
                <a href="<?php echo U('about');?>">联系方式</a><br/>
				<!--<a href="#">友情链接</a><br/>-->
  				<a href="<?php echo U('license');?>">授权协议</a>
                
            </div>
        	<div class="foot_div">
            	<h6>帮助</h6>
                <a href="http://bbs.weiphp.cn" target="_blank">官方论坛</a><br/>
                <!--<a href="javasctipt:;" target="_blank">官方微博</a><br/>-->
                <a href="javascript:;">官方QQ交流群：8322255</a>
				
            </div>
            <div class="getqrcode">
            	<img src="/wp2/Public/Home/images/getqrcode.jpg"/>
                <p>微信扫码左侧二维码<br/>并加关注WeiPHP官方微信公众号<br/>体验WeiPHP的最新功能</p>
            </div>
            <div class="foot_logo"></div>
        </div>
        <p class="copyright"><?php echo C('COPYRIGHT');?> <?php echo C('WEB_SITE_ICP');?></p>
    </div>
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>    
</body>
</html>