<?php 
namespace phpcomposer; //不在同一级目录要建立命名空间

class Json
{
	public static function encode($data)
	{
		return json_encode($data);
	}
	public static function decode($jsondata)
	{
		/**
		 * json_decode第二个参数指返回的数据类型，
		 * 默认false返回对象
		 * true则返回数组
		 */
		return json_decode($jsondata,true);
	}
}