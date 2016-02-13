<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacebookLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function loginWithFacebook(Request $request)
{
    // get data from request
    $code = $request->get('code');

    // get fb service
    $fb = \OAuth::consumer('Facebook');

    // check if code is valid

    // if code is provided get user data and sign in
    if ( ! is_null($code))
    {
        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken($code);

        // Send a request with it
        $result = json_decode($fb->request('/me'), true);

        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array.
        dd($result);
    }
    // if not ask for permission first
    else
    {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
        return redirect((string)$url);
    }
}

public function loginWithGoogle(Request $request)
{
    // get data from request
    $code = $request->get('code');

    // get google service
    $googleService = \OAuth::consumer('Google');

    // check if code is valid

    // if code is provided get user data and sign in
    if ( ! is_null($code))
    {
        // This was a callback request from google, get the token
        $token = $googleService->requestAccessToken($code);

        // Send a request with it
        $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array.
        dd($result);
    }
    // if not ask for permission first
    else
    {
        // get googleService authorization
        $url = $googleService->getAuthorizationUri();

        // return to google login url
        return redirect((string)$url);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
