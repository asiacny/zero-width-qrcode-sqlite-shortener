 <?php
  $sqlitedb = "./urls.sqlite";	//数据库路径
  $domain   = "https://ml.mk";	//运行本程序的域名，不带/
  $id = rand(3364, 195112);		//默认使用58进制，短链接字符为3位数，最大支持58*58*58-3364=191748条记录
  $countset = "1";				//已生成短链接访问次数记录，访问量大请修改为非1字符
  $ip       = $_SERVER['HTTP_CF_CONNECTING_IP'];	//生成短链接时的请求者ip，默认前端使用Cloudflare CDN，单机直连或其它CDN可用$_SERVER['HTTP_CLIENT_IP']、$_SERVER['REMOTE_ADDR']、$_SERVER['HTTP_X_FORWARDED_FOR']、$_SERVER['HTTP_X_REAL_IP']
?> 