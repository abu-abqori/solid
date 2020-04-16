<?php

class ModernPrinter implements Printable, Scanable, Copyable
{

    function print()
    {
        print("I'm printing...");
    }

    function scan()
    {
        print("I'm scanning...");
    }

    function copy()
    {
        print("I'm copying...");
    }
}
