<?php

class PingPongGenerator
{
    public $number;

    function __construct($number)
    {
        $this->number = $number;
    }

    function getNumber()
    {
        $this->number = $number;
    }

    function setNumber($new_number)
    {
        $this->number = $new_number;
        return $new_number;
    }

    //
    // function setNumer($number)
    // {
    //     $this->number = "";
    // }

    // function makePingPong($this_num)
    // {
    //     $number = $this_num;
    //     $output_num = [];
    //     for ($i = 1; $i <= $this_num; $i++) {
    //         array_push($output_num, $i);
    //     };
    //     for ($i = 0; $i <sizeof($output_num); $i++)
    //     {
    //         if (($this_num % 15 == 0)) {
    //             return "ping-pong";
    //         }
    //         if (($this_num % 3 == 0)) {
    //             return "ping";
    //         }
    //         if (($this_num % 5 == 0)) {
    //             return "pong";
    //         }
    //     }
    //         return $output_num;
    //         echo $output_num;
    //
    // }
}
?>
