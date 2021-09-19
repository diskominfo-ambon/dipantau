<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

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
        Response::macro('ok', function (array $data, int $status, bool $json, ?string $message) {

            $response = [
                'status' => $status,
                'data' => $data,
                'message' => $message,
                'error' => false,
            ];

            if ($json) {
                return Response::json($response, $status);
            }

            return Response::make($response, $status);
        });


        Response::macro('error', function (array $data, int $status, bool $json, ?string $message) {

            $response = [
                'status' => $status,
                'data' => $data,
                'message' => $message,
                'error' => true,
            ];

            if ($json) {
                return Response::json($response, $status);
            }

            return Response::make($response, $status);
        });



    }
}
