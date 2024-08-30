<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    
    public function index() {

      $region = $this->getApiData();
    
    return view('homePage')->with('cityToUpper', $region['cityToUpper'])
        ->with('active_cases', $region['activeCases'])
        ->with('deaths', $region['deaths'])
        ->with('fatality_rate', $region['fatalityRate'])
        ->with('recoveries', $region['recoveries'])
        ->with('recovery_rate', $region['recoveryRate'])
        ->with('total', $region['total'])
        ->with('last_update', $region['lastUpdate']);
        
    }
    
    public function region_request(Request $req) {

            //<-----------------search select---------------->
            $cityOption = isset($_POST['cityOption']) ? $_POST['cityOption'] : '';
            if (isset($_POST['cityOption'])) {
            $cityOption = $_POST['cityOption'];
            
            //<-----------------json data variables---------------->
            $cityToUpper = strtoupper($cityOption);
            $cityToLower = strtolower($cityToUpper);
            $cityUrl = urlencode($cityToLower);

            $url = "https://covid19-api-philippines.herokuapp.com/api/summary?region=". $cityUrl ."";
       
            $result = file_get_contents($url);
            $jsondata = json_decode($result);
        
            //json data for cases
            $active_cases = $jsondata->data->active_cases;
            $deaths = $jsondata->data->deaths;
            $fatality_rate = $jsondata->data->fatality_rate;
            $recoveries = $jsondata->data->recoveries;
            $recovery_rate = $jsondata->data->recovery_rate;
            $total = $jsondata->data->total;
            $last_update = $jsondata->last_update; 

        } 
            return view('resultPage') -> with('fatality_rate', $fatality_rate)
                                    -> with('deaths', $deaths)
                                    -> with('cityToUpper', $cityToUpper)
                                    -> with('active_cases', $active_cases)
                                    -> with('total', $total)
                                    -> with('last_update', $last_update)
                                    -> with('recovery_rate', $recovery_rate)
                                    -> with('last_update', $last_update)
                                    -> with('recoveries', $recoveries);
    }
    
    private function getApiData() {
        //<-----------------search select---------------->
        $cityOption = 'REGION XI: DAVAO REGION';   

        //<-----------------json data variables---------------->
        $cityToUpper = strtoupper($cityOption);
        $cityToLower = strtolower($cityToUpper);
        $cityUrl = urlencode($cityToLower);

        $url = "https://covid19-api-philippines.herokuapp.com/api/summary?region=". $cityUrl ."";
   
        $result = file_get_contents($url);
        $jsondata = json_decode($result);
    
        //json data for cases
        $active_cases = $jsondata->data->active_cases;
        $deaths = $jsondata->data->deaths;
        $fatality_rate = $jsondata->data->fatality_rate;
        $recoveries = $jsondata->data->recoveries;
        $recovery_rate = $jsondata->data->recovery_rate;
        $total = $jsondata->data->total;
        $last_update = $jsondata->last_update; 

        //variables    
        return ['cityToUpper' => $cityToUpper,
                'activeCases' => $active_cases, 
                'deaths' => $deaths,   
                'fatalityRate' => $fatality_rate, 
                'recoveries' => $recoveries, 
                'recoveryRate' => $recovery_rate, 
                'total' => $total, 
                'lastUpdate' => $last_update];
    }
 }

