<?php


namespace EasySwoole\Validate\Functions;


use EasySwoole\Validate\Validate;


class ActiveUrl extends AbstractValidateFunction
{

    function name(): string
    {
        return 'ActiveUrl';
    }

    function validate($itemData, $arg, $column, Validate $validate):bool
    {

    }
}