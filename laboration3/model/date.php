<?php

namespace model;
class date
{
    public function getdate() {
    setlocale(LC_ALL, 'sve');
    $foo = strftime("%A, den %d %B år %Y. Klockan är [%X]");
    echo $foo;
    }
 
}
?> 