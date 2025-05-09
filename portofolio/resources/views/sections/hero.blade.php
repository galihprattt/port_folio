<section id="hero" class="d-flex flex-column justify-content-center align-items-center"
    style="background-image: url('{{ $hero->background_image ?? '' }}'); background-size: cover; background-position: center;">

  <div class="hero-container text-center" data-aos="fade-in">
    <h1>{{ $hero->name ?? 'Nama Belum Diatur' }}</h1>
    <p>{{ $hero->headline ?? 'Headline Belum Diatur' }}</p>
    <span class="typed" data-typed-items="{{ $hero->subheadline ?? 'Subheadline Belum Diatur' }}"></span>

    <div class="social-links mt-3">
      @if (!empty($hero->twitter))
        <a href="{{ $hero->twitter }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
      @endif
      @if (!empty($hero->facebook))
        <a href="{{ $hero->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
      @endif
      @if (!empty($hero->instagram))
        <a href="{{ $hero->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
      @endif
      @if (!empty($hero->linkedin))
        <a href="{{ $hero->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
      @endif
    </div>
  </div>
</section>
