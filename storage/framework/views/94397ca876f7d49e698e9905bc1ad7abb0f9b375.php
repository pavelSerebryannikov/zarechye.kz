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
    <div class="container inner_text publications">
        <div class="row justify-content-center">
            <div class="col-lg-9 publication_zag">

                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php echo $page->text; ?>

            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/page.blade.php ENDPATH**/ ?>