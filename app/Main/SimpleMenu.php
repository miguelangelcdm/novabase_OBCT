<?php

namespace App\Main;

class SimpleMenu{
    //List of simple menu items
    public static function menu(){
        return[
            'dashboard'=>[
                'icon'=>'home',
                'title'=>'Dashboard',
                'route_name'=>'/dashboard',
                'params'=>[
                    'layout'=>'side-menu',
                ],
            ],

        ];
    }
}
