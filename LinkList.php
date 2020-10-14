<?php
include_once 'Node.php';
//include_once 'Node.php';
//
//class LinkList
//{
//    private $firstNode;
//
//    private $lastNode;
//
//    private $count;
//
//    function __construct(){
//        $this->firstNode = NULL;
//        $this->lastNode = NULL;
//        $this->count = 0;
//    }
//
//    public function insertFirst($data)
//    {
//        $link = new Node($data);
//        $link->next = $this->firstNode;
//        $this->firstNode = $link;
//
//        if ($this->lastNode == NULL)
//            $this->lastNode = $link;
//
//        $this->count++;
//    }
//
//    public function insertLast($data)
//    {
//        if($this->firstNode != NULL){
//            $link = new Node($data);
//            $this->lastNode->next = $link;
//            $link->next = NULL;
//            $this->lastNode = $link;
//            $this->count++;
//        }else {
//            $this->insertFirst($data);
//
//        }
//
//    }
//
//    public function totalNode()
//    {
//        return $this->count;
//    }
//
//    public function readList()
//    {
//        $listData = array();
//        $current = $this->firstNode;
//
//        while ($current != NULL){
//            array_push($listData, $current->readNode());
//            $current = $current->next;
//        }
//        return $listData;
//    }
//}

class LinkList{
    public $firstNode = NULL;
    public $lastNode = NULL;

//    public function __construct($_firstNode, $_lastNode)
//    {
//        $this->lastNode = NULL;
//        $this->firstNode = NULL;
//    }


    public function addFirstNode($data)
    {
        $node = new Node($data);
        if($this->firstNode){
            $node->next =  $this->firstNode;
            $this->firstNode = $node;
        } else{
            $this->firstNode = $node;
            $this->lastNode = $node;
        }
    }

    public function addLastNode($data)
    {
        $node = new Node($data);
        if ($this->lastNode){
            $node->next = $this->lastNode;
            $this->lastNode = $node;
        } else {
            $this->firstNode = $node;
            $this->lastNode = $node;
        }
    }

}