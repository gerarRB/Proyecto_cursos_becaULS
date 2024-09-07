<?php

   use Illuminate\Support\Facades\Route;
   use Illuminate\Support\Facades\Auth;

   // Redirige la ruta raíz al login
   Route::get('/', function () {
       return redirect()->route('login');
   });

   // Registra las rutas de autenticación
   Auth::routes();

   // Ruta para el home
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
