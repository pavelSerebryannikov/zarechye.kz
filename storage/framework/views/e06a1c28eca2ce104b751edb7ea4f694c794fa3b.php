<?php $__env->startSection('title'); ?>
    <?php echo e($appartament->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo e($appartament->keywords); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($appartament->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main>
    <div class="container-fluid inner_header_nomer">
        <span class="room_name"><?php echo e($appartament->title); ?></span>
        <div class="owl-carousel carousel_4 owl-theme">
            <?php if(count(json_decode($appartament->photos))): ?>
                <?php $__currentLoopData = json_decode($appartament->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <picture>
                            <source
                                srcset="<?php echo e(str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo))); ?>"
                                type="image/webp">
                            <source
                                srcset="<?php echo e(Voyager::image($photo)); ?>"
                                type="image/pjpeg">
                            <img src="<?php echo e(Voyager::image($photo)); ?>"
                                alt="">
                        </picture>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="search_form d-none d-lg-block" id="be-search-form"></div>
    </div>
    
    <div class="booking_form d-lg-none">
        <div id="be-search-form-2"></div>
    </div>
    <div class="container mt-5 about_nomer">
        <div class="row">
            <div class="col-lg-5">
                <?php if($appartament['type'] == 'hotel'): ?>
                    <h2><?php echo app('translator')->get('pages.about-nomer'); ?></h2>
                <?php else: ?>
                    <h2><?php echo app('translator')->get('pages.about-cottage'); ?></h2>
                <?php endif; ?>
                <hr>
                <div class="nomer_block_icons">
                    <div>
                        <picture>
                            <img src="/img/icon1.svg" alt="">
                        </picture>
                        <?php echo e($appartament->size); ?>

                    </div>
                    <div>
                        <picture>
                            <img src="/img/icon2.svg" alt="">
                        </picture>
                        <?php echo e($appartament->places); ?>

                    </div>
                </div>
                <ul class="nav nav-pills mt-4 mb-4">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill"
                            data-bs-target="#info"><?php echo app('translator')->get('pages.info'); ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#in_nomer"><?php echo app('translator')->get('pages.in-room'); ?></button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="info">
                        <?php echo $appartament->text1; ?>

                    </div>
                    <div class="tab-pane fade" id="in_nomer">
                        <?php echo $appartament->text2; ?>

                    </div>
                </div>
                <div class="price_block">
                    <?php if(!$appartament['price']): ?>
                    <?php else: ?>
                        <?php if(session()->get('locale') === 'ru'): ?>
                            от <span><?php echo e(number_format($appartament->price, 0 , '.' , ' ')); ?> ₸</span> за ночь:
                        <?php else: ?>
                            from <span><?php echo e(number_format($appartament->price, 0 , '.' , ' ')); ?> ₸</span> per night:
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="mt-3">
                    <button class="booking" onclick="window.location.href = '/bronirovanie?room-type=<?php echo e($appartament->booking); ?>';"><?php echo app('translator')->get('pages.book-nomer'); ?></button>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-5 mt-lg-0">
                <div class="owl-carousel carousel_3 owl-theme">
                    <?php if(count(json_decode($appartament->photos))): ?>
                        <?php $__currentLoopData = json_decode($appartament->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="ratio-4x3 ratio">
                                    <div>
                                        <picture data-src="<?php echo e(str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo))); ?>" data-fancybox="room_photo">
                                            <source
                                                srcset="<?php echo e(str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo))); ?>"
                                                type="image/webp">
                                            <source
                                                srcset="<?php echo e(Voyager::image($photo)); ?>"
                                                type="image/pjpeg">
                                            <img src="<?php echo e(Voyager::image($photo)); ?>"
                                                alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/appartament.blade.php ENDPATH**/ ?>