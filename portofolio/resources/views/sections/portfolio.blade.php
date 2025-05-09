<section id="portfolio" class="portfolio section-bg py-5" 
    style="background-image: url('https://www.transparenttextures.com/patterns/squared-metal.png'); background-color: rgba(255, 255, 255, 0.95); background-repeat: repeat; background-size: auto;">

    <div class="container">
      <div class="section-title text-center mb-5">
        <h2>Portfolio</h2>
        <p class="text-muted">Some projects I have worked on.</p>
      </div>
  
      <div class="row g-4">
        @foreach($projects as $project)
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
              @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text text-muted">{{ Str::limit($project->description, 100) }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</section>
