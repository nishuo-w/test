<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="编程,PHP,内容,管理">
		<meta name="description" content="PHP内容管理系统">
		<title>编程 栏目 - 内容管理系统</title>
		<link rel="stylesheet" href="/public/css/style.css">
		<script src="/public/js/jquery.min.js"></script>
		<script src="/public/js/common.js"></script>
	</head>
	<body>
		<!--页面顶部-->
		<div class="top">
			<div class="top-container">
				<div class="top-logo">
					<a href="./"><img src="/public/image/logo.png" alt="内容管理系统"></a>
				</div>
				<div class="top-nav">
					<a href="./" class="">首页</a>
					<a href="list.php?cid=1" class="">生活</a>	
					<a href="list.php?cid=2" class="">资讯</a>	
					<a href="list.php?cid=3" class="curr">编程</a>	
					<a href="list.php?cid=4" class="">互联网</a>	
					<a href="about.php" class="">联系我们</a>
				</div>
				<div class="top-toggle jq-toggle-btn"><i></i><i></i><i></i></div>
			</div>
		</div>
		<!--页面内容-->
		<div class="main">
			<!-- 幻灯片模块 -->
			<!-- 文章列表模块 -->
			<div class="main-body">
				<div class="main-wrap">
					<div class="main-left">
						<div class="al">
							<div class="al-title"><h1>编程</h1></div>
							<div class="al-each">
								<div class="al-info"><a href="show.php?id=6">PHP学科：MySQL手册免费分享</a></div>
								<div class="al-desc"></div>
								<div class="al-more">
									<span>作者：博学谷 | 发表于：2016-05-31 14:50:07</span>
									<a href="show.php?id=6">查看原文</a>
								</div>
							</div>
							<div class="al-each">
								<div class="al-info"><a href="show.php?id=5">前端必学框架Bootstrap，3天带你从入门到精通，免费分享！</a></div>
								<div class="al-desc"></div>
								<div class="al-more">
									<span>作者：博学谷 | 发表于：2016-05-31 14:50:07</span>
									<a href="show.php?id=5">查看原文</a>
								</div>
							</div>
							<div class="al-each">
								<div class="al-info"><a href="show.php?id=4">想少走弯路，就看看这个贴：PHPer职业发展规划与技能需求！</a></div>
								<div class="al-desc"></div>
								<div class="al-more">
									<span>作者：博学谷 | 发表于：2016-05-31 14:50:07</span>
									<a href="show.php?id=4">查看原文</a>
								</div>
							</div>
							<div class="al-each">
								<div class="al-info"><a href="show.php?id=3">PHP进阶：要想提高PHP的编程效率，你必须知道的49个要点</a></div>
								<div class="al-desc"></div>
								<div class="al-more">
									<span>作者：博学谷 | 发表于：2016-05-31 14:50:07</span>
									<a href="show.php?id=3">查看原文</a>
								</div>
							</div>
							<div class="al-each">
								<div class="al-info"><a href="show.php?id=2">最涨薪PHP项目—PHP微信公众平台开发</a></div>
								<div class="al-desc">在“智能手机”时代，没有人不识微信！</div>
								<div class="al-img"><a href="show.php?id=2"><img src="<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
								<div class="al-more">
									<span>作者：博学谷 | 发表于：2016-05-31 14:50:07</span>
									<a href="show.php?id=2">查看原文</a>
								</div>
							</div>
							<div class="pagelist"><span>首页</span><span>上一页</span><a href="?cid=3&page=1" class="curr">1</a><a href="?cid=3&page=2">2</a><a href="?cid=3&page=2">下一页</a><a href="?cid=3&page=2">尾页</a></div>	
						</div>							</div>
					<div class="main-right">
						<div class="si">
							<!-- 栏目列表 -->
							<div class="si-each">
								<div class="si-title">内容栏目</div>
								<div class="si-p1">
									<a href="list.php?cid=6" title="PHP">PHP</a>
									<a href="list.php?cid=7" title="Java">Java</a>
									<a href="list.php?cid=8" title="Android">Android</a>
								</div>
							</div>
							<!-- 浏览历史 -->
							<div class="si-each">
								<div class="si-title">浏览历史</div>
								<div class="si-p2">
									<p><a href="show.php?id=6">PHP学科：MySQL手册免费分享</a></p>
									<p><a href="show.php?id=5">前端必学框架Bootstrap，3天带你从入门到精通，免费分享！</a></p>
									<p><a href="show.php?id=3">PHP进阶：要想提高PHP的编程效率，你必须知道的49个要点</a></p>
									<p><a href="show.php?id=1">这是第一篇文章</a></p>
									<p><a href="show.php?id=4">想少走弯路，就看看这个贴：PHPer职业发展规划与技能需求！</a></p>
									<p><a href="show.php?id=2">最涨薪PHP项目—PHP微信公众平台开发</a></p>
								</div>
							</div>
							<!-- 最热文章 -->
							<div class="si-each">
								<div class="si-title"><span class="si-p3-top">TOP 10</span> 热门文章</div>
								<div class="si-p3">
									<p><a href="show.php?id=6">PHP学科：MySQL手册免费分享</a></p>
									<p><a href="show.php?id=1">这是第一篇文章</a></p>
									<p><a href="show.php?id=4">想少走弯路，就看看这个贴：PHPer职业发展规划与技能需求！</a></p>
									<p><a href="show.php?id=5">前端必学框架Bootstrap，3天带你从入门到精通，免费分享！</a></p>
									<p><a href="show.php?id=3">PHP进阶：要想提高PHP的编程效率，你必须知道的49个要点</a></p>
									<p><a href="show.php?id=2">最涨薪PHP项目—PHP微信公众平台开发</a></p>
								</div>
							</div>
						</div>			</div>
				</div>
			</div>
		</div>
		<!--页面尾部-->
		<div class="footer">PHP内容管理系统　本系统仅供参考和学习</div>
	</body>
</html>