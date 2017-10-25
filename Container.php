<?php
/**
 * Created by PhpStorm.
 * User: saysa
 * Date: 25.10.17
 * Time: 09:44
 */

class Container
{
    protected $params = [];
    protected static $shared;

    public function __construct(array $params = null)
    {
        $this->params = $params;
    }

    public function getLetter() {

        if (!isset(self::$shared['letter'])) {
            $letter = new Letter();
            self::$shared['letter'] = $letter;
        }

        return self::$shared['letter'];
    }
}
