<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        @foreach ($slider['data'] as $val)
            <div class="carousel-item active">
                <div class="carousel-container" style="background: url({{ $val['imgUrl'] }}); border-radius:20px;">
                    <h2 class="animate__animated animate__fadeInDown">{{ $val['title'] }}</h2>
                    <p class="animate__animated fanimate__adeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        {{ $val['description'] }}
                    </p>
                    <a href="{{ '/news', $val['title'] }}"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
        @endforeach

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->
