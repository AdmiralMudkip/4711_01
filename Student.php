<?php
//all directly copied.  Nothing too interesting, some setters and basic functions.
//Although it's nice not to have class variables, and they can be created in the ctor 
//without types.
class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
        $total += $value;
        return $total / count($this->grades);
    }
    
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}