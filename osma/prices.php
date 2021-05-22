<?php	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=1620px">-->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <!---------------------------->
        <?php include 'header.php';?>
        <section class="psect1">
            <div class="container">
                <div class="crumbs">
                    <a href="#" class="active">Главная<svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.4583 1L16 5M16 5L12.4583 9M16 5H1" stroke="#666666" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="#">Услуги</a>
                </div>
                <div class="title">Услуги</div>
                <div class="items">
                    <div class="left">
                        <div class="title">Направления</div>
                        <form action="">
                            <div class="checkboxs">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox">Неврология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox1">
                                    <label for="checkbox1">Гинекология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox2">
                                    <label for="checkbox2">Урология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox3">
                                    <label for="checkbox3">Косметология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox4">
                                    <label for="checkbox4">Дермотитология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox5">
                                    <label for="checkbox5">Отоларингология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox6">
                                    <label for="checkbox6">Хирургия</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox7">
                                    <label for="checkbox7">Кардеология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox8">
                                    <label for="checkbox8">Терапия</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox9">
                                    <label for="checkbox9">Гастроэнтерология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox10">
                                    <label for="checkbox10">Рефлесотерапия</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox11">
                                    <label for="checkbox11">Флебология</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox12">
                                    <label for="checkbox12">Диагностика</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox13">
                                    <label for="checkbox13">Гирудотерапия</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox14">
                                    <label for="checkbox14">УЗИ</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox15">
                                    <label for="checkbox15">Лаборатория</label>
                                </div>
                            </div>
                            <div class="bottom-buttons">
                                <button class="type-one">Применить</button>
                                <a href="">Сбросить фильтр</a>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <div class="search">
                            <input type="text" placeholder="Введите услугу">
                            <button><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.8963 16.7587L11.9579 11.8219C12.8945 10.6659 13.4584 9.19627 13.4584 7.59619C13.4584 3.88691 10.4396 0.869141 6.72916 0.869141C3.0187 0.869141 0 3.88691 0 7.59619C0 11.3055 3.01874 14.3232 6.7292 14.3232C8.32979 14.3232 9.7999 13.7596 10.9563 12.8232L15.8946 17.76C16.033 17.8983 16.2572 17.8983 16.3955 17.76L16.8963 17.2594C17.0346 17.1211 17.0346 16.8969 16.8963 16.7587ZM6.7292 12.907C3.79971 12.907 1.41668 10.5247 1.41668 7.59619C1.41668 4.66764 3.79971 2.28537 6.7292 2.28537C9.65868 2.28537 12.0417 4.66764 12.0417 7.59619C12.0417 10.5247 9.65868 12.907 6.7292 12.907Z" fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="items-card">
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title-item">Прием (осмотр, консультация) гастроэнтеролога первичный
                                    гастроэнтеролога первичный</div>
                                <div class="bot">
                                    <div class="price">5250 ₽</div>
                                    <button>Записаться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------->
        <?php include 'footer.php';?>
        <!---------------------------->
    </div>
    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <h3>Модальные окна</h3>
            <div>
                <p> Это модальное окно. Вы можете выполнять следующие действия с ним:</p>
                <ul>
                    <li><strong>Читать:</strong> модальные окна, вероятно, несут важную текстовую информацию, так что не забудьте прочитать то, что в них написано.</li>
                    <li><strong>Смотреть:</strong> модальные окна несут визуальную информацию, на которую приятно смотреть.</li>
                    <li><strong>Закрыть:</strong> нажмите на кнопку, чтобы закрыть модальное окно.</li>
                </ul>
                <button class="md-close">Закрыть!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div><!-- the overlay element -->

    <!-- classie.js by @desandro: https://github.com/desandro/classie -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>

    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = './assets/js/';

    </script>
    <script src="./assets/js/cssParser.js"></script>
    <script src="./assets/js/css-filters-polyfill.js"></script>

    <script src="./assets/js/jquery-1.11.1.min.js"></script>


    <script src="./assets/js/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
