<?php

namespace App\Http\Controllers;

use App\Library\Services\RootApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Functions related to the logged in user.
 */
class DialogFlowController extends Controller
{
    private $rootApi;

    /**
     * Create a new controller instance.
     *
     * @param RootApi $rootApi
     */
    public function __construct(RootApi $rootApi)
    {
        $this->rootApi = $rootApi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function webhook()
    {
        return new JsonResponse([
            "speech" => "Hey, you've reached our webhook, but we don't know what to do with your request.",
            "displayText" => "Hey, you've reached our webhook, but we don't know what to do with your request."
        ]);
    }
}
