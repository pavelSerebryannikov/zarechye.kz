<footer class="mt-auto">
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                
                <div class="col-12">
                    <b>
                        <?php if(session()->get('locale') === 'ru'): ?>
                             Парк-Отель "Заречье"
                        <?php else: ?>
                             Park-Hotel "Zarechye"
                        <?php endif; ?>
                    </b>
                </div>

                
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-10 mt-4">
                            <div>
                                <picture>
                                    <img src="/img/location.svg" alt="">
                                </picture>
                            </div>
                            <div>
                                <span><?php echo app('translator')->get('pages.location'); ?>:</span>
                                <?php if(session()->get('locale') === 'ru'): ?>
                                    <?php echo e(setting('site.location-hotel')); ?>

                                <?php else: ?>
                                    <?php echo e(setting('site.location-hotel-en')); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-8">
                    <div class="row">

                        
                        <div class="col-md-6 col-lg-4 mt-4">
                            <div>
                                <picture>
                                    <img src="/img/phone2.svg" alt="">
                                </picture>
                            </div>
                            <div>
                                <span><?php echo app('translator')->get('pages.phone'); ?>:</span>
                                <a href="tel:+<?php echo e(preg_replace("/[^,.0-9]/", '', setting('site.phone-hotel'))); ?>">
                                    <?php echo e(setting('site.phone-hotel')); ?>

                                </a>
                            </div>
                        </div>

                        
                        <div class="col-md-6 col-lg-4 mt-4">
                            <div> 
                                <picture>
                                    <img src="/img/email.svg" alt="">
                                </picture>
                            </div>
                            <div>
                                <span><?php echo app('translator')->get('pages.email'); ?>:</span>
                                <a href="mailto:<?php echo e(setting('site.email-hotel')); ?>">
                                    <?php echo e(setting('site.email-hotel')); ?>

                                </a>
                            </div>
                        </div>

                        
                        <div class="col-md-6 col-lg-4 mt-4">
                            <div>
                                <picture>
                                    <img src="/img/time.svg" alt="">
                                </picture>
                            </div>
                            <div>
                                <span><?php echo app('translator')->get('pages.shedule'); ?>:</span>
                                <?php if(session()->get('locale') === 'ru'): ?>
                                    <?php echo e(setting('site.shedule-hotel')); ?>

                                <?php else: ?>
                                    <?php echo e(setting('site.shedule-hotel-en')); ?>

                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            
            <div class="row cpy">
                <div class="col">

                    
                    <iframe src="https://yandex.ru/sprav/widget/rating-badge/115278185678?type=rating&theme=dark" width="150" height="50" frameborder="0"></iframe>

                    
                    <div>
                        <a href="<?php echo e(app()->getLocale() === 'ru' 
                     ? '/pdf/Договор гостиничного обслуживания.pdf' 
                     : '/pdf/PUBLIC HOTEL SERVICE AGREEMENT.pdf'); ?>" target="_blank">
                     <?php echo e(app()->getLocale() === 'ru' 
                     ? 'Договор обслуживания' 
                     : 'PUBLIC SERVICE AGREEMENT'); ?>

                     </a>
                     </div>                   
					
                   <div>
                        <a href="<?php echo e(app()->getLocale() === 'ru' 
                    ? '/pdf/ПРАВИЛА ПРОЖИВАНИЯ.pdf' 
                    : '/pdf/RESIDENCE RULES.pdf'); ?>" target="_blank">
                    <?php echo e(app()->getLocale() === 'ru' 
                    ? 'ПРАВИЛА ПРОЖИВАНИЯ' 
                    : 'RESIDENCE RULES'); ?>

                    </a>
                    </div>

                    
                    <div>
                        <a href="https://yandex.kz/maps/?ll=82.688675%2C50.168917&mode=routes&rtext=49.955772%2C82.566076~50.391610%2C82.834250&rtt=auto&ruri=~ymapsbm1%3A%2F%2Forg%3Foid%3D115278185678&z=10" target="_blank">
                            <?php echo app('translator')->get('pages.route'); ?>
                        </a>
                    </div>

                    
                    <div>
                        <a href="<?php echo e(setting('site.inst')); ?>" target="_blank">
                            <picture>
                                <img src="/img/inst2.svg" alt="">
                            </picture>
                        </a>
                        <a href="<?php echo e(setting('site.fb')); ?>" target="_blank">
                            <picture>
                                <img src="/img/fb.svg" alt="">
                            </picture>
                        </a>
                        <a href="<?php echo e(setting('site.you')); ?>" target="_blank">
                            <picture>
                                <img src="/img/you.svg" alt="">
                            </picture>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<div id="cookie-banner" style="position: fixed; bottom: 20px; left: 20px; width: 500px; background: rgba(30, 30, 30, 0.95); color: #d4a373; padding: 15px; text-align: left; font-size: 14px; z-index: 9999; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
    <?php $lang = app()->getLocale(); ?>
    
    <?php if($lang == 'ru'): ?>
        <p style="margin: 0; color: white;">Этот сайт использует файлы cookie. Продолжая работу с сайтом, вы соглашаетесь с их использованием.</p>
        <div style="margin-top: 10px; text-align: center;">
            <button onclick="window.open('https://zarechye.kz/policy-cookies', '_blank')" style="display: inline-block; background: transparent; border: 1px solid #d4a373; color: #d4a373; padding: 8px 12px; cursor: pointer; border-radius: 4px; margin-right: 10px;">Подробнее</button>
            <button id="accept-cookies" style="display: inline-block; background: #d4a373; color: black; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px;">Принять</button>
        </div>
    <?php else: ?>
        <p style="margin: 0; color: white;">This site uses cookies. By continuing to browse the site, you agree to their use.</p>
        <div style="margin-top: 10px; text-align: center;">
            <button onclick="window.open('https://zarechye.kz/policy-cookies', '_blank')" style="display: inline-block; background: transparent; border: 1px solid #d4a373; color: #d4a373; padding: 8px 12px; cursor: pointer; border-radius: 4px; margin-right: 10px;">Learn More</button>
            <button id="accept-cookies" style="display: inline-block; background: #d4a373; color: black; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px;">Accept</button>
        </div>
    <?php endif; ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (localStorage.getItem("cookieAccepted")) {
            document.getElementById("cookie-banner").style.display = "none";
        }

        document.getElementById("accept-cookies").addEventListener("click", function() {
            localStorage.setItem("cookieAccepted", "true");
            document.getElementById("cookie-banner").style.display = "none";
        });
    });
</script>

<?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/partials/footer.blade.php ENDPATH**/ ?>