<?php $__env->startSection('title'); ?>
    <?php echo e($publication->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo e($publication->keywords); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($publication->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <div class="container-fluid inner_header inner_promo">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div>
                            <h1><?php echo e($publication->title); ?></h1>
                            <hr>
                        </div>
                        <picture>
                            <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                            <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                            <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 inner_text_promo">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php echo $publication->text; ?>

                </div>
            </div>
            <div class="row promo_gallery">
                <?php if(!$publication['photos']): ?>
                <?php else: ?>
                    <?php if(count(json_decode($publication->photos))): ?>
                        <?php $__currentLoopData = json_decode($publication->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ratio">
                                <div>
                                    <picture
                                        data-src="<?php echo e(str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo))); ?>"
                                        data-fancybox="gallery_4">
                                        <source
                                            srcset="<?php echo e(str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo))); ?>"
                                            type="image/webp">
                                        <source srcset="<?php echo e(Voyager::image($photo)); ?>" type="image/pjpeg">
                                        <img src="<?php echo e(Voyager::image($photo)); ?>" alt="">
                                    </picture>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/publication.blade.php ENDPATH**/ ?>