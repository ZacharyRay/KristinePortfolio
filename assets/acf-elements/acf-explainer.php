<?php 
$headline = get_sub_field('headline');
$body_text = get_sub_field('body_text');
$enable_buttons = get_sub_field('enable_buttons');
$enable_contact_card = get_sub_field('enable_contact_card');
$buttons = get_sub_field('buttons');
?>
<section id="left-explainer-section">
    <div id="left-explainer-wrap" class="row-2">
        <div id="left-explainer-h1">
            <h1><?= $headline ?></h1>
        </div>
        <aside class="left-explainer-col-2-left-auto">
            <div class="left-explainer-left-col">

            </div>
            <div class="left-explainer-right-col">
                <!-- wysiwyg -->
                <div class="explainer-text">
                    <?= $body_text ?>
                </div>
                <!-- either section below will show when called -->
                <!-- section buttons -->
                <?php if(!empty($enable_buttons)) { ?>
                <div id="outgoing-buttons">
                    <a class="explainer-button-link" href="<?= $buttons['button_link']; ?>">
                        <button id="explainer-button"><?= $buttons['button_name'] ?></button>
                    </a>
                    <a  class="explainer-button-socials" href="<?= $buttons['social-link']; ?>">
                        <div id="left-explainer-social-button" style="background-image: url('<?= $buttons['social_icon']; ?>')"></div>
                    </a>
                </div>
                <?php } ?>
                <!-- section contact card -->
                <?php 
                if(!empty($enable_contact_card)) { ?>
                <section id="contact-card-enabled">
                    <?php get_template_part('elements/components/contact', 'card'); ?>
                </section>
                <?php
                }
                ?>
            </div>
        </aside>
    </div>
</section>