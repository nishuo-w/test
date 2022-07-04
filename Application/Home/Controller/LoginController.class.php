<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {


    //修改admin后台密码
    public function editPass()
   {
        $m = M();
        $username = $_SESSION['name'];
        $password = I("post.password");
        $newPass = md5(md5(I("post.newPass")));//将新密码进行2次MD5
        
        $password2 = md5(md5($password));
        //$data = $m->table("blog_admin")->field("password")->where("username='%s'",$username)->select();
        $data = $m->table("blog_admin")->where("username='%s'", $username)->select();

       // $password2 = md5(md5($password)) . $data[0]["salt"];
        if($data[0]['password'] == $password2){
            $m->execute("update blog_admin set password='%s' where username='%s'",$newPass,$username);
            $this->success("修改成功",U('admin/login'));
        }else{
            echo '原密码不正确';
        }
   }

    protected $_auto = array ( 
         array('status','0'),  // 新增的时候把status字段设置为1
         //array('password','md5',1,'function') , // 对password字段在新增和编辑的时候使md5函数处理
        // array('username','getName',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
         array('time','time',1,'function'), // 对time字段在更新的时候写入当前时间戳
     );
    
    //退出登录
    public function logout() 
    {
        session(null);
        $this->redirect("/home/index/index");
    }
    
    
    //用户登录提示
    public function allow()
    {
        $this->error("请登录",U('/home/login/index'));
        $this->display();
    }
  
}
