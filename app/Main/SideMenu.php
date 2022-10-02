<?php

namespace App\Main;

class SideMenu{
    // List of all the menu items
    public static function menu(){
        return[

            'dashboard'=>[
                'icon'=>'home',
                'title'=>'Dashboard',
                'route_name'=>'dashboard',
                'params'=>[
                    'layout'=>'side-menu',
                ],
            ],
            'devider',
            'registro'=>[
                'icon'=>'edit',
                'title'=>'Registro',
                'sub_menu'=>[
                    'reg-delito' => [
                        'icon' => 'edit',
                        'route_name' => 'form-delito',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Registrar delito'
                    ],
                    'reg-individuo' => [
                        'icon' => 'edit',
                        'route_name' => 'form-individuo',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Registrar individuo'
                    ]
                ],
            ],

        ];
    }
}
