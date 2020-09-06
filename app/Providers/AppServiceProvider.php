<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //schema::defaultStringlength(191);
        view()->composer('layouts.index.index-simple',function($view)
        {
            $categories=\App\Category::where('cat_id','-')->get();
            $companies=\App\Company::all();
            $about=\App\about::first();
            $view->with(compact('categories','companies','about'));
        });
        view()->composer('layouts.index.slider',function($view)
        {
            $images=\App\slide::all();
            $view->with(compact('images'));
        });
        view()->composer('layouts.index.instagram',function($view)
        {
            $companies=\App\company::take(5)->get();
            $view->with(compact('companies'));
        });
        view()->composer('layouts.index.new_product_nav_right',function($view)
        {
            $products=\App\product::latest()->take(4)->get();
            $view->with(compact('products'));
        });
        view()->composer('layouts.index.image_width',function($view)
        {
            $random=random_int(1,11);
            $view->with(compact('random'));
        });
        view()->composer('layouts.index.product-8',function($view)
        {
            $news=\App\product::orderby('id','desc')->take(8)->get();
            $orders=\App\product::orderBy('orde','desc')->take(8)->get();
            $seens=\App\product::orderBy('seen','desc')->take(8)->get();
            $view->with(compact('news','orders','seens'));
        });
        view()->composer('layouts.nav-right',function($view)
        {
            $count_comment=\App\comment::where('state1','1')->where('state','0')->get()->Count();
            $count_web=\App\comment::where('state1','0')->get()->Count();
            $view->with(compact('count_comment','count_web'));
        });
    }
    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        //
    }
}
