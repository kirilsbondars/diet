/* AFTER PAGE HAS LOADED*/
$(document).ready(function() {
    updateMealsList();
    //updateTable();
});
/*-------*/

/* FARTS */
$("#currentTime").change(function () {
    if($(this).prop("checked")) {
        $("#manualTime").fadeOut(300);
    } else {
        $("#manualTime").fadeIn(300);
    }
});

function actionCurrentTimeFarts() {
    console.log($("#currentTime").prop("checked"));
    if(!$("#currentTime").prop("checked")) {
        $("#manualTime").fadeOut(300);
    }
    $("#currentTime").prop("checked", true);
}

$("#fartsTime #addFarts").click(function () {
    $("#addFarts").attr('disabled','disabled');

    let dateTime = "";
    if(!$("#currentTime").prop("checked")) {
        dateTime = $("#date").val() + " " + $("#time").val();
    }

    $.get("staff/farts/add.php?user_id=1&date_time=" + dateTime, function(data, status) {
        if (data === "") {
            alertify.success('We have received your fart', 3);
            //updateFartsTable();
        } else {
            alertify.error("We have not received your fart!", 3);
        }
    });

    setTimeout(function () {
        $("#addFarts").removeAttr('disabled');
    }, 500);

    actionCurrentTimeFarts();

})
/*------*/

/* MEALS */
function updateMealsList() {
    $.get("staff/meals/show.php?user_id=1", function(data, status) {
        $("#mealID").html('<option value="">Choose...</option>' +
            '<option value="0">MY CHOICE</option>' + data);
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

$("#currentTimeMeal").change(function() {
    if($(this).prop("checked")) {
        $("#manualTimeMeal").fadeOut(300);
    } else {
        $("#manualTimeMeal").fadeIn(300);
    }
});

function actionCurrentTimeMeal() {
    if(!$("#currentTimeMeal").prop("checked")) {
        $("#manualTimeMeal").fadeOut(300);
        $("#currentTimeMeal").prop("checked", true);
    }
}

$("#mealFrom").submit(function (event) {
    event.preventDefault();

    console.log($(this).serialize());

    $.get("staff/meals/add.php?user_id=1&" + $(this).serialize(), function (data, status) {
        if (data === "") {
            alertify.success('We have received your meal', 3);

            if($("#mealID :selected").val() === "0") {
                console.log("Has been added time and new product");
                $("#newMeal").val("");
                $("#newMeal").parent().fadeOut();
                $("#newMeal").removeAttr("required");
                updateMealsList();
                //actionCurrentTimeFarts();
            } else {
                console.log("Has been added new time");
                $("#mealID").val("");
            }

            actionCurrentTimeMeal();
        } else {
            alertify.error("We have not received your meal!", 3);
        }
    })
})
/*-----*/

/*Statistics*/
function updateTable() {
    $.get("staff/show_farts_meals.php?user_id=1", function(data, status) {
        $("#table").html(data);
    });
}

$("#statistics-tab").click(function () {
    updateTable();
})
/*----------*/