<?php

namespace App\Providers;

use App\Area;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Reporte' => 'App\Policies\ReportePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('informatica', function ($user) {
            $user_id = $user->id;
            $info_id = Area::informatica()->value('id');
            $area_user = DB::table('area_user')->where('user_id', $user_id)->value('area_id');
            if ($area_user == $info_id) {
                return true;
            } else {
                return false;
            }
        });
    }
}
