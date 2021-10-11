<?php

namespace Core;

class Route {
    public function handleRoute($url = '')
    {
        global $route;


        if ($url != '/') {
            $url = trim($url, '/');
        }
        $url = filter_var($url, FILTER_SANITIZE_URL);

        if(!empty($route)){
            foreach ($route as $key => $value){
                $path = str_replace('/' ,'\/' , $key);
                if(preg_match("/^$path$/" , $url)){
                    $routeTmp = $route[$key];
                    $routeTmp['param'] = preg_replace('~'.$key.'~',  '$1'  , $url);
                    break;
                }
            }
        }

        if (empty($routeTmp)) {
            return [];
        }
        $useStr = arrayGet($routeTmp, 'use');
        $use = explode('@', $useStr);

        $result['c'] = arrayGet($use, 0); // controller
        $result['a'] = arrayGet($use, 1); // action
        $result['m'] = strtoupper(arrayGet($routeTmp, 'method')); // method
        $result['p'] = $routeTmp['param']??[]; // param
        return $result;
    }
}

