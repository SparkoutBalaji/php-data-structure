<?php
//Queue Class
class Queue {
    private $_items = array();

    public function enqueue($value = NULL) {
        array_unshift($this->_items, $value);
        return "Enqueue : ".$value."<br/>";
    }

    public function dequeue() {
        return "Dequeue : ".array_pop($this->_items)."<br/>";
    }

    public function peek() {
        return "Peek : ".end($this->_items)."<br/>";
    }

	public function size() {
		return "Size : ".count($this->_items)."<br/>";
	}

	public function isEmpty() {
		return "Empty : ".empty($this->_items)."<br/>";
	}
}

$queue = new Queue;
echo $queue->enqueue(1); //add the element on the bottom
echo $queue->enqueue(2);
echo $queue->enqueue(3);
echo $queue->enqueue(4);
echo $queue->enqueue(5);
echo $queue->enqueue(6);
echo $queue->enqueue(7);

echo "<br/>";

echo $queue->dequeue(); //remove the element on first entry element

echo "<br/>";

echo $queue->size(); //total size of queue count

echo "<br/>";

echo $queue->peek(); //return the first element

echo "<br/>";

echo $queue->isEmpty(); //return true or false

?>