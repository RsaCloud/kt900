<?php


class Zebra_Form_UserDefined extends Zebra_Form_Control
{
    var $html = '';

    function __construct($html)
    {
        $this->html = $html;
    }

    function toHTML()
    {
        return $this->html;
    }

}

?>
