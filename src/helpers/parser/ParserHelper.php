<?php
namespace ntentan\extensions\markdown\helpers\parser;

use ntentan\honam\Helper;

class ParserHelper extends Helper
{
    public function help($args)
    {
        $parsedown = new \Parsedown();
        return $parsedown->text($args);
    }
}
