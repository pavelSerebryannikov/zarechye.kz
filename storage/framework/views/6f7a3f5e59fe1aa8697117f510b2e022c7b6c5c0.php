

<?php $__env->startSection('title'); ?>
    <?php if(app()->getLocale() == 'ru'): ?>
        Бронирование сертификатов в отеле Заречье, Казахстан - Официальный сайт
    <?php elseif(app()->getLocale() == 'en'): ?>
        Booking certificates hotel Zarechye, Kazakhstan - Official site
    <?php endif; ?>
<?php $__env->stopSection(); ?>


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
        <div class="container inner_text publications">
            <div class="row justify-content-center mb-0">
                <div class="col-lg-9 publication_zag">
                    <h2>
                        <?php
                            if(app()->getLocale() == 'ru') {echo "Бронирование сертификатов";}
                            elseif(app()->getLocale() == 'en') {echo "Booking certificates";}
                        ?>
                    </h2>
                    <hr>
                    <p><?php echo $page->text; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" id="be-booking-form-certificates"></div>
                <script>
                    document.body.classList.add('be-page');
                </script>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/booking-certificates.blade.php ENDPATH**/ ?>