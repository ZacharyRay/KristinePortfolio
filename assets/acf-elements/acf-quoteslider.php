<?php 
$quotes = get_sub_field('quotes');

?> 
<?php foreach($quotes as $quote){ ?>
<section id="quote-slider">
    <div id="slider-wrap">
        <div id="quote-wrap" class="padding-30">
            <div id="quote-icon" style="background-image: url('<?= $quote['quote_label'] ?>')"></div>
            <div id="the-quote"><?= $quote['the_quote']; ?></div>
        </div>
        <div id="quote-author">
            <?= $quote['quote_author']; ?>
        </div>
    </div>
</section>
<?php } ?>
        <div id="quote-slider-btns">
            <div id="quote-arrow-wrap">
                <div id="quote-arrows">
                    <div id="quote-btn-l" class="quote-slider-btn">
                        &#8592;
                    </div>
                    <div id="quote-slide-indicator">
                        (01/03)
                    </div>
                    <div id="quote-btn-R" class="quote-slider-btn">
                        &#8594;
                    </div>
                </div>
            </div>
        </div>