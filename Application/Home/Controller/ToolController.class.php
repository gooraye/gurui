<?php
// +----------------------------------------------------------------------
// | WeiPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 凡星
// +----------------------------------------------------------------------
namespace Home\Controller;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class ToolController extends HomeController {
	var $db2 = 'weiphp';
	var $db1 = '`weiphp2.0`';
	function index() {
		$tables = array (
				'wp_auth_rule' => 'name',
				'wp_menu' => 'title',
				'wp_config' => 'name',
				'wp_addons' => 'name',
				'wp_action' => 'name',
				'wp_hooks' => 'name'
		);
		
		foreach ( $tables as $t => $field ) {
			$this->adddel ( $t, $field );
		}
	}
	function upateModel() {
		// 先判断模型
		//$this->adddel ( 'wp_model', 'name' );
		
		// 属性更新
		$table = 'wp_attribute';
		$sql = "SELECT a.*, m.name as model_name FROM {$this->db1}.`$table` a left join {$this->db1}.wp_model m on a.model_id=m.id";
		$list1 = M ()->query ( $sql );
		foreach ( $list1 as $vo1 ) {
			$arr1 [$vo1 ['model_name']] [$vo1 ['name']] = $vo1 ['id'];
		}
		// dump ( $arr1 );
		
		$sql = "SELECT a.*, m.name as model_name FROM {$this->db2}.`$table` a left join {$this->db2}.wp_model m on a.model_id=m.id";
		$list2 = M ()->query ( $sql );
		foreach ( $list2 as $vo1 ) {
			$arr2 [$vo1 ['model_name']] [$vo1 ['name']] = $vo1 ['id'];
		}
		// dump ( $arr2 );
		
		foreach ( $list1 as $vo ) {
			if (isset ( $arr2 [$vo ['model_name']] [$vo ['name']] ))
				continue;
			
			$vo['model_id'] = '{$model_id}';
			$model_name = $vo ['model_name'];
			unset ( $vo ['id'] );
			unset ( $vo ['model_name'] );
			$fields = array_keys ( $vo );
			$fields = '`' . implode ( '`,`', $fields ) . '`';
			$val = "'" . implode ( "','", $vo ) . "'";
			
			$res [$model_name]  .= " ({$val}),";
		}
		foreach ( $list2 as $vo ) {
			if (isset ( $arr1 [$vo ['model_name']] [$vo ['name']] ))
				continue;
			
			//$res2 [$vo ['model_name']] [] = "DELETE a FROM wp_attribute a, wp_model m WHERE a.model_id=m.id and m.`name`='{$vo [model_name]}' and a.`name`='{$vo [name]}';<br/>";
		}
		var_export($res);


		foreach ( $res2 as $name => $voo ) {
			echo '<br/>-- ----------------------------<br/>-- ' . $name . ' DELETE DATA <br/>-- ----------------------------<br/>';
			foreach ( $voo as $vvv ) {
				echo $vvv;
			}
		}
	}
	function adddel($table, $field) {
		$sql = "SELECT * FROM {$this->db1}.`$table`";
		$list1 = M ()->query ( $sql );
		$arr1 = getSubByKey ( $list1, $field );
		// dump ( $arr1 );
		
		$sql = "SELECT * FROM {$this->db2}.`$table`";
		$list2 = M ()->query ( $sql );
		$arr2 = getSubByKey ( $list2, $field );
		// dump ( $arr2 );
		
		$add_arr = array_diff ( $arr1, $arr2 );
		// dump ( $add_arr );
		
		$del_arr = array_diff ( $arr2, $arr1 );
		// dump ( $del_arr );
		
		foreach ( $list1 as $key => $value ) {
			unset ( $value ['id'] );
			if (in_array ( $value [$field], $add_arr )) {
				$fields = array_keys ( $value );
				$fields = '`' . implode ( '`,`', $fields ) . '`';
				$val = "'" . implode ( "','", $value ) . "'";
				echo "INSERT INTO $table ({$fields}) VALUES ({$val});<br/>";
			}
			if (in_array ( $value [$field], $del_arr )) {
				echo "DELETE FROM $table WHERE `{$field}`='{$value [$field]}';<br/>";
			}
		}
	}
	function updateFieldSort() {
		$list = M ( 'model' )->select ();
		foreach ( $list as $vo ) {
			if (empty ( $vo ['field_sort'] ))
				continue;
			
			$field_sort = json_decode ( $vo ['field_sort'], true );
			foreach ( $field_sort as &$f ) {
				foreach ( $f as &$id ) {
					if (! is_numeric ( $id ))
						continue;
					
					$map ['model_id'] = $vo ['id'];
					$map ['id'] = $id;
					$id = M ( 'attribute' )->where ( $map )->getField ( 'name' );
				}
				$f = array_filter ( $f );
			}
			$field_sort = json_encode ( $field_sort );
			
			M ( 'model' )->where ( 'id=' . $vo ['id'] )->setField ( 'field_sort', $field_sort );
		}
	}
}