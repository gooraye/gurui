<?php if (!defined('THINK_PATH')) exit();?><div>
	<a href="#" id="returntop" style="position:fixed;width:27px;height:64px;transition:all 0.5s ease-in-out;-webkit-transition:all 0.5s ease-in-out;right:60px;bottom:-60px;background:url(./Addons/ReturnTop/top1.png) no-repeat ;transition:background-position-x 0s;-webkit-transition:background-position-x 0s;'">
		
	</a>

	<script type="text/javascript">
		var curPos,timer;  
		function GoTop(){  
		    timer=setInterval("runToTop()",10);  
		}  
		function runToTop(){  
		    curPos=document.documentElement.scrollTop || document.body.scrollTop;   
		    curPos-=30;  
		    if(curPos>0)  
		    {  
		        window.scrollTo(0,curPos);  
		    }  
		    else  
		    {  
		        window.scrollTo(0,0);  
		        clearInterval(timer); 
		    }  
		} 
		function listenScroll(){
			var currentPosition= $(window).scrollTop();   
			// console.log(currentPosition);
			if(currentPosition > 50){
				// $("#returntop").show();
				$("#returntop").css({'bottom':'60px','width':'27px','height':'64px'});
			}else{
				$("#returntop").css({'bottom':'-60px','width':'10px','height':'64px'});
			}
		}
		$(function(){
			if(typeof window.console !== "undefined")
			{
				console.log("一张网页，要经历怎样的过程，才能抵达用户面前？\n 一位新人，要经历怎样的成长，才能站在技术之巅？\n探寻这里的秘密；\n体验这里的挑战；\n成为这里的主人；\n");
				
				console.log("请将简历发送至 hebiduhebi@163.com （ 邮件标题请以“姓名-应聘XX职位-来自console”命名）");
				console.log("或拨打电话0575-85060707 或 13484379290 说明来自console。");
			}
			$("#returntop").hover(function(){	$("#returntop").css({'background-position-x':'-28px'})	},function(){	$("#returntop").css({'background-position-x':'0px'})	}).click(function(e){
				// $("#returntop").css({'bottom':'4000px'});
				e.preventDefault();
				GoTop();
			});
			listenScroll();
			$(window).scroll(listenScroll);
		});
	</script>
</div>