<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('faq', function () {
  $arrayFaqLeft =
  [
    [
    'question' => 'Chi può fare il corso Boolean?',
    'answer' => 'Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
    Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza
    lavorativa, ma anche affermati professionisti che vogliono cambiare settore.
    Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito
    abbastanza per diventare programmatore, Boolean è il corso che fa per te.'
    ],
    [
    'question' => 'Che competenze devo avere per iniziare il corso?',
    'answer' => 'Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione.'
    ]
  ];
  $arrayFaqRight =
  [
    [
    'question' => 'Ho la certezza di essere assunto?',
    'answer' => 'Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati
    in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro.
    Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia
    e ti aiutiamo a prepararti al meglio per i colloqui!'
    ],
    [
    'question' => 'Terminato il corso, sono supportato nella ricerca del lavoro?',
    'answer' => 'Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia.
    Dalla multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le tue qualità da neo-sviluppatore.
    Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!'
    ],
  ];
    return view('faq', ['leftFaqList' => $arrayFaqLeft,'rightFaqList' => $arrayFaqRight]);
})->name('faq');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
