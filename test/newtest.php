
    <?php
//    include 'test namespace.php';
//    require 'test namespace.php';
//    $file=fopen('tay.text', 'r+') or exit("Unable to open file!");
//    while(!feof($file)){
//        echo fgets($file).'<br>';
//    }
//    fclose($file);
//
//    echo '<br>';
//    echo '??????????????????';
//    echo "<br>";
//    $gfile= fopen('tay.text', 'r') or exit('UNable to read file!!');
//    while (!feof($gfile)){
//        echo fgetc($gfile)."<br>";
//    }
//    fclose($gfile);



    //允许文件的格式是：
    $allowedExts= array("gif", "jpeg", "jpg", "png");
    $temp = explode('.', $_FILES['file']['name']);
    $extension=end($temp);
    if ((
            ($_FILES['file']['type']=="image/gif")
    ||($_FILES["file"]["type"]=="image/jpeg")
     ||($_FILES["file"]["type"]=="image/jpg")
     ||($_FILES["file"]["type"]=="image/pjpeg")
     ||($_FILES["file"]["type"]=="image/x-png")
     ||($_FILES["file"]["type"]=="image/png")
    )
    &&($_FILES['file']["size"]<204800)
    && in_array($extension, $allowedExts)){
        if ($_FILES['file']['error'] > 0) {
            echo '错误' . $_FILES['file']['error'] . '<br>';
        } else {
            echo "上传文件类型:" . $_FILES['file']['name'] . '<br>';
            echo "文件类型:" . $_FILES['file']['type'] . "<br>";
            echo "文件大小:" . ($_FILES['file']['size'] / 1024) . "<br>";
            echo "文件临时储存位置:" . $_FILES['file']['tmp_name'] . "<br>";

            //判断当前目录下的upload目录是否存在该文件
            //如果没有upload目录，你需要创建它，upload目录权限为777
            if (file_exists("upload/".$_FILES['file']['name'])){
                echo $_FILES['file']['name']."文件已经存在";
            }else{
                //如果upload目录不存在该文件，则将该文件上传到upload目录上
                move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
                echo "文件储存在："."upload/".$_FILES['file']['name'];
            }




        }
    }else{
        echo "非法的文件格式！！";
    }


    ?>

