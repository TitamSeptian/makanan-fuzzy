<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuzzyHargaControoler extends Controller
{
    public function __construct()
    {
        $this->down = 10000;
        $this->middle = 20000;
        $this->upper = 50000;

    }

    public function murah(x)
    {
        if(x<=$this->down){
            return 1;
        }else if(x>=20000){
            return 0
        }else{
            return ($this->down-x)/($this->middle-$this->down)
        }
    }

    public function normal(x)
    {
        if(x<=$this->down || x>=$this->upper){
            return 0;
        }else if(x>=$this->down && x<=$this->middle){
            return (x-$this->down)/($this->middle-$this->down)
        }else if(x>=$this->middle && x <=$this->upper){
            return ($this->upper-x)/($this->upper-$this->middle))
        }else{
            return 1;
        }
    }

    public function mahal(x)
    {
        if(x<=$this->middle){
            return 0;
        }else if(x>=$this->upper){
            else 1;
        }else{
            return (x-$this->middle)/($this->upper-$this->middle)
        }
    }
}
