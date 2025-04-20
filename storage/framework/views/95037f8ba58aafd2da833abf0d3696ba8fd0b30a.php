<?php $__env->startSection('title'); ?>
    <?php echo e($promotion->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo e($promotion->keywords); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($promotion->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <div class="container-fluid inner_header inner_promo">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div>
                            <h1><?php echo e($promotion->title); ?></h1>
                            <hr>
                            <button class="booking" data-bs-toggle="modal" data-bs-target="#application"><?php echo app('translator')->get('pages.application'); ?></button>
                        </div>
                        <picture>
                            <source srcset="<?php echo e($promotion->webpImage); ?>" type="image/webp">
                            <source srcset="<?php echo e(\Voyager::image($promotion->image)); ?>" type="image/pjpeg">
                            <img src="<?php echo e(\Voyager::image($promotion->image)); ?>" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 inner_text_promo">
            <div class="row">
				<?php if($promotion['type'] == 'first'): ?>
					<div class="col-12 text-center">
						<h3><?php echo app('translator')->get('pages.terms-of-action'); ?></h3>
						<hr>
					</div>
				<?php endif; ?>
                <div class="col-lg-6">
                    <?php echo $promotion->text; ?>

                </div>
                <div class="col-lg-6">
                    <?php echo $promotion->text2; ?>

                </div>
            </div>
            <div class="row promo_gallery">
                <?php if(!$promotion['photos']): ?>
                <?php else: ?>
                    <?php if(count(json_decode($promotion->photos))): ?>
                        <?php $__currentLoopData = json_decode($promotion->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/promotion.blade.php ENDPATH**/ ?>