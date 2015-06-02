var responsiveTable = (function($, _window){

    var rt = {};
    var switched = false;

    rt.update = function(){
        if (($(window).width() > 640) && !switched) {
            switched = true;
            $("table.responsive").each(function (i, element) {
                rt.splitTable($(element));
            });

            return true;
        }
        else if (switched && ($(window).width() <= 640)) {
            switched = false;
            $("table.responsive").each(function (i, element) {
                rt.unsplitTable($(element));
            });
        }
    };

    rt.updateCurrent = function($container){
        if (($(window).width() > 640) && switched){
            $container.find("table.responsive").each(function (i, element) {
                rt.splitTable($(element));
            });
        }
    };

    rt.splitTable = function(original) {
        original.wrap("<div class='table-wrapper' />");

        var copy = original.clone();
        copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
        copy.removeClass("responsive");

        original.closest(".table-wrapper").append(copy);
        copy.wrap("<div class='pinned' />");
        original.wrap("<div class='scrollable' />");

        rt.setCellHeights(original, copy);
    };

    rt.init = function(){
        $(_window).load(rt.update);
        $(window).on("redraw", function () {
            switched = false;
            rt.update();
        }); // An event to listen for
        $(window).on("resize", rt.update);
    };

    rt.unsplitTable = function(original) {
        original.closest(".table-wrapper").find(".pinned").remove();
        original.unwrap();
        original.unwrap();
    };

    rt.setCellHeights = function(original, copy) {
        var tr = original.find('tr'),
            tr_copy = copy.find('tr'),
            heights = [];

        tr.each(function (index) {
            var self = $(this),
                tx = self.find('th, td');

            tx.each(function () {
                var height = $(this).outerHeight(true);
                heights[index] = heights[index] || 0;
                if (height > heights[index]) heights[index] = height;
            });

        });

        tr_copy.each(function (index) {
            $(this).height(heights[index]);
        });
    };

    return rt;
})(jQuery, window);

//$(document).ready(function () {


    //updateTables = function () {
    //};
    //
    //$(window).load(updateTables);
    //$(window).on("redraw", function () {
    //    switched = false;
    //    updateTables();
    //}); // An event to listen for
    //$(window).on("resize", updateTables);


    //function splitTable(original) {
    //    original.wrap("<div class='table-wrapper' />");
    //
    //    var copy = original.clone();
    //    copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
    //    copy.removeClass("responsive");
    //
    //    original.closest(".table-wrapper").append(copy);
    //    copy.wrap("<div class='pinned' />");
    //    original.wrap("<div class='scrollable' />");
    //
    //    setCellHeights(original, copy);
    //}

    //function unsplitTable(original) {
    //    original.closest(".table-wrapper").find(".pinned").remove();
    //    original.unwrap();
    //    original.unwrap();
    //}

    //function setCellHeights(original, copy) {
    //    var tr = original.find('tr'),
    //        tr_copy = copy.find('tr'),
    //        heights = [];
    //
    //    tr.each(function (index) {
    //        var self = $(this),
    //            tx = self.find('th, td');
    //
    //        tx.each(function () {
    //            var height = $(this).outerHeight(true);
    //            heights[index] = heights[index] || 0;
    //            if (height > heights[index]) heights[index] = height;
    //        });
    //
    //    });
    //
    //    tr_copy.each(function (index) {
    //        $(this).height(heights[index]);
    //    });
    //}

//});
