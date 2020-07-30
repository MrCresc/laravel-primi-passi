@extends('layouts.head')

@section('pageTitle')
  Homepage Boolean
@endsection

@section('mainContent')
  <section class="jumbotron">
    <div class="jumboLeft">
      <h1>Diventa <span class="bold">sviluppatore web</span></h1>
      <h2>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h2>
      <ul>
        <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
        <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
        <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
      </ul>
    </div>
    <div class="jumboRight">
      <img class="logo" src="{{ asset('img/pc.gif') }}" alt="Pc Gif">
    </div>
  </section>
@endsection
