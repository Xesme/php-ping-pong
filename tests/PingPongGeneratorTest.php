<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makePingPong_Ping()
        {
            // Arrange
            $test_PingTest = new PingPongGenerator;
            $input_num = 3;

            // Act
            $output_num = $test_PingTest->makePingPong($input_num);

            //Assert
                $this->assertEquals("ping", $output_num);

        }

        function test_makePingPong_Pong()
        {
            // Arrange
            $test_PongTest = new PingPongGenerator;
            $input_num = 5;

            // Act
            $output_num = $test_PongTest->makePingPong($input_num);

            //Assert
                $this->assertEquals("pong", $output_num);

        }

        function test_makePingPong_PingPong()
        {
            // Arrange
            $test_PingPongTest = new PingPongGenerator;
            $input_num = 15;

            // Act
            $output_num = $test_PingPongTest->makePingPong($input_num);

            //Assert
                $this->assertEquals("ping-pong", $output_num);

        }
    }

?>
