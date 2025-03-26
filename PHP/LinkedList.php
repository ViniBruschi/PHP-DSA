<?php

class Node {
    public $value;
    public $next;

    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList {
    public $head;
    public $tail;
    public $length;

    function __construct($value = NULL) {
        if ($value === NULL) {
            $this->head = null;
            $this->tail = null;
            $this->length = 0;
            return;
        }
        $new_node = new Node($value);
        $this->head = $new_node;
        $this->tail = $new_node;
        $this->length = 1;
    }

    function append($value) {
        $new_node = new Node($value);
        if ($this->length == 0) {
            $this->head = $new_node;
            $this->tail = $new_node;
            $this->length++;
            return;
        }
        $this->tail->next = $new_node;
        $this->tail = $new_node;
        $this->length++;
    }

    function printList($list) {
        $temp = $list->head;
        while ($temp != NULL) {
            echo $temp->value."\n";
            $temp = $temp->next;
        }
    }
}

$my_linked_list = new LinkedList();
$my_linked_list->append(5);
$my_linked_list->append(10);
$my_linked_list->append(6);

$my_linked_list->printList($my_linked_list);

// echo 'Head: ' . $my_linked_list->head->value . "\n";
// echo 'Tail: ' . $my_linked_list->tail->value . "\n";
// echo 'Length: ' . $my_linked_list->length . "\n";

?>