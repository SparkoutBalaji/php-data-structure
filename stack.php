<?php
//Stack Class
class Stack {
    public $_items = array(); //elements are saved as a array

    public function push($value = NULL) {
        array_push($this->_items, $value);
        return "Push : ".$value."<br/>";
    }

    public function pop() {
        return "Pop : ".array_pop($this->_items)."<br/>";
    }

    public function peek() {
        return "Peek : ".end($this->_items)."<br/>";
    }

	public function size() {
		return "size : ".count($this->_items)."<br/>";
	}

	public function isEmpty() {
   
		return "Empty or Not : ".empty($this->_items)."<br/>";
  
	}
}

$stack = new Stack; 
echo $stack->push(1); //push the item to top of the stack
echo $stack->push(2);
echo $stack->push(3);
echo $stack->push(4);
echo $stack->push(5);
echo $stack->push(6);
echo $stack->push(7);
echo $stack->push(8);
echo $stack->push(9);
echo $stack->push(10);

echo "<br/>";

echo $stack->pop(); //remove the element from top of the stack
echo $stack->pop();
echo $stack->pop();

echo "<br/>";

echo $stack->peek(); //return the element - top of the stack

echo "<br/>";

echo $stack->size(); //return size of the total elements in the stack

echo "<br/>";

echo $stack->isEmpty(); //return stack is empty or not


?>