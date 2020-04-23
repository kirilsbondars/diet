<?php require_once ("../src/shared/header.php");?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <a class="btn btn-primary m-2" href="diet.php" role="button">Back</a>
        </div>
        <div class="col-9">
            <h1 class="text-right mb-5">Add something</h1>
        </div>
    </div>

    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="farts-tab" data-toggle="tab" href="#farts" role="tab" aria-controls="farts" aria-selected="true">Farts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="meal-tab" data-toggle="tab" href="#meal" role="tab" aria-controls="profile" aria-selected="false">Meal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="feeling-tab" data-toggle="tab" href="#feeling" role="tab" aria-controls="feelings" aria-selected="false">Feelings</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="farts" role="tabpanel" aria-labelledby="farts-tab">
            <button type="button" class="btn btn-danger btn-block btn-lg mb-4" id="addFart">Add fart</button>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once ("staff/farts/show.php");?>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="meal" role="tabpanel" aria-labelledby="meal-tab">
            <form class="needs-validation" novalidate>

                <div class="form-group">
                    <label for="mealChoicer">Select Meal</label>
                    <select class="form-control" id="mealChoicer" required>
                        <option value="">Choose...</option>
                        <?php echo '<option value="1">Here will be choices form DB</option>'; ?>
                        <option value="0">My choice</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please, Fill the gap</div>
                </div>

                <div id="customMeal">

                </div>

                <button class="btn btn-dark float-right" type="submit">Add</button>

            </form>
        </div>

        <div class="tab-pane fade" id="feeling" role="tabpanel" aria-labelledby="feeling-tab">
            <form class="needs-validation" novalidate>

                <div class="form-group">
                    <label for="feelingChoicer">Select Feeling</label>
                    <select class="form-control" id="feelingChoicer" required>
                        <option value="">Choose...</option>
                        <?php echo '<option value="1">Here will be choices form DB</option>'; ?>
                        <option value="0" class="bg-info text-light">My choice</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please, Fill the gap</div>
                </div>

                <button class="btn btn-success float-right" type="submit">Add</button>

            </form>
        </div>
        
    </div>
</div>

<?php include_once("../src/shared/footer.php") ?>