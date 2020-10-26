jQuery(document).ready(function($) {

    function getResults() {
        $.getJSON('http://localhost:8888/kristinePortefolie/wp-json/wp/v2/pages', function(posts) {
            alert(posts[3].ACF.page_constructor[1].quotes[0].the_quote)
            
        }); 
    }   
    
    return getResults();
    
});