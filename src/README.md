该文件夹包含了oauth2服务端程序与登录注册逻辑<br/>
<br/>    
运行步骤：<br/>
1.在mysql中运行下列sql文件中的内容：<br/>
<br/>
oauth_db.sql：<br/>
oauth2必要的数据库文件<br/>
<br/>
user_db.sql：<br/>
登录注册必要的数据库文件<br/>
<br/>
2.配置数据库<br/>
<br/>
/tp-oauth2-login/App/Common/Conf/db.php中修改user_db.sql生成的数据库<br/>
/tp-oauth2-login/App/Common/Conf/config.php中修改oauth_db.sql生成的数据库<br/>
其他配置项请参考ThinkPHP官方文档<br/>
<br/>
3.将项目转移到运行环境中<br/>
请将整个工程拷贝到PHP运行环境下<br/>
假设运行目录为www, 那么请拷贝到www/git/下, 避免重新配置<br/>