<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>菜鸟学堂</title>-->
<!--</head>-->
<!--<script>-->
<!--    function showHint(str)-->
<!--    {-->
<!--        if (str.length==0)-->
<!--        {-->
<!--            document.getElementById("txtHint").innerHTML="";-->
<!--            return;-->
<!--        }-->
<!--        if (window.XMLHttpRequest)-->
<!--        {-->
<!--            // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码-->
<!--            xmlhttp=new XMLHttpRequest();-->
<!--        }-->
<!--        else-->
<!--        {-->
<!--            //IE6, IE5 浏览器执行的代码-->
<!--            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");-->
<!--        }-->
<!--        xmlhttp.onreadystatechange=function()-->
<!--        {-->
<!--            if (xmlhttp.readyState==4 && xmlhttp.status==200)-->
<!--            {-->
<!--                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;-->
<!--            }-->
<!--        }-->
<!--        xmlhttp.open("GET","test3.php?q="+str,true);-->
<!--        xmlhttp.send();-->
<!--    }-->
<!--</script>-->
<!--<body>-->
<!--<p><b>在输入框中输入一个姓名:</b></p>-->
<!--<form>-->
<!--    姓名: <input type="text" onkeyup="showHint(this.value)">-->
<!--</form>-->
<!--<p>返回值: <span id="txtHint"></span></p>-->






    <?php
//
//    function spamcheck($field){
//        $field=filter_var($field, FILTER_SANITIZE_EMAIL);//删除电子邮件的非法字符
//        if (filter_var($field, FILTER_VALIDATE_EMAIL)){//验证电子邮件地址的值
//            return TRUE;
//
//        }else{
//            return FALSE;
//        }
//    }
//
//
//
//    if (isset($_REQUEST['email'])){
//        //如果收到邮箱参数则发送邮件
//        //判断邮箱是否合法
//        $mailcheck=spamcheck($_REQUEST['email']);
//        if ($mailcheck==FALSE){
//            echo '非法输入';
//        }else {
//
//
//            $email = $_REQUEST['email'];
//            $subject = $_REQUEST['subject'];
//            $message = $_REQUEST['message'];
//            mail('someone@example.com', $subject, $message, "From" . $email);
//            echo '邮件发送成功';
//        }
//    }else {
//        echo "<form method='post' action='newtest.php'>
//            Email:<input name='email' type='text'><br>
//            Subject:<input name='subject' type='text'><br>
//            Message:<br>
//            <textarea name='message' rows='15' cols='40'></textarea><br>
//           <input type='submit'>
//            </form>";}


//if (!file_exists('xxx.text')){
//   die('文件不存在');
//   }else{
//$file=fopen('xxx.text', 'r');}


//    function someError($errno, $errstr){
//        echo '<b>Error:</b>'.[$errno].$errstr.'<br>';
//        echo '脚本结束';
//        die();
//    }
//
//    set_error_handler('someError', E_USER_WARNING);//处理错误处理函数
//    $test=2;
//    if ($test>1){
//        trigger_error('变量必须小于等于1', E_USER_WARNING);//触发异常
//    }


//    function checkNum($num){
//        if ($num>1){
//            throw new Exception('变量必须小于等于1');
//        }
//        return true;
//    }
//    //try语句块触发异常
//    try{
//        checkNum(2);
//        //如果抛出异常，以下文本不会输出
//        echo '如果输出该内容，说明$num变量';
//    }//捕获异常
//    catch (Exception $e){
//        echo "Message:".$e->getMessage();
//    }

// class customException extends Exception{
    //// public function errorMessage(){
    //// //错误信息
    //// $errorMsg= '错误行号'.$this->getLine()." in ".$this->getFile().': <b>'.$this->getMessage().'</b>不是一个合法的E-mail地址';
    //// return $errorMsg;
    //// }
    //// }
    ////$email='someone@example...com';
    //// try{
    //// if (filter_var($email, FILTER_VALIDATE_EMAIL)==FALSE){
    //// throw new customException($email);
    //// }
    //// }catch (customException $e){
    //// echo $e->errorMessage();
    //// }

//class customException extends Exception{
//    public function errorMessage(){
//        $errorMsg=$this->getMessage().'不是一个合法的email地址。';
//        return $errorMsg;
//    }
//}
//    $email='someone@example.com';
//try{
//    try{
//        //检测example是否存在
//        if (strpos($email, 'example')!==FALSE){
//            //如果不是个合法的邮箱地址，则抛出异常
//            throw new Exception($email);
//        }
//    }catch (Exception $e){
//        //重新抛出异常
//        throw new customException($email);
//    }
//}catch (customException $e){
//    //显示自定义信息
//    echo  $e->errorMessage();
//}

    //顶层异常处理器,可用于捕抓所有违背捕获的异常
//    function myException($exception){
//        echo '<b>Exception:</b>', $exception->getMessage();
//    }
//
//    set_exception_handler('myException');//函数可设置处理所有未捕获异常的用户定义函数
//    throw new Exception('Uncaught Exception occured!!');

    //过滤器
//    $int=123;
//    if (!filter_var($int, FILTER_VALIDATE_INT)){
//        echo '不是一个合法的整数';
//    }else{
//        echo '是一个合法的整数';
//    }
        /*validating和sanitizing
         * validating:
         *  用于验证用户输入，严格的格式规则，如果成功则返回预期的类型，如果失败则返回FALSE
         * snaitizing：
         *  用于允许或禁止字符串中指定的字符，无数据格式规则，始终返回字符串
         */

//        $var=330;
//        $int_options=array(
//                "options"=>array(
//                        "min_range"=>0,
//                    "max_range"=>256
//                )
//        );
//
//        if (!filter_var($var, FILTER_VALIDATE_INT, $int_options)){
//            echo ('不是一个合格的整数');
//        }else{
//            echo ("是一个合格的整数");
//        };
//

//    if (!filter_has_var(INPUT_GET, 'email')){
//        echo ('没有 email参数');
//    }else{
//        if (!filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)){
//            echo '不是一个合格的E-mail';
//        }else{
//            echo '是一个合格的E-mail';
//        }
//    };

//    if (!filter_has_var(INPUT_GET, 'GET')){
//        echo ('没有 url参数');
//    }else{
//        $url=filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
//        echo '$url';
//    }


    //
//    $filters=array(
//            "name"=>array(
//                    "filter"=>FILTER_SANITIZE_STRING
//            ),
//        'age'=>array(
//                'filter'=>FILTER_VALIDATE_INT,
//            "options"=>array(
//                    "min_range"=>1,
//                "max_range"=>120)
//        ),
//        "email"=>FILTER_VALIDATE_EMAIL
//    );
//    $result=filter_input_array(INPUT_GET, $filters);
//    if (!$result['age']){
//        echo ("年龄必须在1到120之间。");
//    }elseif (!$result['email']){
//        echo 'E-mail 不合法';
//    }else{
//        echo ('输入正常');
//    };

//    function convertSpace($string){
//        return str_replace('_', '.', $string);
//    }
//    $string='www_runoob_com!';
//    echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));//callback调用自定义的过滤器去过滤数据
//
//    $int=122;
//    $min=1;
//    $max=200;
//    if (filter_var($int, FILTER_VALIDATE_INT, array("option"=>array("min_range"=>$min,"max_range"=>$max)))===false){
//        echo ('变量值不在合法范围内');
//    }else{
//        echo ('变量值在合法范围内');
//    }
//
//    $ip='2001:0db8:85a3:08d3:1319:8a2e:0370:7334';
//    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)===false){
//        echo ('$ip是一个IPV6地址');
//    }else{
//        echo ('$ip不是一个IPV6地址');
//    };

//    $url='http://www.runoob.com';
//    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)===false) {
//        echo('$url是一个合法URL');
//    }else{
//        echo ('$url不是一个合法URL');
//    }

//    $str='<h1>Hello WorldÆØÅ!</h1>';//移除字符串中 ASCII 值大于 127 的字符，同样它也能移除 HTML 标签：
//    $newstr=filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//    echo $newstr;

//    $arr=array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5);
//    echo json_encode($arr);//php数组转化为json格式数据
//
//    class EMP{
//        public $name='';
//        public $hobbies='';
//        public $birthdate='';
//    }
//    $e=new EMP();
//    $e->name='sachin';
//    $e->hobbies='sports';
//    $e->birthdate=date('m/d/y h:i:s a',"8/5/1974 12:20:03 p");
//    $e->birthdate=date('m/d/y h:i:s a', strtotime("8/5/1974 12:20:03"));
//    echo json_encode($e);//php对象转换为json格式

//    $json='{"a":1, "b":2, "c":3, "d":4, "e":5}';
//    var_dump(json_decode($json));//返回对象
//    var_dump(json_decode($json, true));//返回数组

    //面向对象编程
//    $servername='127.0.0.1';
//    $username='root';
//    $password='';
//    $dbname='myDB';
//    $conn=new mysqli($servername, $username, $password);
//    if ($conn->connect_error){
//        die('连接失败'.mysqli_error($conn));
//    };
//    echo '连接成功';
    //$sql="CREATE DATABASE myDB";
//    $sql='use myDB';
    //$sql= 'create table test(name char(10) not null,age int) '
//    if ($conn->query($sql)===TRUE){
//        echo '数据库创建成功';
//    }else{
//        echo "Error creating databse: ".$conn->error;
//    }

    //增
//    $sql="insert into test(name, age) value(?, ?) ";
    //删
    //$sql='delete from test where name="joe"';
    //改
    //$sql='update test set age=66 where name="joe"';
    //查
    //$sql='select * from test where name="joe"';
//    //为mysqli_stmt_prepare()初始化statement对象
//    $stmt=mysqli_stmt_init($conn);
//    if (mysqli_stmt_prepare($stmt, $sql)){
//        mysqli_stmt_bind_param($stmt, 'si', $name, $age);
//        $name='sss';
//        $age=58;
//        mysqli_stmt_execute($stmt);
//
//        $name='skals';
//        $age=96;
//        mysqli_stmt_execute($stmt);
//    }
//    $sql="select * from test";
//    $result=$conn->query($sql);
//    if ($result->num_rows>0){
//        while ($row=$result->fetch_assoc()){
//            echo 'name:'.$row['name']." - age:".$row['age']."<br>";
//        }
//    }else{
//        echo " 0 结果";
//    }
//    $conn->close();


        //面向过程编程
//    $conn=mysqli_connect($servername, $username, $password);
//    if (!$conn){
//        die('Connection failed: '.mysqli_connect_error());
//    }
//    echo '连接成功';
//    $sql='create database mydb2';
//    if (mysqli_query($conn, $sql)){
//        echo '数据库创建成功';
//    }else{
//        echo "Error creating database: ".mysqli_error($conn);
//    }

    //增
    //    $sql="insert into test(name, age) value(?, ?) ";
    //删
    //$sql='delete from test where name="joe"';
    //改
    //$sql='update test set age=66 where name="joe"';
    //查
    //$sql='select * from test where name="joe"';
//    $result=mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result)>0){
//        while ($row=mysqli_fetch_assoc($result)){
//            echo "name:".$row['name']." - age: ".$row['age']."<br>";
//        }
//    }else{
//        echo "0 结果";
//    }
//    mysqli_close($conn);

    //PDO实例
//    try{
//        $conn=new PDO("mysql:host=$servername", $username, $password);
//        echo '连接成功';
//    }catch (PDOException $e){
//        echo $e->getMessage();
//    }

//    try{
//        $conn=new PDO("mysql:host=$servername", $username, $password, $dbname);
//        //设置PDO错误模式为异常
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //增
    //    $sql="insert into test(name, age) value(?, ?) ";
    //删
    //$sql='delete from test where name="joe"';
    //改
    //$sql='updata test set age=66 where name="joe"';
    //查
    //$sql='select * from test where name="joe"';
//    try
//    {$conn->beginTransaction();
//    $conn->exec('insert into test(name, age) values("joe", 55)');
    //$conn->exec('')
//    $conn->commit();
//    }catch (PDOException $e){
//        $conn->rollBack();
//        echo $sql."<br>".$e->getMessage();
//    }
//        $sql='create database mydb3';
//        $conn->exec($sql);
//        echo "数据库创建成功";
//    }catch (PDOException $e){
//    echo $sql."<br>".$e->getMessage();
//    }
//    $conn=null;

//odbc
//    $conn=odbc_connect('northwind','','');
//    $sql='select * from test';
//    $rs=odbc_exec($conn, $sql);
//    //取回数据
//    odbc_fetch_row($rs);
//    //从记录中读取字段
//    odbc_result($rs, 1);//返回第一个字段
//    //返回代码名为name的字段值
//    odbc_result($rs, 'name');
//    //关闭obdc连接
//    odbc_close($conn);

//$conn=odbc_connect('northwind', '', '');
//$sql='select * from test';
//$rs=odbc_exec($conn, $sql);
//if (!$rs){
//    exit("sql语句错误！！");
//}
//echo "<table><tr>";
//echo "<th>name</th>";
//echo "<th>age</th>";
//
//while (odbc_fetch_row($rs)){
//    $name=odbc_result($rs, 'name');
//    $age=odbc_result($rs, 'age');
//    echo "<th>$name</th>";
//    echo "<th>$age</th>";
//}
//odbc_close($conn);
//echo "</table>";

    //通过xml_parser_create()函数初始化XML解析器
//$parser=xml_parser_create();
////创建配合不同事件处理程序的函数
//function start($parser, $element_name, $element_attrs){
//    switch($element_name){
//        case 'NOTE':
//            echo '--Note--<br>';
//            break;
//
//        case "To":
//            echo "TO:";
//            break;
//
//        case "FROM":
//            echo "From:";
//            break;
//
//        case "HEADING":
//            echo "Heading:";
//            break;
//
//        case "BODY":
//            echo "Message:";
//    }
//}
//
//function stop($parser, $element_name){
//    echo "<br>";
//}
//
//function char($parser, $data){
//    echo $data;
//}
////添加xml_set_element_handler()函数来定义，当解析器遇到开始和结束标签时执行哪个函数
//xml_set_element_handler($parser, "start", "stop");
////添加xml_set_character_data_handler()函数来定义，当解析器遇到字符数据时执行哪个函数
//xml_set_character_data_handler($parser, "char");
//$fp=fopen('test.xml', 'r');
//while($data=fread($fp, 4096)){
//    //通过xml__parse()函数来解析文件"test.xml"
//    //万一有错误的话，添加xml_error_string()函数把XML错误转换为文本说明
//    //调用xml_parser_free()函数来释放分配给xml_parser_create()函数的内存
//    xml_parse($parser, $data, feof($fp)) or die(sprintf("XML ERROR : %s at line %d", xml_error_string(xml_get_error_code($parser)), xml_get_current_line_number($parser)));
//}
//xml_parser_free($parser);

//    $xmldom=new DOMDocument();
//    $xmldom->load('test.xml');
//
//    $x=$xmldom->documentElement;
//    foreach ($x->childNodes as $item){
//        print $item->nodeName." = ".$item->nodeValue."<br>";
//    }

//    print $xmldom->saveXML();


//    $xml=simplexml_load_file("test.xml");
//    print_r($xml);
//    echo $xml->to."\n";
//    echo $xml->from."\n";
//    echo $xml->heading.PHP_EOL;
//    echo $xml->body.PHP_EOL;

//echo $xml->getName().PHP_EOL;
//foreach ($xml->children() as $child){
//    echo $child->getName().' : '.$child.PHP_EOL;
//}

//</body>
//</html>