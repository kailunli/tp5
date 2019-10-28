<?php
namespace app\common\controller;

use think\Controller;

class Base extends Controller
{
    protected function initialize()
    {
        parent::initialize();

        $this->assign('resource', [
            'dir' => './static',
            'js'  => './static/js',
            'css' => './static/css',
            'extend' => './static/extend',
            'layui' => './static/extend/layui',
            'layui_js' => './static/extend/layui/layui.js',
            'layui_alljs' => './static/extend/layui/layui.all.js',
            'layui_css' => './static/extend/layui/css/layui.css',
        ]);
    }
}