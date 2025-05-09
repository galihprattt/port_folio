<!-- About Section -->
<section id="about" class="about section"
    style="background: url('https://www.transparenttextures.com/patterns/squared-metal.png'); background-color: rgba(255,255,255,0.95); background-repeat: repeat;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>{{ $about->description }}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <!-- Gambar Profile -->
                @if($about->profile_image)
                    <img src="{{ asset('storage/' . $about->profile_image) }}" class="img-fluid" alt="Profile">
                @else
                    <img src="{{ asset('images/default-profile.png') }}" class="img-fluid" alt="Profile">
                @endif
            </div>
            <div class="col-lg-8 content">
                <h2>{{ $about->designation }}</h2>
                <p class="fst-italic py-3">
                    {{ $about->intro_text }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->birthday }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about->email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->freelance_status }}</span></li>
                        </ul>
                    </div>
                </div>
                <p class="py-3">
                    {{ $about->additional_info }}
                </p>
            </div>
        </div>

    </div>

</section><!-- /About Section -->
