<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Tautan;
use App\Models\Agenda;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!App::runningInConsole()) {
            $tautan = \App\Models\Tautan::all();
            View::share('tautan', $tautan);

            $agendas = Agenda::all()->map(function ($agenda) {
                return [
                    'title' => $agenda->name,
                    'start' => $agenda->date_start . 'T' . $agenda->time_start,
                    'end'   => $agenda->date_end . 'T' . $agenda->time_end,
                    'description' => $agenda->desc,
                    'lokasi' => $agenda->lokasi,
                    'color' => (Carbon::parse($agenda->date_end)->lt(Carbon::today())
                        ? 'da1e28'
                        : (Carbon::parse($agenda->date_start)->lte(Carbon::today()) && Carbon::parse($agenda->date_end)->gte(Carbon::today())
                            ? 'f1c21b'
                            : '198038'))
                ];
            });

            View::share('agendas', $agendas);
        }
    }
}
