<?php require_once ("../src/initialize.php");?>
<?php include (SHARED_PATH . '/header.php')?>
<?php date_default_timezone_set("Europe/Riga")?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <a class="btn btn-primary m-2" href="#" role="button">Back</a>
            </div>
            <div class="col-9">
                <h1 class="text-right mb-5">My diet</h1>
            </div>
        </div>

        <!--TABS BUTTONS-->
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="farts-tab" data-toggle="tab" href="#farts" role="tab">Farts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="meal-tab" data-toggle="tab" href="#meal" role="tab">Meal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab">Statistics</a>
            </li>
        </ul>
        <!------------->

        <div class="tab-content" id="myTabContent">

            <!--FARTS TAB-->
            <div class="tab-pane fade show active" id="farts" role="tabpanel" aria-labelledby="farts-tab">

                <form id="fartsTime">
                    <button type="submit" class="btn btn-danger btn-block btn-lg mb-4" id="addFarts">Add fart</button>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="currentTime" checked>
                            <label class="form-check-label" for="currentTime">Current time
                            </label>
                        </div>
                    </div>
                    <div class="form-row" id="manualTime" style="display: none">
                        <div class="form-group col-sm-6">
                            <label for="date">Date: </label>
                            <input type="date" id="date" class="form-control" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="time">Select a time:</label>
                            <input type="time" id="time" class="form-control" value="<?php echo date("H:i");?>">
                        </div>
                    </div>
                </form>
            </div>
            <!---------->

            <!--MEAL TAB-->
            <div class="tab-pane fade" id="meal" role="tabpanel" aria-labelledby="meal-tab">
                <form id="mealFrom">

                    <div class="form-group">
<!--                        <label for="chosenMeal"></label>-->
                        <select name="meal_id" id="mealID" class="form-control" required></select>
                    </div>

                    <div class="form-group" style="display: none">
                        <label for="newMeal">Please enter your choice</label>
                        <input type="text" name="new_meal" id="newMeal" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="currentTimeMeal" name="current_time" checked>
                            <label class="form-check-label" for="currentTimeMeal">Current time
                            </label>
                        </div>
                    </div>
                    <div class="form-row" id="manualTimeMeal" style="display: none">
                        <div class="form-group col-sm-6">
                            <label for="dateMeal">Date: </label>
                            <input type="date" id="dateMeal" name="date" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="timeMeal">Select a time:</label>
                            <input type="time" id="timeMeal" name="time" class="form-control" value="<?php echo date("H:i");?>" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg float-right mb-3" id="submitMeal">Add meal</button>
                </form>
            </div>
            <!---------->

            <!--Statistics-->
            <div class="tab-pane fade" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="min-width: 110px">Date</th>
                        <th scope="col">Farts</th>
                        <th scope="col">Meals</th>
                    </tr>
                    </thead>
                    <tbody id="table">

                    </tbody>
                </table>
            </div>
            <!-------------->

        </div>
    </div>

<?php include (SHARED_PATH . '/footer.php')?>
