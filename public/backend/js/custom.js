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

// document.addEventListener("DOMContentLoaded", function () {
//     function startTimer(duration, display) {
//         let timer = duration,
//             minutes,
//             seconds;
//         setInterval(function () {
//             minutes = parseInt(timer / 60, 10);
//             seconds = parseInt(timer % 60, 10);

//             minutes = minutes < 10 ? "0" + minutes : minutes;
//             seconds = seconds < 10 ? "0" + seconds : seconds;

//             display.textContent = minutes + ":" + seconds;

//             if (--timer < 0) {
//                 timer = duration;
//                 alert("Your time has expired");
//                 window.location.href = "/student/exam";
//             }
//         }, 1000);
//     }

//     window.onload = function () {
//         let sixtyMinutes = 60 * 60,
//             display = document.querySelector("#time");
//         startTimer(sixtyMinutes, display);
//     };
// });

if (localStorage.getItem("count_timer")) {
    var count_timer = localStorage.getItem("count_timer");
} else {
    var count_timer = 60 * 60;
}
var minutes = parseInt(count_timer / 60);
var seconds = parseInt(count_timer % 60);
function countDownTimer() {
    if (seconds < 10) {
        seconds = "0" + seconds;
    }
    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    document.getElementById("time").innerHTML =
        "Time Left : " + minutes + " Minutes " + seconds + " Seconds";
    if (count_timer <= 0) {
        window.location.href = "/student/exam";
        localStorage.clear("count_timer");
    } else {
        count_timer = count_timer - 1;
        minutes = parseInt(count_timer / 60);
        seconds = parseInt(count_timer % 60);
        localStorage.setItem("count_timer", count_timer);
        setTimeout("countDownTimer()", 1000);
    }
}
if (document.getElementById("time")) {
    setTimeout("countDownTimer()", 1000);
}
