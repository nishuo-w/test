<?php

namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller {

      //后台首页
    public function index() {
        if (session('?name')) {
            //显示用户名
            $username = $_SESSION['name'];
            $this->assign("username",$username);
            $this->display();
        } else {
            $this->redirect("/home/admin/login");//重定向
        }
        
    }

    //管理员列表
    public function adminlist() {
        $m = M();
        $c = $m->table("blog_admin")->count();
        $this->assign("count",$c);
        $data = $m->query("select blog_admin.id as id,username,password,email,right_name as name from blog_admin left join blog_right on blog_admin.right_id=blog_right.right_id");
        $this->assign("list", $data);

        $this->display();
    }

    //添加、修改管理员信息
    public function admin() {
        $m = M();
        $data = $m->query("select right_id as id,right_name as name from blog_right");
        $this->assign("list", $data);
        $str = "";
        for ($i = 0; $i < count($data); $i++) {
            $str = $str . '<option  value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);

        //获取id修改管理员信息
        $id = I("get.id");
        if (!empty($id)) {
            $list = $m->query("select * from blog_admin where id=%s", $id);
            $this->assign("data", $list);
           
        }
        $this->display();
    }

    public function admindata() {
        $m = M();
        $id = I("get.id");
        $usernmae = I("post.username");
        $password = I("post.password");
        $email = I("post.email");
        $right_id = I("post.role");
        $pwd = md5(md5($password));
        $param1 = [$usernmae, $pwd, $email, $right_id];
        $param2 = [$usernmae, $pwd, $email, $right_id, $id];

        if (empty($id)) {
            $m->execute("insert into blog_admin(username,password,email,right_id) values('%s','%s','%s',%s)", $param1);
            $this->success("添加成功");
        } else {
            $m->execute("update blog_admin set username='%s',password='%s',email='%s',right_id=%s where id=%s", $param2);
            $this->success("修改成功", '/home/admin/adminlist');
        }
    }

    //删除管理员信息
    public function admindelete() {
        $m = M("blog_admin");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }

    public function menulist() {
        $m = M();
        $total = $m->table("blog_type")->count();//计算总数
        $this->assign("count",$total);
        $this->count = $total;
        
        $page = new \Think\Page($total,5);
        $this->show = $page->show();
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        // $data = $m->query("select * from (SELECT *,sort as sort2 FROM cms_category where pid=0 union select c.*,concat(t.sort,c.sort) as sort2 from cms_category as c left join (SELECT * FROM cms_category where pid=0) as t on c.pid=t.id where c.pid>0) as k order by k.sort2");
       // $data = $m->query("select * from blog_type order by id");
        $data = $m->table("blog_type")->order('id')->page($_GET['p'].',5')->select();
        $this->assign("list", $data);
        $this->display();
    }
    
    //添加、获取id修改栏目信息
    public function menu() {//日志所属栏目
        $m = M();
        
        $id = I("get.id");
        if (!empty($id)) {
            $list = $m->query("select * from blog_type where id=%s", $id);
            $this->assign("data", $list);
        }

        $this->display();
        
    }

    public function menudata() {
        $m = M();
        $id = I("get.id");
        $name = I("post.name");

        if (empty($id)) {
            $m->execute("insert into blog_type(name) values ('%s')", $name);
            $this->success("添加成功");
        } else {
            $m->execute("update blog_type set name='%s' where id=%s", $name, $id);
            $this->success("修改成功", '/home/admin/menulist');
        }
    }

    //删除新闻栏目
    public function menudelete() {
        $m = M("type");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }
    
    //添加新闻
    public function news() {
        //新闻类型
        $m = M();
        $data = $m->query("select id,name from blog_type");
        $this->assign("list", $data);
        $str = "";
        for ($i = 0; $i < count($data); $i++) {
            $str = $str . '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';

            //$temp = $m->query("select id,pid,concat('----',name) as name from cms_category where pid=" . $data[$i]['id'] . "");
//            for ($j = 0; $j < count($temp); $j++) {
//                $str = $str . '<option value="' . $temp[$j]['id'] . '">' . $temp[$j]['name'] . '</option>';
//            }
        }
        $this->assign("c", $str);

        $id = I("get.id");
        $list = $m->query("select * from blog_article where id='%s'", $id);
        $this->assign("data", $list);
        $this->display();
    }

    //添加、修改文章信息
    public function newsdata() {
        $m = M();
        $id = I("get.id"); //文章ID
        $cid = I("post.name"); //栏目ID
        $title = I("post.articletitle"); //新闻标题
        $keywords = I("post.keywords"); //关键词
        $abstract = I("post.abstract"); //摘要
        $author = I("post.author"); //文章作者
        $imagepath = I("post.imagepath"); //图片路径
        $content = I("post.content"); //新闻内容

        $param1 = [$cid, $title, $author, $imagepath, $content, $keywords, $abstract];
        $param2 = [$cid, $title, $author, $imagepath, $content, $keywords, $abstract, $id];
        if (empty($id)) {
            $m->execute("insert into news_article(cid,title,author,imagepath,content,keywords,abstract,time) values('%s','%s','%s','%s','%s','%s','%s',CURDATE())", $param1);
            $this->success("添加成功", '/home/admin/newslist');
        } else {
            $m->execute("update news_article set cid=%s, title='%s',author='%s',imagepath='%s',content='%s',keywords='%s',abstract='%s' where id='%s'", $param2);
            $this->success("修改成功", '/home/admin/newslist');
        }
    }

    //新闻文章列表
    public function newslist() {
        $m = M();
        $data = $m->query("select id,name from blog_type ");
        $this->assign("list", $data);
        //   $str = "";

        for ($i = 0; $i < count($data); $i++) {
            $str = $str . '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);

         //计算总数
        $total = $m->table("blog_article")->count();
        $this->count = $total;
        
        $page = new \Think\Page($total,5);
        $this->show = $page->show();
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        
        if ($_POST) {

            $search = I("post.search");

            if ($search == "筛选") {
                $name = I("post.name");
                $data = $m->table("blog_article")
                        ->field("blog_article.id as id,name,type_id,title,username,time")
                        ->join("blog_type on blog_type.id=blog_article.type_id")
                        ->join("blog_user on blog_article.user_id= blog_user.id")
                        ->where("type_id=%s", $name)
                        ->order("time desc")
                        ->page($_GET['p'].',5')
                        ->select();
                $this->assign("list", $data);
            } else if ($search == "搜索文章") {
                $s = I("post.s");
                // $data = $m->query("select name,title,author,time from news_article left join news_type on news_type.id=news_article.cid  where  title like '%" . $search . "%'");
                $data = $m->table("blog_article")
                        ->field("blog_article.id as id,username,name,title,time")
                        ->join("left join blog_user on blog_article.user_id= blog_user.id")
                        ->join("blog_type on blog_type.id=blog_article.type_id")
                        ->where("title like '%" . $s . "%'")
                        ->order("time desc")
                        ->page($_GET['p'].',5')
                        ->select();
                $this->assign("list", $data);
            } else if ($search == "搜索") {
                $t1 = I("post.t1");
                $t2 = I("post.t2");
                //$data = $m->query("select name,title,author,time from news_article left join news_type on news_type.id=news_article.cid where time between '%s' and '%s' ", $t1, $t2);
                $data = $m->table("blog_article")->field("blog_article.id as id,username,name,title,time")
                        ->join("left join blog_user on blog_article.user_id= blog_user.id")
                        ->join("blog_type on blog_type.id=blog_article.type_id")
                        ->where("time between '%s' and '%s' ", $t1, $t2)
                        ->order("time desc")
                        ->page($_GET['p'].',5')
                        ->select();
                $this->assign("list", $data);
            }
        } else {
            //$data = $m->query("select news_article.id as id,name,title,author,time from news_article left join news_type on news_type.id=news_article.cid ");
            $data = $m->table("blog_article")
                    ->field("blog_article.id as id,username,name,title,time")
                    ->join("left join blog_user on blog_article.user_id= blog_user.id")
                    ->join("blog_type on blog_type.id=blog_article.type_id")
                    ->order("id desc,time desc")
                    ->page($_GET['p'].',5')
                    ->select();

            $this->assign("list", $data);
        }        
        
        $this->display();
    }

    //删除新闻文章
    public function newsdelete() {
        $m = M("blog_article");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }

    
    

    //修改新闻栏目
    public function menu2() {
        $m = M();
        $data = $m->query("select * from blog_type");
        $this->assign("list", $data);

        $id = I("get.id");
        $name = I("get.name");
        $m->execute("update blog_type set name='%s' where id=%s", $name, $id);

        $this->display();
    }

    //批量删除栏目
    public function ajax_delAllMenu()
    {
        $str = $_POST[str];
//        $str = I("post.str");
        $m = M();
        $data = $m->table("blog_type")->where('id in (%s)',$str)->delete();
        if($data > 0)
        {
            echo $data;
        }
        else
        {
            echo '0';
        }
    }
    
    //批量删除用户信息
    public function ajax_delAllUser()
    {
        $str = I("post.str");
        $m = M();
        $data = $m->table("blog_admin")->where('id in (%s)',$str)->delete();
        if($data > 0)
        {
            echo $data;
        }
        else
        {
            echo '0';
        }
    }

    public function login() {
        if ($_POST) {
            $m = M();
            $username = I("post.username");
            $password =md5(md5(I("post.password"))) ;
            $yzm = I("post.yzm");
            
            $verify = new \Think\Verify();
            if ($verify->check($yzm)) {
                $m = M("admin");
                $data = $m->where("username='%s' and password='%s'", $username, $password)->select();
                if (count($data) > 0) {
                    session("name", $username);
                    $this->assign("msg", "登录成功");
                    $this->redirect("index");
                } else if (empty($username)) {
                    $this->assign("msg", "账号不能为空!!!");
                } else if (empty($password)) {
                    $this->assign("msg", "密码不能为空!!!");
                } else {
                    $this->assign("msg", "账号或密码错误!!!");
                }
            } else {
                $this->assign("msg", "验证码错误!!!");
            }
            $this->display();
        } else {

            $this->display();
        }
    }

    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    public function yzm() {
        $Verify = new \Think\Verify();
        // 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }
    
   

    public function logout() {
        session(null);
        $this->redirect("/home/admin/login");
    }

    public function welcome()
    {
         $this->assign('phpVersion', phpversion());
        $this->assign('apache', apache_get_version());
        // $ip = $_SERVER["REMOTE_ADDR"];
        $ip = get_client_ip();
        $this->assign("ip",$ip);


       if(isset($_SESSION['name']))
       {
           
           $this->assign ('name',$_SESSION['name']);
       }
        $this->display();
    }
    
      //清除缓存
    public function clears()
    {
        $path = './App/Runtime';//缓存路径
        $this->delDir($path);
        $this->success("清除成功",U("index"));
    }
    
    //删除文件中的函数
    public function delDir($path)
    {
        //遍历目录
        $files = scandir($path);
        foreach ($files as $key => $value) {
            if($value != '.' && $value != '..'){
                $newPath = $path.'/'.$value;
                if(is_dir($newPath)){
                    $this->delDir($newPath);
                }else{
                    unlink($newPath);
                }
            }
        }
        rmdir($path);//removedir
    }
    
}
