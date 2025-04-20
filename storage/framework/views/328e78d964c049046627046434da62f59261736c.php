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
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <?php echo $page->text; ?>

            </div>
        </div>

        <div class="row justify-content-center mt-4 concept_benefits">
            <?php $__currentLoopData = $benefits->where('place', 'gazebos'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-lg-3">
                    <div class="benefit">
                        <picture data-src="<?php echo e($benefit->webpImage); ?>">
                            <source srcset="<?php echo e($benefit->webpImage); ?>" type="image/webp">
                            <source srcset="<?php echo e(\Voyager::image($benefit->image)); ?>" type="image/pjpeg">
                            <img src="<?php echo e(\Voyager::image($benefit->image)); ?>" alt="">
                        </picture>
                        <div class="benefit_title">
                            <?php echo e($benefit->title); ?>

                        </div>
                        <?php echo $benefit->text; ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="container mt-5 about_block pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <?php echo $page->text2; ?>

            </div>
            <div class="col-12 mt-5 concept_image">
                <?php echo $page->text3; ?>

            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/gazebos.blade.php ENDPATH**/ ?>