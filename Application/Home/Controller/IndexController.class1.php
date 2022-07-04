<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
    
    function ccc()
    {
        $this->assign("david","1234565");
        $this->assign("amanda","dsfadsfasdfadsfads");
    }
    
    public function test()
    {
        layout('layout');
        
        $this->ccc();
        
        $this->display();
    }
    
    public function test2()
    {
        layout('layout');

        $this->ccc();    
        
        $this->assign("abc","dfjlasdjflasdkfjadslkfjdaslfjdaslfkdasjfldasjfdas");
        
        $this->display();
    }
  
  
    public function index() {
                    
            $page = I("get.page", 1);

            $m = M();

            /*
            $count = $m->table("data")->count();
            $p = ceil($count / 10);

            $pagestr = "";
            for ($i = 1; $i <= $p; $i++) {
                $pagestr = $pagestr . "<div class='page'><a href=/home/index/xs/bh/" . $bh . "/page/" . $i . ">";
                $pagestr = $pagestr . $i;
                $pagestr = $pagestr . "</a></div>";
            }
            */
            $this->assign("page", $pagestr);

            $data = $m->table("data")->field("*")->where("flag=1")->page($page, 10)->select();

            $this->assign("list", $data);
            $this->display();
    }

    public function ly() {

        $this->display();
    }

    public function search()
    {        
        $s = I("get.keys");
        $this->display();
    }
    
    public function insertly() {
        $m = M();
        $title = I("post.title");
        $realname = I("post.realname");
        $college = I("post.college");
        $email = I("post.email",'',FILTER_VALIDATE_EMAIL);
        $phone = I("post.phone");
        $address = I("post.address");
        $content = I("post.content");
        
        /*
        if(empty($title))
        {
            $this->error("标题不能为空！！！");
        }
        
        if(empty($email))
        {
             $this->error("邮箱格式错误！！！");
        }
        */
        $param = array($title,$realname,$college,$email,$phone,$address,$content);
       
        $m->execute("insert into data(title,realname,college,email,phone,address,content,addtime) values('%s','%s','%s','%s','%s','%s','%s',NOW())",$param );
        $this->success("添加成功！");
    }
    
    public function yzm()
    {
        $Verify =     new \Think\Verify();
        // 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
    }
}
