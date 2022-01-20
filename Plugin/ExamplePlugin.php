<?php

namespace AHT\HelloWorld\Plugin;

class ExamplePlugin
{

    // public function beforeSetTitle(\AHT\HelloWorld\Controller\Index\Example $subject, $title)
    // {
    //     $title = $title . " to ";
    //     echo __METHOD__ . "</br>";
    //     return [$title];
    // }

    // public function afterGetTitle(\AHT\HelloWorld\Controller\Index\Example $subject, $title)
    // {

    //     echo __METHOD__ . "</br>";

    //     return '<h1>' . $title . 'Mageplaza.com' . '</h1>';
    // }

    public function aroundTinhTong(\AHT\HelloWorld\Controller\Index\Index $subject, callable $proceed , $a = 0, $b = 0)
	{
        // before
		$a = 4;
        $b = 10;
        $result = $proceed($a, $b);
        // $c = $a * $b; 

        // around
        $result = $a * $b; 

        // after
        $result += 10;

		return $result;
	}
}
