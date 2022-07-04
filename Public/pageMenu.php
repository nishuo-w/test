<div class="container d-flex justify-content-between main">
  <div class="left-content col-md-3 col-sm-3">
    <div class="user-achievement">
        <h3 style="display: flex;">
            <div style="width: 50px;height:50px;">
                <img  src="{$user[0]['pic']}" width="100%" height="100%" style="border-radius: 50%;"/>
            </div>&nbsp;&nbsp;&nbsp;
            <a href="/home/User/editInfo/{$userid}">{$user[0]['username']}</a>
        </h3>
        
        <p class="addblog btn-info btn-lg  text-center "><a href="/home/index/addblog" style="color:#fff;">写文章</a></p>
    </div>
    
    <div class="list-group text-center" id="page_menu">
        <a href="/home/index/mypage/uid/{$userid}" class="list-group-item  "  > 主 页 </a>
        <a href="/home/index/mypage/uid/{$userid}" class="list-group-item  " >日志管理</a>
        <a href="/home/comment/commList/uid/{$userid}" class="list-group-item " >评论管理</a>
        <a href="/home/User/editInfo/" class="list-group-item  " >个人资料</a>
        <a href="/home/User/myCollect/uid/{$userid}" class="list-group-item  " >收藏夹</a>
        <a href="/home/User/followMe" class="list-group-item  " >关注我的|我关注的</a>
        <a href="/home/User/editUserPass" class="list-group-item  " >修改密码</a>
    </div>
  </div>
    
   