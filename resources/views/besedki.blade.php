<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Комфортные беседки</title>
    <meta charset="utf-8">
    </head>
<body class="d-flex flex-column vh-100">
    <main>
        <div class="container-fluid inner_header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div>
                            <h1>Комфортные беседки</h1>
                            <p>МЕРОПРИЯТИЯ КРУГЛЫЙ ГОД</p>
                        </div>
                        <picture>
                            <source srcset="https://zarechye.kz/storage/pages/February2025/IuxIgdKm7qhn3rtYM0fp.webp" type="image/webp">
                            <source srcset="https://zarechye.kz/storage/pages/February2025/IuxIgdKm7qhn3rtYM0fp.jpg" type="image/pjpeg">
                            <img src="https://zarechye.kz/storage/pages/February2025/IuxIgdKm7qhn3rtYM0fp.jpg" alt="">
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
                    <h2 style="text-align: center;">В ОКРУЖЕНИИ ПРИРОДЫ</h2>
                    <p class="MsoNormal" style="text-align: center;">Парк-Отель &laquo;Заречье&raquo; предлагает просторные и оборудованные беседки для отдыха, семейных и корпоративных мероприятий. В зимний период помещения отапливаются, а летом оснащены кондиционерами, что позволяет проводить мероприятия в комфортных условиях независимо от времени года.</p>
                    <h3 style="text-align: left;"><strong >Варианты беседок:</strong></h3>
                </div>
            </div>

            <div class="row justify-content-center mt-4 concept_benefits">
                </div>
        </div>

        <div class="container mt-5 about_block pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="row mt-5">
                        <div class="col-12">
                            <h3>Фотографии беседок</h3>
                            <div class="owl-carousel owl-theme">
                                @foreach($photos as $photo)
                                    <div class="item">
                                        <div class="ratio ratio-4x3">
                                            <div>
                                                <picture data-src="{{ $photo->webpImage }}" data-fancybox="gallery_2">
                                                    <source srcset="{{ $photo->webpImage }}" type="image/webp">
                                                    <source srcset="{{ Voyager::image($photo->image) }}" type="image/pjpeg">
                                                    <img src="{{ Voyager::image($photo->image) }}" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-5 concept_image">
                    </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        })
    </script>
</body>
</html>