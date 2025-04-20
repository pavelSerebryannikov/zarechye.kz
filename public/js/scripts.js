$(".phonee").mask("+7 (999) 999 - 99 - 99");


(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                console.log(form);
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    event.preventDefault();
                    let formData = $(this).serialize();
                    $.ajax({
                        url: '/application',
                        type: 'post',
                        datatype: 'json',
                        data: formData,
                        beforeSend: function () {
                            $('.loading').show();
                        }
                    })
                        .done(function (data) {
                            if (data.length == 0) {

                                return;
                            } else {
                                $('.loading').hide();
                                $('#appId').trigger("reset");
                                $('#appId').removeClass("was-validated");
                                $('#application').modal('hide');
                                $('#response').modal('show');
                            }
                        })
                        .fail(function (jqXHR, ajaxOptions, thrownError) {
                            alert('Something went wrong.');
                        });
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

$(document).ready(function () {
    var owl = $('.carousel_1');
    owl.owlCarousel({
        nav: false,
        dots: true,
        autoHeight: true,
        loop: false,
        responsive: {
            0: {
                margin: 24,
                items: 1,
                stagePadding: 40
            },
            576: {
                margin: 24,
                items: 3,
                stagePadding: 20
            },
            768: {
                margin: 24,
                items: 2
            },
            1200: {
                margin: 24,
                items: 3
            }
        }
    });
})

$(document).ready(function () {
    var owl = $('.carousel_2');
    owl.owlCarousel({
        items: 1,
        dots: false,
        autoHeight: true,
        loop: false
    });
})

$(document).ready(function () {
    var owl = $('.carousel_3');
    owl.owlCarousel({
        items: 1,
        dots: true,
        autoHeight: true,
        loop: false
    });
})

$(document).ready(function () {
    var owl = $('.carousel_4');
    owl.owlCarousel({
        autoHeight: true,
        loop: true,
        items: 1,
        responsive: {
            0: {
                dots: true,
                nav: false
            },
            576: {
                dots: true,
                nav: false
            },
            768: {
                dots: false,
                nav: true
            },
            1200: {
                dots: false,
                nav: true
            }
        }
    });
})


$(document).ready(function () {
    $("a.topLink").click(function () {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 0,
            easing: "swing"
        });
        return false;
    });
});


$(function () {
    $(window).scroll(function () {
        var top = $(document).scrollTop();
        if (top > 150) $('.fixed_nav').addClass('fixed_nav_visible');
        else $('.fixed_nav').removeClass('fixed_nav_visible');
    });
});


$(document).ready(function () {
    var bigimage = $("#big");
    var thumbs = $("#thumbs");
    var bigimage2 = $("#big2");
    var thumbs2 = $("#thumbs2");
    var syncedSecondary = true;

    bigimage
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ]
        })
        .on("changed.owl.carousel", syncPosition);

    thumbs
        .on("initialized.owl.carousel", function () {
            thumbs
                .find(".owl-item")
                .eq(0)
                .addClass("current");
        })
        .owlCarousel({
            dots: false,
            nav: false,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
        .on("changed.owl.carousel", syncPosition2);

    bigimage2
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ]
        })
        .on("changed.owl.carousel", syncPosition);

    thumbs2
        .on("initialized.owl.carousel", function () {
            thumbs
                .find(".owl-item")
                .eq(0)
                .addClass("current");
        })
        .owlCarousel({
            dots: false,
            nav: false,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
        .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        thumbs
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");

        thumbs2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");

        var onscreen = thumbs.find(".owl-item.active").length - 1;
        var onscreen = thumbs2.find(".owl-item.active").length - 1;

        var start = thumbs
            .find(".owl-item.active")
            .first()
            .index();

        var start = thumbs2
            .find(".owl-item.active")
            .first()
            .index();

        var end = thumbs
            .find(".owl-item.active")
            .last()
            .index();

        var end = thumbs2
            .find(".owl-item.active")
            .last()
            .index();

        if (current > end) {
            thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            thumbs.data("owl.carousel").to(current - onscreen, 100, true);
        }

        if (current > end) {
            thumbs2.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            thumbs2.data("owl.carousel").to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            bigimage.data("owl.carousel").to(number, 100, true);
        }

        if (syncedSecondary) {
            var number = el.item.index;
            bigimage2.data("owl.carousel").to(number, 100, true);
        }
    }

    thumbs.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
    });

    thumbs2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage2.data("owl.carousel").to(number, 300, true);
    });

});