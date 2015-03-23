<?php

namespace Framework\Controller\Front;

use Controller\Controller_Front;

class Page extends Controller_Front
{
    public function home()
    {
        $page = \Model\Page::find(1);
        return $this->display($page);
    }

    public function show()
    {
        $page = $this->param('page');
        return $this->display($page);
    }

    private function display($page)
    {
        echo $page->title;
    }
}