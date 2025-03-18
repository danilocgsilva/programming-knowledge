<?php

namespace App;

class RouteList
{
    public readonly array $list;
    
    public function __construct() {
        $this->list = [
            new MyRoute("welcome", "/"),
            new MyRoute("counter"),
            new MyRoute("counter-hurry")
        ];
    }
}
