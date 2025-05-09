<section id="skills" class="py-5" 
    style="background-image: url('https://www.transparenttextures.com/patterns/squared-metal.png'); background-color: rgba(255, 255, 255, 0.95); background-repeat: repeat; background-size: auto;">

    <div class="container">
        <h2 class="text-center mb-4">Skills</h2>
        <div class="row">
            @foreach($skills as $skill)
                <div class="col-md-6 mb-4">
                    <h5>{{ $skill->name }} <span class="float-end">{{ $skill->level }}%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" 
                             style="width: {{ $skill->level }}%; transition: width 1s;">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
