<?php

namespace Struqtur\VismaEAccounting\Model;

class ODataQueryPaging
{
    public $page;
    public $pageSize;

    public function __construct(int $page, ?int $pageSize = null)
    {
        $this->page = $page;
        $this->pageSize = $pageSize;
    }

    public function getParams()
    {
        $params = array(
            '$page' => $this->page
        );
        if ($this->pageSize) {
            $params['$pageSize'] = $this->pageSize;
        }

        return $params;
    }
}
