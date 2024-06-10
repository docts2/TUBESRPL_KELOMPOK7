@extends('template.template')

@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{ asset('/') }}assets/img/hero/h1_hero.jpg" id="homepage">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Kerja.In</h1>
                                <p style="margin-top: -60px;font-size: 20px;color: #28395A">Kerja.In merupakan platform
                                    pencari kerja
                                    yang bertujuan
                                    untuk membantu calon pekerja
                                    yang sedang <br> mencari pekerjaan untuk menemukan peluang
                                    pekerjaan yang sesuai dengan kualifikasi dan preferensi mereka.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Job Tittle or keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Location Jakarta</option>
                                            <option value="">Location Bandung</option>
                                            <option value="">Location IKN</option>
                                            <option value="">Location Yogyakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="#">Find job</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Kategori Pekerjaan</span>
                        <h2>Pekerjaan Yang Tersedia</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach ($job_categories as $item)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="{{ $item->icon }}"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="{{ route('job.show', ['id' => $item->id]) }}">{{ $item->category_name }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="/" class="border-btn2">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->

    <!-- How Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150"
        data-background="{{ asset('/') }}assets/img/gallery/how-applybg.png" id="blogsaran">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Blog dan FAQ</span>
                        <h2> Butuh saran?</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <img src="{{ asset('/') }}assets/img/blog/home-blog1.jpg" alt="" width="100%" height="350">
                        </div>
                        <div class="process-cap mt-4">
                        <h5>Blog</h5>
                            <a href="{{ route('blogs.index') }}" class="btn btn-primary">Dapatkan Tips</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <img src="{{ asset('/') }}assets/img/banner/faq.jpg" alt="" width="100%" height="350">
                        </div>
                        <div class="process-cap mt-4">
                            <h5>FAQ</h5>
                            <a href="{{ route('faq.index') }}" class="btn btn-primary">Dapatkan Tips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How Apply Process End-->

    <!-- Blog Area Start -->
    <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Berita terakhir kami</span>
                        <h2>Berita terbaru kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/') }}assets/img/blog/home-blog1.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>| Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/') }}assets/img/blog/home-blog2.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>| Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

</main>
@endsection
