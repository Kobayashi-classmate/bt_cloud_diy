<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return response('404 Not Found')->code(404);
    }

    public function download()
    {
        if(config_get('download_page') == '0' && !request()->islogin){
            return response('404 Not Found')->code(404);
        }
        View::assign('siteurl', request()->root(true));
        return view();
    }

    public function btcode()
    {
        if(config_get('btcode_page') == '0' && !request()->islogin){
            return response('404 Not Found')->code(404);
        }
        View::assign('siteurl', request()->root(true));
        return view();
    }

    
}
