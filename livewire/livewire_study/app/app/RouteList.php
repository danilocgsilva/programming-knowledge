<?php

namespace App;

class RouteList
{
    public readonly array $list;
    
    public function __construct() {
        $this->list = [
            new MyRoute("welcome", "/"),
            new MyRoute("counter"),
            new MyRoute("counter-hurry"),
            new MyRoute("input-live"),
            new MyRoute("input-live-faster"),
            new MyRoute("input-live-slower"),
            new MyRoute("turn-on-off"),
            new MyRoute("list-greetings"),
            new MyRoute("list-greetings-value"),
            new MyRoute("car-brands"),
            new MyRoute("multiple-greetings"),
            new MyRoute("plus-and-minus"),
            new MyRoute("all-uppercase-input"),
            new MyRoute("nesting"),
            new MyRoute("refresh-time"),
            new MyRoute("plus-minus-increments"),
            new MyRoute("nesting2/say-hi"),
            new MyRoute("nesting3"),
            new MyRoute("nesting-id"),
        ];
    }
}
