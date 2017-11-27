<?php
/**
 * Created by PhpStorm.
 * User: lichenchen
 * Date: 2017/11/27
 * Time: 下午10:12
 */

namespace app\admin\controller;


use app\common\controller\AdminBase;

/**
 * 字典管理
 * Class Dict
 * @package app\admin\controller
 */
class Dict extends AdminBase
{
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 字典列表
     */
    public function index()
    {
        return $this->fetch('index');
    }

    /**
     * 添加字典
     */
    public function add()
    {
        return $this->fetch('add');

    }

    /**
     * 保存字典
     */
    public function save()
    {

    }

    /**
     * 更新字典
     */
    public function update()
    {

    }

    /**
     * 删除字典
     */
    public function delete()
    {

    }


}