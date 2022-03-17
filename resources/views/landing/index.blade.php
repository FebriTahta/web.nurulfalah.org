@extends('layouts.master')
@section('head')
    <style>
        .body-jadwal {

            display: flex;
        }

        .box {
            position: relative;
            width: 100%;
            min-height: 60px;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: rgba(9, 107, 66, 0.884);
            overflow: hidden;
            border-radius: 10px;
        }

        .box .col-md-2 {
            color: #fff;
            z-index: 10;
        }

        .box .col-md-2 a {
            color: #fff;
        }
        .box .col-md-12 p {
            color: #fff;
        }

        .col-md-4 {
            z-index: 10;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(350deg);
            }
        }

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
                            <input type="text" class="form-control" placeholder="Cari disini ...">
                            <button type="submit"><i class="icon_search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /page_header -->

        <div class="container" style="margin-top: 20px">
            {{-- <div class="row bidang" >
                <div class="col-lg-3 col-3 bidang__card" style="text-align: center" data-aos="fade-up" data-aos-delay="300">
                    <div class="form-group bidang__image" style="margin-top: 10px; text-align: center">
                        <img src="{{ asset('TILAWATI.png') }}" style="border-radius: 20px" alt="">
                        <p style="margin-top: 10px; color: rgb(54, 211, 145)">TILAWATI</p>
                    </div>
                    <div class="form-group bidang__name d-none">
                        <h5>BIDANG</h5>
                        <p>DGTKI</p>
                    </div>
                </div>
                <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="600">
                    <div class="form-group bidang__image" style="margin-top: 10px; text-align: center">
                        <img src="{{ asset('DGTKI.png') }}" style="border-radius: 20px" alt="">
                        <p style="margin-top: 10px; color: rgb(54, 211, 145)">DGTKI</p>
                    </div>
                    <div class="form-group bidang__name d-none">
                        <h5>BIDANG</h5>
                        <p>DGTKI</p>
                    </div>
                </div>
                <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="900">
                    <div class="form-group bidang__image" style="margin-top: 10px; text-align: center">
                        <img src="{{ asset('LPQ.png') }}" style="border-radius: 20px" alt="">
                        <p style="margin-top: 10px; color: rgb(54, 211, 145)">LPQ</p>
                    </div>
                    <div class="form-group bidang__name d-none">
                        <h5>BIDANG</h5>
                        <p>TAHFIDZ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-3 bidang__card" data-aos="fade-up" data-aos-delay="1200">
                    <div class="form-group bidang__image" style="margin-top: 10px; text-align: center">
                        <img src="{{ asset('LAZIS.png') }}" style="border-radius: 20px" alt="">
                        <p style="margin-top: 10px; color: rgb(54, 211, 145)">LAZIZ</p>
                    </div>
                    <div class="form-group bidang__name d-none">
                        <h5>BIDANG</h5>
                        <p>LAZIZ</p>
                    </div>
                </div>
            </div> --}}

            <div class="main_title">
                <h2 data-aos="fade-right" data-aos-delay="150">MEDIA</h2>
                <p data-aos="fade-right" data-aos-delay="450">Follow Our Media</p>
                <span data-aos="fade-right" data-aos-delay="750"><em></em></span>
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel">
                {{-- <div class="item_version_2" data-aos="fade-left" data-aos-delay="1050">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>01</span>
                            <img src="{{ asset('yes/img/home_cat_pizza2.jpg') }}"
                                data-src="{{ asset('yes/img/home_cat_pizza2.jpg') }}" alt="" class="owl-lazy"
                                width="350" height="450">
                            <div class="info">
                                <h3>Laziz NF</h3>
                                <small>Tabungamal.id</small>
                            </div>
                        </figure>
                    </a>
                </div> --}}
                <?php $z = 300;
                $y = 1; ?>
                @foreach ($social as $key => $item)
                    <div class="item_version_2" data-aos="fade-left" data-aos-delay="{{ $z * $y }}">
                        <a href="{{ $item->link }}" target="_blank">
                            <figure>
                                <span>{{ $key + 1 }} </span>
                                <img src="{{ asset('img_socmed/' . $item->img) }}"
                                    data-src="{{ asset('img_socmed/' . $item->img) }}" alt="" class="owl-lazy"
                                    width="350" height="450">
                            </figure>
                        </a>
                    </div>
                    <?php $y++; ?>
                @endforeach
            </div>
            <!-- /carousel -->
            <div class="baris">
                <hr>
            </div>

            <hr id="profile">
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
                                    <figure><img src="{{ asset('yes/img/lazy-placeholder-600-400.png') }}"
                                            data-src="{{ asset('yes/img/lazy-placeholder-600-400.png') }}" alt=""
                                            class="img-fluid lazy loaded" data-was-processed="true"></figure>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="750">
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
                <div id="berita"></div>
            </div>
            <!-- /container -->
            <hr>
            <div class="main_title">
                <span><em></em></span>
                <h2>ARTIKEL</h2>
                <p>Perkaya Wawasan</p>
                <a href="#" type="button" class="btn btn-sm btn_1">MORE</a>
            </div>
            <div class="owl-carousel owl-theme carousel_4" id="zona-artikel">
                <!--ZONA ARTIKEL-->
                <?php $i = 300;
                $j = 1; ?>
                @foreach ($artikels as $item)
                    <div class="item" data-aos="fade-right" data-aos-delay="{{ $i * $j }}">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                    data-src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" class="owl-lazy"
                                    alt="" width="460" height="310">
                                <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                    class="strip_info"></a>
                            </figure>
                        </div>
                    </div>
                    <?php $j++; ?>
                @endforeach
            </div>
            <hr>
            <div class="jadwal">
                <div class="row">
                    <div class="col-md-4" style="margin-bottom: 10px">
                        <select name="lokasi_id" class="form-control" id="lokasi">
                            <option value="">Kabupaten / Kota</option>
                            @foreach ($kab_kota as $item)
                                <option value="{{$item->id}}">{{$item->lokasi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="jadwal-sholat">
                <div class="box" id="jadwal_sholat">
                    <div class="row" id="stand_jadwal">
                        <div class="col-md-12" style="text-decoration-color: white">
                            <p style="text-decoration-color: white">{{$tgl}}</p>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">SUBUH :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['subuh'] }}
                                <b>AM</b></a>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">dzuhur :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['dzuhur'] }}
                                <b>AM</b></a>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">ashar :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['ashar'] }}
                                <b>PM</b></a>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">maghrib :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['maghrib'] }}
                                <b>PM</b></a>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">Isya :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['isya'] }}
                                <b>PM</b></a>
                        </div>
                        <div class="col-md-2">
                            <a style="text-align: left; text-transform: uppercase">imsak :</a>
                            <a style="text-align: right" class="float-right">{{ $jadwal_sholat['imsak'] }}
                                <b>AM</b></a>
                        </div>
                    </div>   
                </div>
            </div>

            <br>
            <br>
            <div class="main_title">
                <span data-aos="fade-right" data-aos-delay="150"><em></em></span>
                <h2 data-aos="fade-right" data-aos-delay="300">BERITA</h2>
                <p data-aos="fade-right" data-aos-delay="450">Kabar Terkini Nurul Falah</p>
                <a href="/post/daftar-berita" type="button" class="btn btn_1">MORE</a>
            </div>
            <div class="row">
                @foreach ($beritas as $item)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                        <article class="blog">
                            <figure>
                                <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"><img
                                        src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                @foreach ($item->kategoriposting as $value)
                                    <small>{{ $value->name }} </small>
                                @endforeach
                                <small>- {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small>
                                <h2><a
                                        href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                </h2>
                                <p>{{ substr(strip_tags($item->deskripsi), 0, 100) }} [...]</p>
                                <ul>
                                    <div>
                                        <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                            class="btn btn_1" style="border-radius: 20px">Baca Selengkapnya</a>
                                    </div>
                                </ul>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                @endforeach
            </div>
            <!-- /row -->
            <hr id="artikel">
            <div class="banner lazy" data-aos="fade-up" data-aos-delay="300" data-was-processed="true"
                style="background-color: #3f5d6a;">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)"
                    style="background-color: rgba(0, 0, 0, 0.3); ">
                    <div>
                        <small>PRODUCT</small>
                        <h3>PRODUCT HIGH LIGHT</h3>
                        <span>Berikut adalah beberapa product yang mensupport pembelajaran program-program kami</span>
                        <br><br><a href="grid-listing-filterscol.html" class="btn_1">Semua Product</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <hr>
            <section class="products-slider">
                <!--product-container---------------------->
                <div class="product-container">
                    <!--==slider-===============================----->
                    <ul class="autoWidth" class="cs-hidden">
                        <!--==card===========================-->
                        <li class="item-a">
                            <div class="product-box">
                                <a href="https://www.apple.com/shop/buy-iphone/iphone-12-pro">
                                    <!--**link**demo-->
                                    <!--img--------->
                                    <img alt=""
                                        src="https://1.bp.blogspot.com/-qcHJ7dRlxR0/YRtlM-B4xaI/AAAAAAAAAAM/is73fwmKC-Em-H-KtHXkvRdIrFADjZ7UgCLcBGAsYHQ/s400/iphone.png" />
                                    <!--colors------>
                                    <div class="available-colors">
                                        <div class="product-color" style="background-color: #5c5b58;"></div>
                                        <div class="product-color" style="background-color: #e5e6e2;"></div>
                                        <div class="product-color" style="background-color: #fcebd5;"></div>
                                        <div class="product-color" style="background-color: #3f5d6a;"></div>
                                    </div>
                                    <!--buy & price-->
                                    <div class="buy-price">
                                        <!--price-->
                                        <p>From $999or $41.62/mo. for 24 mo.before trade-in*</p>
                                        <!--btn---->
                                        <a href="#" class="buy-btn">Buy</a>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==card===========================-->
                        <li class="item-a">

                            <div class="product-box">
                                <a href="#">
                                    <!--img--------->
                                    <img alt=""
                                        src="https://1.bp.blogspot.com/-6hGHM5Wv4kQ/YRuanh1VkrI/AAAAAAAAAAU/1kBoC0NyzpQaQqAcCHe5IxcPaFpYg3WeACLcBGAsYHQ/s320/2.png" />
                                    <!--colors------>
                                    <div class="available-colors">
                                        <div class="product-color" style="background-color: #f6f2ef;"></div>
                                        <div class="product-color" style="background-color: #6e6d72;"></div>
                                        <div class="product-color" style="background-color: #164a6f;"></div>
                                        <div class="product-color" style="background-color: #daefd8;"></div>
                                        <div class="product-color" style="background-color: #bab2e6;"></div>
                                        <div class="product-color" style="background-color: #da3c3c;"></div>
                                    </div>
                                    <!--buy & price-->
                                    <div class="buy-price">
                                        <!--price-->
                                        <p>From $999or $41.62/mo. for 24 mo.before trade-in*</p>
                                        <!--btn---->
                                        <a href="#" class="buy-btn">Buy</a>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==card===========================-->
                        <li class="item-a">

                            <div class="product-box">
                                <a href="#">
                                    <!--img--------->
                                    <img alt=""
                                        src="https://1.bp.blogspot.com/-Sit8qYwt4fQ/YRuay0FXJUI/AAAAAAAAAAY/xDqO5NwLQdguuSj5fWCAQEEBI7rzInemQCLcBGAsYHQ/s320/3.png" />
                                    <!--colors------>
                                    <div class="available-colors">
                                        <div class="product-color" style="background-color: #f3f3f3;"></div>
                                        <div class="product-color" style="background-color: #1d1d1e;"></div>
                                        <div class="product-color" style="background-color: #ba0d2f;"></div>
                                    </div>
                                    <!--buy & price-->
                                    <div class="buy-price">
                                        <!--price-->
                                        <p>From $999or $41.62/mo. for 24 mo.before trade-in*</p>
                                        <!--btn---->
                                        <a href="#" class="buy-btn">Buy</a>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==card===========================-->
                        <li class="item-a">

                            <div class="product-box">
                                <a href="#">
                                    <!--img--------->
                                    <img alt=""
                                        src="https://1.bp.blogspot.com/-r-PkmQTvnpE/YRua8ocscDI/AAAAAAAAAAg/JjGr_0vWuWwEc_tQ0KCbRvVI4jbvCZVSACLcBGAsYHQ/s320/4.jpg" />
                                    <!--colors------>
                                    <div class="available-colors">
                                        <div class="product-color" style="background-color: #f9f6ef;"></div>
                                        <div class="product-color" style="background-color: #1f2020;"></div>
                                        <div class="product-color" style="background-color: #aee1cd;"></div>
                                        <div class="product-color" style="background-color: #ffe681;"></div>
                                        <div class="product-color" style="background-color: #d1cdda;"></div>
                                        <div class="product-color" style="background-color: #ba0c2e;"></div>
                                    </div>
                                    <!--buy & price-->
                                    <div class="buy-price">
                                        <!--price-->
                                        <p>From $999or $41.62/mo. for 24 mo.before trade-in*</p>
                                        <!--btn---->
                                        <a href="#" class="buy-btn">Buy</a>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==card===========================-->
                        <li class="item-a">

                            <div class="product-box">
                                <a href="#">
                                    <!--img--------->
                                    <img alt=""
                                        src="https://1.bp.blogspot.com/-vY1coOfNPz8/YRubHv4DS0I/AAAAAAAAAAo/QvFEuQoSZBM_i8vRdEA4B4rPpkEyIOXoQCLcBGAsYHQ/s320/5.png" />
                                    <!--colors------>
                                    <div class="available-colors">
                                        <div class="product-color" style="background-color: #f4f4f4;"></div>
                                        <div class="product-color" style="background-color: #1d1d1e;"></div>
                                        <div class="product-color" style="background-color: #49aee6;"></div>
                                        <div class="product-color" style="background-color: #fe9a8b;"></div>
                                        <div class="product-color" style="background-color: #f9d045;"></div>
                                        <div class="product-color" style="background-color: #990211;"></div>
                                    </div>
                                    <!--buy & price-->
                                    <div class="buy-price">
                                        <!--price-->
                                        <p>From $999or $41.62/mo. for 24 mo.before trade-in*</p>
                                        <!--btn---->
                                        <a href="#" class="buy-btn">Buy</a>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="pattern_2" style="margin-top: 20px">
                <div class="container margin_120_100">
                    <div class="main_title center mb-5">
                        <span><em></em></span>
                        <h2>-</h2>
                    </div>

                </div>
                <!--/container-->
            </div>
            <!--/pattern_2 -->
            <hr>
            {{-- mobile --}}
            <div class="body">
                <div class="navigationx">
                    <ul>
                        <li class="list active">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                </span>
                                <span class="text">Home</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#profile">
                                <span class="icon">
                                    <ion-icon name="business-outline"></ion-icon>
                                </span>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#berita">
                                <span class="icon">
                                    <ion-icon name="newspaper-outline"></ion-icon>
                                </span>
                                <span class="text">Media</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#artikel">
                                <span class="icon">
                                    <ion-icon name="document-outline"></ion-icon>
                                </span>
                                <span class="text">Product</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="people-circle-outline"></ion-icon>
                                </span>
                                <span class="text">Contact</span>
                            </a>
                        </li>
                        <div class="indicator"></div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /container -->

    </main>
@endsection

@section('script')
    {{-- <script>
        $(document).ready(function() {
            $.ajax({
                url: '/',
                dataType: 'json',
                delay: 250,
                success: function(response) {
                    console.log(response.artikel);
                    return {
                        results: $.map(response.artikel, function(item) {
                            $("#zona-artikel").prepend(
                                '<div class="item" data-aos="fade-right" data-aos-delay="150"><div class="strip"><figure><img src="img_thumbnail/' +
                                item.thumbnail + '" data-src="img_thumbnail/' + item
                                .thumbnail +
                                '" class="owl-lazy"alt="" width="460" height="310"><a href="/post/contoh" class="strip_info"></a></figure></div></div>'
                                );
                        })
                    };
                },
                cache: true
            })
        })
    </script> --}}
    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript">
        $("#lokasi").change(function() {
            
            $.ajax({
                url: "/index-jadwal-sholat/" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    if (data.status == 200) {
                        $("#stand_jadwal").remove();
                        console.log(data.jadwal.jadwal);
                        $("#jadwal_sholat").append(
                            '<div class="row ul" id="stand_jadwal">'
                                +'<div class="col-md-12" style="text-decoration-color: white">'
                                    +'<p style="text-decoration-color: white">'+data.jadwal.jadwal.tanggal+'</p>'
                                +'</div>'
                                +'<div class="col-md-2">'
                                    +'<a style="text-align: left; text-transform: uppercase">SUBUH :</a>'
                                    +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.subuh+' '
                                        +'<b>AM</b></a>'
                                        +'</div>'
                                        +'<div class="col-md-2">'
                                            +'<a style="text-align: left; text-transform: uppercase">dzuhur :</a>'
                                            +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.dzuhur+' '
                                                +'<b>AM</b></a>'
                                                +'</div>'
                                                +'<div class="col-md-2">'
                                                    +'<a style="text-align: left; text-transform: uppercase">ashar :</a>'
                                                    +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.ashar+' '
                                                        +'<b>PM</b></a>'
                                                        +'</div>'
                                                        +'<div class="col-md-2">'
                                                            +'<a style="text-align: left; text-transform: uppercase">maghrib :</a>'
                                                            +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.maghrib+' '
                                                                +'<b>PM</b></a>'
                                                                +'</div>'
                                                                +'<div class="col-md-2">'
                                                                    +'<a style="text-align: left; text-transform: uppercase">Isya :</a>'
                                                                    +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.isya+' '
                                                                        +'<b>PM</b></a>'
                                                                        +'</div>'
                                                                        +'<div class="col-md-2">'
                                                                            +'<a style="text-align: left; text-transform: uppercase">imsak :</a>'
                                                                            +'<a style="text-align: right" class="float-right">'+data.jadwal.jadwal.imsak+' '
                                                                                +'<b>AM</b></a>'
                                                                                +'</div>'
                                                                                +'</div>'
                        );
                        toastr.success(data.message);
                        
                    } else {
                        
                        toastr.success(data.message);
                    }
                }
            });
        });
    </script>
@endsection
