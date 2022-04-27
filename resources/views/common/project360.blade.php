<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

{{--@dd($project)--}}
<div id="modal360" class="fp-gallery-overlay fp-touch" style="opacity: 1; display: block;">
    <div class="fp-gallery-swiper parent">
        <div class="pswp pswp--open pswp--notouch pswp--css_animation pswp--svg pswp--animated-in pswp--visible pswp--has_mouse"
             tabindex="-1" role="dialog" aria-hidden="false" style="position: fixed; opacity: 1;">
            <div class="pswp__bg" style="opacity: 1;"></div>

            <div class="pswp__scroll-wrap">
                <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
{{--                    <div class="pswp__item" style="display: block; transform: translate3d(-1897px, 0px, 0px);">--}}
{{--                        <div class="pswp__zoom-wrap" style="transform: translate3d(284px, 44px, 0px) scale(1);">--}}
{{--                            <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank"--}}
{{--                                 style="width: 1530px; height: 860px; display: none;"></div>--}}
{{--                            <img class="pswp__img" src="/uploaded_images/projects/1-x3.jpg?width=1920&amp;quality=85"--}}
{{--                                 style="width: 1126px; height: 633px;">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @foreach(unserialize($project->image360) as $key=>$image)
                        <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="pswp__zoom-wrap" style="transform: translate3d(284px, 44px, 0px) scale(1);">
                                {{--                                <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank"--}}
                                {{--                                     style="width: 1530px; height: 860px; display: none;"></div>--}}
                                <div id="prop{{$key}}" data-image="{{asset($image)}}"></div>
                            </div>
                        </div>
                    @endforeach
                    <div id="showimage"></div>


{{--                    <div class="pswp__item" style="display: block; transform: translate3d(1897px, 0px, 0px);">--}}
{{--                        <div class="pswp__zoom-wrap" style="transform: translate3d(284px, 44px, 0px) scale(1);">--}}
{{--                            <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank"--}}
{{--                                 style="width: 1530px; height: 860px; display: none;"></div>--}}
{{--                            <img class="pswp__img" src="/uploaded_images/projects/1-x2.jpg?width=1920&amp;quality=85"--}}
{{--                                 style="width: 1126px; height: 633px;"></div>--}}
{{--                    </div>--}}
                </div>

                <div class="pswp__ui pswp__ui--fit">
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__top-bar">
                        <div class="pswp__counter">1 / 3</div>

                        <button class="pswp__button pswp__button--close pswp__element--disabled"
                                title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share pswp__element--disabled" title="Share"></button>
                        <button class="pswp__button pswp__button--fs pswp__element--disabled"
                                title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap pswp__element--disabled">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                    <div class="pswp__caption pswp__caption--fake">
                        <div class="pswp__caption__center"></div>
                    </div>
                    <div class="pswp__caption pswp__caption--empty">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fp-gallery-tiles" style="transform: matrix(1, 0, 0, 1, 0, 0);">
        <div class="fp-gallery-tiles__wrapper">
            @foreach(unserialize($project->image360) as $key=>$image)
                <div class="fp-gallery-tile fp-ph-image fp-grid-item__single white is-selected is-loaded" data-i="{{$key}}"
                     data-width="2732" data-height="1536" style="background: #83766B;">
                    <div class="fp-content">
                        <img sizes="294px" srcset="{{asset($image)}}" data-num="{{$key}}" class="fp-content__img"
                             alt="Image 0" style="width: auto; height: 100%;">
                    </div>
                    <div class="fp-spacer"></div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="fp-gallery-overlay__close">
        <button class="fp-button-icon icon-close theme-white">
            <span class="icon__i"></span>
        </button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        showImage(0);
        document.querySelectorAll("#modal360 .fp-content__img").forEach((ele)=>  {
            ele.addEventListener('click', ()=> {
                showImage(ele.getAttribute('data-num'))
            })
        })
    });

    function showImage(i){
        let image360 = document.querySelector(`#modal360 #prop${i}`).getAttribute('data-image')
        pannellum.viewer(`showimage`, {
            "type": "equirectangular",
            "panorama": image360,
            "autoLoad": true
        })
    }
</script>