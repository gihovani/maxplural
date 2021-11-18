
function toggleTabs() {
    $('#tabs .tab').click(function () {
        let tab = $(this).attr('id');
        $('#tabs .tab, .tab-content').removeClass('active');
        $('.tab-content[data-target="' + tab + '"]').addClass('active');
        $(this).addClass('active');
    });

    let urlHash = window.location.hash;
    if ($(urlHash).length) {
        $(urlHash).trigger('click');
    }
}
$(function () {
    toggleTabs();
});