<?php

namespace App\Model;

use FW\Orm\Model;
use FW\Orm\Traits\Url;

class Page extends Model
{
    use Url;

    static protected $_prefix = 'page';
    protected static $_table = 'page';
    public $id;
    public $title;
}