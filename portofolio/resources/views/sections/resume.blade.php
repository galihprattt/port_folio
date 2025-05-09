<!-- Resume Section -->
<section id="resume" class="resume section" 
    style="background-image: url('https://www.transparenttextures.com/patterns/squared-metal.png'); background-color: rgba(255, 255, 255, 0.95); background-repeat: repeat; background-size: auto;">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Resume</h2>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row">

      <!-- Education -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">Education</h3>
        @foreach($resumes->where('type', 'education') as $edu)
        <div class="resume-item">
          <h4>{{ $edu->title }}</h4>
          <h5>{{ $edu->year }}</h5>
          <p><em>{{ $edu->sub_title }}</em></p>
          <p>{{ $edu->description }}</p>
        </div>
        @endforeach
      </div>

      <!-- Experience -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">Experience</h3>
        @foreach($resumes->where('type', 'experience') as $exp)
        <div class="resume-item">
          <h4>{{ $exp->title }}</h4>
          <h5>{{ $exp->year }}</h5>
          <p><em>{{ $exp->sub_title }}</em></p>
          <p>{{ $exp->description }}</p>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</section>
