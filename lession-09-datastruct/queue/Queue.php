<?php
require('Element.php');

class Queue
{
    public $font = null;
    public $back = null;

    /**
     * Check whether the queue is empty or not
     * @return boolean
     * public function isEmpty(){ return false; }  //stub
     */
    public function isEmpty()
    {
        if ($this->font == null) {
            return true;
            # code...
        }
        return false;

        //return $this->font == null;
    }

    /**
     * Insert element at the back of queue
     * @param $value
     * public function enqueue($value){} //stub
     */
    public function enqueue($gia_tri_truyen_vao)
    {
        $oldBack = $this->back;
        //$this->back = new Element();
        $element = new Element();
        //$this->back->value = $value;
        $element->value = $gia_tri_truyen_vao;
        $this->back = $element;




        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    /**
     * Remove element from the font of queue
     * @return $value
     * public function dequeue(){ return 0; } //stub
     */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}