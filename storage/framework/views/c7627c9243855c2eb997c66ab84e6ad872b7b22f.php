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
    <div class="container mt-2 inner_text publications">
        <div class="row justify-content-center">
            <div class="col-lg-6 publication_zag">
                <?php echo $page->text; ?>

            </div>
        </div>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $publications->where('type' , 'events'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6">
                    <div class="publication">
                        <div class="ratio ratio-21x9 mb-4">
                            <div>
                                <a href="<?php echo e(route('publication' , $publication->slug)); ?>">
                                    <picture>
                                        <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                                        <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                                        <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2"><?php echo e($publication->title); ?></h3>
                        <button class="more" onclick="window.location.href = '<?php echo e(route('publication' , $publication->slug)); ?>';">
                            <?php echo app('translator')->get('pages.more'); ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/events.blade.php ENDPATH**/ ?>