<?php

//include_once 'LinkList.php';
//
//$linkedList = new LinkList();
//
//$linkedList->addFirstNode(10);
//$linkedList->addFirstNode(11);
//$linkedList->addFirstNode(12);
//$linkedList->addFirstNode(13);
//$linkedList->addFirstNode(14);
//print_r($linkedList);

include_once 'ArrayList.php';

$list = new ArrayList();
$list->add(10);
$list->add(11);
$list->add(12);
$list->add(13);
$list->add(14);

$list->remove(1);

var_dump($list);