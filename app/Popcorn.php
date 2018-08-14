<?php
namespace App;
class Popcorn{
    
    public static function pages()
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $res = $client->request('GET', 'https://tv-v2.api-fetch.website/movies');
        
        if($res->getStatusCode() == 200)
        {
            return $res->getBody();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function movies($page)
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $res = $client->request('GET', 'https://tv-v2.api-fetch.website/movies/' . $page);
        
        if($res->getStatusCode() == 200)
        {
            return $res->getBody();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function random()
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        
        $res = $client->request('GET', 'https://tv-v2.api-fetch.website/random/movie');
        
        if($res->getStatusCode() == 200)
        {
            return $res->getBody();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function watch($id)
    {
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://tv-v2.api-fetch.website/movie/".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "GET",
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            
            if(is_null($response))
            {
                return false;
            }
            else
            {
                return $response;
                return true;
            }       
    }
}