<?php

class Calculator
{
    public function calc($operator, $num1 = "NULL", $num2 = "NULL")
    {
        if((gettype($num1) !== "integer" && gettype($num1) !== "double")
            || (gettype($num2) !== "integer" && gettype($num2) !== "double"))
        {
            return "Invalid argument type</br>";
        }

        $answer;
        switch($operator)
        {
            case "+":
                $answer = $num1 + $num2;
                return "The calculation is {$num1} {$operator} {$num2}. The answer is {$answer}</br>";

            case "-":
                $answer = $num1 - $num2;
                return "The calculation is {$num1} {$operator} {$num2}. The answer is {$answer}</br>";

            case "*":
                $answer = $num1 * $num2;
                return "The calculation is {$num1} {$operator} {$num2}. The answer is {$answer}</br>";

            case "/":
                if ($num2 === 0)
                {
                    return "The calculation is {$num1} {$operator} {$num2}. This question has no valid answer as you cannot divide by 0 </br>";
                }
                $answer = $num1 / $num2;
                return "The calculation is {$num1} {$operator} {$num2}. The answer is {$answer}</br>";
        }
        return "Worked </br>";
    }

    // public function calc($arg1, $arg2)
    // {
    //     return "Invalid argument list.  1 String and 2 integers required.";
    // }

    // public function calc($arg1)
    // {
    //     return "Invalid argument list.  1 String and 2 integers required.";
    // }
}

?>