<html>

<head>
   <title>Hello World</title>
</head>

<body>

<h1>Welcome to my Website</h1>
<h4>Best Website Ever</h4>

<?php
//include './Views/DemoView.php';
use demo\model\DemoModel as Demo1;
use demo2\DemoModel;
include './Models/DemoModel.php';
include './Views/DemoModel.php';
//require 'vendor/autoload.php';

require './src/Staff.php';

use Huuhu\Php83813\Models\Taxi;

echo \Huuhu\Php83813\People::HANGSO;
echo \Huuhu\Php83813\People::$PI;

$staff = new \Huuhu\Php83813\Staff('Huy Nguyen','HN','Admin');
// gọi phương thức ghi đè ở lớp con

$staff->print();
$staff->login("HUY NGUYEN","ABC");
$staff->xemThongTinLop();
$staff->display();

// truy cap bien name cua lớp cha
echo $staff->name; // truy cap trực tiếp
echo $staff->getRealName();// thông qua set get
// sử dụng trực tiếp không thông qua instance
// so sanh và kiểm tra lớp của 1 instance

if($staff instanceof Staff){
    // true
}

if ($staff instanceof People){
    // true
}

if ($staff instanceof Taxi){
    // ko xay ra
}

/*$ta = new Taxi();
$ta->print();

$peo = new People();
$peo->print();

// để sử dụng 1 class thì PHẢI tạo 1 instance của nó
$demo1 = new DemoModel("Huy","1234","HN",
    "098776","34");
// demo1 là 1 instance của DemoModel;
$demo2 = new DemoModel("Huy","1234","HN",
    "098776","34");
$demo3 = new Demo1("Huy","1234","HN",
    "098776","34");

// không phân biệt hoa thường
$demo4 = new demomodel("Huy","1234","HN",
    "098776","34");
echo $demo1->name;
echo $demo1->age;
//echo $demo1->address; // ko gọi được do address ở chế độ private
//echo $demo1->numberPhone; // ko gọi được do numberPhone ở chế độ
// protected - index.php nằm ngoài thư mục chức DemoModel
//
//so sánh 2 instance
//  so sánh với toán tử == và ===
//
if ($demo1 == $demo2){
    echo  " xay ra khi 2 instance có cùng class và có value giống nhau";
}

if ($demo1 === $demo2){
    echo  "Xảy ra khi 2 object có cùng Class";
}
// lớp ẩn danh : Anonymous class
// khởi tạo 1 class bằng câu lệnh
$demo = new class('ABC'){
    public $x = 100;
    function display(){
        echo $this->x;
    }
};
$demo->display();*/



?>

</body>

<footer>
    <div>Contact me at : $telegram...</div>
</footer>

</html>

