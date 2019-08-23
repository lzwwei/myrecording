<?php

//从数组中匹配内容
//$a[]="Anna";
//$a[]="Brittany";
//$a[]="Cinderella";
//$a[]="Diana";
//$a[]="Eva";
//$a[]="Fiona";
//$a[]="Gunda";
//$a[]="Hege";
//$a[]="Inga";
//$a[]="Johanna";
//$a[]="Kitty";
//$a[]="Linda";
//$a[]="Nina";
//$a[]="Ophelia";
//$a[]="Petunia";
//$a[]="Amanda";
//$a[]="Raquel";
//$a[]="Cindy";
//$a[]="Doris";
//$a[]="Eve";
//$a[]="Evita";
//$a[]="Sunniva";
//$a[]="Tove";
//$a[]="Unni";
//$a[]="Violet";
//$a[]="Liza";
//$a[]="Elizabeth";
//$a[]="Ellen";
//$a[]="Wenche";
//$a[]="Vicky";
//
//$q=$_GET['q'];
////echo $a;
//if (strlen($q)>0){
//    $res='';
//    for($i=0;$i<count($a);$i++){
//        if (strtolower(substr($a[$i]), 0, strlen($q))===strtolower($q)){
//            if ($res==''){
//                $res=$a[$i];
//            }else{
//                $res=$res.' , '.$a[$i];
//            }
//        }
//    }
//}
//if ($res==''){
//    echo 'no suggest!!';
//}else{
//    echo $res;
//};
//
//



//连接数据库
//$servername='127.0.0.1';
//$username='root';
//$password='';
//$dbname='myDB';
//$conn=mysqli_connect($servername, $username, $password);
//if (!$conn){
//    echo "连接成功";
//}else{
//    die('Could not connect: '.mysqli_error($conn));
//}
////选择数据库
//mysqli_select_db($conn, $dbname);
////设置编码
//mysqli_set_charset('utf8');
//$q=isset($_GET['q'])?$_GET['q']:'';
//$sql= 'select * from test where name="'.$q.'"';
//$result=mysqli_query($conn, $sql);
//while($row=mysqli_fetch_assoc($result)){
//    echo "<tr>";
//    echo "<td>".$row['name'].'</td>>';
//    echo "<td>".$row['age']."</td>";
//    echo "</tr>";
//}
//echo "</table>";
//mysqli_close($conn);
//echo 'ok';


//获取GET请求，判断内容
//if (strlen($q)>0){
// switch ($q){
//     case "1":
//         echo "GOOGLE";
//         break;
//
//     case "2":
//         echo "TAOBAO";
//         break;
//
//     case "3":
//         echo "RUNOOB";
//         break;
//
//     case "4":
//         echo "weibo";
//         break;
//
//     case "5":
//         echo "FaceBook";
//         break;
//
//     default:
//         echo 'No suggest!!';
// }
//}


//PHP与xml
//$q=isset($_GET['q'])?$_GET['q']:'';
//$XMLDOM = new DOMDocument();
//$XMLDOM->load('test.xml');
//$x=$XMLDOM->getElementsByTagName('ARTIST');//返回带有制定标签的集合
//
////echo $x->item(0)->parentNode->childNodes->item(3)->nodeName;
//
//for($i=0;$i<=$x->length-1;$i++) {
//    if ($x->item($i)->nodeType==1){//判断节点类型
//        if ($x->item($i)->childNodes->item(0)->nodeValue==$q){//从集合取出子节点列表，按顺序取出值
//            $y=($x->item($i)->parentNode);//单个cd节点
//        }
//    }
//}
//
//$cd=($y->childNodes);
//for ($i=0;$i<$cd->length;$i++) {
//    if ($cd->item($i)->nodeType == 1) {
//        echo ("<b>" . $cd->item($i)->nodeName . " : </b>");
//        echo ($cd->item($i)->childNodes->item(0)->nodeValue);
//        echo ('<br>');
//    }
//}



//实时搜索
//$xmldom=new DOMDocument();
//$xmldom->load('test.xml');
//$x=$xmldom->getElementsByTagName('link');
//
//$q=isset($_GET['q'])?$_GET['q']:'';
//if (strlen($q)>0){
//    $hint='';
//    for ($i=0;$i<($x->length);$i++){
//        $y=$x->item($i)->getElementsByTagName("title");
//        $z=$x->item($i)->getElementsByTagName('url');
//        if ($y->item(0)->nodeType==1){
//            if(stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)){
//                if ($hint==''){
//                    $hint="<a href='".$z->item(0)->childNodes->item(0)->nodeValue."' target='_blank'>".$y->item(0)->childNodes->item(0)->nodeValue."</a>";
//
//                }else{
//                    $hint=$hint."<br/><a href='".$z->item(0)->childNodes->item(0)->nodeValue."</a>";
//                }
//            }
//        }
//    }
//}
//if ($hint==''){
//    $response='no suggestion';
//}else{
//    $response=$hint;
//}
//echo $response;


//$xml='test.xml';
//$xmldoc=new DOMDocument();
//$xmldoc->load($xml);
//
//$channel=$xmldoc->getElementsByTagName('channel')->item(0);
//$channel_title=$channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
//$channel_link= $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
//$channel_desc= $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
//
//echo ("<p><a href='".$channel_link."'>".$channel_title."</a>");
//echo ("<br>");
//echo ($channel_desc."</p>");
//
//$x=$xmldoc->getElementsByTagName('item');
//for ($i=0;$i<=1;$i++){
//    $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
//    $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
//    $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
//    echo ("<p><a href='".$item_link."'>".$channel_title."</a>");
//    echo ("<br>");
//    echo ($item_desc."</p>");
//
//}
//
//投票
//$vote=htmlspecialchars($_REQUEST['vote']);
//
//$filename='tay.text';
//$content=file($filename);
//
//$aarray=explode('||', $content[0]);
//$tyes=$aarray[0];
//$tno=$aarray[1];
//
//if($vote==0){
//    $tyes += 1;
//}
//
//if($vote==1){
//    $tno +=1;
//}
//
//$insertvote=$tyes."||".$tno;
//$fq=fopen($filename, "w");
//fputs($fq, $insertvote);
//fclose($fq);
//?>
<!---->
<!--<h2>结果：</h2>-->
<!--<table>-->
<!--    <tr>-->
<!--        <td>是：</td>-->
<!--        <td>-->
<!--            <span style="display: inline-block;background-color: green; width:--><?php //echo(100*round($tyes/($tno+$tyes), 2));?>/*px; height: 20px"></span>*/
/*            */<?php //echo(100*round($tyes/($tno+$tyes), 2));?><!--%-->
<!--        </td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>否：</td>-->
<!--        <td>-->
<!--        <span style="display: inline-block;background-color: red; width:--><?php //echo(100*round($tno/($tno+$tyes), 2));?>/*px; height: 20px"></span>*/
/*        */<?php //echo(100*round($tno/($tno+$tyes), 2));?><!--%-->
<!--        </td>-->
<!--    </tr>-->
<!--</table>-->
<!---->

























