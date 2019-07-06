@extends('layouts.base')

@section('content')
  {{-- per la sezione bianca della homepage --}}
  <section class="white-section">
    <div class="container">
      <div class="section-left col-4">
        <h1>Diventa <br>sviluppatore web</h1>
        <p>6 mesi di <strong>corso intensivo online in diretta</strong> per imparare da zero il mestiere di web developer e <strong>trovare un nuovo lavoro</strong> nelle aziende top del settore</p>
        <a href="#" onclick="return false" class="read_more">SCOPRI IL CORSO</a>
      </div>
      <div class="section-right col-8">
        <img src="https://www.boolean.careers/images/common/mac2x.png" alt="Boolean Logo">
      </div>

    </div>
  </section>
  {{-- per la sezione blu della homepage --}}
  <section class="blue-section">
    <div class="container col-8">
      <h2>I nostri studenti sono stati assunti da</h2>
      <div class="images">
        <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="Facile.it Logo">
        <img src="https://www.boolean.careers/images/partners/oneday.png" alt="Oneday Logo">
        <img src="https://www.boolean.careers/images/partners/cayenne.png" class="cayenne" alt="Cayenne Logo">
        <img src="https://www.boolean.careers/images/partners/softec.png" alt="Softec Logo">
        <img src="https://www.boolean.careers/images/partners/fabbrica_digitale.png" class="fabbrica-digitale" alt="Fabbrica digitale Logo">
      </div>
    </div>
  </section>
@endsection
