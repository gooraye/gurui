<?php if (!defined('THINK_PATH')) exit();?>

    <!DOCTYPE html>
<html lang="zh-cn">
<head>
<title><?php echo ((isset($title) && ($title !== ""))?($title):'古睿信息科技'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="古睿,古睿信息科技，绍兴古睿，移动网站制作，网站建设" name="keywords"/>
<meta content="专业网站建设、平台开发，移动网站建设。百科制作，地图名片制作。" name="description"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link type="text/css" rel="stylesheet" href="/wp2/Public/static/bootstrap3/css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="/wp2/Public/Home/css/index-a.css?v=<?php echo SITE_VERSION;?>" />
<link type="text/css" rel="stylesheet" href="/wp2/Public/static/flexisel/flexisel.css?v=<?php echo SITE_VERSION;?>" />
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<!-- <script type="text/javascript" src="/wp2/Public/static/jquery-2.0.3.min.js"></script> -->
<!-- Cdn fail refers to local library -->
  <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/wp2/Public/static/jquery-2.0.3.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
 </script>
<script type="text/javascript" src="/wp2/Public/static/bootstrap3/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/wp2/Public/static/lazyloadSm.js"></script>
<script type="text/javascript" src="/wp2/Public/static/flexisel/jquery.flexisel.js"></script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0cf1c3c27eeb3be94102e955574a5a4e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body class="a">
<div class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header col-lg-2 col-md-3  ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand  h2 logo " href="<?php echo SITE_URL;?>"></a>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav nav-xs-block">

            <li><a href="<?php echo SITE_URL;?>" class="  h4 ">首页</a></li>
            <?php if(is_array($channels)): $i = 0; $__LIST__ = $channels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (get_nav_url($channel["url"])); ?>"  class=" h4" target="<?php echo (get_url_target($channel['target'])); ?>" ><?php echo ($channel["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
           
            <li class="pull-right"></li>
          </ul>
          <div class="telphone hidden-sm hidden-xs"><a href="tel:057585060707" onclick="javascript:void(0);" title="欢迎联系我们"><span class="glyphicon glyphicon-earphone"></span>0575-85060707</a></div>
        </div>
      </div>
    </div>

        <div class="container greybg container-body" >
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img data-original="/wp2/Public/Home/images/wg/banner-a.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-a.jpg" alt="1" src="" class="lazy" width="1024"  >
            </div>
            
           <div class="item">
              <img data-original="/wp2/Public/Home/images/wg/banner-b.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-b.jpg" alt="2" class="lazy" width="1024" >
            </div>
           <div class="item">
              <img data-original="/wp2/Public/Home/images/wg/banner-c.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-c.jpg" alt="3" class="lazy" width="1024" >
            </div>


         <!--   <div class="item">
              <img data-original="/wp2/Public/Home/images/wg/banner-d.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-d.jpg" alt="2" class="lazy" width="1024" >
            </div> -->
           <div class="item">
              <img data-original="/wp2/Public/Home/images/wg/banner-e.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-e.jpg" alt="3" class="lazy" width="1024" >
            </div>


          </div>

          <!-- Controls -->
          <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <!--  END carousel -->
      
          <div class="row col-sm-12 col-md-12 col-lg-12 features">
                     <h3> 
                    <img data-sm-original="/wp2/Public/Home/images/wg/hangyegn-sm.png" data-original="/wp2/Public/Home/images/wg/hangyegn.png" class="lazy img-responsive center-block"></img></h3>
                    <div class="col-lg-2 col-sm-3 col-xs-4 text-center" >
                        <h3> <a href="" title="微调研"><img src="/wp2/Public/Home/images/features/wdy.png" alt="微调研" >
                        <br>
                        <span>微调研</span>
                        </a></h3>
                        <p>无需人力电子调研
                        </p>
                    </div>
                    <div class="col-lg-2 col-sm-3  col-xs-4 text-center">
                         <h3> <a href="" title="微商城"><img src="/wp2/Public/Home/images/features/wsc.png" alt="微商城" >
                        <br>
                        <span>微商城</span>
                        </a></h3>
                         <p>小微信也有大商城<br>
                            电商轻松走入微信
                        </p>
                    </div>
                   <div  class="col-lg-2 col-sm-3  col-xs-4 text-center">
                    <h3> <a href="" title="微吧"><img src="/wp2/Public/Home/images/features/wb.png" alt="微吧" >
                        <br>
                        <span>微吧</span>
                        </a></h3>
                        <p>微信上的休闲吧<br>
                            交流互动话品牌
                        </p>
                    </div>
                    <div class="col-lg-2 col-sm-3  col-xs-4  text-center">
                         <h3> <a href="" title="微喜帖"><img src="/wp2/Public/Home/images/features/wxt.png" alt="微喜帖" >
                        <br>
                        <span>微喜帖</span>
                        </a></h3>
                        <p>颠覆传统方式<br>
                            让庆典更时尚
                        </p>
                   </div>
                   <div  class="col-lg-2 col-sm-3 col-xs-4  text-center" >
                         <h3> <a href="" title="微团购"><img src="/wp2/Public/Home/images/features/wtg.png" alt="微团购" >
                        <br>
                        <span>微团购</span>
                        </a></h3>
                        <p>还怕库存淡旺季
                            安啦，我有微团购
                        </p>
                    </div>
                   <div  class="col-lg-2 col-sm-3 col-xs-4  text-center" >
                         <h3> <a href="" title="微房产"><img src="/wp2/Public/Home/images/features/wfc.png" alt="微房产" >
                        <br>
                        <span>微房产</span>
                        </a></h3>
                        <p>房产行业解决方案<br>
                            360度看房更给力
                        </p>
                   </div>

                    <div class="col-lg-2  col-sm-3 hidden-xs text-center" >
                        <h3> <a href="" title="微网站"><img src="/wp2/Public/Home/images/features/wwz.png" alt="微网站" >
                        <br>
                        <span>微网站</span>
                        </a></h3>
                        <p>酷炫微网站<br>
                            微信上的形象门户
                        </p>
                    </div>
                    <div class="col-lg-2  col-sm-3 hidden-xs text-center">
                         <h3> <a href="" title="一战到底"><img src="/wp2/Public/Home/images/features/yzdd.png" alt="一战到底" >
                        <br>
                        <span>一战到底</span>
                        </a></h3>
                         <p>融品牌于知识<br>
                             变销售为乐趣
                        </p>
                    </div>
                   <div  class="col-lg-2  hidden-sm hidden-xs text-center">
                    <h3> <a href="" title="无敌幸运机"><img src="/wp2/Public/Home/images/features/wdxyj.png" alt="无敌幸运机" >
                        <br>
                        <span>无敌幸运机</span>
                        </a></h3>
                        <p>幸运机摇奖服务<br>
                            增强用户粘性
                        </p>
                    </div>
                    <div class="col-lg-2  hidden-sm hidden-xs text-center">
                         <h3> <a href="" title="大转盘"><img src="/wp2/Public/Home/images/features/dzp.png" alt="大转盘" >
                        <br>
                        <span>大转盘</span>
                        </a></h3>
                        <p>快乐大转盘<br>
                            幸运落谁家
                        </p>
                   </div>
                   <div  class="col-lg-2 hidden-sm hidden-xs text-center" >
                         <h3> <a href="" title="刮刮卡"><img src="/wp2/Public/Home/images/features/ggk.png" alt="刮刮卡" >
                        <br>
                        <span>刮刮卡</span>
                        </a></h3>
                        <p>开展在线刮奖活动<br>
                            吸引顾客线下消费
                        </p>
                    </div>
                   <div  class="col-lg-2 hidden-sm hidden-xs text-center" >
                         <h3> <a href="" title="优惠券"><img src="/wp2/Public/Home/images/features/yhq.png" alt="优惠券" >
                        <br>
                        <span>优惠券</span>
                        </a></h3>
                        <p>电子优惠券利益客户<br>
                            又节约营销预算
                        </p>
                   </div>



                   <div class="col-lg-2 hidden-sm hidden-xs text-center" >
                        <h3> <a href="" title="LBS"><img src="/wp2/Public/Home/images/features/LBS.png" alt="LBS" >
                        <br>
                        <span>LBS</span>
                        </a></h3>
                        <p>适用于多门店、多服务点<br>
                            让客户更方便的找到你
                        </p>
                    </div>
                    <div class="col-lg-2 hidden-sm hidden-xs text-center">
                         <h3> <a href="" title="智能客服"><img src="/wp2/Public/Home/images/features/znkf.png" alt="智能客服" >
                        <br>
                        <span>智能客服</span>
                        </a></h3>
                         <p>智能客服，自动应答<br>
                             7x24不间断服务
                        </p>
                    </div>
                   <div  class="col-lg-2 hidden-sm hidden-xs text-center">
                    <h3> <a href="" title="关键词回复"><img src="/wp2/Public/Home/images/features/gjc.png" alt="关键词回复" >
                        <br>
                        <span>关键词回复</span>
                        </a></h3>
                        <p>便捷关键词回复<br>
                            轻松设置
                        </p>
                    </div>
                    <div class="col-lg-2 hidden-sm hidden-xs text-center">
                         <h3> <a href="" title="微餐饮"><img src="/wp2/Public/Home/images/features/wcy.png" alt="微餐饮" >
                        <br>
                        <span>微餐饮</span>
                        </a></h3>
                        <p>微信上实时点餐<br>
                            餐厅开在微信上
                        </p>
                   </div>
                   <div  class="col-lg-2 hidden-sm hidden-xs text-center" >
                         <h3> <a href="" title="微汽车"><img src="/wp2/Public/Home/images/features/wqc.png" alt="微汽车" >
                        <br>
                        <span>微汽车</span>
                        </a></h3>
                        <p>预约试驾、保养<br>
                            360度看车、车主关怀
                        </p>
                    </div>
                   <div  class="col-lg-2 hidden-sm hidden-xs text-center" >
                         <h3> <a href="" title="在线预约" rel="#overlay"><img src="/wp2/Public/Home/images/features/zxyy.png" alt="在线预约" >
                        <br>
                        <span>在线预约</span>
                        </a></h3>
                        <p>在线预订预约<br>
                            帮您一键搞定
                        </p>
                   </div>
        </div>
    
  <!--       <div class="row text-center morecases">
            <button type="button" class="btn btn-gray btn-lg">更多功能</button>
        </div> -->

        <!-- case  start -->
            <div class="row col-xs-12 col-md-12" style="padding-bottom:10px;">
                <h3> <img  data-original="/wp2/Public/Home/images/wg/albanner.png" data-sm-original="/wp2/Public/Home/images/wg/albanner-sm.png"  alt="客户案例" class="lazy img-responsive center-block" /> </h3>
                <ul class="cases">
                    <li>
                      <img data-original="/wp2/Public/Home/images/wg/01.jpg" data-sm-original="/wp2/Public/Home/images/wg/01.jpg" alt="1" src="" class="lazy" width="220"   height="320" />
                    </li>            
                    <li>
                      <img data-original="/wp2/Public/Home/images/wg/02.jpg" data-sm-original="/wp2/Public/Home/images/wg/02.jpg" alt="2" class="lazy" width="220"  height="320" />
                    </li>
                    <li>
                      <img data-original="/wp2/Public/Home/images/wg/03.jpg" data-sm-original="/wp2/Public/Home/images/wg/banner-c.png" alt="3" class="lazy" width="220" height="320" />
                    </li>
                    <li>
                      <img data-original="/wp2/Public/Home/images/wg/04.jpg" data-sm-original="/wp2/Public/Home/images/wg/04.jpg" alt="2" class="lazy" width="220"  height="320" />
                    </li>
                    <li>
                      <img data-original="/wp2/Public/Home/images/wg/05.jpg" data-sm-original="/wp2/Public/Home/images/wg/05.jpg" alt="3" class="lazy" width="220"  height="320" />
                    </li>
              </ul>
        
         </div>

        <!-- case  end -->
   <!--      <div class="row text-center morecases">
            <button type="button" class="btn btn-gray btn-lg">更多案例</button>
        </div> -->
    </div>
    <!-- container  end -->

    
        <!-- 统一页脚 -->
    <div class="footer row clearfix">
        <div class="col-sm-3 col-md-2 col-xs-12 hidden-xs hidden-sm">
        
        <img src="/wp2/Public/Home/images/wg/about.png" />

         <ul class="list-unstyled">
        <li><a href="#" target="blank">古睿简介</a></li>
        <li><a href="<?php echo U('index/about');?>" target="blank">关于古睿</a></li>
        </ul>
        </div>

            <div class=" col-sm-3 col-md-2 col-xs-12  hidden-xs hidden-sm">

            <img src="/wp2/Public/Home/images/wg/help.png">

                <ul class="list-unstyled">
            <li><a href="#" target="blank">常见问题</a></li>

            <li><a href="http://www.gooraye.com/bbs" target="blank">论坛求助</a></li>
            
             </ul>
            </div>

               <div class="col-sm-3 col-md-2 col-xs-12  hidden-xs hidden-sm">

                <img src="/wp2/Public/Home/images/wg/qixia.png">

                <ul class="list-unstyled">
                <li><a href="http://www.gooraye.com/" target="blank">古睿企业官网</a></li>
                <li><a href="http://www.gooraye.net/home/user/login.html">进入后台管理</a></li>
                </ul>
              </div>





            <div class="col-md-4 col-sm-3 col-xs-12  hidden-xs hidden-sm">

                <img src="/wp2/Public/Home/images/wg/lianxi.png">
                <ul class="list-unstyled">
                <li>客服热线：0575-85060707</li>

                <li>办公地址：浙江省绍兴市越城区汤公路186号</li>
                
                <li>建议反馈：QQ:2966442390   QQ:1966236348</li>

                <li>网站备案号：<a href="http://www.miitbeian.gov.cn" target="_blank"><?php echo C('WEB_SITE_ICP');?></a>
                </li>

                 </ul>

            </div>
            
            <div class="col-md-1 col-sm-3 col-xs-12  hidden-xs hidden-sm">
                
                <img data-sm-original="/wp2/Public/static/images/qrcode-sm.jpg" data-original="/wp2/Public/static/images/qrcode.jpg" title="微信服务号" class="lazy" width="160" height="140">
                <!-- <span>微信服务号</span> -->
            </div>


    </div>
    

    <script type="text/javascript">
        function lazyload(){
            $("img.lazy").lazyload({
                event : "sporty",
                skip_invisible : false,
                failure_limit : 15,
                effect:"fadeIn",
                threshold:20
            });

        }
        $(function(){
            //边栏导航
            
            $(".widget-tabs-title-container a").click(function(ev){
                    ev.preventDefault();
                    $(".widget-tabs-title-container .active").removeClass("active");
                    $(this).parent().parent().addClass("active");

                    var ids = $(".widget-tabs-title-container .active a").attr("href");
                    // console.log(ids);
                    $(".tab-content").hide();
                    $(ids).fadeIn(500);
            });
            // $('a[rel=#overlay]')
            $('.features div').hover(function(ele){
                     $(this).addClass("hover");
                },function (){    
                     $(this).removeClass("hover");
            }).click(function(e){
                    var desc = $("p",this).text();
                    var imgsrc = $("img",this).attr("src");
                    var title = $("a > span",this).text();
                    // console.log("desc= ",desc);
                    // console.log("imgsrc= ",imgsrc);
                    // console.log("title= ",title);
                    e.preventDefault();
            });
            //
            var placeholder = "data:image/png;base64,R0lGODdh7gLuAuMAAMzMzJaWlr6+vrGxsaOjo5ycnKqqqre3t8XFxQAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAA7gLuAgAE/hDISau9OOvNu/9gKI5kaZ5oqq5s675wLM90bd94ru987//AoHBILBqPyKRyyWw6n9CodEqtWq/YrHbL7Xq/4LB4TC6bz+i0es1uu9/wuHxOr9vv+Lx+z+/7/4CBgoOEhYaHiImKi4yNjo+QkZKTlJWWl5iZmpucnZ6foKGio6SlpqeoqaqrrK2ur7CxsrO0tba3uLm6u7y9vr/AwcLDxMXGx8jJysvMzc7P0NHS09TV1tfY2drb3N3e3+Dh4uPk5ebn6Onq6+zt7u/w8fLz9PX29/j5+vv8/f7/AAMKHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8eP/iBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhz6tzJs6fPn0CDCh1KtKjRo0iTKl3KtKnTp1CjSp1KtarVq1izat3KtavXr2DDih1LtqzZs2jTql3Ltq3bt3Djyp1Lt67du3jz6t3Lt6/fv4ADCx5MuLDhw4gTK17MuLHjx5AjS55MubLly5gza97MubPnz6BDix5NurTp06hTq17NurXr17Bjy55Nu7bt27hz697Nu7fv38CDCx9OvLjx48iTK1/OvLnz59CjS59Ovbr169iza9/Ovbv37+DDix9Pvrz58+jTq1/Pvr379/Djy59Pv779+/jz69/Pv7///wAG/ijggAQWaOCBCCao4IIMNujggxBGKOGEFFZo4YUYZqjhhhx26OGHIIYo4ogklmjiiSimqOKKLLbo4oswxijjjDTWaOONOOao44489ujjj0AGKeSQRBZp5JFIJqnkkkw26eSTUEYp5ZRUVmnllVhmqeWWXHbp5ZdghinmmGSWaeaZaKap5ppstunmm3DGKeecdNZp55145qnnnnz26eefgAYq6KCEFmrooYgmquiijDbq6KOQRirppJRWaumlmGaq6aacdurpp6CGKuqopJZq6qmopqrqqqy26uqrsMYq66y01mrrrbjmquuuvPbq66/ABivssMQWa+yxyCar7LLM/jbr7LPQRivttNRWa+212Gar7bbcduvtt+CGK+645JZr7rnopqvuuuy26+67BwowAAEFFBBAAAUYcEAGCPTr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";
                        $("img.lazy").attr("src", placeholder);
             var timeout = setTimeout(lazyload, 500);
            //lazyload();
            $(".cases").flexisel({
                    visibleItems: 4,//显示一屏图片数量
                    animationSpeed: 1000,
                    autoPlay: true,//自动滚动
                    autoPlaySpeed: 3000, 
                    pauseOnHover: true,//鼠标移上去时暂停
                    enableResponsiveBreakpoints: true,//支持响应布局
                    responsiveBreakpoints: { 
                        portrait: { 
                            changePoint:480,
                            visibleItems: 2
                        }, 
                        landscape: { 
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: { 
                            changePoint:768,
                            visibleItems: 4
                        }
                    }
                });
        })  

    </script>


    <div class="row col-md-12 text-center  " style="padding-bottom:30px;">Copyright© 2014 古睿信息科技有限公司 All Rights Reserved.</div>
    <!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
    <?php echo hook('pageFooter', 'widget');?>    

    </body>
    </html>