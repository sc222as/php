<?php

namespace model;
class date
{
    public function getdate() {
    setlocale(LC_ALL, 'sve');
    $foo = strftime("%A, den %d %B �r %Y. Klockan �r [%X]");
    echo $foo;
    }
 
}
?> 