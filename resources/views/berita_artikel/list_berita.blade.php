@extends('layouts.master')
@section('head')
    <link href="{{ asset('/yes/css/detail-page.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection
@section('content')
    <main>
        <div class="page_header blog element_to_stick">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
                        <h1>DAFTAR BERITA</h1> 
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="Cari..">
                            <button type="submit"><i class="icon_search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /page_header -->
        {{ csrf_field() }}
        <div class="container margin_60_20">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        {{-- <h2 data-aos="fade-right" data-aos-delay="150">TOTAL BERITA : </h2> --}}
                        <span data-aos="fade-right" data-aos-delay="750"><em></em></span>
                    </div>
                </div>
                <div class="col-lg-9">
                   
                    <div class="row" id="data-wrapper">
                        
                    </div>
                    <!-- /row -->
                    <div class="load-more">

                    </div>
                    <div class="panel-body">
                        <div id="post_data">
                            {{-- button --}}
                        </div>
                    </div>
                    <hr>

                </div>
                <!-- /col -->

                <aside class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title first">
                            <h4>BERITA TERBARU</h4>
                        </div>
                        <ul class="comments-list">
                            @foreach ($beritas as $item)
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="{{asset('img_thumbnail/'.$item->thumbnail)}}" alt=""></a>
                                </div>
                                <small>{{Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y');}}</small>
                                <h3><a href="#" title="">{{$item->judul}}</a></h3>
                            </li>
                            @endforeach                        
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>KATEGORI</h4>
                        </div>
                        <ul class="cats">
                            <li><a href="#">Food <span>(12)</span></a></li>
                            <li><a href="#">Places to visit <span>(21)</span></a></li>
                            <li><a href="#">New Places <span>(44)</span></a></li>
                            <li><a href="#">Suggestions and guides <span>(31)</span></a></li>
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>TAG</h4>
                        </div>
                        <div class="tags">
                            <a href="#">Food</a>
                            <a href="#">Bars</a>
                            <a href="#">Cooktails</a>
                            <a href="#">Shops</a>
                            <a href="#">Best Offers</a>
                            <a href="#">Transports</a>
                            <a href="#">Restaurants</a>
                        </div>
                    </div>
                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection

@section('script')
    <script src="{{ asset('yes/js/sticky_sidebar.min.js') }}"></script>
    <script src="{{ asset('yes/js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('yes/js/specific_detail.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    

    <script>
        $(document).ready(function() {

            var _token = $('input[name="_token"]').val();

            load_data('', _token);

            function load_data(id = "", _token) {
                $.ajax({
                    url: "{{ route('post.load_more') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token
                    },
                    success: function(data) {
                            var last_id  = '';
                            var delay    = 150;
                            var site_url = window.location.href;
                            $('#load_more_button').remove();
                            if (data.berita.length === 0) {
                                //...
                                $("#post_data").append(
                                        '<div id="load_more">'
                                            +'<button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>'
                                        +'</div>'
                                    )
                            }else{
                                let tampil = 0;
                                $.each( data.berita, function( key, val ) {
                                    var show = delay*(key+1);
                                    $("#data-wrapper").append(
                                        '<div class="col-md-6" data-aos="fade-up" data-aos-delay="150">'
                                            +'<article class="blog">'
                                                +'<figure>'
                                                    +'<a href="/post/'+val.jenisposting.slug+'/'+val.slug+'" id="a_img'+key+'">'
                                                        +'<img src="../img_thumbnail/'+val.thumbnail+'">'
                                                        +'<div class="preview"><span>Read more</span></div>'
                                                    +'</a>'
                                                +'</figure>'
                                                +'<div class="post_info">'
                                                    +'<div class="kat"></div>'
                                                    +'<small>'+moment(val.created_at).format("dddd, MMMM Do YYYY")+'</small>'
                                                    +'<h2><a href="/">'+val.judul+'</a></h2><p>'+val.deskripsi.replace(/(<([^>]+)>)/gi, "").substring(0,140)+' [...]</p><ul><div><a href="/" class="btn btn_1" style="border-radius: 20px">Baca Selengkapnya</a></div></ul>'
                                                +'</div>'
                                            +'</article>'
                                        +'</div>'
                                    )
                                    last_id = val.id
                                    
                                });
                                // $('#text_menampilkan').html('Menampilkan '+data.total);

                                $("#post_data").append(
                                    '<div id="load_more">'
                                        +'<button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'+last_id+'" id="load_more_button">TAMPILKAN BERITA LAINNYA</button>'
                                    +'</div>'
                                )

                                

                            }
                           
                    }
                })
            }

            $(document).on('click', '#load_more_button', function() {
                var id = $(this).data('id');
                $('#load_more_button').html('<b>Loading...</b>');
                load_data(id, _token);
            });

        });
    </script>
@endsection
