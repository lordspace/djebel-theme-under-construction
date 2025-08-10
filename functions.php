<?php

$obj = new QQ_Theme();

//Dj_App_Hooks::addFilter('app.core.request.segments', [ $obj, 'maybeCorrectSegments' ]);
Dj_App_Hooks::addFilter('app.core.request.web_path', [ $obj, 'updateWebPath' ]);
Dj_App_Hooks::addFilter('app.themes.current_page', [ $obj, 'maybeAddLangPrefix' ]);

Dj_App_Hooks::addAction('app.core.theme.setup', [ $obj, 'maybeRedirect' ]);

class QQ_Theme {
    /**
     * @param string $web_path
     * @return string
     */
    public function updateWebPath($web_path)
    {
        if (!preg_match('#/(en|bg)$#si', $web_path)) {
            $web_path .= '/en';
        }

        return $web_path;
    }

    /**
     * @param string $web_path
     * @return string
     */
    public function maybeCorrectSegments($segments)
    {
        // rm from segments so
        if (!empty($segments[0]) && in_array($segments[0], [ 'en', 'bg'])) {
            array_shift($segments);
        }

        return $segments;
    }

    /**
     * @param string $page
     * @return string
     */
    public function maybeAddLangPrefix($page)
    {
        // if it doesn't have a prefix add it. this is for loading the file
        // it's either en or en/page
        if (!preg_match('#^/?(en|bg)(/|$)#si', $page, $matches)) {
            $page = 'en/' . $page;
        }

        return $page;
    }

    /**
     * @param $data
     * @param $ctx
     * @return array
     */
    public function maybeRedirect($ctx = [] )
    {
        $req_obj = Dj_App_Request::getInstance();
        $segment1 = $req_obj->segment1;

        // if it doesn't have a prefix add it. this is for loading the file
        // it's either en or en/page
        if (empty($segment1) || !preg_match('#^/?(en|bg)(/|$)#si', $segment1, $matches)) {
            $web_path = $req_obj->getWebPath(); // one of the funcs above should add en
            $req_obj->redirect($web_path);
        }
    }
}
