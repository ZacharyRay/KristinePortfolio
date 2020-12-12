jQuery(document).ready(function ($) {
  // quote slider

  $(document).ready(function () {
    const quoteBtn = document.querySelectorAll(".quote-slider-btn");
    quoteBtn.forEach(function (button) {
      let quotes = document.querySelectorAll(".quote");
      const quoteAuthor = document.querySelectorAll(".the-quote-author");
      let quoteIndexTotal = document.querySelector(".quote-index-total");
      let quoteIndex = document.querySelector(".quote-index");
      // set start quote
      quotes[0].classList.add("quote-display");
      // set start author
      quoteAuthor[0].classList.add("quote-display");
      // set counter
      let quoteCounter = 0;
      // set quote index
      quoteIndex.innerHTML = quoteCounter + 1;
      // set quote index total
      quoteIndexTotal.innerHTML = quotes.length;
      // quote logic
      button.addEventListener("click", function () {
        quotes[quoteCounter].classList.remove("quote-display");
        quoteAuthor[quoteCounter].classList.remove("quote-display");
        if (button.classList.contains("quote-btn-l-handler")) {
          quoteCounter--;
          if (quoteCounter < 0) {
            quoteCounter = quotes.length - 1;
          }
          quotes[quoteCounter].classList.add("quote-display");
          quoteAuthor[quoteCounter].classList.add("quote-display");
          quoteIndex.innerHTML = quoteCounter + 1;
        }
        if (button.classList.contains("quote-btn-r-handler")) {
          quoteCounter++;
          if (quoteCounter > quotes.length - 1) {
            quoteCounter = 0;
          }
          quotes[quoteCounter].classList.add("quote-display");
          quoteAuthor[quoteCounter].classList.add("quote-display");
          quoteIndex.innerHTML = quoteCounter + 1;
        }
      });
    });
  });

  // scroll arrow

  $(document).ready(function () {
    $(".arrow-icon").click(function (event) {
      $("html, body").animate({ scrollTop: "+=700px" }, 800);
    });
  });

  // lazy load

  $(".lazy").Lazy({
    // your configuration goes here
    scrollDirection: "vertical",
    effect: "fadeIn",
    effectTime: 1500,
    threshold: 0,
    visibleOnly: true,
    onError: function (element) {
      console.log("error loading " + element.data("src"));
    },
  }); //.addClass("animate");

  // Parallax lines
  /* $(document).ready(function () {
  window.addEventListener("scroll", function() {
    const distance = window.scrollY;
    document.querySelector(
      ".left-explainer-left-col"
    ).style.transform = `translateY(${distance * .3}px)`;
  });
}); */

  // add animation class

  $(window).on("scroll", function () {
    // Determine if the element is in the viewport
    if (!$(".left-explainer-left-col").visible(true)) {
      $(".left-explainer-left-col").removeClass("animate");
    }
    if ($(".left-explainer-left-col").visible(true)) {
      $(".left-explainer-left-col").addClass("animate");
    }
    if (!$(".line-box").visible(true)) {
      $(".line-box").removeClass("animate");
    }
    if ($(".line-box").visible(true)) {
      $(".line-box").addClass("animate");
    }
    if (!$(".pc-line-left").visible(true)) {
      $(".pc-line-left").removeClass("animate-pe-right");
    }
    if ($(".pc-line-left").visible(true)) {
      $(".pc-line-left").addClass("animate-pe-right");
    }
    if (!$(".pc-line-right").visible(true)) {
      $(".pc-line-right").removeClass("animate-pe-left");
    }
    if ($(".pc-line-right").visible(true)) {
      $(".pc-line-right").addClass("animate-pe-left");
    }
    if (!$(".pe-col-left-inner-line").visible(true)) {
      $(".pe-col-left-inner-line").removeClass("animate-pe-left");
    }
    if ($(".pe-col-left-inner-line").visible(true)) {
      $(".pe-col-left-inner-line").addClass("animate-pe-left");
    }
  });
  // end
});


