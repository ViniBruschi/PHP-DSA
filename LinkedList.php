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

    public function __construct($value) {
        $new_node = new Node($value);
        $this->head = $new_node;
        $this->tail = $new_node;
        $this->length = 1;
    }

    public function append($value) {
        $new_node = new Node($value);
        $this->tail->next = $new_node;
        $this->tail = $new_node;
        $this->length++;
    }
}

$my_linked_list = new LinkedList(4);
$my_linked_list->append(5);
$my_linked_list->append(10);
$my_linked_list->append(6);

echo 'Head: ' . $my_linked_list->head->value . "\n";
echo 'Tail: ' . $my_linked_list->tail->value . "\n";
echo 'Length: ' . $my_linked_list->length . "\n";

?>