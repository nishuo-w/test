<?php

namespace Home\Controller;
use Think\Controller;
header("content-type:text/html; charset=utf-8"); ## 就加多这一句即可

class IndexController extends Controller{

    public function header(){
      $this->display();
    }
    
    
    
    
    public function index() {
        $m = M();//实例化数据模型
        $total = $m->table("blog_article")->count();//计算数据个数
        $page = new \Think\Page($total,10);//实例化,每页显示10个数据
        $show = $page->show();
        $this->show = $show;//$this->assign("show",$show);
        
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        $data = $m->table("blog_article")
                ->field("blog_article.id as id, title,name,content,views,username,likes,comments,collects ")
                ->join("left join blog_type on blog_type.id=blog_article.type_id")//默认inner join
                ->join("left join blog_user on blog_article.user_id= blog_user.id")
                ->order("blog_article.id desc,time desc")
                ->page($_GET['p'].',10')//或替换成 ：->limit($page->firstRow.','.$page->listRows)
                ->select();
        
        $this->assign("data",$data);
        $this->assign("userid",$_SESSION['userid']);
        $this->assign("username",$_SESSION['admin']);
        
        //显示用户头像
        if(isset($_SESSION['userid'])){
            $pic = $m->table("blog_user")->field("pic")->where("id=%s",$_SESSION['userid'])->select();
             $this->assign("picPath",$pic);
        }

        //显示热门文章
        $hot = $m->table("blog_article")->field("id,title")->order("likes desc,comments desc")->limit(10)->select();
        $this->assign("hot",$hot);
  


        $this->display();

        
    }


    public function ajax_add()
    {
        if (isset($_SESSION['admin']))
        {
            $this->ajaxReturn('1');
        }
        else
        {
            $this->ajaxReturn('0');
        }
        
    }
    
    public function addblog()
    {
        $m = M();
        $data = $m->query("select id,name from blog_type");//显示所有标签
        $this->assign("list", $data);
        $str = "";
        for ($i = 0; $i < count($data); $i++) 
        {
            $str = $str . '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);
        $this->display();
    }

    public function test()
    {
        $this->display();
    }
    //图片上传
    public function upload()
    {
         //图片上传

         $upload = new \Think\Upload();// 实例化上传类
$upload->maxSize   =     3145728 ;// 设置附件上传大小
$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
$upload->rootPath  =      './Upload/'; // 设置附件上传根目录
$upload->savePath  =      ''; // 设置附件上传（子）目录
// 上传文件 
$info   =   $upload->upload();
if(!$info) {// 上传错误提示错误信息
    $this->error($upload->getError());
}else{// 上传成功 获取上传文件信息
    foreach($info as $file){
        echo $file['savepath'].$file['savename'];
    }
}
//          header("Content-type:text/html;charset=utf-8");
//         $upload = new \Think\Upload();// 实例化上传类
//         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//         $upload->rootPath  =     './upload/'; // 设置附件上传根目录
        
//         $info   =   $upload->uploadOne($_FILES['pic']);
       
//         echo $info['savepath'];
//         if($info) 
//         {
//             $result =[
//                 'success' => 1,
//                 'message' => '上传成功',
//                 'url' => '/upload/'.$info['savepath'].$info['savename'], 
//             ];
//         }else {
//             $result =[
//                 'success' => 0,
//                 'message' => '上传失败',
//                 'url' => '/upload/'.$info['savepath'].$info['savename'], 
//             ];
//         }

//         return $this->ajaxReturn($result).$info['savepath'];
        
    }

     //添加/编辑日志
    public function addblogdata()
    {
        $m = M();
        $id = I("get.id");
        $username = $_SESSION['admin'];
        $data = $m->table("blog_user")->where("username='%s'",$username)->select();//获取用户id
        $userid = $data[0]['id'];       
        $title = I("post.title");
        $cid = I("post.name");
        $content = I("post.content");
        $keywords = I("post.keywords");


        
      
        // $img = '/upload/'.$info['savepath'].$info['savename'];

        // $m->table('blog_article_img')->add();


        
       if(empty($id))//添加日志
       {    
            $param1 = [$userid,$cid,$title,$content,$keywords];
            $m->execute("insert into blog_article(user_id,type_id,title,content,keywords,time) values('%s','%s','%s','%s','%s',CURDATE())", $param1);
            $this->success("发布成功","/home/index");
       }else{//修改日志
           //$param2 = [$userid,$cid,$title,$content,$keywords];
            $data['type_id'] = $cid;
            $data['title'] = $title;
            $data['content'] = $content;
            $data['keywords'] = $keywords;
//            $data['time'] = CURDATE();
            $m->table("blog_article")->where('id=%s',$id)->save($data); // 根据条件更新记录
            $this->success("修改成功！",'/home/index/showblog/id/'.$id);
       }
    }
    
    //编辑日志页面
    public function editBlog()
    {
        $m = M();
        $id = I("get.id");
        $data = $m->table("blog_article")
                ->field("id,title,content,keywords,time")
                ->where("id=%s",$id)
                ->select();
        $this->assign("data",$data);
        
        
        $list = $m->query("select id,name from blog_type");//显示所有标签
        $this->assign("list", $list);
        $str = "";
        for ($i = 0; $i < count($list); $i++) 
        {
            $str = $str . '<option value="' . $list[$i]['id'] . '">' . $list[$i]['name'] . '</option>';
        }
        $this->assign("c", $str);
        
        
        $this->display();
    }

    //删除自己发表的日志
    public function deleteBlog()
    {
        $m = M('article');
        $id = I("get.id");
        $m->where('id=%s',$id)->delete();
        $this->success("删除成功",'/home/index/mypage/uid/'.$_SESSION['userid']);
        
    }
    
    
    public function showblog()
    {
        
        $m = M();
        $id = I("get.id");//获取文章id
   
        $data = $m->table("blog_article")
                ->field("blog_article.id as id, user_id,title,name,content,views,username,likes,comments,collects,time ")
                ->join("left join blog_type on blog_type.id=blog_article.type_id")//默认inner join
                ->join("left join blog_user on blog_article.user_id= blog_user.id")
                ->where( "blog_article.id=%s",$id)
                ->select();

        $this->assign("data",$data);
        $this->assign("aid",$id);
        
        $m->table("blog_article")->where('id=%s', $id)->setInc('views', 1); // 文章阅读数加1
        
        //显示用户头像
        if(isset($_SESSION['userid']))
        {
            $picPath = $m->table("blog_user")->field("pic")->where("id=%s",$_SESSION['userid'])->select();
            $this->assign("picPath",$picPath);
        }
        
        //显示用户评论
        $comment = $m->table("blog_comment")
                ->field("blog_comment.id as id,from_uid,article_id as aid,username,text")
                ->where("blog_comment.statu=%s and article_id=%s and pid=0",1,$id)
                ->join("blog_article on blog_article.id = blog_comment.article_id")
                ->join("blog_user on blog_user.id = blog_comment.from_uid")
                ->select();
        $this->assign("comm",$comment);
        
        $pid = I("get.pid");
        
        $reply = $m->table("blog_comment")
                ->field("blog_comment.id as id,from_uid,article_id as aid,username,text")
                ->where("blog_comment.statu=%s and article_id=%s and  pid <> 0",array(1,$id))
                ->join("blog_article on blog_article.id = blog_comment.article_id")
                ->join("blog_user on blog_user.id = blog_comment.from_uid")
                ->select();
        $this->assign("reply",$reply);
        
       // dump($comment); 
        //显示回复评论内容
//        $this->assign("replyName",$_SESSION['admin']);
//        $reply = $m->table("blog_reply")
//                ->field("blog_reply.id as id,blog_reply.pid as pid,blog_reply.article_id as aid,username,blog_reply.text as text")
//                ->where("blog_comment.statu=%s and blog_reply.article_id=%s",1,$id)
//                ->join("blog_comment on blog_comment.id=blog_reply.pid")
//                ->join("blog_article on blog_article.id = blog_reply.article_id")
//                ->join("blog_user on blog_user.id = blog_reply.from_uid")
//                ->select();
//        $this->assign("reply",$reply);
        
        
        //以下代码应写在Comment控制器中
        /*显示评论数*/
        $count =$m->table("blog_comment")->where("article_id=%s",$id)->count() ;
        $this->assign("count",$count);
        
         //上一篇
        $pre = $m->table("blog_article")->field("*")->where('id<' . $id . '')->order("id desc")->limit(0, 1)->select();
        $this->assign("pre", $pre);

        //下一篇
        $next = $m->table("blog_article")->field("*")->where('id>' . $id . '')->order("id asc")->limit(0, 1)->select();
        $this->assign("next", $next);


        $this->display();
    }
    
    //点赞和取消点赞
    public function praise()
    {
        $m = M();
        //用户收藏
        $id = I("get.id");
        $uid = $_SESSION['userid'];
     
        if(isset($uid))//用户已登录
        {
            if(!isset($_SESSION['praise'][$id]))//未被点赞
            {
                $m->table("blog_article")->where('id=%s', $id)->setInc('likes', 1); // 点赞人数加1
               // 更改当前id状态
                $_SESSION['praise'][$id]=true;//改为已点赞  非0数都可以
            }else{
                
                $m->table("blog_article")->where('id=%s', $id)->setDec('likes', 1); // 点赞人数减1
                $_SESSION['praise'][$id]=null;
            }
            $this->redirect('/home/index/showblog/id/'.$id);
        }else{
            $this->error("必须是登录用户才能点赞！","/home/login/index");//跳转到登录页
        }
     
        //只能点赞一次
//        if(isset($uid))//用户已登录
//        {
//            //判断是否被点赞过
//           if(!isset($_SESSION['praise'][$id]))//当前文章未被点赞过
//           { 
//               $m->table("blog_article")->where('id=%s', $id)->setInc('likes', 1); // 点赞人数加1
//               //更改当前id状态
//               $_SESSION['praise'][$id]=true;//改为已点赞  非0数都可以
//           }else
//           {
//               //只能点赞一次，不能重复点赞
//               $this->error("不能重复点赞",'/home/index/showblog/id/'.$id);
//           }
//            $this->redirect('/home/index/showblog/id/'.$id);
//        }else{
//            $this->error("必须是登录用户才能点赞！","/home/login/index");//跳转到登录页
//        }
    }
    
    //收藏日志
    public function collect()
    {
        $m = M();
        //用户收藏
        $id = I("get.id");
        $uid = $_SESSION['userid'];
     
        if(isset($uid))//用户已登录
        {
            $data2=$m->table("blog_collect")->where("aid=%s and uid=%s and sign=%s",$id,$uid,1)->select();
            if($data2 == null)
            {
                $data['aid'] = $id;
                $data['uid'] = $uid;
                $data['sign'] = 1;
                $m->table('blog_collect')->add($data);
                $m->table("blog_article")->where('id=%s', $id)->setInc('collects', 1); // 收藏人数加1
            }else{
//                $data['sign'] = 0;
//                $m->table("blog_collect")->where('aid=%s and uid=%s',$id,$uid)->save($data); // 根据条件更新记录
                $m->table("blog_collect")->where("aid=%s and uid=%s",$id,$uid)->delete();
                $this->assign("coll","取消成功");
                $m->table("blog_article")->where('id=%s', $id)->setDec('collects', 1); // 收藏人数减1
            }
            $this->redirect('/home/index/showblog/id/'.$id);
        }else{
            $this->error("必须是登录用户才能收藏！","/home/login/index");//跳转到登录页
        }
    }
   
    

    //输入关键字搜索
    public function search()
    {
        $m = M();
        $keywords = I("get.find");
        $total = $m->table("blog_article")->where("title like '%".$keywords."%' or content like '%".$keywords."%'")->count();//计算数据个数
        $page = new \Think\Page($total,2);//实例化,每页显示10个数据
        $show = $page->show();
        $this->show = $show;//$this->assign("show",$show);
        
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        $data = $m->table("blog_article")
                ->field("blog_article.id as id, title,name,content,views,username,likes,comments,collects ")
                ->join("left join blog_type on blog_type.id=blog_article.type_id")//默认inner join
                ->join("left join blog_user on blog_article.user_id= blog_user.id")
                ->where("title like '%".$keywords."%' or content like '%".$keywords."%'")
                ->order("blog_article.id desc,time desc")
                ->page($_GET['p'].',2')//或替换成 ：->limit($page->firstRow.','.$page->listRows)
                ->select();

        $this->assign("data",$data);
        $this->display("index");
    }


    public function pageMenu()
    {
        if(isset($_SESSION['admin']))
            $this->assign ('userid',$_SESSION['admin']);    
        
    }

    //我的主页
   
    public function mypage()
    {
       
        $m = M();
        $userid = $_SESSION['userid'];//判断是否登录，获取用户id
        $this->assign("userid",$userid);
        $this->assign("username",$_SESSION['admin']);
        if(isset($_SESSION['userid']))
        {
          //显示用户头像
          $pic = $m->table("blog_user")->field("pic")->where("id=%s",$_SESSION['userid'])->select();
           $this->assign("picPath",$pic);

            $data = $m->table("blog_article")
                ->field("blog_article.id as id, title,name,content,views,username,likes,comments,collects ")
                ->join("left join blog_type on blog_type.id=blog_article.type_id")//默认inner join
                ->join("left join blog_user on blog_article.user_id= blog_user.id")
                ->where("user_id=%s",$userid)
                ->order("time desc")
                ->select();
            $this->assign("data",$data);
            $this->assign("username",$_SESSION['admin']);

            $user = $m->table("blog_user")->where('id=%s',$_SESSION['userid'])->select();
            $this->assign("user",$user);
        }else
        {
            $this->error("请先登录！","/home/login/index");
        }

        $this->display();
    }
    
   
    
  
}





