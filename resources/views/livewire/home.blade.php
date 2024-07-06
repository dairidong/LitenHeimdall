<div class="h-screen overflow-hidden">
    <div class="swiper">
        <div class="swiper-wrapper max-h-screen">

            <div class="swiper-slide">
                <div class="tag-container h-screen">General</div>
            </div>

            @foreach($tags as $tag)
                <div class="swiper-slide">
                    <div class="tag-container h-screen">
                        <livewire:components.show-tag :$tag />
                    </div>
                </div>

            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

@script
<script>
    new Swiper('.swiper',{
        modules: [SwiperMousewheel,SwiperPagination],
        direction: 'vertical',
        slidesPerView: 1,
        mousewheel: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
@endscript
