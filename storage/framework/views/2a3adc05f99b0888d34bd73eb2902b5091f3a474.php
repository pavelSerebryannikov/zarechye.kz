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
        <div class="container mt-5 inner_text">
            <div class="row">
                <div class="col-12 change_nomer">
                    <h2><?php echo app('translator')->get('pages.choose'); ?></h2>
                    <hr>
                    <ul class="nav nav-pills mt-5 mb-5">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all"><?php echo app('translator')->get('pages.allrooms'); ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#mini_hotels"><?php echo app('translator')->get('pages.rooms'); ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#cottages"><?php echo app('translator')->get('pages.cotteges'); ?></button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row">

                                <?php $__currentLoopData = $appartaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appartament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12">
                                        <div class="nomer_block">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                    <h3 class="d-none d-lg-block">
                                                        <a href="<?php echo e(route('appartament' , $appartament->slug)); ?>">
                                                            <?php echo e($appartament->title); ?>

                                                        </a>
                                                    </h3>
                                                    <hr class="d-none d-lg-block">
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
                                                    <div class="mt-4 mt-lg-5">
                                                        <button class="booking"
                                                            onclick="window.location.href = '/bronirovanie?room-type=<?php echo e($appartament->booking); ?>';"><?php echo app('translator')->get('pages.book-nomer'); ?></button>
                                                        <button class="more_2"
                                                            onclick="window.location.href = '<?php echo e(route('appartament', $appartament->slug)); ?>';"><?php echo app('translator')->get('pages.more'); ?></button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2">
                                                    <h3 class="d-lg-none text-center"><?php echo e($appartament->title); ?></h3>
                                                    <hr class="d-lg-none">
                                                    <div class="owl-carousel carousel_3 owl-theme">
                                                        <?php if(count(json_decode($appartament->photos))): ?>
                                                            <?php $__currentLoopData = json_decode($appartament->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="item">
                                                                    <div class="ratio-4x3 ratio">
                                                                        <div>
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
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="mini_hotels">
                            <?php $__currentLoopData = $appartaments->where('type' , 'hotel'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appartament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12">
                                    <div class="nomer_block">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                <h3 class="d-none d-lg-block">
                                                    <a href="<?php echo e(route('appartament' , $appartament->slug)); ?>">
                                                        <?php echo e($appartament->title); ?>

                                                    </a>
                                                </h3>
                                                <hr class="d-none d-lg-block">
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
                                                <div class="mt-4 mt-lg-5">
                                                    <button class="booking"
                                                        onclick="window.location.href = '/bronirovanie?room-type=<?php echo e($appartament->booking); ?>';"><?php echo app('translator')->get('pages.book-nomer'); ?></button>
                                                    <button class="more_2"
                                                        onclick="window.location.href = '<?php echo e(route('appartament', $appartament->slug)); ?>';"><?php echo app('translator')->get('pages.more'); ?></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <h3 class="d-lg-none text-center"><?php echo e($appartament->title); ?></h3>
                                                <hr class="d-lg-none">
                                                <div class="owl-carousel carousel_3 owl-theme">
                                                    <?php if(count(json_decode($appartament->photos))): ?>
                                                        <?php $__currentLoopData = json_decode($appartament->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item">
                                                                <div class="ratio-4x3 ratio">
                                                                    <div>
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
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="tab-pane fade" id="cottages">
                            <?php $__currentLoopData = $appartaments->where('type' , 'cottage'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appartament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12">
                                    <div class="nomer_block">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                <h3 class="d-none d-lg-block">
                                                    <a href="<?php echo e(route('appartament' , $appartament->slug)); ?>">
                                                        <?php echo e($appartament->title); ?>

                                                    </a>
                                                </h3>
                                                <hr class="d-none d-lg-block">
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
                                                <div class="mt-4 mt-lg-5">
                                                    <button class="booking"
                                                        onclick="window.location.href = '/bronirovanie?room-type=<?php echo e($appartament->booking); ?>';"><?php echo app('translator')->get('pages.book-nomer'); ?></button>
                                                    <button class="more_2"
                                                        onclick="window.location.href = '<?php echo e(route('appartament', $appartament->slug)); ?>';"><?php echo app('translator')->get('pages.more'); ?></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <h3 class="d-lg-none text-center"><?php echo e($appartament->title); ?></h3>
                                                <hr class="d-lg-none">
                                                <div class="owl-carousel carousel_3 owl-theme">
                                                    <?php if(count(json_decode($appartament->photos))): ?>
                                                        <?php $__currentLoopData = json_decode($appartament->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item">
                                                                <div class="ratio-4x3 ratio">
                                                                    <div>
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
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <script>
                        // Считываем URL и находим якорь
                        const hash = window.location.hash;

                        // Проверяем, есть ли якорь и он существует среди вкладок
                        if (hash) {
                            const targetTab = document.querySelector(`button[data-bs-target="${hash}"]`);
                            if (targetTab) {
                                // Активируем соответствующую вкладку и скрываем остальные
                                const allTabs = document.querySelectorAll('.nav-link');
                                allTabs.forEach(tab => tab.classList.remove('active'));

                                targetTab.classList.add('active');

                                const allTabContent = document.querySelectorAll('.tab-pane');
                                allTabContent.forEach(tab => tab.classList.remove('show', 'active'));

                                const targetTabContent = document.querySelector(hash);
                                targetTabContent.classList.add('show', 'active');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/prozhivanie.blade.php ENDPATH**/ ?>