<?php
if(!function_exists('activeChildNavBar')){
    function activeParentNavBar($parentNav, $className)
    {

        if($parentNav == 'leadManagement'){
            $childElements= [
                'dashboard.leads',
            ];
        }elseif($parentNav == 'contentManagement'){
            $childElements= [
                'dashboard.articles',
                'dashboard.latestNews',
                'dashboard.video-gallery'
            ];
        }elseif($parentNav == 'websiteSettings'){
            $childElements= [
                'dashboard.bulk-sms',
                'dashboard.recaptcha-site-key',
                'dashboard.social-info',
                'dashboard.basic-info'
            ];
        }elseif($parentNav == 'SEO'){
            $childElements= [
                'dashboard.page-tags',
            ];
        }elseif($parentNav == 'userManagement'){
            $childElements= [
                'dashboard.users',
                'dashboard.roles',
            ];
        }

        foreach($childElements as $child){

            if(str_contains(Route::currentRouteName(), $child) == 1)
            {
                return $className;
            }
        }
    }
}
if(!function_exists('activeChildNavBar')){
    function activeChildNavBar($routeName)
    {
        return (str_contains(Route::currentRouteName(), $routeName) == 1) ? 'active' : '';
    }
}
if(!function_exists('getFrontentRouteInfo')){
    function getFrontentRouteInfo()
    {
        $frontendRoutes = [];
        $allRoutes = Route::getRoutes();
        foreach( $allRoutes as $key=>$route){
            if($route->action['namespace'] == 'App\Http\Controllers\Frontend'){
                array_push($frontendRoutes,$route);
            }
        }
        return $frontendRoutes;
    }
}
?>
