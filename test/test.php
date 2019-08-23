<?php
echo '<span>Hello world!</span>'.PHP_EOL;
/*
 * 这是练习，第一个php
 *这是多行注释
 *
 * */
//这是单行注释
$txt = 'Hello World!';
$x=5;
$y=6.3;
$z = $x + $y;
echo $z.PHP_EOL;

function myTest()
{
    $yy=10;
    echo '<p>测试函数内变量：</p>';
    echo "x变量为: $x";
    echo '<br>';
    echo "变量yy是：$yy\n";
}
myTest();
echo '<p>测试函数外变量：</p>';
echo "变量x为: $x";
echo '<br>';
echo "变量y为：$yy";


function myTest2(){
global $x,$y,$c;
$c=$x+$y+$y;
}
myTest2();
echo $c.PHP_EOL;

function myTest3(){
$GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];
}
myTest3();
echo '<br>';
echo 'x变量为:'.$x;
myTest3();
echo '<br>';

function myTest4(){
    static $g=0;
    echo $g;
    $g++;
    echo PHP_EOL;
    echo '<br>';
}
myTest4();
myTest4();
myTest4();

function myTest5($xx){
    echo "$xx";
}
myTest5(9);


echo "<h2>PHP很有趣！</h2>";
echo "Hello World!";
echo "我要学PHP";
echo "<br>";
echo "这是一个", "字符串", "使用了", "多个", "参数。";
echo '<br>';

$text1='学习PHP！！';
$text2="RUNOOB.COM！！";
$cars=array("Volvo", "BMW", "Toyota");

echo $text1;
echo "<br>";
echo "在 $text2 学习PHP！！";
echo "<br>";
echo "我车的品牌是{$cars[1]}";

print "<h2>PHP很有趣！！！</h2>";
print "Hello World!";
print "我要学习PHP！";

print $text1;
print "<br>";
print "在 $text2 学习PHP！！";
print "<br>";
echo "我车的品牌是 {$cars[2]}";

echo <<<EOF
<h1>我的第一条标语。</h1>
<p>我的第一个段落。</p>
EOF;

$name='runoob';
$a=<<<EOF
"abc"$name
"123"
EOF;
echo $a;
//结束需要独立一行且前后不能空格;

//PHP字符串
$xxx='Hello World!!';
echo $xxx;
echo "<br>";
$xxxx="Hello World!!!";
echo $xxxx;

//PHP整型
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345;
var_dump($x);
$x = 0x8c;
var_dump($x);
$x = 047;
var_dump($x);

//PHP浮点型
$x = 10.365;
var_dump($x);
echo '<br>';
$x = 2.4e3;
var_dump($x);
$x = 8E-5;
var_dump($x);

//PHP布尔值
$x=true;
$y=false;

//PHP数组
$car = array("Volvo", "BMW", "Toyota");
var_dump($car);

//PHP对象
class Car
{
var $color;
function __construct($color="red")
{
    $this->color=$color;
}
function what_color(){
    return $this->color;
}
}

//PHP NULL
$x="Hello World!!";
$x=null;
var_dump($x);

echo "<br>";
if (42=="42"){
    echo "1. 值相等";
}
echo "<br>";
if (42==="42"){
    echo "2.类型相等";
}else {
    echo "3.不相等";
}
echo PHP_EOL;

echo "0==false:";
var_dump(0==false);
echo "0===false:";
var_dump(0===false);
echo PHP_EOL;
echo "0==null:";
var_dump(0==null);
echo PHP_EOL;
echo "0===null:";
var_dump(0===null);
echo "false==null:";
var_dump(false==null);
echo PHP_EOL;
echo "false===null:";
var_dump(false===null);
echo PHP_EOL;
echo '"0"==false:';
var_dump("0"==false);
echo '"0"===false:';
var_dump("0"===false);
echo PHP_EOL;
echo '"0"==null:';
var_dump("0"==null);
echo '"0"===null:';
var_dump("0"===null);
echo PHP_EOL;
echo '""==false:';
var_dump(""==false);
echo '""===false:';
var_dump(""===false);
echo PHP_EOL;
echo '""==null:';
var_dump(""==null);
echo '""===null:';
var_dump(""===null);

echo "<br>";
define("GREETING", "欢迎访问Runoob.com");
echo GREETING;
echo "<br>";
echo greeting;

define("GERRR", "欢迎来到德莱联盟", true);
echo GERRR;
echo "<br>";
echo gerrr;

echo "<br>";
define("GRTY", "德莱联盟");
function myTest6(){
    echo GRTY;
}
myTest6();

echo "<br>";
$txt="Hello World!!!";
echo $txt;

echo "<br>";
$txt1="Hello World!!!!";
$txt2="What a nice day!!!";
echo $txt1.'@'.$txt2;

echo "<br>";
echo strlen($txt1);

echo "<br>";
echo strpos($txt1, "World!!");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$x=10;
$y=6;
echo ($x+$y);
echo "<br>";

echo ($x-$y);
echo "<br>";

echo ($x*$y);
echo "<br>";

echo ($x/$y);
echo "<br>";

echo ($x%$y);
echo "<br>";

echo -$x;
echo "<br>";

var_dump(intdiv(10, 3));
echo "<br>";

$x=8;
function myTest7(){
    global $x;
    echo 'x:'.$x++;
    echo '<br>';
    echo 'x:'.$x;
    echo '<br>';
    echo 'x:'.$x--;
    echo '<br>';
    echo 'x:'.$x;
    echo '<br>';
    echo 'x:'.--$x;
    echo '<br>';
    echo 'x:'.$x;
    echo '<br>';
    echo 'x:'.--$x;
    echo '<br>';
    echo 'x:'.$x;
    echo '<br>';
}
myTest7();
myTest7();

$x=100;
$y=100;

var_dump($x==$y);
echo '<br>';
var_dump($x===$y);
echo '<br>';
var_dump($x!=$y);
echo '<br>';
var_dump($x!==$y);
echo '<br>';

$x=59;
$y=69;
var_dump($x<$y);
echo '<br>';
var_dump($x>$y);
echo '<br>';

$x=6;
$y=3;
var_dump($x<10 and $y>1);
echo '<br>';
var_dump($x==6 or $y==5);
echo '<br>';
var_dump($x==6 xor $y==3);
echo '<br>';
var_dump($x<10 && $y>1);
echo '<br>';
var_dump($x==5 || $y==5);
echo '<br>';
var_dump(!($x==$y));
echo '<br>';


$x=array("a"=>'red', "b"=>"green");
$y=array("c"=>'blue', 'D'=>'yellow');
$z=$x+$y;
var_dump($z);
var_dump($x==$y);
var_dump($x===$y);
var_dump($x!=$y);
var_dump($x<>$y);
var_dump($x!==$y);


$test='菜鸟课堂';
$username=isset($test)?$test:'nobody';
echo $username, PHP_EOL;

$username=$test?:'nobody';
echo $username, PHP_EOL;

$username = $_GET['user']??'nobody';
echo $username;
echo '<br>';
$username=isset($_GET['user'])?$_GET['user']:'nobody';
echo $username;

echo 1<=>1;//0
echo 1<=>2;//-1
echo 2<=>1;//1

echo 1.5<=>1.5;//0
echo 1.5<=>2.5;//-1
echo 2.5<=>1.5;//1

echo "a"<=>"a";//0
echo "a"<=>"b";//-1
echo "b"<=>"a";//1

$a=3;
$b=false;
$c=$a or $b;
var_dump($c);
$d=$a||$b;
var_dump($d);

$a=1;
$b=2;
$c=3;
$d=$a+$b*$c;
echo $d;
echo "\n";
$e=($a+$b)*$c;
echo $e;
echo "\n";

$t=date('H');
if ($t<"20"){
    echo "Have a good day!";
}
if ($t>'20'){
    echo "Have a nice day".PHP_EOL;
}else{
    echo "Have a big day".PHP_EOL;
}

if ($t<"10"){
    echo "Have a good morning";
}elseif ($t<"20"){
    echo "Have a good day";
}else{
    echo "Have a good night";
}


$favcolor='Red';
switch ($favcolor)
{
    case 'red':
        echo '你喜欢的颜色是红色';
        break;
    case 'blue':
        echo '你喜欢的颜色是蓝色';
        break;
    default:
        echo '你喜欢的颜色既不是红色，也不是蓝色';
}
echo '<br>';

$car=array("Volvo", "BMW", "Toyota");
echo "I like ".$cars[0].', '.$car[1].' and '.$car[2].'.';
echo '<br>';
echo $arrlength=count($car);
echo '<br>';
for ($x=0;$x<$arrlength;$x++){
    echo $car[$x];
    echo "<br>";
}

$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x=>$x_Value)
{
    echo "Key=".$x.",　value＝".$x_Value;
    echo "<br>";
}
sort($age);
print_r($age);
rsort($age);
print_r($age);
asort($age);
print_r($age);
ksort($age);
print_r($age);
arsort($age);
print_r($age);
krsort($age);
print_r($age);


$x=75;
$y=25;
function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z;
echo '????';
echo $_SERVER['PHP_SELF'];
echo '</br>';
echo $_SERVER['SERVER_NAME'];
echo "</br>";
echo $_SERVER['HTTP_HOST'];
echo "</br>";
echo $_SERVER['HTTP_REFERER'];
echo "</br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "</br>";
echo $_SERVER["SCRIPT_NAME"];

while($x){
    echo '</br>';
    echo $x;
    $x=0;
}

$i=1;
while ($i<=5)
{
    echo "The number is ".$i."<br>";
    $i++;
}

do{
    $i++;
    echo "The number is".$i."<br>";
}
while($i<=5);
echo PHP_EOL;
for ($i=1;$i<=5;$i++)
{
    echo "The number is ".$i."\n";
}

echo PHP_EOL;
$x=array("one", "two", "three");
foreach ($x as $value)
{
    echo $value.PHP_EOL;
}



function myTest8($me)
{
    echo $me.PHP_EOL;
}
echo "My grandfather's age is ";
myTest8(95);

function addnum($f, $s)
{

    $r=$f+$s;
    return $r;
}
echo "18 + 16 = ".addnum(18, 16).PHP_EOL;



echo "这是第".__LINE__."行".PHP_EOL;
echo "该文件位于".__FILE__.PHP_EOL;
echo "该文件位于".__DIR__.PHP_EOL;
function myTes()
{
    echo "函数名为".__FUNCTION__.PHP_EOL;
    echo "函数名为：".__METHOD__.PHP_EOL;
}
myTes();
class IIO{
    function _print(){
        echo '类名为'.__CLASS__.PHP_EOL;
        echo "函数名为".__FUNCTION__.PHP_EOL;
    }
}
$t = new IIO();
$t->_print();

class Base
{
    public function sayHello()
    {
        echo "Hello  ";
    }
}
trait SayWorld{
    public function sayHello(){
        parent::sayHello();
        echo "world!!";
    }
}

class MyHelloworld extends Base{
    use SayWorld;
}
$o=new MyHelloworld();
$o->sayHello();


interface IMse{
    public function myfunc($color, $dogclass);
}
class Mydog implements IMse {
    var $color="red";
    var $sa;
    const name='Tom';
    var $dogclass="alasijia";
    /**
     * @var string
     */
    private $leg;
    /**
     * @var string
     */
    private $long;

    function __construct()
    {
        $this->leg = "154";
        $this->long= "156";
    }

     function myfunc($color, $dogclass){
        echo "This is a ".$color." dog and it is a ".$dogclass.PHP_EOL;
        echo self::name;
    }

    protected function dogwalk($walkmail){

    echo "This dog can walk ".$walkmail." mails a day!!!".PHP_EOL;
    }

    final public function dogstyles(){
        echo PHP_EOL;
        echo PHP_EOL;
        echo $this->color;

    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "销毁".__CLASS__.PHP_EOL;
    }
}
$wa = new  Mydog();
$wa->dogstyles();

class Thedog extends Mydog{
    use SayWorld;
}


?>

