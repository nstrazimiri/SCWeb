(function ($) {

    //add active on each menu click
    $('ul.navbar-nav > li > a').each(function () {
        if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
            $(this).closest('li').addClass('active');
            return false;
        }


    });
    //faq page
    $( "#accordion" ).accordion({
        heightStyle: "content",
        active: false,
        collapsible: true
    });


    const infoModal = $('#myModal');
    $('.programs').on('click', function () {
        const thisID = this.id;
        const jqxhr = $.getJSON("programs.json", function (json) {
            $.each(json.programs, function () {
                if (this.code == thisID) {
                    $('#myModalLabel').html("<span>"+this.code + "</span> : <span>" + this.name+"</span>");
                    infoModal.find('.modal-body').html("<p>" + this.content + "</p>");
                    infoModal.modal('show');
                    return false;
                }
            });
        });
    });
    $('div.fall2016').hide();
    $('div.fall2017').hide();
    $('div.fall2018').hide();
    $('div.fall2019').show();

    $('.changeyearbtn').on('click', function () {
        $('.changeyearbtn').removeClass("btn-success").addClass("btn-fall");
        $(this).removeClass("btn-fall").addClass("btn-success");
        $('div.fall2016').hide();
        $('div.fall2017').hide();
        $('div.fall2018').hide();
        $('div.fall2019').hide();
        const thisID = this.id;
        $("div." + thisID).show();
    });


})(jQuery);


