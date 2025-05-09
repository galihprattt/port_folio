<!-- Contact Section -->
@if($contact && ($contact->address || $contact->phone || $contact->email))
<section id="contact" class="contact section" style="padding: 80px 0; background-color: #f0f8ff;">

    <div class="container section-title" data-aos="fade-up" style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 36px; font-weight: 700; color: #333;">Contact Us</h2>
        <p style="font-size: 18px; color: #666;">Feel free to reach out to us through any of the contact details below</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            @if($contact->address)
            <div class="col-lg-4 col-md-6">
                <div class="info-item d-flex flex-column align-items-center justify-content-center p-4 h-100" style="background-color: #fff; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); min-height: 230px;">
                    <i class="bi bi-geo-alt" style="font-size: 40px; color: #5d5d5d;"></i>
                    <div class="mt-3 text-center">
                        <h3 style="font-size: 20px; font-weight: 600; color: #333;">Address</h3>
                        <p style="font-size: 16px; color: #666;">{{ $contact->address }}</p>
                    </div>
                </div>
            </div>
            @endif

            @if($contact->phone)
            <div class="col-lg-4 col-md-6">
                <div class="info-item d-flex flex-column align-items-center justify-content-center p-4 h-100" style="background-color: #fff; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); min-height: 230px;">
                    <i class="bi bi-telephone" style="font-size: 40px; color: #5d5d5d;"></i>
                    <div class="mt-3 text-center">
                        <h3 style="font-size: 20px; font-weight: 600; color: #333;">Call Us</h3>
                        <p style="font-size: 16px; color: #666;">{{ $contact->phone }}</p>
                    </div>
                </div>
            </div>
            @endif

            @if($contact->email)
            <div class="col-lg-4 col-md-6">
                <div class="info-item d-flex flex-column align-items-center justify-content-center p-4 h-100" style="background-color: #fff; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); min-height: 230px;">
                    <i class="bi bi-envelope" style="font-size: 40px; color: #5d5d5d;"></i>
                    <div class="mt-3 text-center">
                        <h3 style="font-size: 20px; font-weight: 600; color: #333;">Email Us</h3>
                        <p style="font-size: 16px; color: #666;">{{ $contact->email }}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
