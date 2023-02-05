<?php

namespace Solid\Examples\LSP;

class BaseGenerator
{
    public function generate($value)
    {
        return $value;
    }
}

class ChildGenerator1 extends BaseGenerator
{
    public function generate($value)
    {
        if ($value < 0) {
            throw new \Exception('Incorrect value');
        }
        return $value;
    }
}

class ChildGenerator2 extends BaseGenerator
{
    public function generate($value, $value2 = null)
    {
        if ($value < 0) {
            $value = null;
        }
        return $value;
    }
}

class ChildGenerator3 extends BaseGenerator
{
    public function generate($value)
    {
        return [$value];
    }
}

class Main
{
    public function handle(BaseGenerator $generator): int
    {
        return $generator->generate(-2);
    }
}

$main = new Main();
$base = new BaseGenerator();
$value = $main->handle($base);
var_dump($value);

$child = new ChildGenerator1();
$value = $main->handle($child);
var_dump($value);

$child = new ChildGenerator2();
$value = $main->handle($child);
var_dump($value);

$child = new ChildGenerator3();
$value = $main->handle($child);
var_dump($value);


