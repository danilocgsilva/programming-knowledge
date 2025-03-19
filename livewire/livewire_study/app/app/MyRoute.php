<?php

namespace App;

use Illuminate\Support\Facades\Route;

class MyRoute
{
    public function __construct(
        public readonly string $name,
        public readonly RouteList $routeList,
        public readonly ?string $routeAddress = null
    ) {}

    public function set()
    {
        Route::get($this->getRouteAddress(), function () {
            return view($this->name, ["routeList" => $this->routeList]);
        })->name($this->name);
    }

    private function getRouteAddress(): string
    {
        $routeAddress = $this->routeAddress ?? "/" . $this->name;
        return str_replace("-", "_", $routeAddress);
    }
}