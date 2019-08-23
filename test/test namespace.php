<?php
//namespace Myproject;
////echo "命名空间为：".__NAMESPACE__.PHP_EOL;
////
////namespace MYUSE\dooa;
////echo "命名空间为：".__NAMESPACE__.PHP_EOL;
////echo $_GET['fname'];
////echo $_POST['password'];
////
////
////$q=isset($_GET['q'])?htmlspecialchars($_GET['q']):'';
////if ($q){
////    if ($q=='RUNOOB'){
////        echo '菜鸟教程';
////    }elseif ($q=='GOOGLE'){
////        echo 'google';
////    }else{
////        echo 'else';
////    }
////}
////
////$qq=isset($_POST['qq'])?$_POST['qq']:'';
////if (is_array($qq)){
////    $sites=array(
////        "180"=>'180',
////        "170"=>'170',
////        "160"=>'160',
////    );
////    foreach ($qq as $val){
////        echo $sites[$val].PHP_EOL;
////    }
////}else{
////    echo 'none';
////}
////
////$qqq=isset($_POST['qqq'])?$_POST['qqq']:'';
////if ($qqq=='RUNOOB'){
////    echo '菜鸟学堂';
////}elseif ($qqq=="TAOBAO"){
////    echo '淘宝';
////}else{
////    echo '谷歌';
////};

//
//$qqqq=isset($_POST['qqqq'])?$_POST['qqqq']:'';
//if (is_array($qqqq)){
//    $na=array(
//        'RUNOOB'=>'菜鸟学堂',
//        "TAOBAO"=>'淘宝',
//        "GOOGLE"=>'谷歌',
//    );
//    foreach ($qqqq as $vals){
//        echo $na[$vals].PHP_EOL;
//    };
//}else{
//    echo 'else checkbox';
//};
//echo '????';
//$name = $email = $xingbie = $url =$textarea ='';
//if (is_array($_POST)){
//    if (empty($_POST['name'])){
//        $nameErr='名字是必须的';
//    }else{
//        $name = test_input($_POST['name']);
//        if (!preg_match("/^[a-zA-Z]*$/", $name)){
//            $nameErr='只允许字母和空格';
//        };
//    };
//
//    $email = test_input($_POST['email']);
//
//    $xingbie = test_input($_POST['xingbie']);
//    $url = test_input($_POST['url']);
//
//    $textarea = test_input($_POST['comment']);
//}
//
//function test_input($data){
//    $data = trim($data);//去掉空格，tab，换行
//    $data = stripslashes($data);//去掉反斜杠
//    $data = htmlspecialchars($data);
//    return $data;
//
//}
//if ($nameErr){
//    echo $nameErr.PHP_EOL;
//}
//
//echo $name;
//echo '<br>';
//echo $xingbie;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $url;
//echo "<br>";
//echo $textarea;
//$name = $email = $texta = $weburl = $xingbie = '';
//
//if (is_array($_POST)){
//    if (empty($_POST['name'])){
//        echo '姓名不能为空';
//    }
//    else{
//        $name=test_input($_POST['name']);
//    if (!preg_match('/^[a-zA-Z]*$/', $name)){
//        echo '只允许字母和空格';
//    }
//};
//
//    if (empty($_POST['email'])){
//        echo 'e-mail不能为空';
//    }
//    else{
//        $email=test_input($_POST['email']);
//        if (!preg_match('/^[a-zA-Z]*@[a-zA-Z]*.com$/', $email)){
//            echo 'e-mail格式不对';
//        }
//    };
//
//    if (empty($_POST['xingbie'])){
//        echo '性别不能为空';
//    }
//    else{
//        $xingbie=test_input($_POST['xingbie']);
//        if (!preg_match('/^[a-zA-Z]*$/', $xingbie)){
//            echo "性别不能为空";
//        };
//    };
//
//    $weburl=test_input($_POST['weburl']);
//    $texta = test_input($_POST['comment']);
//
//
//};
//
//
//function test_input($data){
//    $data=trim($data);
//    $data=stripslashes($data);
//    $data=htmlspecialchars($data);
//    return $data;
//}
//echo 'ok';
//echo $name;
//echo '<br>';
//echo $email;
//echo '<br>';
//echo $xingbie;
//echo '<br>';
//echo $texta;
//echo '<br>';
//echo $weburl;
//echo '<br>';
//
//$cars=array(
//    array("Volco", 100, 96),
//    array("BMW", 60, 59),
//    array("TOyota", 110, 100)
//);
//
//print_r($cars);
//echo "<br>";
//echo $cars[0][0];

echo date("Y/m/d")."<br>";
echo '??????';

?>