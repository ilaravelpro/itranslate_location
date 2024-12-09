<?php


/**
 * Author: Amir Hossein Jahani | iAmir.net
 * Last modified: 2/2/21, 8:13 AM
 * Copyright (c) 2021. Powered by iamir.net
 */

namespace iLaravel\iTranslateLocation\iApp\Policies;

use iLaravel\Core\Vendor\iRole\iRolePolicy;

class TranslateLocationLinePolicy extends iRolePolicy
{
    public $prefix = 'translate_locations_lines';
    public $model = 'TranslateLocationLine';
}
