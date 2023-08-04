<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>





<?if (!empty($arResult)):?>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto">
                    <? foreach ($arResult as $arItem): ?>

                        <?if(!empty($arItem["subitems"])):?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown05"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $arItem["TEXT"] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown05">

                                    <? foreach ($arItem["subitems"] as $subitem): ?>

                                        <a class="dropdown-item" href="<?=$subitem["LINK"]?>"><?=$subitem["TEXT"]?></a>

                                    <? endforeach ?>

                                </div>
                            </li>

                        <?else:?>
                            <?if($arItem["SELECTED"]):?>
                                <li class="nav-item">
                                    <a class="nav-link active"
                                       href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                </li>

                            <?else:?>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                </li>
                            <?endif?>

                         <?endif?>

                    <? endforeach ?>

                </ul>


            </div>

        </div>
    </nav>

<?endif?>



