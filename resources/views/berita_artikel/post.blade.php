@extends('layouts.master')
@section('head')
    <link href="{{ asset('/yes/css/detail-page.css') }}" rel="stylesheet">
@endsection
@section('content')
    <main>
        <div class="container margin_detail_2">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail_page_head clearfix">
                        <div class="rating">
                            <div class="score"><span>15 Viewers</span></div>
                        </div>
                        <div class="title">
                            <h1 style="text-transform: uppercase">{{ $post->judul }}</h1>
                            27 Januari 2022 - <a
                                href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                target="blank">Nurul Falah Surabaya</a>
                            <ul class="tags">
                                @foreach ($post->kategoriposting as $item)
                                    <li><a href="#0">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /detail_page_head -->
                    <h6>Penulis : "{{ $post->sumberposting->name }}"</h6>
                </div>
                <div class="col-lg-4">
                    <div class="pictures magnific-gallery clearfix">
                        @foreach ($post->imageposting as $img)
                            <figure>
                                <a href="{{ asset('img_posting/' . $img->img) }}" title="Photo title"
                                    data-effect="mfp-zoom-in">
                                    <img src="{{ asset('img_posting/' . $img->img) }}"
                                        data-src="{{ asset('img_posting/' . $img->img) }}" class="lazy loaded" alt=""
                                        data-was-processed="true">
                                </a>
                            </figure>
                        @endforeach


                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <nav class="secondary_nav sticky_horizontal2">
            <div class="container">
                <ul id="secondary_nav">
                    {{-- <li><a class="list-group-item list-group-item-action" href="#section-4">Parenting</a></li> --}}
                    <li><a class="list-group-item list-group-item-action" href="#section-5"><i
                                class="icon_chat_alt"></i>Beramal "Laziz NF"</a></li>
                    <li><a class="list-group-item list-group-item-action" href="#comments"><i class="icon_chat_alt"></i>10
                            Komentar</a></li>
                </ul>
            </div>
            <span></span>
        </nav>
        <!-- /secondary_nav -->

        <div class="bg_gray">

        </div>
        <!-- /bg_gray -->

        <div class="container margin_30_20">
            <div class="row">
                <div class="col-lg-9">
                    <div class="singlepost">
                        <figure><img alt="" style="width: 100%" class="img-fluid"
                                src="{{ asset('img_thumbnail/' . $post->thumbnail) }}"></figure>
                        <h1>{{ $post->judul }}</h1>
                        <div class="postmeta">
                            <ul>
                                <li><i class="icon_calendar"></i> 23/12/2015</li>
                                <li><i class="icon_folder-alt"></i>
                                    @foreach ($post->kategoriposting as $kategori)
                                        <a href="#"> {{ $kategori->name }}</a>
                                    @endforeach
                                </li>
                                <li><a href="#"><i class="icon_comment_alt"></i> Komentar</a></li>
                            </ul>
                        </div>
                        <!-- /post meta -->
                        <div class="post-content" style="text-align: justify">
                            <p>{!! $post->deskripsi !!}</p>
                        </div>
                        <!-- /post -->
                    </div>
                    <!-- /single-post -->
                    {{-- <div id="comments">
                    <h5>Comments</h5>
                    <ul>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="{{asset('yes/img/avatar1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul class="replied-to">
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="{{asset('yes/img/avatar4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="comment_right clearfix">
                                        <div class="comment_info">
                                            By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> --}}

                    <hr>

                    {{-- <h5>Leave a comment</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit2" class="btn_1 add_bottom_15">Submit</button>
                </div> --}}

                </div>
                <!-- /col -->

                <aside class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title first">
                            <h4>Post serupa</h4>
                        </div>
                        <?php $jenis = $post->jenisposting_id?>
                        <ul class="comments-list">
                            @foreach ($post->kategoriposting as $item)
                                @foreach ($item->posting as $items)
                                    <?php $recent = App\Models\Posting::where('id', $items->id)
                                        ->whereHas('jenisposting', function ($q) use ($jenis) {
                                            $q->where('id', $jenis);
                                        })
                                        ->limit(3)
                                        ->get(); ?>
                                    @foreach ($recent as $val)
                                        <li>
                                            <div class="alignleft" >
                                                <a href="#0"><img src="{{ asset('img_thumbnail/' . $val->thumbnail) }}"
                                                        alt=""></a>
                                            </div>
                                            <small>{{ $val->name }}</small>
                                            <span><a href="#" title="">{{ $val->judul }}</a></span>
                                        </li>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Kategori lainnya</h4>
                        </div>
                        <div class="tags">
                            @foreach ($post->kategoriposting as $item)
                                <a href="#">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Donasi, Amal & Zakat</h4>
                        </div>
                        <ul class="cats">
                            {{-- <li><a href="#">Food <span>(12)</span></a></li>
                        <li><a href="#">Places to visit <span>(21)</span></a></li>
                        <li><a href="#">New Places <span>(44)</span></a></li>
                        <li><a href="#">Suggestions and guides <span>(31)</span></a></li> --}}
                        </ul>
                    </div>
                    <!-- /widget -->

                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection

@section('script')
    <script src="{{ asset('yes/js/sticky_sidebar.min.js') }}"></script>
    <script src="{{ asset('yes/js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('yes/js/specific_detail.js') }}"></script>
@endsection
