<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    protected $_validate = array(
        //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('verify','require','验证码必须！'), //默认情况下用正则进行验证
        array('username','require','帐号名称已经存在！',1,'unique',1), // 在新增的时候验证name字段是否唯一
        array('username','4,12','名字在4-12位之间！',1,'length',1), // 在新增的时候验证name字段是否唯一
        array('password','require','密码必须存在'),
        array('repassword','password','密码不一致',1,'confirm',1), // 验证确认密码是否和密码一致
        array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
   );
    
    function check_verify(){
        $verify = new \Think\Verify();
        $id=''; 
        return $verify->check($_POST['code'], $id);
    }
}





?>