<?php namespace LaravelMPD;

use Illuminate\Support\Facades\Facade;

class LaravelMPDFacade extends Facade {

        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor() { return 'lxmpd'; }
}
