<?php

use App\RouteList;

foreach ((new RouteList())->list as $myRoute) {
    $myRoute->set();
}
