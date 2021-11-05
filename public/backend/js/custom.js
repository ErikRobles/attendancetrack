// $(document).on("submit", ".database_operation", function () {
//     let url = $(this).attr("action");
//     let data = $(this).serialize();
//     $.post(url, data, function (fb) {
//         let resp = $.JSON.parse(fb);
//     });
//     return false;
// });

$(document).on("click", ".category_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/category_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});

$(document).on("click", ".exam_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/exam_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});

$(document).on("click", ".question_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/question_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});

$(document).on("click", ".student_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/student_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});

$(document).on("click", ".portal_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/portal_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});

$(document).on("click", ".question_status", function () {
    let id = $(this).attr("data-id");
    $.get(BASE_URL + "/exams/admin/question_status/" + id, function (fb) {
        // alert(fb);
        alert("Status Successfully Changed");
    });
});
