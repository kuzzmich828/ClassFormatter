#!/usr/bin/env php
<?php

class A
{
    protected static function sayHi()
    {
        return 'Hello';
    }

    public static function className()
    {
        return static::sayHi();
    }
}

class B extends A
{
    protected static function sayHi()
    {
        return 'Hi';
    }
}

var_dump(A::className());
var_dump(B::className());
