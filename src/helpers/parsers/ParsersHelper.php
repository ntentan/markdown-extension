<?php
namespace ntentan\extensions\markdown\helpers\parsers;

use ntentan\views\helpers\Helper;

class ParsersHelper extends Helper
{
    public function help($args)
    {
        $parsedown = new \Parsedown();
        return $parsedown->text($args);
    }
}
