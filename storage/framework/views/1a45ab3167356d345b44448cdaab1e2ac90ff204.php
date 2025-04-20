<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="https://zarechye.kz/public/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>" />
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css?v=1">
    <link rel="stylesheet" href="/fonts/fonts.css">
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>" />
    <meta property="og:image" content="<?php echo e(\Storage::disk('public')->url(setting('site.logo'))); ?>">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo e(Request::url()); ?>" />
    <link href="https://zarechye.kz/public/css/misc/adaptive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/be-style.css?v=1">
</head>

<body class="d-flex flex-column vh-100">
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript">
        !function(e,n){
            var t="bookingengine",o="integration",i=e[t]=e[t]||{},a=i[o]=i[o]||{},r="__cq",c="__loader",d="getElementsByTagName";
            if(n=n||[],a[r]=a[r]?a[r].concat(n):n,!a[c]){a[c]=!0;var l=e.document,g=l[d]("head")[0]||l[d]("body")[0];
                !function n(i){if(0!==i.length){var a=l.createElement("script");a.type="text/javascript",a.async=!0,a.src="https://"+i[0]+"/integration/loader.js",
                    a.onerror=a.onload=function(n,i){return function(){e[t]&&e[t][o]&&e[t][o].loaded||(g.removeChild(n),i())}}(a,(function(){n(i.slice(1,i.length))})),g.appendChild(a)}}(
                    ["kz-ibe.hopenapi.com", "ibe.hopenapi.com", "ibe.behopenapi.com"])}
        }(window, [
            ["setContext", "BE-INT-zarechye.new", "<?php echo e(app()->getLocale()); ?>"],
            ["embed", "booking-form", {
                container: "be-booking-form"
            }],
            ["embed", "search-form", {
                container: "be-search-form"
            }],
            ["embed", "search-form", {
                container: "be-search-form-2"
            }],
            ["setContext", "BE-INT-zarechye.certificates", "<?php echo e(app()->getLocale()); ?>"],
            ["embed", "booking-form", {
                container: "be-booking-form-certificates"
            }]
        ]);
    </script>

</body>

</html><?php /**PATH /var/www/vhosts/zarechye.kz/httpdocs/resources/views/partials/layout.blade.php ENDPATH**/ ?>