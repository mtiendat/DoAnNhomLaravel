<?php

namespace App\Providers;

use App\Models\LoaiSP;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('user.header.header_top', function ($view) {
			$loai_sp = LoaiSP::all();
			$view->with('loai_sp', $loai_sp);
		});

        Schema::defaultStringLength(191);
    }
}
