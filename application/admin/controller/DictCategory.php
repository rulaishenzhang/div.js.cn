<?php
/**
 * Created by PhpStorm.
 * User: lichenchen
 * Date: 2017/11/27
 * Time: 下午10:17
 */

namespace app\admin\controller;


use app\common\controller\AdminBase;

/**
 * 字典分类
 * Class DictCategory
 * @package app\admin\controller
 */
class DictCategory extends AdminBase
{
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 字典分类列表
     */
    public function index()
    {
        return $this->fetch('dict/dict_category_index');
    }

    /**
     * 添加字典分类
     */
    public function add()
    {
        return $this->fetch('add');

    }

    /**
     * 保存字典分类
     */
    public function save()
    {

    }

    /**
     * 更新字典分类
     */
    public function update()
    {

    }

    /**
     * 删除字典分类
     */
    public function delete()
    {

    }

}