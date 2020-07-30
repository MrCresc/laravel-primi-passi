@extends('layouts.head')

@section('pageTitle')
  Privacy Boolean
@endsection

@section('mainContent')
  <section class="faqSection">
    <h1>Domande frequenti</h1>
    <div class="faqContainer">
      <div class="leftFaq">
        @foreach ($leftFaqList as $singleFaq)
          <h2>{{$singleFaq['question']}}</h2>
          <p>{{$singleFaq['answer']}}</p>
        @endforeach
      </div>

      <div class="rightFaq">
        @foreach ($rightFaqList as $singleFaq)
          <h2>{{$singleFaq['question']}}</h2>
          <p>{{$singleFaq['answer']}}</p>
        @endforeach
      </div>
    </div>
  </section>
@endsection
