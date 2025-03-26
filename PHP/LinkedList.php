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

    function printList() {
        $temp = $this->head;
        while ($temp != NULL) {
            echo 'Node:'.$temp->value."\n";
            $temp = $temp->next;
        }
    }

    function pop() {
        if ($this->length == 0) {
            return;
        }
        else if ($this->length == 1) {
            $value = $this->head->value;
            $this->head = null;
            $this->tail = null;
            $this->length = 0;
            echo 'Removido'.$value."\n";
        }
        else {
            $temp = $this->head;
            while ($temp->next != $this->tail) {
                $temp = $temp->next;
            }
            $value = $this->tail->value;
            $this->tail = $temp;
            $this->tail->next = null;
            $this->length--;
            echo 'Removido:'.$value."\n";
        }
    }
}

$my_linked_list = new LinkedList();
$my_linked_list->append(5);
$my_linked_list->append(10);
$my_linked_list->append(6);

$my_linked_list->printList();

$my_linked_list->pop();

$my_linked_list->printList();
?>