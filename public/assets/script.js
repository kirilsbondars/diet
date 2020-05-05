/* AFTER PAGE HAS LOADED*/
$(document).ready(function() {
    updateFartsTable();
    updateMealsList();
    updateMealsTable();
});
/*-------*/

/* FARTS */
function updateFartsTable() {
    $.get("staff/farts/show.php?user_id=1", function(data, status) {
        $("#fartsTable").html(data);
    });
}

$("#currentTime").change(function () {
    if($(this).prop("checked")) {
        $("#manualTime").fadeOut(300);
    } else {
        $("#manualTime").fadeIn(300);
    }
});

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
/*------*/

/* MEALS */
function updateMealsList() {
    $.get("staff/meals/show.php?user_id=1", function(data, status) {
        $("#mealID").html('<option value="">Choose...</option>' +
            '<option value="0">MY CHOICE</option>' + data);
    });
}

function updateMealsTable() {
    $.get("staff/meals/show_per_days.php?user_id=1", function(data, status) {
        $("#mealsTable").html(data);
    });
}

$("#mealID").change(function () {
    if(this.value === "0") {
        $("#newMeal").parent().fadeIn(700);
        $("#newMeal").prop("required", true);
    } else {
        $("#newMeal").parent().fadeOut(700);
        $("#newMeal").removeAttr("required");
    }
});

$("#mealFrom").submit(function (event) {
    event.preventDefault();

    $.get("staff/meals/add.php?user_id=1&" + $(this).serialize(), function (data, status) {
        if (data === "") {
            alertify.success('We have received your meal', 3);

            if($("#mealID :selected").val() === "0") {
                console.log("Has been added time and new product");
                $("#newMeal").val("");
                $("#newMeal").parent().fadeOut();
                $("#newMeal").removeAttr("required");
                updateMealsList();
            } else {
                console.log("Has been added new time");
                $('#mealID option[value=""]').attr("selected", "selected");
            }

            updateMealsTable();
        } else {
            alertify.error("We have not received your meal!", 3);
        }
    })
})
/*-----*/