    <footer>
      {{-- per la prima parte del footer, quella bianca --}}
      <div class="white-footer">
        <div class="container">
          <div class="col-4">
            <a href="{{ route('home') }}">
              <img src="https://www.boolean.careers/images/common/logo.png" alt="">
            </a>
          </div>
          <div class="col-3 pl-5 pr-5">
            <a href="mailto:ciao@boolean.careers">ciao@boolean.careers</a>
            <a href="tel:+3902-40031288">02-40031288</a>
            <a href="tel:+393279578239">+39 327-9578239</a>
          </div>
          <div class="col-3 pl-5 pr-5">
            <a href="#" onclick="return false">Domande Frequenti</a>
            <a href="#" onclick="return false">Lezione Gratuita</a>
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('lavoraconnoi') }}">Lavora con noi!</a>
          </div>
          <div class="col-2">
            <div class="fonts">
              <a href="https://www.facebook.com/boolean.careers" target="_blank"><i class="fab fa-facebook-square ml-1 mr-1"></i></a>
              <a href="https://www.linkedin.com/school/boolean-careers/" target="_blank"><i class="fab fa-linkedin ml-1 mr-1"></i></a>
              <a href="https://www.youtube.com/channel/UCN0mktfmWySUg3OmvHKrdcQ" target="_blank"><i class="fab fa-youtube ml-1 mr-1"></i></a>
              <a href="https://wa.me/393279578239" target="_blank"><i class="fab fa-whatsapp ml-1 mr-1"></i></a>
            </div>
          </div>
        </div>
      <div>
      {{-- per la seconda parte del footer, quella blu --}}
      <div class="blue-footer">
        <div class="container">
          <div class="footer-left col-5">
            <p>Boolean** (my_new_job > my_old_job) // returns true</p>
          </div>
          <div class="footer-right col-7">
            <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
          </div>
        </div>
      </div>
    </footer>
    <i class="fas fa-comment-alt"></i>
  </body>
</html>
