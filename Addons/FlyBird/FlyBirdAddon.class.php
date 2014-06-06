<?php

namespace Addons\FlyBird;
use Common\Controller\Addon;

/**
 * 小鸟游戏插件
 * @author 贝贝
 */

    class FlyBirdAddon extends Addon{

        public $info = array(
            'name'=>'FlyBird',
            'title'=>'小鸟游戏',
            'description'=>'Flappy Bird是由越南河内的独立游戏开发者阮哈东(Nguyen Ha Dong)开发的一款操作简单但难度极高的免费手机游戏。',
            'status'=>1,
            'author'=>'贝贝',
            'version'=>'0.1',
            'has_adminlist'=>0,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/FlyBird/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/FlyBird/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }