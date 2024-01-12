<?php
namespace Huuhu\Php83813;
abstract class People
{
    // trait
    abstract function xemTT();
    abstract function profile();
    static $PI = 3.14;
    const HANGSO = 334;
    public $name= 'HUy Nguyen';
    public $add = 'binh nguyen vo tan';
    private $realName = 'bbbb';

    public function getRealName(): string
    {
        return $this->realName;
    }

    public function setRealName(string $realName): void
    {
        $this->realName = $realName;
    }



    /**
     * @param string $name
     * @param string $add
     */
    public function __construct(string $name,
                                string $add)
    {
        $this->name = $name;
        $this->add = $add;
    }


    function print(){
        echo $this->name . ' - '. $this->add . '<br>';
    }

    final function noOverriding(){
        echo "no OVer ride";
    }
}