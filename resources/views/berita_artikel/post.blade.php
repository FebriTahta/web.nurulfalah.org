@extends('layouts.master')
@section('head')
<link href="{{asset('/yes/css/detail-page.css')}}" rel="stylesheet">
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
                        <h1 style="text-transform: uppercase">Komunikasi Efektif Orang Tua dan Anak</h1>
                        27 Januari 2022 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Nurul Falah Surabaya</a>
                        <ul class="tags">
                            <li><a href="#0">Artikel</a></li>
                            <li><a href="#0">Hikmah</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /detail_page_head -->
                <h6>Penulis : "K.H Umar Jaeni S.Pd"</h6>
            </div>
            <div class="col-lg-4">
                <div class="pictures magnific-gallery clearfix">
                    <figure>
                        <a href="{{asset('yes/img/detail_gallery/detail_1.jpg')}}" title="Photo title" data-effect="mfp-zoom-in">
                            <img src="{{asset('yes/img/thumb_detail_1.jpg')}}" data-src="{{asset('yes/img/thumb_detail_1.jpg')}}" class="lazy loaded" alt="" data-was-processed="true">
                        </a>
                    </figure>
                    <figure><a href="{{asset('yes/img/detail_gallery/detail_1.jpg')}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{asset('yes/img/thumb_detail_1.jpg')}}" data-src="{{asset('yes/img/thumb_detail_1.jpg')}}" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
                    <figure><a href="{{asset('yes/img/detail_gallery/detail_1.jpg')}}" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="{{asset('yes/img/thumb_detail_1.jpg')}}" data-src="{{asset('yes/img/thumb_detail_1.jpg')}}" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
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
                <li><a class="list-group-item list-group-item-action" href="#section-5"><i class="icon_chat_alt"></i>Beramal "Laziz NF"</a></li>
                <li><a class="list-group-item list-group-item-action" href="#comments"><i class="icon_chat_alt"></i>10 Komentar</a></li>
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
                    <figure><img alt="" style="width: 100%" class="img-fluid" src="{{ asset('yes/img/nfkalsel.jpg') }}"></figure>
                    <h1>Cooking best practices</h1>
                    <div class="postmeta">
                        <ul>
                            <li><i class="icon_calendar"></i> 23/12/2015</li>
                            <li><a href="#"><i class="icon_folder-alt"></i> Category</a></li>
                            <li><a href="#"><i class="icon_comment_alt"></i> Komentar</a></li>
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content" style="text-align: justify">
                        <p>Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->
                <div id="comments">
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
                </div>

                <hr>

                <h5>Leave a comment</h5>
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
                </div>

            </div>
            <!-- /col -->

            <aside class="col-lg-3">
                <div class="widget">
                    <div class="widget-title first">
                        <h4>Post serupa</h4>
                    </div>
                    <ul class="comments-list">
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{ asset('yes/img/muslim_unggulan.jpg') }}" alt=""></a>
                            </div>
                            <small>Hikmah</small>
                            <h3><a href="#" title="">Melahirkan Muslim Unggulan</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{ asset('yes/img/yatim.jpg') }}" alt=""></a>
                            </div>
                            <small>Hikmah</small>
                            <h3><a href="#" title="">Menyayangi Anak Yatim</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="{{ asset('yes/img/bersyukur.jpg') }}" alt=""></a>
                            </div>
                            <small>Hikmah</small>
                            <h3><a href="#" title="">Menikmati Rezeki</a></h3>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <div class="widget-title">
                        <h4>Kategori lainnya</h4>
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
                <div class="widget">
                    <div class="widget-title">
                        <h4>Berzakat & Beramal (Laziz)</h4>
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
<script src="{{asset('yes/js/sticky_sidebar.min.js')}}"></script>
<script src="{{asset('yes/js/sticky-kit.min.js')}}"></script>
<script src="{{asset('yes/js/specific_detail.js')}}"></script>
@endsection