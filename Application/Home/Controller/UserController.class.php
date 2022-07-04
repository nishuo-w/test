<?php
namespace Home\Controller;
use Think\Controller;
use \Controller\SendMail;
use DateTime;
use Home\Model\UserModel;

class UserController extends Controller
{
    
    //用户登录
    public function login()
    {
        if ($_POST) 
        {
            $m = M();
            $username = I("post.username");
            $password = I("post.password");
            $yzm = I("post.yzm");
            $password2 = md5(md5($password));//将获取到的密码进行二次加密  同数据库中的密文进行匹配
            //$password2 = md5(md5($password) . $data[0]["salt"]);
            $data = $m->table("blog_user")->where("username='%s' and password='%s'", $username, $password2)->select();
            
            $verify = new \Think\Verify();
            if ($verify->check($yzm)) 
            {
                if ($password2 == $data[0]["password"]) {
                   session("admin", $username);//获取用户名
                   session("userid",$data[0]['id']);//获取用户id
                   $this->assign("msg", "登录成功");
                   $this->redirect("index/index");//重定向
               } else if (empty($username)) {
                   $this->assign("msg", "账号不能为空!!!");
               } else if (empty($password)) {
                   $this->assign("msg", "密码不能为空!!!");
               } else {
                   $this->assign("msg", "账号或密码错误!!!");
               }
            } else{
                $this->assign("msg", "验证码错误!!!");            
            }
        }
         $this->display();
    }
    //验证码校验
    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
    
    public function yzm() {
        $Verify = new \Think\Verify();
        // 设置验证码字符为纯数字
        $Verify->codeSet = 'adsdsfd232423';
        // 开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
        $Verify->useImgBg = false; 
        $Verify->entry();
    }


    //用户注册
    public function register()
    {   
        $this->display();
    }
    
    public function registerdata()
    {
        $m = M("user");
        if($_POST)
        { 
            $upload = new \Think\Upload();// 实例化上传类
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './upload/'; // 设置附件上传根目录
            $info   =   $upload->uploadOne($_FILES['pic']);   
            $password = I("post.password");
            $username = I("post.username");
            $phone = I("post.phone");
            $email = I("post.email");
            $password2 = md5(md5($password));//将密码进行2次MD5加密
            // $password2 = md5(md5($password)) . $data[0]["salt"];
            $pic = $upload->rootPath.$info['savepath'].$info['savename'];
            $param = [$username,$password2,$phone,$email,$pic];
         
            $m->execute("insert into blog_user(username,password,phone,email,pic,addtime) values('%s','%s','%s','%s','%s',CURDATE())", $param);
            $this->success("注册成功", '/home/login/index');//跳转到登录页
            
        }
    }

    //修改个人资料
   public function editInfo()
   {
       
       $m = M();
       if(isset($_SESSION['userid']))
       {
           $data = $m->table("blog_user")
                    ->where('id=%s',$_SESSION['userid'])
                    ->select();
            $this->assign("data",$data);
            $userid = $_SESSION['userid'];//判断是否登录，获取用户id
            $this->assign("userid",$userid);
       }
       
       $this->display();
   }

   public function editData()
   {
        $m = M('user');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './upload/'; // 设置附件上传根目录
        $info   =   $upload->uploadOne($_FILES['pic']);
        
        $username = I("post.username");
        $phone = I("post.phone");
        $email = I("post.email");
        $pic = '/upload/'.$info['savepath'].$info['savename'];
        
        $edit['username'] = $username;
        $edit['phone'] = $phone;
        $edit['email'] = $email;
        $edit['pic'] = $pic;

        $m->where('id=%s',$_SESSION['userid'])->save($edit);
        $this->success("修改成功！",'/home/index/mypage/uid/'.$_SESSION['userid']);

   }
   
   //我的收藏
    public function myCollect()
    {
        $m = M();
        $userid = $_SESSION['userid'];
        $this->assign("userid",$userid);
        $data = $m->table("blog_article")
                ->field("blog_article.id as id, title,name,content,views,username,likes,comments,collects ")
                ->join("left join blog_collect on blog_collect.aid=blog_article.id")
                ->join("left join blog_type on blog_article.type_id = blog_type.id ")
                ->join("left join blog_user on blog_article.user_id= blog_user.id ")
                ->where("blog_collect.uid=%s",$userid)
                ->select();
        
        $this->assign("data",$data);
        $this->display();
    }
    
    
     //修改用户密码
    public function editUserPass()
    {
        if($_POST)
        {
            $m = M();
            $userid = $_SESSION['userid'];
            $oldPass = I("post.oldPass");
            $newPass = md5(md5(I("post.newPass")));//将新密码进行2次MD5
            
            $password2 = md5(md5($oldPass));
            $data = $m->table("blog_user")->where("id=%s", $userid)->select();

            // $password2 = md5(md5($password)) . $data[0]["salt"];

            if($data[0]['password'] != $password2){
            
                $this->assign('tips', '原密码不正确');
            }else{

                $m->execute("update blog_user set password='%s' where id=%s",$newPass,$userid);
                // session(null);
                $this->assign('tips', '修改成功！');
                $this->success('修改密码成功','/home/index');
                
            }
        }
        
        
        $this->display();

   }


   public function add()
   {
        $this->display();
   }
   //邮箱发送验证
   public function addData()
   {   
        Vendor('PHPMailer.PHPMailerAutoload');     
        $mail = new \PHPMailer(true);                              // Passing `true` enables exceptions
        $toEmail = I('post.mail');
        $title = '学习心得分享平台';
        $content = '欢迎你';
        try {
            //服务器配置
            $mail->CharSet ="UTF-8";                     //设定邮件编码
            $mail->SMTPDebug = 0;                        // 调试模式输出
            $mail->isSMTP();                             // 使用SMTP
            $mail->Host = 'smtp.88.com';                // SMTP服务器
            $mail->SMTPAuth = true;                      // 允许 SMTP 认证
            $mail->Username = 't10086@88.com';                // SMTP 用户名  即邮箱的用户名
            $mail->Password = 'eAP9mNBxtCafwn22';             // SMTP 密码  部分邮箱是授权码(例如163邮箱)
            $mail->SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
            $mail->Port = 465;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持

            $mail->setFrom('t10086@88.com', 'Mailer');  //发件人
            $mail->addAddress($toEmail, 'Joe');  // 收件人
            //$mail->addAddress('ellen@example.com');  // 可添加多个收件人
            $mail->addReplyTo('xxxx@163.com', 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致
            //$mail->addCC('cc@example.com');                    //抄送
            //$mail->addBCC('bcc@example.com');                    //密送

            //发送附件
            // $mail->addAttachment('../xy.zip');         // 添加附件
            // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 发送附件并且重命名

            //Content
            $mail->isHTML(true);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
            $mail->Subject =$title . time();
            $mail->Body    = '<h1>'.$content.'</h1>' . date('Y-m-d H:i:s');
            $mail->AltBody = '如果邮件客户端不支持HTML则显示此内容';

        $mail->send();
            echo '邮件发送成功';
        } catch (\think\Exception $e) {
            echo '邮件发送失败: ', $mail->ErrorInfo;
        }



    }

    //关注好友
    public function follow()
    {
        if(!$_SESSION['userid']){
            return $this->ajaxReturn('2');
        }
        if($_POST)
        {   
            $m = M('follow');
            $uid = $_SESSION['userid'];//获取当前登录用户的id
            $fid = I('get.fid');//获取要关注的用户id

            $user = $m->where('user_id=%s and follow_id=%s',$uid,$fid)->select();
            if($user)//已关注，进行取消关注
            {
                $m->delete($user[0]['id']);
                $this->ajaxReturn('0') ;
            }else {//关注作者
                $data['user_id'] = $uid;
                $data['follow_id'] = $fid;
                $data['time'] = date('Y-m-d ',time()) ;
                if($m->add($data))
                {
                    $this->ajaxReturn('1');
                }else{
                    $this->ajaxReturn('0');
                }
            }
            

            
            $this->ajaxReturn('0');

        }
        
    }

    //我关注的
    public function followMe()
    {
        $m = M();
        $uid = $_SESSION['userid'];
        $list = $m->table('blog_follow')
                    ->field('blog_follow.id as id,follow_id as fid,username')
                    ->join('left join blog_user on blog_user.id=blog_follow.follow_id')
                    ->where('user_id=%s', $uid)
                    ->select();
        $this->assign('list', $list);
        $this->display();
    }


}