<?php

/**
 * A PHP reference is an alias, which allows two different variables to write to the same value. 
 * In PHP, an object variable doesn't contain the object itself as value. 
 * It only contains an object identifier which allows object accessors to find the actual object. 
 * When an object is sent by argument, returned or assigned to another variable, the different variables are not aliases: 
 * they hold a copy of the identifier, which points to the same object. 
 */

//  References and Objects
class A
{
    public $foo = 1;
}

$a = new A;
$b = $a;     // $a and $b are copies of the same identifier
// ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo . "\n";


$c = new A;
$d = &$c;    // $c and $d are references
// ($c,$d) = <id>

$d->foo = 2;
echo $c->foo . "\n";


$e = new A;

function foo($obj)
{
    // ($obj) = ($e) = <id>
    $obj->foo = 2;
}

foo($e);
echo $e->foo . "\n";
