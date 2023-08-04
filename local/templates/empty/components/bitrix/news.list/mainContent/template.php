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


    <?php foreach ($arResult["ITEMS"] as $arItem): ?>


        <div class="row">
            <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image placeholder">
                    <div class="blog-content-body">
                        <div class="post-meta">
                            <span class="category"><?=$arItem["PROPERTIES"]["category"]["VALUE"]?></span>
                            <span class="mr-2"><?=$arItem["PROPERTIES"]["date"]["VALUE"]?></span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span><?=$arItem["PROPERTIES"]["comments"]["VALUE"]?></span>
                        </div>
                        <h2><?=$arItem["FIELDS"]["PREVIEW_TEXT"]?></h2>
                    </div>
                </a>
            </div>
        </div>

    <?php endforeach; ?>



<?php endif; ?>























