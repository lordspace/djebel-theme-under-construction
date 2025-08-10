<?php

$obj = new QQ_Theme();

Dj_App_Hooks::addFilter('app.core.request.web_path', [ $obj, 'updateWebPath' ]);
Dj_App_Hooks::addFilter('app.themes.current_page', [ $obj, 'maybeAddLangPrefix' ]);

class QQ_Theme {
    public function updateWebPath($web_path)
    {
        if (!preg_match('#/(en|bg)$#si', $web_path)) {
            $web_path .= '/en';
        }

        return $web_path;
    }
    public function maybeAddLangPrefix($page)
    {
        // if it doesn't have a prefix add it. this is for loading the file
        // it's either en or en/page
        if (!preg_match('#^/?(en|bg)(/|$)#si', $page, $matches)) {
            $page = 'en/' . $page;
        }

        return $page;
    }
}
