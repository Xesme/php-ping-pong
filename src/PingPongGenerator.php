<?php

class PingPongGenerator
{
    public $number;
    public $output_num;

    function __construct($number)
    {
        $this->number = $number;
        $this->output_num = $output_num;
    }

    function getNumber()
    {
        $this->number = $number;
    }

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

    function makePingPong($new_input)
    {
        $number = $this->number;
        $output_num = array();
        for ($i = 1; $i <= $number; $i++) {
            array_push($output_num, $i);
        };
        for ($i = 0; $i <sizeof($output_num); $i++)
        {
            if (([$i] % 15 == 0)) {
                $output_num[$i] = "ping-pong";
            }
            if (([$i] % 3 == 0)) {
                $output_num[$i] = "ping";
            }
            if (([$i] % 5 == 0)) {
                $output_num[$i] = "pong";
            }
        }
            return $output_num;


    }
}
?>
