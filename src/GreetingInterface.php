<?php


namespace Nacos\Grpc;


interface GreetingInterface
{
    public function sayHello();
    public function sayGoodbye();
    public function say(String $words);
}