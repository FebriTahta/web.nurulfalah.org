@extends('layouts.master')
@section('head')
    <link href="{{ asset('/yes/css/detail-page.css') }}" rel="stylesheet">
@endsection
@section('content')
<main>
    <div class="page_header blog element_to_stick">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
                    <h1>Blog and Articles</h1>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Dishes, restaurants or cuisines">
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </div>
            </div>
            <!-- /row -->		       
        </div>
    </div>
    <!-- /page_header -->

    <div class="container margin_60_20">			
        <div class="row">
            <div class="col-lg-9">
                <div class="row" id="data-wrapper">
                    {{-- ZONA BERITA --}}
                    @include('berita_artikel.data_berita')
                    <!-- Data Loader -->
                    <div class="auto-load text-center">
                        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100"
                            enable-background="new 0 0 0 0" xml:space="preserve">
                            <path fill="#000"
                                d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                    from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- /row -->
                <div class="load-more">
                    
                </div>

            </div>
            <!-- /col -->

            <aside class="col-lg-3">
                <div class="widget">
                    <div class="widget-title first">
                        <h4>Latest Post</h4>
                    </div>
                    <ul class="comments-list">
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="img/blog-5.jpg" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="img/blog-6.jpg" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="img/blog-4.jpg" alt=""></a>
                            </div>
                            <small>Category - 11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                    </ul>
                </div>
                <!-- /widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Categories</h4>
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
                        <h4>Popular Tags</h4>
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

    <script type="text/javascript">
        var page = 1;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });

        function loadMoreData(page) {
            $.ajax({
                    url: '/post/daftar-berita?page=' + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(data) {
                    if (data.html == '') {
                        return $('.auto-load').html("No more product");

                    } else {
                        $('.auto-load').hide();
                        $("#data-wrapper").append(data.html);
                    }
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
        }

        $('.button').click(function() {
            var buttonId = $(this).attr('id');
            $('#modal-container').removeAttr('class').addClass(buttonId);
            $('body').addClass('modal-active');
        })

        $('#modal-container').click(function() {
            $(this).addClass('out');
            $('body').removeClass('modal-active');
        });
    </script>
@endsection
