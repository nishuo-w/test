<?php

namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller {

    //管理员列表
    public function adminlist() {
        $m = M();
        $data = $m->query("select news_admin.id as id,username,password,email,name from news_admin left join news_right on news_admin.right_id=news_right.id");
        $this->assign("list", $data);

        $this->display();
    }

    //添加、修改管理员信息
    public function admin() {
        $m = M();
        $data = $m->query("select id,name from news_right");
        $this->assign("list", $data);
        $str = "";
        for ($i = 0; $i < count($data); $i++) {
            $str = $str . '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);

        $id = I("get.id");
        if (!empty($id)) {
            $list = $m->query("select * from news_admin where id=%s", $id);
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
        $param1 = [$usernmae, $password, $email, $right_id];
        $param2 = [$usernmae, $password, $email, $right_id, $id];

        if (empty($id)) {
            $m->execute("insert into news_admin(username,password,email,right_id) values('%s','%s','%s',%s)", $param1);
            $this->success("添加成功");
        } else {
            $m->execute("update news_admin set username='%s',password='%s',email='%s',right_id=%s where id=%s", $param2);
            $this->success("修改成功", '/home/admin/adminlist');
        }
    }

    //删除管理员信息
    public function admindelete() {
        $m = M("news_admin");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }

    //后台首页
    public function index() {
        if (session('?admin')) {
            /*
              $page = I("get.page", 1);

              $m = M();

              $count = $m->table("data")->count();
              $p = ceil($count / 10);

              $pagestr = "";
              for ($i = 1; $i <= $p; $i++) {
              $pagestr = $pagestr . "<div class='page'><a href=/home/admin/index/page/" . $i . ">";
              $pagestr = $pagestr . $i;
              $pagestr = $pagestr . "</a></div>";
              }

              $this->assign("page", $pagestr);

              $data = $m->table("data")->field("*")->page($page, 10)->select();

              $this->assign("list", $data);
             * 
             */
            $this->display();
        } else {
            $this->redirect("/home/admin/login");
        }
    }

    public function menu() {
        $m = M();
        $id = I("get.id");
        if (!empty($id)) {
            $list = $m->query("select * from news_type where id=%s", $id);
            echo $id;
            $this->assign("data", $list);
        }
        $this->display();
    }

    public function menudata() {
        $m = M();
        $id = I("get.id");
        $name = I("post.name");

        if (empty($id)) {
            $m->execute("insert into news_type(name) values ('%s')", $name);
            $this->success("添加成功");
        } else {
            $m->execute("update news_type set name='%s' where id=%s", $name, $id);
            $this->success("修改成功", '/home/admin/menulist');
        }
    }

    //添加新闻
    public function news() {
        //新闻类型
        $m = M();
        $data = $m->query("select id,name from news_type");
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
        $list = $m->query("select * from news_article where id='%s'", $id);
        $this->assign("data", $list);
        $this->display();
    }

    //添加、修改文章信息
    public function newsdata() {
        $m = M();
        $id = I("get.id");
        $cid = I("post.name");
        $title = I("post.articletitle");
        $keywords = I("post.keywords");
        $abstract = I("post.abstract");
        $author = I("post.author");
        $imagepath = I("post.imagepath");
        $content = I("post.content");

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
        $data = $m->query("select id,name from news_type ");
        // $this->assign("data", $data);

        $this->assign("list", $data);
        $str = "";
        for ($i = 0; $i < count($data); $i++) {
            $str = $str . '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);

        //分页
        $page = I("get.page");
        $count = $m->table("news_article")->count();
        $p = ceil($count / 10);
        $pagestr = "";
        for ($i = 1; $i <= $p; $i++) {
            $pagestr = $pagestr . '<a href="/home/admin/newslist/page/' . $i . '">';
            $pagestr = $pagestr . $i;
            $pagestr = $pagestr . '</a>';
        }
        $this->assign("page", $pagestr);


        if ($_POST) {
            
            $search = I("post.search");
            
            if ($search == "筛选") {
                $name = I("post.name");
                // $data = $m->query("select name,title,author,time from news_article left join news_type on news_type.id=news_article.cid  where news_article.cid=%s", $name);
                $data = $m->table("news_article")->field("news_article.id as id,cid,name,title,author,time")->join("news_type on news_type.id=news_article.cid")->where("cid=%s", $name)->order("time desc")->page($page, 10)->select();
                $this->assign("list", $data);
            } else if ($search == "搜索文章") {
                $s = I("post.s");
                // $data = $m->query("select name,title,author,time from news_article left join news_type on news_type.id=news_article.cid  where  title like '%" . $search . "%'");
                $data = $m->table("news_article")->field("news_article.id as id,name,title,author,time")->join("news_type on news_type.id=news_article.cid")->where("title like '%" . $s . "%'")->order("time desc")->page($page, 10)->select();
                $this->assign("list", $data);
            } else if ($search == "搜索") {
                $t1 = I("post.t1");
                $t2 = I("post.t2");
                //$data = $m->query("select name,title,author,time from news_article left join news_type on news_type.id=news_article.cid where time between '%s' and '%s' ", $t1, $t2);
                $data = $m->table("news_article")->field("news_article.id as id,name,title,author,time")->join("news_type on news_type.id=news_article.cid")->where("time between '%s' and '%s' ", $t1, $t2)->order("time desc")->page($page, 10)->select();
                $this->assign("list", $data);
            }
        } else {
            //$data = $m->query("select news_article.id as id,name,title,author,time from news_article left join news_type on news_type.id=news_article.cid ");
            $data = $m->table("news_article")->field("news_article.id as id,name,title,author,time")->join("news_type on news_type.id=news_article.cid")->order("time desc")->page($page, 10)->select();

            $this->assign("list", $data);
        }

        $this->display();
    }

    //删除新闻文章
    public function newsdelete() {
        $m = M("news_article");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }

    public function menulist() {
        $m = M();
        $str = "";
        // $data = $m->query("select * from (SELECT *,sort as sort2 FROM cms_category where pid=0 union select c.*,concat(t.sort,c.sort) as sort2 from cms_category as c left join (SELECT * FROM cms_category where pid=0) as t on c.pid=t.id where c.pid>0) as k order by k.sort2");
        $data = $m->query("select * from news_type");
        $this->assign("list", $data);

        $this->display();
    }

    //修改新闻栏目
    public function menu2() {
        $m = M();
        $data = $m->query("select * from news_type");
        $this->assign("list", $data);

        $id = I("get.id");
        $name = I("get.name");
        $m->execute("update news_type set name='%s' where id=%s", $name, $id);

        $this->display();
    }

    //删除新闻栏目
    public function menudelete() {
        $m = M("news_type");
        $id = I("get.id");
        $m->where("id=%s", $id)->delete();
        $this->success("删除成功！");
    }

    public function login() {
        if ($_POST) {
            $m = M();
            $username = I("post.username");
            $password = I("post.password");
            $yzm = I("post.yzm");

            echo $username;
            if (empty($username)) {
                $this->assign("msg", "账号不能为空!!!");
            }

            if (empty($password)) {
                $this->assign("msg", "密码不能为空!!!");
            }

            $verify = new \Think\Verify();

            if ($verify->check($yzm)) {
                $m = M("news_admin");
                $data = $m->where("username='%s'", $username)->select();

                if ($password == $data[0]["password"]) {
                    session("admin", $username);
                    $this->assign("msg", "登录成功");
                    $this->redirect("index");
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

    public function login_check() {
        $m = M();
        $username = I("post.username");
        $password = I("post.password");
        $yzm = I("post.yzm");

        if (empty($username)) {
            $this->error("账号不能为空!");
        }

        if (empty($password)) {
            $this->error("密码不能为空!");
        }

        $verify = new \Think\Verify();
        if ($verify->check($yzm)) {
            $m = M("cms_admin");
            $data = $m->where("name='%s'", $username)->select();

            $password2 = md5(md5($password) . $data[0]["salt"]);

            if ($password2 == $data[0]["password"]) {
                //   session("admin",$username);
                $this->success("登录成功！");
            } else {
                $this->error("账号或密码错误!");
            }
        } else {
            $this->error("验证码错误!");
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

}
