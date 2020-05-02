$(document).ready(function() {
    updateFartsTable();
    updateMealsList()
});

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

function updateFartsTable() {
    $.get("staff/farts/show.php?user_id=1", function(data, status) {
        $("#fartsTable").html(data);
    });
}

function updateMealsList() {
    $.get("staff/meals/show.php?user_id=1", function(data, status) {
        $("#mealsChoicer").append('<option value="">Choose...</option>' + '<option value="0">My choice</option>');
        $("#mealsChoicer").append(data);
    });
}

$("#fartsTime #addFarts").click(function () {
    $("#addFarts").attr('disabled','disabled');

    if($("#currentTime").prop("checked")) {
        $.get("staff/farts/add_now.php?user_id=1", function(data, status) {
            if (data === "") {
                alertify.success('We have received your fart', 3);
                updateFartsTable();
            } else {
                alertify.error("We have not received your fart!", 3);
            }
        });
    } else {
        let dateTime = $("#date").val() + " " + $("#time").val();
        $.get("staff/farts/add.php?user_id=1&date_time=" + dateTime, function(data, status) {
            if (data === "") {
                alertify.success('We have received your fart', 3);
                updateFartsTable();
            } else {
                alertify.error("We have not received your fart!", 3);
            }
        });
    }

    setTimeout(function () {
        $("#addFarts").removeAttr('disabled');
    }, 500);
})

$("#currentTime").change(function () {
    if ($(this).prop("checked") === false) {
        $("#date").prop("disabled", false);
        $("#time").prop("disabled", false);
    } else {
        $("#date").prop("disabled", true);
        $("#time").prop("disabled", true);
    }
})

$("#meal #addMeal").click(function () {
    console.log("ddd");
})

