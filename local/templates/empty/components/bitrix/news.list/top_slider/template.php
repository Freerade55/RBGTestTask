<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<?php if(!empty($arResult["ITEMS"])): ?>

    <section class="site-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">

                        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                            <div>
                                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>); ">
                                    <div class="text half-to-full">
                                        <div class="post-meta">
                                            <span class="category"><?=$arItem["PROPERTIES"]["category"]["VALUE"]?></span>
                                            <span class="mr-2"><?=$arItem["PROPERTIES"]["date"]["VALUE"]?> </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span><?=$arItem["PROPERTIES"]["comments"]["VALUE"]?></span>
                                        </div>
                                        <h3><?=$arItem["PROPERTIES"]["title"]["VALUE"]?></h3>
                                        <p><?=$arItem["FIELDS"]["PREVIEW_TEXT"]?></p>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>

    </section>

<?php endif; ?>






