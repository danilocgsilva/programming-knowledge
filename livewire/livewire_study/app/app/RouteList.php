<?php

namespace App;

class RouteList
{
    public readonly array $list;
    
    public function __construct() {
        $this->list = [
            new MyRoute("welcome", $this, "/"),
            new MyRoute("counter", $this),
            new MyRoute("counter-hurry", $this),
            new MyRoute("input-live", $this),
            new MyRoute("input-live-faster", $this),
            new MyRoute("input-live-slower", $this),
            new MyRoute("turn-on-off", $this),
            new MyRoute("list-greetings", $this),
            new MyRoute("list-greetings-value", $this),
            new MyRoute("car-brands", $this),
            new MyRoute("multiple-greetings", $this),
        ];
    }
}
