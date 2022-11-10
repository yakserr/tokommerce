function onChangeSelect(url, id, name) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: url,
        type: "GET",
        data: {
            id: id,
        },
        success: function (data) {
            const arrRegion = ["province", "city", "district", "village"];
            const index = arrRegion.indexOf(name);
            for (let i = index; i < arrRegion.length; i++) {
                $(`#${arrRegion[i]}`).empty();
                $(`#${arrRegion[i + 1]}`).prop("disabled", true);
                $(`#${arrRegion[i]}`).append(
                    `<option value="">Select ${arrRegion[i]}</option>`
                );
            }

            $.each(data, function (key, value) {
                $("#" + name).append(
                    '<option value="' + key + '">' + value + "</option>"
                );
            });
        },
    });
}
$(function () {
    $("#province").on("change", function () {
        $("#city").prop("disabled", false);
        onChangeSelect('{{ route("cities") }}', $(this).val(), "city");
    });
    $("#city").on("change", function () {
        $("#district").prop("disabled", false);
        onChangeSelect('{{ route("districts") }}', $(this).val(), "district");
    });
    $("#district").on("change", function () {
        $("#village").prop("disabled", false);
        onChangeSelect('{{ route("villages") }}', $(this).val(), "village");
    });
});
