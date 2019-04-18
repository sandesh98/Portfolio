@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('images/project/csr/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2016</div>
                            <div class="col-7">
                                <div class="label">September</div>
                                <h1 class="animatedText">CSR4ALL</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-6 col-offset-1">
                        {{--                        <div class="video-frame mb-xl">--}}
                        <img src="{{ asset('images/project/csr/preview.jpg') }}" alt="">
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>AA4CSR staat voor Ami Aliar 4 Sales Connection Relation. Ami is een oom van mij en hij had een idee in zijn hoofd waardoor mensen die een uitkering ontvangen hun skills kunnen uitbreiden om zo weer op de arbeidsmarkt terecht te komen.</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Maker</div>
                            <div class="desc">Sandesh Boedhoe</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Web</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Year</div>
                            <div class="desc">2016</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Ami</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid content">
                    <div id="img-carousel" class="titanSlider">
                        <ul class="slides">
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-4.jpg') }}" class="fw"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <ul class="accordion">
                    <li class="active">
                        <div class="head">
                            <div class="title">Meer informatie</div>
                        </div>
                        <div class="body">
                            <p>Hier komt extra informatie over de website</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="prev-next-container mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-4">
                        <div class="vcenter link-container"><a href="project-single.html" class="prev-link">
                                <div class="project-title">The Vault</div>
                                <div class="link-title">Previous project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="project-single.html" class="next-link">
                                <div class="project-title">Wakey Wakey</div>
                                <div class="link-title">Next project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection