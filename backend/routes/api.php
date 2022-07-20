<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('eletrodomesticos',\App\Http\Controllers\Api\EletrodomesticoController::class);