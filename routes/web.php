<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;



Route::view('/','index')->name('home');
Route::view('/login','auth.signin')->name('login');
Route::view('/register','auth.signup')->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);
Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');


//Rutas de Cliente
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::post('/clients',[ClientController::class,'store'])->name('clients.store');
Route::get('/clients/{client}',[ClientController::class,'show'])->name('clients.show');
Route::get('/clients/{client}/edit',[ClientController::class,'edit'])->name('clients.edit');
Route::patch('/clients/{client}',[ClientController::class,'update'])->name('clients.update');
Route::delete('/clients/{client}',[ClientController::class,'destroy'])->name('clients.destroy');

//Rutas de Servicio Cliente
Route::get('/tickets',[TicketController::class,'index'])->name('tickets.index');
Route::get('/tickets/create',[TicketController::class,'create'])->name('tickets.create');
Route::post('/tickets',[TicketController::class,'store'])->name('tickets.store');
Route::get('/tickets/{ticket}',[TicketController::class,'show'])->name('tickets.show');
Route::get('/tickets/{ticket}/edit',[TicketController::class,'edit'])->name('tickets.edit');
Route::patch('/tickets/{ticket}',[TicketController::class,'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}',[TicketController::class,'destroy'])->name('tickets.destroy');

//Rutas de Tarea
Route::get('/issues',[IssueController::class,'index'])->name('issues.index');
Route::get('/issues/create',[IssueController::class,'create'])->name('issues.create');
Route::post('/issues',[IssueController::class,'store'])->name('issues.store');
Route::get('/issues/{issue}',[IssueController::class,'show'])->name('issues.show');
Route::get('/issues/{issue}/edit',[IssueController::class,'edit'])->name('issues.edit');
Route::patch('/issues/{issue}',[IssueController::class,'update'])->name('issues.update');
Route::delete('/issues/{issue}',[IssueController::class,'destroy'])->name('issues.destroy');

//Ruta de User
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::patch('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');

//Rutas de Proyecto
Route::get('/projects',[ProjectController::class,'index'])->name('projects.index');
Route::get('/projects/create',[ProjectController::class,'create'])->name('projects.create');
Route::post('/projects',[ProjectController::class,'store'])->name('projects.store');
Route::get('/projects/{project}',[ProjectController::class,'show'])->name('projects.show');
Route::get('/projects/{project}/edit',[ProjectController::class,'edit'])->name('projects.edit');
Route::patch('/projects/{project}',[ProjectController::class,'update'])->name('projects.update');
Route::delete('/projects/{project}',[ProjectController::class,'destroy'])->name('projects.destroy');

//Rutas de Lead
Route::get('/leads',[LeadController::class,'index'])->name('leads.index');
Route::get('/leads/create',[LeadController::class,'create'])->name('leads.create');
Route::post('/leads',[LeadController::class,'store'])->name('leads.store');
Route::get('/leads/{lead}',[LeadController::class,'show'])->name('leads.show');
Route::get('/leads/{lead}/edit',[LeadController::class,'edit'])->name('leads.edit');
Route::patch('/leads/{lead}',[LeadController::class,'update'])->name('leads.update');
Route::patch('/leads/{lead}',[LeadController::class,'destroy'])->name('leads.destroy');
