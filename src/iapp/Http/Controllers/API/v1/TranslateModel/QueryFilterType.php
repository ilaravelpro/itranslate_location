<?php
/**
 * Author: Amir Hossein Jahani | iAmir.net
 * Last modified: 3/1/21, 12:08 PM
 * Copyright (c) 2021. Powered by iamir.net
 */

namespace iLaravel\iTranslateLocation\iApp\Http\Controllers\API\v1\TranslateModel;


trait QueryFilterType
{
    public function query_filter_type($model, $filter, $params, $current)
    {
        return $current;
    }
}
