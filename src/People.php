<?php
namespace Huuhu\Php83813;

class People
{
    public $name= 'HUy Nguyen';
    public $add = 'binh nguyen vo tan';

    function print(){
        echo $this->name . ' - '. $this->add . '<br>';
    }
}