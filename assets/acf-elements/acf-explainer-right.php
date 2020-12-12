<?php 
$pe_image = get_sub_field('image');
$pe_text_content = get_sub_field('text_content');
$pe_buttons = get_sub_field('buttons');
?>


<!--
pe = page explainer right
l = left
r = right
 -->

<section id="pe-wrapper">
    <div id="pe-inner-wrapper">
        <div id="pe-col-left">
            <div id="pe-col-left-inner">
                <hr class="pe-col-left-inner-line">
                <div class="pe-col-left-inner-img lazy" data-src="<?= $pe_image; ?>"></div>
            </div>
        </div>
        <div id="pe-col-right">
            <div class="pe-col-right-content">
                <?= $pe_text_content; ?>
                <div id="pe-col-right-buttons">
                <!-- section buttons -->
                <div id="outgoing-buttons">
                    <a class="explainer-button-link" href="<?= $pe_buttons['button_link']; ?>">
                        <button id="explainer-button"><?= $pe_buttons['button_name'] ?></button>
                    </a>
                    <a  class="explainer-button-socials" href="<?= $pe_buttons['social-link']; ?>">
                        <div id="left-explainer-social-button" style="background-image: url('<?= $pe_buttons['social_icon']; ?>')"></div>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>