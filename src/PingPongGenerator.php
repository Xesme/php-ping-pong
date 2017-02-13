<?php

    class PingPongGenerator
    {
        function makePingPong($input_num)
        {
            // $output_num = [];
            // for ($i = 1; $i <= $input_num; $i++)
                if (($input_num % 15 == 0)) {
                    return "ping-pong";
                }
                if (($input_num % 3 == 0)) {
                    return "ping";
                }
                if (($input_num % 5 == 0)) {
                    return "pong";
                }
                    // $i == "ping";
                // } array_push($output_num, $i);
                // echo $output_num;
        }
    }
 ?>
