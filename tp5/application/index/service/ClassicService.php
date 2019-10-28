<?php
namespace app\index\service;

use think\Db;

class ClassicService
{
    protected $table = 'lkl_classic';
    protected $name = 'classic';
    protected $alias = 'classic c';

    public function __construct()
    {
    }

    public function getClassicList($pageNum=1, $pageSize=20)
    {
        if ($pageNum <=0) { $pageNum = 1; }
        if ($pageSize <= 0) { $pageSize = 20; }

        $total = Db::name($this->alias)->count();
        $list = [];
        if ($total > 0) {
            $list = Db::name($this->alias)->page($pageNum, $pageSize)->select();
        }

        return [
            'list' => $list,
            'pageInfo' => [
                'pageNum' => $pageNum,
                'pageSize' => $pageSize,
                'total' => $total,
                'totalPage' => ceil( $total / $pageSize )
            ]
        ];
    }
}