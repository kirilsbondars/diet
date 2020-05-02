<?php require_once ("../src/initialize.php");?>
<?php include (SHARED_PATH . '/header.php')?>
<?php date_default_timezone_set("Europe/Riga")?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <a class="btn btn-primary m-2" href="diet.php" role="button">Back</a>
            </div>
            <div class="col-9">
                <h1 class="text-right mb-5">my Diet</h1>
            </div>
        </div>

        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="farts-tab" data-toggle="tab" href="#farts" role="tab" aria-controls="farts" aria-selected="true">Farts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="meal-tab" data-toggle="tab" href="#meal" role="tab" aria-controls="profile" aria-selected="false">Meal</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="farts" role="tabpanel" aria-labelledby="farts-tab">

                <form id="fartsTime">
                    <button type="submit" class="btn btn-danger btn-block btn-lg mb-4" id="addFarts">Add fart</button>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="currentTime" checked>
                            <label class="form-check-label" for="currentTime">
                                Current time
                            </label>
                        </div>
                    </div>
                    <div class="form-row" id="manualTime">
                        <div class="form-group col-sm-6">
                            <label for="date">Date: </label>
                            <input type="date" id="date" class="form-control" value="<?php echo date("Y-m-d");?>" disabled="true">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="time">Select a time:</label>
                            <input type="time" id="time" class="form-control" value="<?php echo date("H:i");?>" disabled="true">
                        </div>
                    </div>
                </form>

                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Number</th>
                    </tr>
                    </thead>
                    <tbody id="fartsTable">

                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="meal" role="tabpanel" aria-labelledby="meal-tab">

            </div>

        </div>
    </div>

<?php include (SHARED_PATH . '/footer.php')?>
