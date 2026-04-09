<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/career', 'pages.career')->name('career');
Route::view('/seminar', 'pages.seminar')->name('seminar');
Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/solutions/digital-health-service', 'pages.solutions.digital-health')->name('solutions.digital-health');
Route::view('/solutions/whatsapp-messaging', 'pages.solutions.whatsapp')->name('solutions.whatsapp');
Route::view('/solutions/institute-management-system', 'pages.solutions.institute')->name('solutions.institute');
Route::view('/solutions/website-solution', 'pages.solutions.website')->name('solutions.website');
Route::view('/solutions/id-card-solution', 'pages.solutions.idcard')->name('solutions.idcard');
Route::view('/solutions/bulk-sms', 'pages.solutions.bulk-sms')->name('solutions.bulk-sms');