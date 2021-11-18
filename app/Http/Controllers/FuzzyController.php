<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function __construct($down, $middle, $upper)
    {
        $this->down = $down;
        $this->middle = $middle;
        $this->upper = $upper;
    }

    public function min($x)
    {
        if($x==$this->down){
            return 1;
        }else if($x>=20000){
            return 0;
        }else{
            return ($this->down-$x)/($this->middle-$this->down);
        }
    }

    public function normal($x)
    {
        if($x<=$this->down || $x>=$this->upper){
            return 0;
        }else if($x>=$this->down && $x<=$this->middle){
            return ($x-$this->down)/($this->middle-$this->down);
        }else if($x>=$this->middle && $x <=$this->upper){
            return ($this->upper-$x)/($this->upper-$this->middle);
        }else{
            return 1;
        }
    }

    public function max($x)
    {
        if($x<=$this->middle){
            return 0;
        }else if($x>=$this->upper){
            return 1;
        }else{
            return (x-$this->middle)/($this->upper-$this->middle);
        }
    }
}
