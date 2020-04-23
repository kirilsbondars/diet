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

$("#mealChoicer").change(function () {
    if(this.value == "0") {
        $("#customMeal").html(
            '<div class="form-row">\n' +
            '<div class="col-12 mb-3">\n' +
            '<label for="mealName">Enter meal you ate</label>\n' +
            '<input type="text" class="form-control" id="mealName" required>\n' +
            '<div class="valid-feedback">Looks good!</div>\n' +
            '<div class="invalid-feedback">Please, Fill the gap</div>\n' +
            '</div>\n' +
            '</div>');
    } else {
        $("#customMeal").html("");
    };
})

$("#addFart").click(function () {
    $("#addFart").attr('disabled','disabled');
    $.get("staff/farts/add.php", function(data, status){
        console.log(data);
        if (data === "") {
            alertify.success('We have received your fart', 3);
        } else {
            alertify.error("We have not received your fart!", 3);
        }
    });
    setTimeout(function () {
        $("#addFart").removeAttr('disabled');
    }, 500);
})
