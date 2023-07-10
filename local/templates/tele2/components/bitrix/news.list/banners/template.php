<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<section class="slider-main">

    <div class="slider-bg-wrap">
        <div class="slider-bg swiper">
            <div class="swiper-wrapper">
                <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <?
                    $this->AddEditAction(
                        $arItem['ID'],
                        $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_EDIT"
                        )
                    );
                    $this->AddDeleteAction(
                        $arItem['ID'],
                        $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
                    );
                    ?>
                    

                        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="slider-bg__slide swiper-slide" style="background-image: url('<?= $arItem['DETAIL_PICTURE']['SRC'] ?>')">
								<div class="nuar_blk"></div>
                               <pre>
                              
                               </pre>
								<div class="slider-bg__container">
                                    <? if($arItem['PREVIEW_PICTURE']) {?>
                                        <div class="slider-bg__img">
										    <picture><img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>"></picture>
									    </div>
                                    <? } ?>
                                    
                                    <? if($arItem['PROPERTIES']['TITLE']) { ?>
                                            <div class="slider-bg__title">
											    <?= $arItem['PROPERTIES']['TITLE']['VALUE'] ?>
										    </div>
                                    <? } ?>

                                       
								
                                        <? if($arItem['PREVIEW_TEXT']) {?>
										    <p class="slider-bg__subtitle">
                                            <?= $arItem['PREVIEW_TEXT'] ?>
										    </p>
                                        <? } ?>
                                        <? if($arItem['PROPERTIES']['TITLE']) { ?>
                                         
                                            <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" class="slider-bg__link btn">Подробнее</a>
											 
										
                                        <? } ?>
										
                                   
								</div>
						</div>
                  
                <? } ?>
                </div>
            </div>
            <div class="swiper-nuvigation">
                            <div class="swiper-button-main-next swiper-button swiper-button-next">
                                <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_2886)">
                                        <g clip-path="url(#clip1_2_2886)">
                                            <path d="M25.8545 11.8374H1.85449M25.8545 11.8374L15.8545 21.8374M25.8545 11.8374L15.8545 1.8374" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.6" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_2886">
                                            <rect width="26" height="22" fill="white" transform="translate(0.854492 0.837402)" />
                                        </clipPath>
                                        <clipPath id="clip1_2_2886">
                                            <rect width="26" height="22" fill="white" transform="translate(0.854492 0.837402)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <div class="swiper-pagination-main swiper-pagination"></div>

                            <div class="swiper-button-main-prev swiper-button swiper-button-prev">
                                <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_2886)">
                                        <g clip-path="url(#clip1_2_2886)">
                                            <path d="M25.8545 11.8374H1.85449M25.8545 11.8374L15.8545 21.8374M25.8545 11.8374L15.8545 1.8374" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.6" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_2886">
                                            <rect width="26" height="22" fill="white" transform="translate(0.854492 0.837402)" />
                                        </clipPath>
                                        <clipPath id="clip1_2_2886">
                                            <rect width="26" height="22" fill="white" transform="translate(0.854492 0.837402)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
            </div>					
    </div>

</section>
