<?php

namespace Home\Controller;

use Think\Controller;

class CommentController extends Controller {

    public function index()
    {
        //实例化数据模型
        $m = M("comment");
        $c = $m->count();
        $this->assign("count",$c);
        
        $page = new \Think\Page($c,5);
        $show = $page->show();
        $this->show = $show;//$this->assign("show",$show);
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        $data = $m->field("blog_comment.id as id,username,title,text,blog_comment.time as time,blog_comment.statu as statu")
                ->join("blog_article on blog_article.id = blog_comment.article_id")
                ->join("blog_user on blog_user.id = blog_comment.from_uid")
                ->page($_GET['p'].',2')
                ->select();
        $this->assign("list",$data);
        
        $this->display();
    }
    
    public function addcomment()
    {
        $m = M();
        $article_id = I("get.aid");
        $user_id = $_SESSION['userid'];
        $text = I("get.text");
  
        $param = [$user_id,$article_id,$text,1];
        if(isset($user_id))//用户已登录
        {
            $m->execute("insert into blog_comment(from_uid,article_id,text,statu,time) values(%s,%s,'%s',%s,CURDATE())", $param);
            $this->redirect("/home/index/showblog/id/".$article_id);
        }
        else
        {
            //$this->error("请先登录!",U('/home/login/index'));
            $this->ajaxReturn('2');
        }
    }
    
    public function replyComment()
    {
        $m = M();
        $pid = I("get.pid");//回复哪一条评论
        $article_id = I("get.aid");
        $form_uid = $_SESSION['userid'];//当前用户
        $to_uid = I("get.from_uid");//回复哪个用户
        $text = I("get.text");
        
        $param = [$pid,$form_uid,$to_uid,$article_id,$text,1];
        if(isset($_SESSION['userid']))//用户已登录
        {
            $m->execute("insert into blog_comment(pid,from_uid,to_uid,article_id,text,statu,time) values(%s,%s,%s,%s,'%s',%s,CURDATE())", $param);
            $this->redirect("/home/index/showblog/id/".$article_id);
        }
        else
        {
            $this->error("请先登录!",U('/home/login/index'));
        }
        
    }


    //我发表的评论
    public function commList()
    {
        $m = M();
        $uid = I("get.uid");
        if(isset($_SESSION['userid']))
        {
            $data = $m->table("blog_comment")
            ->field("blog_comment.id as id,article_id as aid,username,title,text")
            ->join("left join blog_article on blog_article.id = blog_comment.article_id")
            ->join("left join blog_user on blog_user.id=blog_article.user_id")
            ->where('from_uid=%s',$uid)
            ->select();
            $userid = $_SESSION['userid'];//判断是否登录，获取用户id
            $this->assign("userid",$userid);
        }
        $this->assign("data",$data);
        $this->display();
    }

    //删除我发表的评论
    public function deleteMyComm()
    {
        $m = M();
        $id = I("get.id");
        $m->table("blog_comment")->where("id=%s",$id)->delete();
        $this->success("删除成功","/home/comment/commList/uid/".$_SESSION['userid']);
        // $this->error("删除失败","/home/comment/commList/uid/".$_SESSION['userid']);

    }
    //ajax修改状态
    public function ajax_statu()
    {
        $m = M("comment");
        if($m->save($_POST))//修改成功返回1  失败返回0
        {
            echo '1';
        }
        else
        {
            echo '0';
        }
    }
  
}
