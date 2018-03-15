$(window).ready(function () {

    $(".phone-menu").click(function () {
        $(".menu").slideToggle();
        $(".nav-bar").toggleClass("expanded");
    });

    $('#formname, #formcompany, #formphone, #formemail').click(function () {
        $(this).removeClass("red-border");
    });

    showMenu();

// Iterate over each select element
    $('select').each(function () {

        // Cache the number of options
        var $this = $(this),
                numberOfOptions = $(this).children('option').length;

        // Hides the select element
        $this.addClass('s-hidden');

        // Wrap the select element in a div
        $this.wrap('<div class="select"></div>');

        // Insert a styled div to sit over the top of the hidden select element
        $this.after('<div class="styledSelect"></div>');

        // Cache the styled div
        var $styledSelect = $this.next('div.styledSelect');

        // Show the first select option in the styled div
        $styledSelect.text($this.children('option').eq(0).text());

        // Insert an unordered list after the styled div and also cache the list
        var $list = $('<ul />', {
            'class': 'options'
        }).insertAfter($styledSelect);

        // Insert a list item into the unordered list for each select option
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        // Cache the list items
        var $listItems = $list.children('li');

        // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
        $styledSelect.click(function (e) {
            $(this).removeClass("red-border");
            e.stopPropagation();
            $('div.styledSelect.active').each(function () {
                $(this).removeClass('active').next('ul.options').hide();
            });
            $(this).toggleClass('active').next('ul.options').toggle();
        });

        // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
        // Updates the select element to have the value of the equivalent option
        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            /* alert($this.val()); Uncomment this for demonstration! */
        });

        // Hides the unordered list when clicking outside of it
        $(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
});
$(window).ready(function () {
    
    $(document).on('click', 'a[href^="#"]', function (e) {
        var id = $(this).attr('href');

        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        e.preventDefault();

        var pos = $id.offset().top;

        $('body, html').animate({scrollTop: pos}, 1000);
    });

});
$(window).resize(function () {
    showMenu();
    $(".nav-bar").removeClass("expanded");
});

function showMenu() {
    var windowWidth = $(window).innerWidth();
    if (windowWidth < 992) {
        $('.phone-menu').show();
        $('.menu').hide();
    } else {
        $('.phone-menu').hide();
        $('.menu').show();
    }
}
;
function validateForm() {
    var z = document.forms["mailForm"]["name"].value;
    var x = document.forms["mailForm"]["company"].value;
    var c = document.forms["mailForm"]["phone"].value;
    var v = document.forms["mailForm"]["email"].value;
    var b = document.forms["mailForm"]["select"].value;
    if (z == null || z == "") {
        $('#formname').addClass('red-border');
        return false;
    } else if (x == null || x == "") {
        $('#formcompany').addClass('red-border');
        return false;
    } else if (c == null || c == "") {
        $('#formphone').addClass('red-border');
        return false;
    } else if (v == null || v == "") {
        $('#formemail').addClass('red-border');
        return false;
    } else if (b == null || b == "") {
        $('.input-holder .selection .styledSelect').addClass('red-border');
        return false;
    }
}
;