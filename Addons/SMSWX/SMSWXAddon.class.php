<?php

namespace Addons\SMSWX;
use Common\Controller\Addon;

/**
 * 短信接口插件
 * @author 无名
 */

    class SMSWXAddon extends Addon{

        public $info = array(
            'name'=>'SMSWX',
            'title'=>'短信接口',
            'description'=>'短信接口',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>0,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/SMSWX/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
        
	public function uninstall() {
		$uninstall_sql = './Addons/SMSWX/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }