<?php
class ListNode { 
	public $data = NULL; 
	public $next = NULL; 

	public function __construct(string $data = NULL) { 
		$this->data = $data; 
	} 
}

class LinkedList { 
	private $_firstNode = NULL;
	public $_totalNode = 0;

	public function deleteLast() {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode; 
            if ($currentNode->next === NULL) { 
                $this->_firstNode = NULL;
            } else { 
                $previousNode = NULL;

                while ($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }

                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            } 
        } 
        return FALSE;
    }

	public function deleteFirst() { 
		if ($this->_firstNode !== NULL) { 
			if ($this->_firstNode->next !== NULL) { 
				$this->_firstNode = $this->_firstNode->next; 
			} else { 
				$this->_firstNode = NULL; 
			} 
			$this->_totalNode--;
			return TRUE;
		} 
		return FALSE;
	} 

	public function search(string $data = NULL) { 
		if ($this->_totalNode) { 
			$currentNode = $this->_firstNode; 
			while ($currentNode !== NULL) { 
				if ($currentNode->data === $data) { 
					return $currentNode; 
				} 
				$currentNode = $currentNode->next; 
			} 
		} 
		return FALSE;
	}

	public function insertAtFirst(string $data = NULL) { 
		$newNode = new ListNode($data); 
		if ($this->_firstNode === NULL) {             
			$this->_firstNode = &$newNode;             
		} else { 
			$currentFirstNode = $this->_firstNode; 
			$this->_firstNode = &$newNode; 
			$newNode->next = $currentFirstNode;            
		} 
		$this->_totalNode++; 
		return TRUE; 
	}

	public function insert(string $data = NULL) { 
		$newNode = new ListNode($data); 

		if ($this->_firstNode === NULL) {           
			$this->_firstNode = &$newNode;             
		} else { 
			$currentNode = $this->_firstNode; 
			while ($currentNode->next != NULL) { 
				$currentNode = $currentNode->next; 
			} 
			$currentNode->next = $newNode; 
		} 
		$this->_totalNode++;
		return TRUE;
	} 

	public function display() { 
		echo "Total book titles: ".$this->_totalNode."<br />"; 
		$currentNode = $this->_firstNode; 
		while ($currentNode !== NULL) { 
			echo $currentNode->data . "<br />"; 
			$currentNode = $currentNode->next; 
		} 
	} 
} 