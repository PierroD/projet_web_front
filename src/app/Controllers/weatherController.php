<?php 

namespace App\Controllers;

use App\Services\authService;
use App\Services\apiService;

class weatherController {

    protected authService $authService;
    protected apiService $apiService;


    public function __construct(authService $authService, apiService $apiService)
    {
        $this->authService = $authService;
        $this->apiService = $apiService;

    }

    public function show() {
        if($this->authService->isAuth()) {
            $response = $this->apiService->sendGet('/ApiProvider/Service/GetCity.php?name='.$this->authService->getUserCity().'');
            echo Controller::getTwig()->render('dashboard.html.twig', ['user' => [
                'name' => $this->authService->getUser()["name"],
                'city' => $this->authService->getUserCity(),
                'isAuth' => $this->authService->getUser()["isAuth"],
            ], 'meteo' => [
               'id' => $response->id,
               'nom' => $response->nom,
               'ventVitesse' => $response->ventVitesse,
               'ventDirection' => $response->ventDirection,
               'leveSoleil' => $response->leveSoleil,
               'coucheSoleil' => $response->coucheSoleil,
               'humidite' => $response->humidite,
               'visibilite' => $response->visibilite,
               'paysCode' => $response->paysCode,
               'temperature' => $response->temperature,
               'conditionMeteo' => $response->conditionMeteo,
               'icon' => $response->icon,
            ]
        ]);    
        } else {
            header('Location: /login');
        }
    }

}