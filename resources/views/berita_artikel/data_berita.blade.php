@foreach ($beritas as $item)
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
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
                <h2><a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">{{ $item->judul }}</a></h2>
                <p>{{ substr(strip_tags($item->deskripsi), 0, 100) }} [...]</p>
                <ul>
                    <div>
                        <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}" class="btn btn_1"
                            style="border-radius: 20px">Baca Selengkapnya</a>
                    </div>
                </ul>
            </div>
        </article>
    </div>
@endforeach
