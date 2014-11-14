<?php
namespace ntentan\extensions\markdown\helpers\parsers;

use ntentan\views\helpers\Helper;

class ParsersHelper extends Helper
{
    public function help($args)
    {
        require "plugins/markdown/php-markdown/markdown.php";
        return Markdown($args);
    }
}
