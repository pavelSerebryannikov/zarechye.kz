<div class="modal fade" id="application">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">@lang('pages.online_application')</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <script data-b24-form="inline/6/k8ioor" data-skip-moving="true">
                    (function(w,d,u){
                        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                    })(window,document,'https://cdn-ru.bitrix24.kz/b27851796/crm/form/loader_6.js');
                </script>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="response" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">@lang('pages.has_send')</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <br>
                <picture>
                    <img src="/img/send.svg" alt="">
                </picture>
                <br><br><br>
                @lang('pages.has_send_text')
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="menu">
    <div class="offcanvas-body">
        <picture class="close">
            <img src="/img/close.svg" data-bs-dismiss="offcanvas" alt="">
        </picture>
        {!! menu('menu') !!}
        <a href="/bronirovanie"><button>@lang('pages.booking')</button></a>
        <a href="/booking-certificates" class="be-mobile-link"><button>@lang('pages.booking-certificates')</button></a>
    </div>
</div>