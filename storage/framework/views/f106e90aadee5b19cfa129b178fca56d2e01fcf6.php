<?php if(session()->get('locale') === 'ru'): ?>
    <?php $__env->startSection('title'); ?>
        <?php echo e(setting('site.title')); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('keywords'); ?>
        <?php echo e(setting('site.keywords')); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('description'); ?>
        <?php echo e(setting('site.description')); ?>

    <?php $__env->stopSection(); ?>
<?php else: ?>
    <?php $__env->startSection('title'); ?>
        <?php echo e(setting('site.title-en')); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('keywords'); ?>
        <?php echo e(setting('site.keywords-en')); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('description'); ?>
        <?php echo e(setting('site.description-en')); ?>

    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

<main>
    <div class="container-fluid slider_block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide_text">
                        <?php if(session()->get('locale') === 'ru'): ?>
                            <h1><?php echo e(setting('site.video-title')); ?></h1>
                            <p><?php echo e(setting('site.video-text')); ?></p>
                        <?php else: ?>
                            <h1><?php echo e(setting('site.video-title-en')); ?></h1>
                            <p><?php echo e(setting('site.video-text-en')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="search_form" id="be-search-form"></div>
                    <video muted="" autoplay="autoplay" loop="loop" playsinline="" poster="<?php echo e(\Storage::disk('public')->url(setting('site.poster'))); ?>"
                        class="sliderhome-img">
                        <source src="<?php echo e(setting('site.video')); ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <?php if(session()->get('locale') === 'ru'): ?>
                    <?php echo setting('site.about'); ?>

                <?php else: ?>
                    <?php echo setting('site.about-en'); ?>

                <?php endif; ?>
            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    <?php $__currentLoopData = $photos->where('place' , 'about'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="owl-carousel carousel_2 owl-theme">
                    <?php $__currentLoopData = $photos->where('place' , 'prozhivanie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="ratio-4x3 ratio">
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
            <div class="col-lg-5 offset-lg-1 about_block_2 mt-5 mt-lg-0">
                <?php if(session()->get('locale') === 'ru'): ?>
                    <?php echo setting('site.prozhivanie'); ?>

                <?php else: ?>
                    <?php echo setting('site.prozhivanie-en'); ?>

                <?php endif; ?>
                <div>
                    <button onclick="window.location.href = '/prozhivanie#mini_hotels';">
                        <?php echo app('translator')->get('pages.nomera'); ?>
                        <picture>
                            <img src="/img/arrow_more.svg" alt="">
                        </picture>
                    </button>
                    <button onclick="window.location.href = '/prozhivanie#cottages';">
                        <?php echo app('translator')->get('pages.cottedges'); ?>
                        <picture>
                            <img src="/img/arrow_more.svg" alt="">
                        </picture>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 pb-5 pt-sm-5 mt-5 about_block gallery_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2><?php echo app('translator')->get('pages.act'); ?></h2>
                <hr>
            </div>
            <div class="col-12 mt-sm-4">
                <div class="outer">
                    <div id="big" class="owl-carousel owl-theme">
                        <?php $__currentLoopData = $publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'activity';
                        }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="slide_text_2">
                                    <div class="slide_text_2_1">
                                        <div>
                                            <h3><?php echo e($publication->title); ?></h3>
                                        </div>
                                        <div>
                                            <button class="more" onclick="window.location.href = '<?php echo e(route('publication' , $publication->slug)); ?>';">
                                                <?php echo app('translator')->get('pages.more'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <picture>
                                    <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                                    <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                                    <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                                </picture>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div id="thumbs" class="owl-carousel owl-theme d-none d-md-block">
                        <?php $__currentLoopData = $publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'activity';
                        }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="slide_text_3">
                                    <h4><?php echo e($publication->title); ?></h4>
                                </div>
                                <picture>
                                    <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                                    <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                                    <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                                </picture>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-5 about_block_2 mt-5 mt-lg-0 order-2 order-lg-1">
                <?php if(session()->get('locale') === 'ru'): ?>
                    <?php echo setting('site.pitanie'); ?>

                <?php else: ?>
                    <?php echo setting('site.pitanie-en'); ?>

                <?php endif; ?>
                <button class="more" onclick="window.location.href = '/pitanie';"><?php echo app('translator')->get('pages.more'); ?></button>
            </div>
            <div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
                <div class="owl-carousel carousel_2 owl-theme">
                    <?php $__currentLoopData = $photos->where('place' , 'pitanie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="ratio ratio-4x3">
                                <div>
                                    <picture data-src="<?php echo e($photo->webpImage); ?>" data-fancybox="gallery_3">
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
    <div class="container-fluid pt-4 pb-5 pt-sm-5 mt-5 about_block gallery_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2><?php echo app('translator')->get('pages.events'); ?></h2>
                <hr>
            </div>
            <div class="col-12 mt-sm-4">
                <div class="outer">
                    <div id="big2" class="owl-carousel owl-theme">
                        <?php $__currentLoopData = $publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'events';
                        }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="slide_text_2">
                                    <div class="slide_text_2_1">
                                        <div>
                                            <h3><?php echo e($publication->title); ?></h3>
                                        </div>
                                        <div>
                                            <button class="more" onclick="window.location.href = '<?php echo e(route('publication' , $publication->slug)); ?>';">
                                                <?php echo app('translator')->get('pages.more'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <picture>
                                    <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                                    <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                                    <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                                </picture>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div id="thumbs2" class="owl-carousel owl-theme d-none d-md-block">
                        <?php $__currentLoopData = $publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'events';
                        }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="slide_text_3">
                                    <h4><?php echo e($publication->title); ?></h4>
                                </div>
                                <picture>
                                    <source srcset="<?php echo e($publication->webpImage); ?>" type="image/webp">
                                    <source srcset="<?php echo e(\Voyager::image($publication->image)); ?>" type="image/pjpeg">
                                    <img src="<?php echo e(\Voyager::image($publication->image)); ?>" alt="">
                                </picture>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 about_block pt-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2><?php echo app('translator')->get('pages.benefits'); ?></h2>
                <hr>
            </div>
            <?php $__currentLoopData = $benefits->where('place' , 'home'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="benefit" data-bs-toggle="modal" data-bs-target="#benefit_<?php echo e($benefit->id); ?>">
                        <span>
                            <i><?php echo app('translator')->get('pages.more'); ?></i>
                        </span>
                        <picture>
                            <img src="<?php echo e(\Voyager::image($benefit->image)); ?>" alt="">
                        </picture>
                        <div class="benefit_title">
                            <?php echo e($benefit->title); ?>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="benefit_<?php echo e($benefit->id); ?>">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo e($benefit->title); ?></h4>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo $benefit->text; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/home.blade.php ENDPATH**/ ?>