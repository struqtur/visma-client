<?php

namespace Struqtur\VismaEAccounting\Model;

class ODataQueryFilter
{
    public $param = '$filter';
    public $filter;

    public function __construct(string $filter)
    {
        $this->filter = $filter;
    }
}
