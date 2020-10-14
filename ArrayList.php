<?php


class ArrayList
{
    public $arrayList;

    public function __construct($arr = '')
    {
        if (is_array($arr) == true){
            $this->arrayList = $arr;
        } else $this->arrayList = Array();
    }

    public function add($item)
    {
        array_push($this->arrayList,$item);
    }

    public function remove($item)
    {
        array_splice($this->arrayList,$item,1);
    }

    public function isInterger($toCheck)
    {
        return is_numeric($toCheck);
    }

    public function get($index)
    {
        if($this->isInterger($index)){
            return $this->arrayList[$index];
        } else die("Error");
    }


}