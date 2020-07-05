<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {
        $getContents = $this->connectToApi('https://quotes-api-staging.winterwind.com/api/quotes');
        $categories = $this->connectToApi('https://quotes-api-staging.winterwind.com/api/categories');

        $quotes = collect();
        $videos = collect();

        foreach ($getContents as $data) {
            if ($data->type === 'quote') {
                $quotes->push($data);
            }

            if ($data->type === 'video') {
                $videos->push($data);
            }
        }

        return view('index', compact('quotes', 'videos', 'categories'));
    }

    public function connectToApi($url)
    {
        $client = new Client();
        $api_response = $client->request('GET', $url);
        $response = json_decode($api_response->getBody()->getContents());

        return $response;
    }
}
