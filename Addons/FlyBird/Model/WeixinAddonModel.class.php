<?php
        	
namespace Addons\FlyBird\Model;
use Home\Model\WeixinModel;
        	
/**
 * FlyBird的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'FlyBird' ); // 获取后台插件的配置参数	
		//dump($config);
// 其中token和openid这两个参数一定要传，否则程序不知道是哪个微信用户进入了系统
		$param ['token'] = get_token ();
		$param ['openid'] = get_openid ();
		//$url = addons_url ( 'FlyBird://FlyBird/show', $param );
		//$url='http://www.lufylegend.com/lufylegend_developers/ymxd_FlappyBird/index.html';
		$url = 'http://gooraye01.duapp.com/flybird/index.html';
		// 组装微信需要的图文数据，格式是固定的
		$articles [0] = array (
				'Title' => $config ['title'],
				'Description' => $config ['address'],
				'PicUrl' =>'http://gooraye.qiniudn.com/gr_flybird.jpg',
				'Url' => $url 
		);
		$this->replyNews ( $articles );
	} 

	// 关注公众号事件
	public function subscribe() {
		return true;
	}
	
	// 取消关注公众号事件
	public function unsubscribe() {
		return true;
	}
	
	// 扫描带参数二维码事件
	public function scan() {
		return true;
	}
	
	// 上报地理位置事件
	public function location() {
		return true;
	}
	
	// 自定义菜单事件
	public function click() {
		return true;
	}	
}
        	