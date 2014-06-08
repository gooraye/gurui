<?php

namespace Addons\CustomerService;
use Common\Controller\Addon;

/**
 * 官方客服插件
 * @author 贝贝
 */

    class CustomerServiceAddon extends Addon{

        public $info = array(
            'name'=>'CustomerService',
            'title'=>'官方客服',
            'description'=>'官方客服',
            'status'=>1,
            'author'=>'贝贝',
            'version'=>'1',
            'has_adminlist'=>0,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/CustomerService/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/CustomerService/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }