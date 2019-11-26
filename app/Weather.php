<?php

namespace App;


use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class Weather
{

    private function appID()
    {
        return $app_id = config("weather.app_id");
    }

    private function appCode()
    {
        return $app_code = config("weather.app_code");
    }

    public function hourlyForecast($lat, $lng)
    {
        $url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_hourly&latitude=" . $lat . "&longitude=" . $lng . "&oneobservation=true&app_id=" . $this->appID() . "&app_code=" . $this->appCode();

        $client = new Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $response = $res->getBody();
            $obj = json_decode($response);
            $forecast = $obj->hourlyForecasts->forecastLocation;

            return $forecast;
        } else {
            abort(403, 'Invalid action.');
        }
    }


    public function dailyForecast($lat, $lng)
    {
        $url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_7days_simple&latitude=" . $lat . "&longitude=" . $lng . "&oneobservation=true&app_id=" . $this->appID() . "&app_code=" . $this->appCode();

        $client = new Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $response = $res->getBody();
            $obj = json_decode($response);
            $forecast = $obj->dailyForecasts->forecastLocation;

            return $forecast;
        } else {
            abort(403, 'Invalid action.');
        }
    }


}
