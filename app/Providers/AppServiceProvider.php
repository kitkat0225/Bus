<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Menu;
use Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = array();
        $pmenus = Menu::where('pid', 1)->orderBy('order_num', 'asc')->get();
        foreach( $pmenus as $pmenu ) {
            $new_pmenu = Menu::get_children($pmenu);
            array_push($menus, $new_pmenu);
        }
        // die(print_r($menus[1]['children']));
        View::share('super_menus', $menus);

        $company_menus = array();
        $company_pmenus = Menu::where('pid', 2)->get();
        foreach( $company_pmenus as $company_pmenu ) {
            $new_company_pmenu = Menu::get_children($company_pmenu);
            array_push($company_menus, $new_company_pmenu);
        }
        // die(print_r($menus[1]['children']));
        View::share('company_menus', $company_menus);
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
