<?php

class PingPongGenerator
{

    public $output_num = array();

    // function __construct($number)
    // {
    //     $this->number = $number;
    //     $this->output_num = $output_num;
    // }
    //
    // function getNumber()
    // {
    //     $this->number = $number;
    // }

    // function setNumber($new_number)
    // {
    //     $this->number = $new_number;
    //     return $new_number;
    // }

    //
    // function setNumer($number)
    // {
    //     $this->number = "";
    // }

    function makePingPong($input)
    {
        for ($i = 1; $i <= $input; $i++)
        {
            if ($i % 15 == 0) {
                array_push($this->output_num, "ping-pong");
            }
            elseif ($i % 3 == 0) {
                array_push($this->output_num, "ping");
            }
            elseif ($i % 5 == 0) {
                array_push($this->output_num, "pong");
            }
            else {
                array_push($this->output_num, $i);
            }
        }
            return $this->output_num;
    }
}
?>
