<?php
/**
 * Created by PhpStorm.
 * User: saysa
 * Date: 25.10.17
 * Time: 09:46
 */

class Registry
{
    private static $instances = [];

    /**
     * Tries to get an instance
     *
     * @param $key
     *
     * @return mixed|null
     */
    public static function get( $key ) {

        if ( isset( self::$instances[ $key ] ) ) {
            return self::$instances[ $key ];
        }

        return null;
    }

    /**
     * Set an instance in the Registry
     *
     * @param $key
     * @param null $instance
     */
    public static function set( $key, $instance = null ) {
        self::$instances[ $key ] = $instance;
    }
}
