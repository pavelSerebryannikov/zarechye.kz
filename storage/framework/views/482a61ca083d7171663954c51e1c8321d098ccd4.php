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
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <?php echo $page->text; ?>

            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    <?php $__currentLoopData = $photos->where('place' , 'pitanie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="ratio ratio-4x3">
                                <div>
                                    <picture data-src="<?php echo e($photo->webpImage); ?>" data-fancybox="gallery_1">
                                        <source srcset="<?php echo e($photo->webpImage); ?>" type="image/webp">
                                        <source srcset="<?php echo e(\Voyager::image($photo->image)); ?>" type="image/pjpeg">
                                        <img src="<?php echo e(\Voyager::image($photo->image)); ?>" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <?php echo $page->text2; ?>

                <button class="menu_pdf" onclick="window.open('<?php echo e(Voyager::image(json_decode(setting('site.menu'))[0]->download_link)); ?>');">
                    <picture>
                        <img src="/img/pdf.svg" alt="">
                    </picture>
                    <?php echo app('translator')->get('pages.menu'); ?>
                </button>
				<div id="flipbookContainer"></div>
            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    <?php $__currentLoopData = $photos->where('place' , 'menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="ratio ratio-4x3">
                                <div>
                                    <picture data-src="<?php echo e($photo->webpImage); ?>" data-fancybox="gallery_2">
                                        <source srcset="<?php echo e($photo->webpImage); ?>" type="image/webp">
                                        <source srcset="<?php echo e(\Voyager::image($photo->image)); ?>" type="image/pjpeg">
                                        <img src="<?php echo e(\Voyager::image($photo->image)); ?>" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
   <!-- <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-5 about_block_2 mt-5 mt-lg-0 order-2 order-lg-1">
                <?php echo $page->text3; ?>

                <button class="menu_pdf" onclick="window.open('<?php echo e(Voyager::image(json_decode(setting('site.menu'))[0]->download_link)); ?>');">
                    <picture>
                        <img src="/img/pdf.svg" alt="">
                    </picture>
                    <?php echo app('translator')->get('pages.detox'); ?>
                </button>
            </div>
            <div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
                <div class="ratio-4x3 ratio">
                    <div>
                        <picture>
                            <img src="<?php echo e(\Storage::disk('public')->url(setting('site.detox'))); ?>" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</main>

<!-- Flipbook StyleSheet -->
		<script src="/js/dflip.min.js"></script>
		<script>
		    jQuery(document).ready(function () {

			    var pdf = '/img/menu_fev_2024.pdf';

			    var options = {

			    	height: 900,
			    	duration: 800,
			    	scrollWheel: false,
			    	backgroundColor: "transparent",
			    	hideControls: "",
			    	allControls: "altPrev,pageNumber,altNext,play,zoomIn,zoomOut,fullScreen",

			    };

		    	var flipBook = $("#flipbookContainer").flipBook(pdf, options);
		    	
		    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/pitanie.blade.php ENDPATH**/ ?>