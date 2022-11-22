<?php

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

/**
 * Register Backend routes before all user routes.
 */
App::before(function ($request) {

    /**
     * @event backend.beforeRoute
     * Fires before backend routes get added
     *
     * Example usage:
     *
     *     Event::listen('backend.beforeRoute', function () {
     *         // your code here
     *     });
     *
     */
    Event::fire('backend.beforeRoute');

    /*
     * Other pages
     */
    Route::group([
            'middleware' => ['web'],
            'prefix' => Config::get('cms.backendUri', 'backend')
        ], function () {
            Route::any('{slug}', 'Backend\Classes\BackendController@run')->where('slug', '(.*)?');
        })
    ;

    /*
     * Entry point
     */
    Route::any(Config::get('cms.backendUri', 'backend'), 'Backend\Classes\BackendController@run')->middleware('web');

    /**
     * @event backend.route
     * Fires after backend routes have been added
     *
     * Example usage:
     *
     *     Event::listen('backend.route', function () {
     *         // your code here
     *     });
     *
     */
      
      Event::fire('backend.route');

      Route::get('/resi/{resi?}', function ($resi) {
            $url = 'http://dashboard.fourcargo.id/api/tracking?no_resi=' . $resi; 
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Host: dashboard.fourcargo.id',
                'Key: extfourc_ySFEe5hs06W0LZOTiM6fFKk5iw77kaGJz7Ng8Jy3QHM',
                'Content-Type: application/json'
            ]);
            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response, true);
            
            return $data;
        });

        Route::post('/handleContact', function(Request $request) {
            $name = $request->input("nama");
            $email = $request->input("email");
            $phone = $request->input("phone");
            $message = $request->input("message");

            $to = "customercare@fourcargo.id";
            $subject = "Customer Fourcargo";
            $txt = "Message : $message";
            $headers =  'MIME-Version: 1.0' . "\r\n"; 
            $headers .= "From: Your name <$email>" . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            mail($to,$subject,$txt,$headers);

            return Redirect::to("/contact")->with("Succes", "Pesan Berhasil Dikirim");
        });
    
    
      
        // Route::post('/coba', function () {
    // });

});
