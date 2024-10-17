<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

    <style>
        .form-container {
            margin-top: 30px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .submit-btn {
            margin-top: 15px;
        }
    </style>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'BMI'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">BMI</div> -->
                <div class="panel-body">

                <h3> BMI Calculator</h3>
                  <hr>

                    <div class="card">
                      <img src="../assets/user/bmiresult.jpeg" width="100%">
                    </div>
                    

                  <div class="form-container">
                    <div class="row">
                        <!-- First Column: Form -->
                        <div class="col-md-6">
                        <form id="bmiForm">
                              <div class="mb-3">
                                  <label for="height" class="form-label">Height (cm)</label>
                                  <input type="text" class="form-control" id="height" name="height">
                              </div>
                              <div class="mb-3">
                                  <label for="weight" class="form-label">Weight (pounds)</label>
                                  <input type="text" class="form-control" id="weight" name="weight">
                              </div>
                              <button type="submit" class="btn btn-primary submit-btn">Compute BMI</button>
                              <br>
                              <br>
                              <div class="mb-3">
                                  <label for="bmi" class="form-label">BMI Result</label>
                                  <input type="text" class="form-control" id="bmi" name="bmi" readonly>
                              </div>
                          </form>
                        </div>
                        <!-- Second Column: Text -->
                        <div class="col-md-6" style="border: 2px solid #0040ff; padding: 10px; border-radius: 10px;">
                            <p class="text-secondary">
                                BMI (Body Mass Index) is a measure that uses your height and weight to work out if your weight is healthy. The BMI calculation divides an adult's weight in kilograms by their height in metres squared. A BMI between 18.5 and 24.9 is considered normal, while a BMI over 25 is considered overweight, and a BMI over 30 is considered obese.
                            </p>
                        </div>
                    </div>
                </div>



                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <script>
        document.getElementById('bmiForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get values from input fields
            const heightCm = parseFloat(document.getElementById('height').value);
            const weightPounds = parseFloat(document.getElementById('weight').value);

            // Convert height to meters and weight to kilograms
            const heightM = heightCm / 100;
            const weightKg = weightPounds * 0.453592;

            // Calculate BMI
            const bmi = weightKg / (heightM * heightM);

            // Determine BMI category
            let category;
            if (bmi < 18.0) {
                category = "Underweight";
            } else if (bmi < 22.9) {
                category = "Normal weight";
            } else if (bmi < 24.9) {
                category = "Overweight";
            } else {
                category = "Obese";
            }

            // Display the BMI and category
            document.getElementById('bmi').value = `BMI: ${bmi.toFixed(2)}, Category: ${category}`;
        });
    </script>

      <?php include '../forms/template/script.php';?>
    
  </body>
</html>