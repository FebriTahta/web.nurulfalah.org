@foreach ($berita as $item)
<div class="item" data-aos="fade-right" data-aos-delay="150">
    <div class="strip">
        <figure>
            {{-- <span class="ribbon off">Kategori</span> --}}
            <img src="{{ asset('img_thumbnail/'.$item->thumbnail) }}"
                data-src="{{ asset('img_thumbnail/'.$item->thumbnail) }}" class="owl-lazy" alt="" width="460"
                height="310">
            <a href="/post/contoh" class="strip_info">
                @foreach ($item->kategori as $value)
                    <small>{{$value->name}}</small>
                @endforeach
            </a>
        </figure>
        <ul>
            <li><span class="">
                {{-- 02 Februari 2022 --}}
                {{$item->created_at}}
                </span>
            </li>
            <li>
                <div class="score"><strong>520</strong></div>
            </li>
        </ul>
    </div>
</div>
@endforeach