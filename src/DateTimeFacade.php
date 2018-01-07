<?php

namespace Reazul\Datetime;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Reazul\Datetime\
 */
class DateTimeFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datetime';
    }
}
