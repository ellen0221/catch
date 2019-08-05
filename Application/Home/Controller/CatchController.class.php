<?php
namespace Home\Controller;

use Think\Controller;

class CatchController extends Controller
{
    public function index()
    {
        $this->display('Catch:index');
    }

    public function test()
    {
        echo "test!";
    }

    public function getInfo() {
        $url = I('');
    }
}