<?php

namespace DayCod\Charable;

use Illuminate\Support\Facades\Facade;

class Charable extends Facade
{
    /**
     * Get the registered name of the charable static component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'charable'; }
}
