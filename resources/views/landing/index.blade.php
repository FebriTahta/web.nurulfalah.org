@extends('layouts.master')
@section('head')
    <style>
        
    </style>
@endsection
@section('content')
    <main>
        <div id="rev_slider_44_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
            data-source="gallery">
            <!-- Start revolution slider 5.4.8 fullscreen mode -->
            <div id="rev_slider_44" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                <ul>
                    <!-- start slide 01 -->
                    <li data-index="rs-73" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="01" data-param1="01"
                        data-description="">
                        <!-- main image -->
                        <img src="{{ asset('yes/670088.jpg') }}" alt="" data-bgcolor="#ccc"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-bgparallax="off"
                            class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- end slide 01 -->
                    <!-- start slide 02 -->
                    <li data-index="rs-74" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off"
                        data-title="02" data-param1="02" data-description="">
                        <!-- main image -->
                        <img src="{{ asset('yes/674221.jpg') }}" alt="" data-bgcolor="#ccc"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-bgparallax="off"
                            class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <div class="wave hero"></div> --}}

        {{-- <div class="page_header element_to_stick"> --}}
        <div class="page_header" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
                        <h1>Cari informasi seputar Nurul Falah</h1>
                        <a href="#0">Tentang Nurul Falah</a>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="Kegiatan, Bidang, Cabang, ...">
                            <button type="submit"><i class="icon_search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /page_header -->
        
        <div class="container" style="margin-top: 20px">
            

            <div class="main_title">
                <h2 data-aos="fade-right" data-aos-delay="150">EVENTS</h2>
                <p data-aos="fade-right" data-aos-delay="450">Daftar Kegiatan</p>
                <span data-aos="fade-right" data-aos-delay="750"><em></em></span>
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="1050">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="1350">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="1650">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="1950">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="2250">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2" data-aos="fade-left" data-aos-delay="2550">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_placeholder.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Event. 1</h3>
                                <small>-</small>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
            <hr>
            <div class="box_info_x" >
                <div class="row">
                    <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="300">
                        <div class="form-group bidang__image" style="margin-top: 10px">
                            <img src="{{asset('yes/img/menu-thumb-placeholder.jpg')}}" style="border-radius: 20px" alt="">
                            {{-- <p style="margin: 5px 5px 5px 10px">DGTKI</p> --}}
                        </div>
                        <div class="form-group bidang__name">
                            <h5>BIDANG</h5>
                            <p>TILAWATI</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="600">
                        <div class="form-group bidang__image" style="margin-top: 10px">
                            <img src="{{asset('yes/img/menu-thumb-placeholder.jpg')}}" style="border-radius: 20px" alt="">
                        </div>
                        <div class="form-group bidang__name">
                            <h5>BIDANG</h5>
                            <p>DGTKI</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group bidang__image" style="margin-top: 10px">
                            <img src="{{asset('yes/img/menu-thumb-placeholder.jpg')}}" style="border-radius: 20px" alt="">
                        </div>
                        <div class="form-group bidang__name">
                            <h5>BIDANG</h5>
                            <p>TAHFIDZ</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="1200">
                        <div class="form-group bidang__image" style="margin-top: 10px">
                            <img src="{{asset('yes/img/menu-thumb-placeholder.jpg')}}" style="border-radius: 20px" alt="">
                        </div>
                        <div class="form-group bidang__name">
                            <h5>BIDANG</h5>
                            <p>LAZIZ</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- <div class="wave hero"></div> --}}
            <div class="box_info_1" style="margin-top: 20px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2 data-aos="fade-right" data-aos-delay="150">TENTANG KAMI</h2>
                            <span data-aos="fade-right" data-aos-delay="300"><em></em></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
                                <div class="wrapper_img">
                                    <figure style="height: 300px"></figure><span></span>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="900">
                                <h3>PESANTREN AL QUR'AN</h3>
                                <h2>NURUL FALAH</h2>
                                <p style="text-align: justify">
                                    Gagasan awal mendirikan Pesantren Al Quran Nurul Falah adalah inisiatif para aktivis
                                    pemuda remaja masjid yang tergerak hatinya karena melihat masih rendahnya pola
                                    pengajaran Al Quran dibandingkan dengan pendidikan ilmu-ilmu yang lain.
                                </p>
                                <a href="#0"><strong>Baca lebih detail &rarr;</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /container -->
            <hr>
            <div class="main_title">
                <span><em></em></span>
                <h2>Topik Terkini</h2>
                <p>Trending Topik Bulan Ini</p>
                <a href="#">Lihat Semua</a>
            </div>
            <div class="owl-carousel owl-theme carousel_4">
                <div class="item" data-aos="fade-right" data-aos-delay="150">
                    <div class="strip">
                        <figure>
                            <span class="ribbon off">Kategori</span>
                            <img src="{{ asset('yes/img/lazy-placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/lazy-placeholder.jpg') }}" class="owl-lazy" alt=""
                                width="460" height="310">
                            <a href="#" class="strip_info">
                                <small>Berita / Artikel</small>
                            </a>
                        </figure>
                        <ul>
                            <li><span class="">JUDUL</span>
                            </li>
                            <li>
                                <div class="score"><strong>520</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="450">
                    <div class="strip">
                        <figure>
                            <span class="ribbon off">Kategori</span>
                            <img src="{{ asset('yes/img/lazy-placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/lazy-placeholder.jpg') }}" class="owl-lazy" alt=""
                                width="460" height="310">
                            <a href="#" class="strip_info">
                                <small>Berita / Artikel</small>
                            </a>
                        </figure>
                        <ul>
                            <li><span class="">JUDUL</span>
                            </li>
                            <li>
                                <div class="score"><strong>520</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="750">
                    <div class="strip">
                        <figure>
                            <span class="ribbon off">Kategori</span>
                            <img src="{{ asset('yes/img/lazy-placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/lazy-placeholder.jpg') }}" class="owl-lazy" alt=""
                                width="460" height="310">
                            <a href="#" class="strip_info">
                                <small>Berita / Artikel</small>
                            </a>
                        </figure>
                        <ul>
                            <li><span class="">JUDUL</span>
                            </li>
                            <li>
                                <div class="score"><strong>520</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="1050">
                    <div class="strip">
                        <figure>
                            <span class="ribbon off">Kategori</span>
                            <img src="{{ asset('yes/img/lazy-placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/lazy-placeholder.jpg') }}" class="owl-lazy" alt=""
                                width="460" height="310">
                            <a href="#" class="strip_info">
                                <small>Berita / Artikel</small>
                            </a>
                        </figure>
                        <ul>
                            <li><span class="">JUDUL</span>
                            </li>
                            <li>
                                <div class="score"><strong>520</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="1350">
                    <div class="strip">
                        <figure>
                            <span class="ribbon off">Kategori</span>
                            <img src="{{ asset('yes/img/lazy-placeholder.jpg') }}"
                                data-src="{{ asset('yes/img/lazy-placeholder.jpg') }}" class="owl-lazy" alt=""
                                width="460" height="310">
                            <a href="#" class="strip_info">
                                <small>Berita / Artikel</small>
                            </a>
                        </figure>
                        <ul>
                            <li><span class="">JUDUL</span>
                            </li>
                            <li>
                                <div class="score"><strong>520</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="main_title">
                <span><em></em></span>
                <h2>BERITA</h2>
                <p>Kabar Terkini Nurul Falah</p>
                <a href="#">Lihat Semua</a>
            </div>
            <div class="row">
                
            </div>
            <!-- /row -->
            <hr>
            <div class="banner lazy" data-aos="fade-up" data-aos-delay="300"
                data-bg="url({{ asset('yes/img/banner_bg_desktop.jpg') }})" data-was-processed="true"
                style="background-image: url({{ asset('yes/img/banner_bg_desktop.jpg') }});">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)"
                    style="background-color: rgba(0, 0, 0, 0.3);">
                    <div>
                        <small>Artikel</small>
                        <h3>Manfaat Membaca</h3>
                        <p>Menambah wawasan dan ilmu pengetahuan</p>
                        <a href="grid-listing-filterscol.html" class="btn_1">Baca Sekarang!</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <hr>
            <div class="main_title">
                <span><em></em></span>
                <h2>ARTIKEL</h2>
                <a href="#">Lihat Semua</a>
            </div>
            
            
        </div>
        <!-- /container -->

    </main>
@endsection
