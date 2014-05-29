<html>
<head>
<title>    用户注册与登录</title>
</head>
<body  background="E:/wamp/www/WEBdzy/ph.jpg">  
    <h1 align="center">  请认真填写下表</h1>
    <form action="login.php"method="post">
       输入ID：<input type="text" maxlength="10"  name="id">	
           <br><br>
       输入账户：<input type="text" maxlength="10"  name="_nick">	
           <br><br>
       选择性别：<input type="radio" name="sex" value="M">男	
                 <input type="radio" name="sex" value="W">女	
           <br><br>
       输入密码：<input type="_password" >
       再次确认密码：<input type="_password" >
           <br><br>
        <input type="submit"name="Submit" value="提交">
        <input type="reset"name="Submit2" value="重置">
        

          
	</body>
</html>