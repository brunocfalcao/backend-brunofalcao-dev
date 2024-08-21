$(document).ready(function () {
    $(document).on("click", ".fancy-toggle", function () {
        let selector = "input[name=" + $(this).attr("data-controls") + "]";
        $(this)
            .parent()
            .find(selector)
            .prop("checked", !$(this).parent().find(selector).prop("checked"));
        $(this).parent().find(selector).trigger("change");
    });

    $(document).on("change", "input[type=checkbox]", function (e) {
        console.log("CHANGED!");
        console.log(e.target.value);
        let name = $(this).attr("name");
        let selector = ".fancy-toggle[data-controls=" + name + "]";
        if ($(this).prop("checked")) {
            $(this)
                .parent()
                .find(selector)
                .removeClass("bg-gray-200")
                .addClass("bg-primary-600");
            $(this)
                .parent()
                .find(selector + " span")
                .removeClass("translate-x-0")
                .addClass("translate-x-5");
        } else {
            $(this)
                .parent()
                .find(selector)
                .addClass("bg-gray-200")
                .removeClass("bg-primary-600");
            $(this)
                .parent()
                .find(selector + " span")
                .addClass("translate-x-0")
                .removeClass("translate-x-5");
        }
    });

    $("button[role=tab]").click(function () {
        $(this)
            .closest(".tabs-container")
            .find("[role=tabpanel]")
            .addClass("hidden");
        $(this)
            .closest(".tabs-container")
            .find("#" + $(this).attr("aria-controls"))
            .removeClass("hidden");
        $(this)
            .closest(".tabs-container")
            .find("[role=tab]")
            .attr("aria-selected", "false");
        $(this).attr("aria-selected", "true");
    });
});
