<?php
namespace demo2;
// tôi có 1 class với tên là DemoModel
// tên của Class thì trùng với tên File
class DemoModel {
    // properties : thuộc tính - biến
    // từ khoá thể hiện level access - mức độ truy cập
    public $name; // cho phép truy cập từ bên ngoài - trong dự án
    public $mssv;
    private $address; // truy cập nội bộ class
    // closure
    protected $numberPhone; // được phép truy cập từ bên ngoài
    // nhưng phải cùng cấp thư mục
    public $age;
    // phương thức khởi tạo - contructor



    // methods - function - phương thức - hàm
    /**
     * @param $name
     * @param $mssv
     * @param $address
     * @param $numberPhone
     * @param $age
     */
    // gán giá trị mặc định cho tham số của hàm contruct
    public function __construct($name, $mssv = '01234', $address, $numberPhone, $age)
    {
        $this->name = $name;
        $this->mssv = $mssv;
        $this->address = $address;
        $this->numberPhone = $numberPhone;
        $this->age = $age;
    }
    public function __construct2($name, $mssv = '01234', $address)
    {
        $this->name = $name;
        $this->mssv = $mssv;
        $this->address = $address;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        // được gọi khi đối tượng ko còn được tham chiếu nữa
        // gọi câu lệnh unset ở bên ngoài
        echo 'Destruct';
    }

    public function displayInfo(){
        echo $this->name;
    }



    function get_data_by_name($param){
        return $param . ' - checked ';
    }
}


