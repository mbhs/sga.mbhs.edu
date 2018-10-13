/* ------------------- Isotope ------------------- */
// portfolio filter
$(window).load(function(){

var $isotope_selectors = $('#isotope-filter>a');

if($isotope_selectors!='undefined'){
  var $portfolio = $('.isotope');
  $portfolio.isotope({
    itemSelector : '.col-sm-3',
    layoutMode : 'fitRows'
  });

  $isotope_selectors.on('click', function(){
    $isotope_selectors.removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
    $portfolio.isotope({ filter: selector });
    return false;
  });
}
});
