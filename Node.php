<?php


class Node
{
    public $data;

    public $next;

    function __construct($_data){
        $this->data = $_data;
        $this->next = NULL;
    }

    function readNode(){
        return $this->data;
    }
}