<?php

use App\Http\Controllers\adm\AdmController;
use Illuminate\Support\Facades\Route;

/* Grupos de Rotas a área Administrativa */
Route::prefix('/adm')->group(function () {
        Route::get("/",[
            AdmController::class,"index"
        ])->name("index.adm");
        
        Route::get("/pdf/adicionar",[
            AdmController::class,"adicionarpdf"
        ])->name("adm.pdf");
        Route::get("/pdf/adiciona",[
            AdmController::class,"adicionapdf"
        ])->name("adm.pdfadd");
    
    });
