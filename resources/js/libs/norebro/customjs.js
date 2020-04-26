jQuery(window).load(function() {
    jQuery(".twentytwenty-custom").twentytwenty();
});

jQuery(document).ready(function($) {
    jQuery( ".pricing-table-light a" ).addClass( "popmake-pricing-light" );
    jQuery( ".pricing-table-standard a" ).addClass( "popmake-pricing-standard" );
    jQuery( ".pricing-table-professional a" ).addClass( "popmake-pricing-professional" );
    jQuery('select.disabled').attr('disabled', 'disabled');
    // jQuery(".twentytwenty-custom").twentytwenty();
});