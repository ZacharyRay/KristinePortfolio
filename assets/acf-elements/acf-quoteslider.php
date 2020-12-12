<?php 
$quotes = get_sub_field('quotes');
$quote_label = get_sub_field('quote_label');
?> 
<?php  if(!empty($quotes)) {  ?>
<section id="quote-slider">
    <div id="slider-wrap">
        <div id="quote-wrap" class="padding-30">
            <div id="quote-icon" class="quote-label" style="background-image: url('<?= $quote_label; ?>')"></div>
        <?php 
            foreach($quotes as $quote) {
            ?>
            <div class="quote" id="the-quote"><?= $quote['the_quote']; ?></div>
            <div id="quote-author" class="the-quote-author"><?= $quote['quote_author']; ?></div>
            <?php } ?>
        </div>
        
    </div>

    <div id="quote-slider-btns">
            <div id="quote-arrow-wrap">
                <div id="quote-arrows">
                    <button id="quote-btn-l" class="quote-slider-btn quote-btn-l-handler">
                        &#8592;
                    </button>
                    <div id="quote-slide-indicator">
                        ( 
                            <div class="quote-index"></div>
                        /
                            <div class="quote-index-total"></div>
                        )
                    </div>
                    <button id="quote-btn-r" class="quote-slider-btn quote-btn-r-handler">
                        &#8594;
                    </button>
                </div>
            </div>
        </div>
</section>

<?php } ?>