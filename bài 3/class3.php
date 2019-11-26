<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <!-- <a href="class3.php?name=PhamHaiDuong&age=20&address=Hanoi">Phạm Hải Dương</a><br/>
        <a href="class3.php?name=NguyenDieuLinh&age=20&address=Hanoi">Nguyễn Diệu Linh</a><br/>
        <a href="class3.php?name=LeThanhTrang&age=20&address=Hanoi">Lê Thanh Trang</a><br/>
        <hr/> -->
        <?php
        //GET method
        // $_GET['variable'];
        // truyen tham so len url: index.php?variable1=value1&variable2=value2&variable3=value3
        //isset($bien); kiem tra su ton tai cua bien va tra ve 2 gia tri true hoac false
        // if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['address'])){  
        //     // $email = $_GET['email'];
        //     // $pass = $_GET['pass'];
        //     echo $_GET['name'].'<br/>'.$_GET['age'].'<br/>'.$_GET['address'];
        // }

        //mảng: vòng lặp foreach
        // có 2 cách khai báo
        // $array = array(gia_tri1, gia_tri2,gia_tri3,gia_tri4,...... );
        // $array = [gia_tri1, gia_tri2,gia_tri3,gia_tri4,...... ];

        //vi  du:
        // $array = ['a'=>1,2,'b'=>'ba','bốn','c'=>true,5.1,'ban','ghe'];
        // // echo '<pre>';
        // // var_dump($array);
        // // print_r($array);
        // // echo '<pre/>';
        // // for ($i = 0; $i < 5; $i++ ){
        // //     echo $array[$i].'<hr/>';
        // // }
        // foreach ($array as $key => $value) {
        //     echo $key.'=>'.$value.'<br/>';
        // }
        //json
        //cú pháp
        //đọc file json
        // $data_json = file_get_contents('data.json');
        // //chuyển file json sang dạng mảng
        // $result_json = json_decode($data_json, true);
        // print_r($result_json);
        // $result_json['ten'] = "Phạm Hải Dương";
        // foreach ($result_json as $key => $value) {
        //     echo $value.'<br/>';
        // }
        // //chuyển mảng vào json : dữ liệu cũ sẽ bị thay thế bằng dữ liệu mới
        // $data_en_json = json_encode($result_json, JSON_UNESCAPED_UNICODE);
        // //pull vào json
        // file_put_contents('data.json', $data_en_json);
        // $array = [333,444,555,666,777];
        // $max = $array[0];
        // for ( $i = 0; $i < 5; $i++){
        //     if($max < $array[$i]){
        //         $max = $array[$i];
        //     }
        // }
        // echo $max;

        $temp;
        $a = [1253,3,32,33,66,12];
        for($j = 0; $j < 6; $j++){
           for($i = 1; $i < 6; $i++){
                while($a[$i-1] < $a[$i]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$i-1];
                    $a[$i-1] = $temp;
                }
            }
        }
        for($i = 0; $i < 6; $i++){
            echo $a[$i].' ';
        }

        ?>

    </body>
    <!-- <form action="" method="GET">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
    </form> -->
</html>
