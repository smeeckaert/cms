<?php

namespace Model;

use Orm\Model;
use Orm\Traits\Url;

class Page extends Model
{
    use Url;

    static protected $_prefix = 'page';
    protected static $_table = 'page';
    public $id;
    public $title;
}