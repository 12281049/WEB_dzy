<?php
    $_GET["_nick"];
    $_GET["_password"];     
   MYSQL_connect("localhost","root","");
   MYSQL_select_db("userinfo");

   function CheckNick($nick_input){
        global $LOGIN;
        global $nick£¬$id;
        $sql="select*form $LOGIN where _nick='$nick_input'";
        $result=MySQL_query($sql);
        $row=MySQL_fetch_array($result);
        $id=$row["id"];
        $nicker=$row["_nick"];
if(!$row["_nick"])  return "error!";
}

    function User_password($_password){
       global $LOGIN;
       $sql="select _password form $LOGIN where _password='$_password'"
         $result=MySQL_query($sql);
        $row=MySQL_fetch_array($result);
         return ($row["_password"]);
}

 
   if($!_nick){
         $error="ÇëÌîÐ´êÇ³Æ£¡"£»
     }
    if(!isset($error)andCheckNick($nick))  $error="¸ÃêÇ³Æ²»´æÔÚÇë×¢²á£¡";
     if((!isset($error))and(!$password))    $error="ÇëÌîÐ´ÃÜÂë£¡";
          if(!isset($error)){
                   $p=User_password($_password);
                   if($_password!=$p)  $error="ÃÜÂë²»ÕýÈ·£¡";

}
  if£¨!isset($error)£©{
      echo "¹§Ï²ÄúµÇÂ¼³É¹¦£¡";
}
   
   ?>


