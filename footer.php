</div>
</div>
<?php 

$footer_field_group = get_field('header_footer', 'option');
$footer = $footer_field_group['footer'];

wp_footer(); 
?>

<footer>
    <div id="line-wrap">
        <div class="line-box">
        </div>
        <div class="line-box">
        </div>
        <div class="line-box">
        </div>
    </div>
    <div id="footer-section-wrap">
        <section class="center-all">
            <h3><?= $footer['statement'] ?></h3>
        </section>
        <section class="center-all">
            <?php get_template_part('elements/components/contact', 'card'); ?>
        </section>
    </div>
    <section id="info-footer">
        <div id="info-footer-wrap">
            <div class="info-section">
                <div class="info">
                    <p><?= $footer['copyright'] ?></p>
                    <?php foreach($footer['socials'] as $socials) { ?>
                    <a class="socials-link" href="<?= $socials['social_link'] ?>">
                        <aside class="footer-socials-icon" style="background-image: url('<?= $socials['social_icon'] ?>')"></aside>
                    </a>
                    <?php } ?>
                    <a class="footer-info footer-email" href="mailto:<?= $footer['email'] ?>"><?= $footer['email'] ?></a>
                    <a class="footer-info footer-phone" href="tel:<?= $footer['phone'] ?>"><?= $footer['phone']; ?></a>
                </div>
            </div>
        </div>
    </section>
</footer>

</body>
</html>