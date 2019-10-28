<?php
namespace app\index\controller;

use app\common\controller\Base;
use app\index\service\ClassicService;
use think\Request;

class Index extends Base
{
    public function index(Request $req)
    {
        if ($req->isAjax()) {
            $pageNum = $req->param('pageNum', 1, 'int');
            $pageSize = $req->param('pageSize', 20, 'int');
            $cserv = new ClassicService();
            $result = $cserv->getClassicList($pageNum, $pageSize);

            return json(['code'=>0, 'msg'=>'', 'result'=>$result]);
        } else {
            return view('index');
        }
    }

}
