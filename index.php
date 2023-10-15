<?php

// 1. Arrays - Ordered collections of elements.
$myArray = array(1, 2, 3, 4, 5);
$associativeArray = array(
    "name" => "John",
    "age" => 30,
);

// 2. Lists (PHP 7.1+) - Ordered collections similar to arrays.
$myList = [1, 2, 3, 4, 5];

// 3. Associative Arrays - Arrays with named keys.
$person = [
    "name" => "Alice",
    "age" => 25,
];

// 4. Multidimensional Arrays - Arrays of arrays.
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

// 5. Strings - Sequence of characters.
$myString = "Hello, World!";

// 6. Stacks (Using Arrays) - Last In, First Out (LIFO) data structure.
$stack = [];
array_push($stack, "item1");
array_push($stack, "item2");
$topItem = array_pop($stack);

// 7. Queues (Using Arrays) - First In, First Out (FIFO) data structure.
$queue = [];
array_push($queue, "item1");
array_push($queue, "item2");
$frontItem = array_shift($queue);

// 8. Linked Lists (Custom Implementation) - Linear data structure with nodes.
class Node {
    public $data;
    public $next;
    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;
    public function __construct() {
        $this->head = null;
    }
}

// 9. Sets (Using Arrays) - Collections of unique elements.
$mySet = [1, 2, 3, 4, 5];
$mySet = array_unique($mySet);

// 10. Maps (Using Associative Arrays) - Key-value pairs.
$myMap = [
    "key1" => "value1",
    "key2" => "value2",
];

// 11. Queues (Using SplQueue - PHP SPL) - Queue data structure using the Standard PHP Library (SPL).
$queue = new SplQueue();
$queue->enqueue("item1");
$queue->enqueue("item2");
$frontItem = $queue->dequeue();

// 12. Stacks (Using SplStack - PHP SPL) - Stack data structure using PHP SPL.
$stack = new SplStack();
$stack->push("item1");
$stack->push("item2");
$topItem = $stack->pop();

// 13. SplDoublyLinkedList (PHP SPL) - Doubly linked list using PHP SPL.
$doublyLinkedList = new SplDoublyLinkedList();
$doublyLinkedList->push("item1");
$doublyLinkedList->push("item2");
$doublyLinkedList->shift();
$doublyLinkedList->pop();

// 14. SplObjectStorage (PHP SPL) - Object storage using PHP SPL.
$objectStorage = new SplObjectStorage();
$object1 = new stdClass();
$object2 = new stdClass();
$objectStorage[$object1] = "Data for Object 1";
$objectStorage[$object2] = "Data for Object 2";

// 15. Tuples (Using Arrays) - Ordered collections with a fixed number of elements.
$tuple = [1, "apple", 3.14];

// 16. Priority Queue (Using SplPriorityQueue - PHP SPL) - Priority queue using PHP SPL.
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("item1", 1);
$priorityQueue->insert("item2", 2);
$topItem = $priorityQueue->extract();

// 17. Trees (Custom Implementation or Libraries like PHPLikeTree) - Hierarchical data structures.
// 18. Graphs (Custom Implementation or Libraries like JMG) - Representing complex relationships between data.

?>
