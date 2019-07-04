<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body>
    @include('partials.header')
    <section>
      <div class="container">
        <div class="section-left col-4">
          <h1>Diventa <br>sviluppatore web</h1>
          <p>6 mesi di <strong>corso intensivo online in diretta</strong> per imparare da zero il mestiere di web developer e <strong>trovare un nuovo lavoro</strong> nelle aziende top del settore</p>
          <a href="#" class="read_more">SCOPRI IL CORSO</a>
        </div>
        <div class="section-right col-8">
          <img src="https://www.boolean.careers/images/common/mac2x.png" alt="">
        </div>

      </div>
    </section>
    @include('partials.footer')
  </body>
</html>
