<x-nav>
    <h2 class="text-center my-3">Gallery</h2>
    <div class=" p-5 w-100 d-flex gap-5">
        <div class="d-flex w-50">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset("images/img.png")}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>North Wales</h5>
                        </div>
                    </div>
                    @php
                        //this is how you can access dir in Laravel,does not work recursively
                        $image=File::files(public_path('images/North wales'))
                    @endphp
                    @foreach($image as $images)
                        <div class="carousel-item">
                            <img src="{{asset('images/North wales/' . $images->getFilename())}}" class="d-block w-100"
                                 alt="...">
                        </div>
                    @endforeach
                    <div class="carousel-item">
                        <img src="{{asset("images/North wales/1000005361.jpg")}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="d-flex w-50">
            <div id="carouselHafod" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset("images/Hafod estate/20260513_153416.jpg")}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Hafod estate</h5>
                        </div>
                    </div>
                    @php
                        //this is how you can access dir in Laravel,does not work recursively
                        $image=File::files(public_path('images/Hafod estate'))
                    @endphp
                    @foreach($image as $images2)
                        <div class="carousel-item">
                            <img src="{{asset('images/Hafod estate/' . $images2->getFilename())}}"
                                 class="d-block w-100">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHafod"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHafod"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</x-nav>
