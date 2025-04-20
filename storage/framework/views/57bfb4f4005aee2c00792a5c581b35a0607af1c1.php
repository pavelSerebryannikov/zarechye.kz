<?php $__env->startSection('title'); ?>
    <?php echo e($page->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e($page->keywords); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    <?php echo e($page->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid inner_header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h1><?php echo e($page->title); ?></h1>
                        <p><?php echo e($page->subtitle); ?></p>
                    </div>
                    <picture>
                        <source srcset="<?php echo e($page->webpImage); ?>" type="image/webp">
                        <source srcset="<?php echo e(\Voyager::image($page->image)); ?>" type="image/pjpeg">
                        <img src="<?php echo e(\Voyager::image($page->image)); ?>" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <div class="search_form d-none d-lg-block" id="be-search-form"></div>
    </div>

    <div class="booking_form d-lg-none">
        <div id="be-search-form-2"></div>
    </div>

    <div class="container mt-5 about_block">
        <div class="row">
            <div class="col-lg-4">
                <div class="contacts">
                    <b><?php echo app('translator')->get('pages.office'); ?></b>
                    <hr>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/location2.svg" alt=""></picture>
                            </div>
                            <div><?php echo app('translator')->get('pages.office'); ?>:</div>
                        </div>
                        <p>
                            <?php echo e(session()->get('locale') === 'ru' ? setting('site.location-booking') : setting('site.location-booking-en')); ?>

                        </p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/time2.svg" alt=""></picture>
                            </div>
                            <div><?php echo app('translator')->get('pages.shedule'); ?>:</div>
                        </div>
                        <p>
                            <?php echo e(session()->get('locale') === 'ru' ? setting('site.shedule-booking') : setting('site.shedule-booking-en')); ?>

                        </p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/email2.svg" alt=""></picture>
                            </div>
                            <div><?php echo app('translator')->get('pages.email'); ?>:</div>
                        </div>
                        <p><a href="mailto:<?php echo e(setting('site.email-booking')); ?>"><?php echo e(setting('site.email-booking')); ?></a></p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/phone3.svg" alt=""></picture>
                            </div>
                            <div><?php echo app('translator')->get('pages.phone'); ?>:</div>
                        </div>
                        <p><a href="tel:+<?php echo e(preg_replace("/[^,.0-9]/", '', setting('site.phone-booking'))); ?>"><?php echo e(setting('site.phone-booking')); ?></a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row s1">
                    <div class="col-12 mb-4 mt-4 mt-lg-0">
                        <div class="contacts">
                            <div class="row">
                                <div class="col-lg-5">
                                    <b><?php echo app('translator')->get('pages.hotel'); ?></b>
                                    <hr>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/location2.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.location'); ?>:</div>
                                        </div>
                                        <p>
                                            <?php echo e(session()->get('locale') === 'ru' ? setting('site.location-hotel') : setting('site.location-hotel-en')); ?>

                                        </p>
                                    </div>

                                    <a href="https://yandex.kz/maps/?ll=82.688675%2C50.168917&mode=routes&rtext=49.955772%2C82.566076~50.391610%2C82.834250&rtt=auto&ruri=~ymapsbm1%3A%2F%2Forg%3Foid%3D115278185678&z=10" 
                                       class="more mt-4 mb-4 d-inline-block" 
                                       target="_blank">
                                        <?php echo app('translator')->get('pages.build-route'); ?>
                                    </a>

                                    <div class="soc">
                                        <div><b><?php echo app('translator')->get('pages.soc'); ?>: </b></div>
                                        <div>
                                            <a href="<?php echo e(setting('site.inst')); ?>" target="_blank">
                                                <picture><img src="/img/inst3.svg" alt=""></picture>
                                            </a>
                                            <a href="<?php echo e(setting('site.fb')); ?>" target="_blank">
                                                <picture><img src="/img/fb2.svg" alt=""></picture>
                                            </a>
                                            <a href="<?php echo e(setting('site.you')); ?>" target="_blank">
                                                <picture><img src="/img/you2.svg" alt=""></picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/time2.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.shedule'); ?>:</div>
                                        </div>
                                        <p>
                                            <?php echo e(session()->get('locale') === 'ru' ? setting('site.shedule-hotel') : setting('site.shedule-hotel-en')); ?>

                                        </p>
                                    </div>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/email2.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.email'); ?>:</div>
                                        </div>
                                        <p><a href="mailto:<?php echo e(setting('site.email-hotel')); ?>"><?php echo e(setting('site.email-hotel')); ?></a></p>
                                    </div>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/phone3.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.phone'); ?>:</div>
                                        </div>
                                        <p><a href="tel:+<?php echo e(preg_replace("/[^,.0-9]/", '', setting('site.phone-hotel'))); ?>"><?php echo e(setting('site.phone-hotel')); ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="contacts">
                            <b><?php echo app('translator')->get('pages.marketing'); ?></b>
                            <hr>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/time2.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.shedule'); ?>:</div>
                                        </div>
                                        <p>
                                            <?php echo e(session()->get('locale') === 'ru' ? setting('site.shedule-marketing') : setting('site.shedule-marketing-en')); ?>

                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/email2.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.email'); ?>:</div>
                                        </div>
                                        <p><a href="mailto:<?php echo e(setting('site.email-marketing')); ?>"><?php echo e(setting('site.email-marketing')); ?></a></p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/phone3.svg" alt=""></picture>
                                            </div>
                                            <div><?php echo app('translator')->get('pages.phone'); ?>:</div>
                                        </div>
                                        <p><a href="tel:+<?php echo e(preg_replace("/[^,.0-9]/", '', setting('site.phone-marketing'))); ?>"><?php echo e(setting('site.phone-marketing')); ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 map mt-4">
                <?php echo setting('site.map'); ?>

            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/contacts.blade.php ENDPATH**/ ?>