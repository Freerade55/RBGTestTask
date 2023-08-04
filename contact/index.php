<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Balita');
?>


    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1> <?

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/includes/aboutTitle.php"
                            )
                        );?></h1>
                </div>
            </div>
            <div class="row blog-entries">

                <div class="col-md-12 col-lg-8 main-content">


                    <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
                        "EMAIL_TO" => "dalarow@gmail.com",	// E-mail, на который будет отправлено письмо
                        "EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                        "REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
                                                       0 => "NAME",
                                                       1 => "EMAIL",
                        ),
                        "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                        "AJAX_MODE" => "Y"
                    ),
                        false
                    );?>

                </div>





                <!-- END main-content -->


                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>

                                <?

                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/input.php"
                                    )
                                );?>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <?

                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/bioImg.php"
                                )
                            );?>
                            <div class="bio-body">



                                <?

                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/bioBodyTitle.php"
                                    )
                                );?>





                                <?

                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/bioBodyText.php"
                                    )
                                );?>




                                <?

                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/bioButton.php"
                                    )
                                );?>

                                <?

                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/includes/bioBodyIcons.php"
                                    )
                                );?>




                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="heading">   <?

                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/popTitle.php"
                                )
                            );?>
                        </h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/popImg1.php"
                                            )
                                        );?>
                                        <div class="text">
                                            <h4>        <?

                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "inc",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => "/includes/popTitle1.php"
                                                    )
                                                );?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popDate1.php"
                                                        )
                                                    );?></span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popComment1.php"
                                                        )
                                                    );?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/popImg2.php"
                                            )
                                        );?>
                                        <div class="text">
                                            <h4>        <?

                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "inc",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => "/includes/popTitle2.php"
                                                    )
                                                );?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popDate2.php"
                                                        )
                                                    );?></span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popComment2.php"
                                                        )
                                                    );?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/popImg3.php"
                                            )
                                        );?>
                                        <div class="text">
                                            <h4>        <?

                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "inc",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => "/includes/popTitle3.php"
                                                    )
                                                );?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popDate3.php"
                                                        )
                                                    );?></span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span><?

                                                    $APPLICATION->IncludeComponent(
                                                        "bitrix:main.include",
                                                        "",
                                                        Array(
                                                            "AREA_FILE_SHOW" => "file",
                                                            "AREA_FILE_SUFFIX" => "inc",
                                                            "EDIT_TEMPLATE" => "",
                                                            "PATH" => "/includes/popComment3.php"
                                                        )
                                                    );?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading"> <?

                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/categoriesTitle.php"
                                )
                            );?></h3>

                        <ul class="categories">
                            <li><a href="#"><?

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/categorName1.php"
                                        )
                                    );?> <span><?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/categorCount1.php"
                                            )
                                        );?></span></a></li>
                            <li><a href="#"><?

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/categorName2.php"
                                        )
                                    );?> <span><?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/categorCount2.php"
                                            )
                                        );?></span></a></li>
                            <li><a href="#"><?

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/categorName3.php"
                                        )
                                    );?> <span><?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/categorCount3.php"
                                            )
                                        );?></span></a></li>
                            <li><a href="#"><?

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/categorName4.php"
                                        )
                                    );?> <span><?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/categorCount4.php"
                                            )
                                        );?></span></a></li>
                            <li><a href="#"><?

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/includes/categorName5.php"
                                        )
                                    );?> <span><?

                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/includes/categorCount5.php"
                                            )
                                        );?></span></a></li>
                        </ul>



                    </div>

                </div>



            </div>
        </div>
    </section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>