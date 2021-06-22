<?php
$permission = (isset($_GET["trugenxmgr"]) && trim($_GET["trugenxmgr"]) == 'true');
if(!$permission) {
	die("You do not have permission to access this page.");
}
?>

<?php include 'functions.php'; ?>
<html>
<head> <!-- Made by Scott Smith -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Requisitions Processed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *,
        *:focus {
            outline: none !important;
        }
        .btn {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .inc img,
        .dec img {
            width: 16px;
            height: auto;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            height: 26px;
            border: none;
            padding: 5px 0;
            width: auto;
            text-align: center;
            max-width: 34px;
            display: block;
            margin: 0 auto;
            background-color: transparent;
            color: #fff;
            appearance: textfield;
            -moz-appearance: textfield;
        }
        input[type="number"]:focus {
            -webkit-box-shadow: 0 0 5px #373c77 inset;
            -moz-box-shadow: 0 0 5px #373c77 inset;
            box-shadow: 0 0 5px #373c77 inset;
        }
        td:first-child {
            text-transform: capitalize;
        }
        table th,
        table td {
            vertical-align: middle !important;
        }
        tbody td {
            padding: 0 !important;
        }
        td .row {
            margin: 0;
        }
        td .col {
            padding: .75rem 0;
        }
        td[data-request="total"] .col {
            line-height: 78px;
        }
    </style>
  </head>
  <body> 
      <form autocomplete="off">
        <div style="background-color:#28a745;">
            <h1 class="text-white mb-0 text-center">Requisitions Processed</h1>
        </div>
        <div class="table-responsive">
            <table style="background-color: #2573c7!important" class="table table-bordered table-dark text-center">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Req Totals</th>
                    <th>Kits Delivered</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>jackie</td> <!-- name must be lowercase and unique -->
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('jackie', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="jackie" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('jackie', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="jackie" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('jackie', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('jackie', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('jackie', 1); ?>"  name="delivered[]" data-name="jackie" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('jackie', 2); ?>"  name="delivered[]" data-name="jackie" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>tara</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('tara', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="tara" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('tara', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="tara" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('tara', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('tara', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('tara', 1); ?>" name="delivered[]" data-name="tara" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('tara', 2); ?>" name="delivered[]" data-name="tara" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>angela</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="angela" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="angela" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>

                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('angela', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('angela', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('angela', 1); ?>" name="delivered[]" data-name="angela" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('angela', 2); ?>" name="delivered[]" data-name="angela" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>hanna</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('hanna', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="hanna" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('hanna', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="hanna" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('hanna', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('hanna', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('hanna', 1); ?>" name="delivered[]" data-name="hanna" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('hanna', 2); ?>" name="delivered[]" data-name="hanna" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>
				
					
					<tr>
                        <td>diana</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('diana', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="diana" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('diana', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="diana" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('diana', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('diana', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('diana', 1); ?>" name="delivered[]" data-name="diana" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('diana', 2); ?>" name="delivered[]" data-name="diana" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>
					
					<tr>
                        <td>dina</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><input type="number" value="<?php echo get_request_qty('dina', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?>" name="<?php echo $day; ?>[]" data-name="dina" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="1"></div>
                                    <div class="col border-left"><input type="number" value="<?php echo get_request_qty('dina', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?>" name="<?php echo $day; ?>[]" data-name="dina" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>" data-campaign="2"></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('dina', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('dina', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><input type="number" value="<?php echo get_delivered_qty('dina', 1); ?>" name="delivered[]" data-name="dina" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="1"></div>
                                <div class="col border-left"><input type="number" value="<?php echo get_delivered_qty('dina', 2); ?>" name="delivered[]" data-name="dina" data-date="<?php echo date('Y-m-d'); ?>" data-campaign="2"></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>

                    <tr>
                        <td style="padding: .75rem 0 !important;">Goals</td>
                        <td>15</td> <!-- Monday -->
                        <td>15</td> <!-- Tuesday -->
                        <td>15</td> <!-- Wednesday -->
                        <td>15</td> <!-- Thursday -->
                        <td>15</td> <!-- Friday -->
                        <td>75</td> <!-- Req Totals -->
                        <td>75</td> <!-- Delivered Kits -->
                    </tr>
                    <tr>
                        <td>Total Reqs</td>
                        <?php foreach($days as $day) { ?>
                            <td data-total="<?php echo $day; ?>">
                                <div class="row">
                                    <div class="col"><?php echo get_total_request(date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_total_request(date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-total="request">
                            <div class="row">
                                <div class="col">0</div>
                                <div class="col border-left">0</div>
                            </div>
                        </td>
                        <td data-total="delivered">
                            <div class="row">
                                <div class="col"><?php echo get_total_delivered(1); ?></div>
                                <div class="col border-left"><?php echo get_total_delivered(2); ?></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>
                </tbody>
            </table>
        </div>
      </form>

      <div class="toast" data-delay="1000" style="position: absolute; top: 0; right: 15px;"><div class="toast-body"></div></div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
	      (function($) {
		      //Kit Delivered
		      $('input[name^="delivered"]').change(function(e) {
			      $.ajax({
				      type: 'POST',
				      url: 'delivery.php',
				      data: {
					      name: $(this).attr('data-name'),
					      quantity: $(this).val(),
					      date: $(this).attr('data-date'),
					      campaign: $(this).attr('data-campaign')
				      },
				      success: function (data) {
					      let total = 0;
					      $('input[name="delivered[]"][data-campaign="'+data+'"]').map(function() {
						      total += parseInt($(this).val());
					      });
					      $('[data-total="delivered"] .col:eq('+(data-1)+')').text(total);

					      $('.toast-body').text("Data has updated successfully.");
					      $('.toast').toast('show');
				      },
				      error: function (data) {
					      alert(data);
				      },
			      });
		      });


		      //Request
		      let days = ["monday", "tuesday", "wednesday", "thursday", "friday"];
		      days.map(function(day, key) {
			      $('input[name^='+day+']').change(function(e) {
				      $.ajax({
					      type: 'POST',
					      url: 'request.php',
					      data: {
						      name: $(this).attr('data-name'),
						      request: $(this).val(),
						      date: $(this).attr('data-date'),
						      campaign: $(this).attr('data-campaign')
					      },
					      success: function (data) {
						      let total = 0;
						      $('input[name="'+day+'[]"][data-campaign="'+data+'"]').map(function() {
							      total += parseInt($(this).val());
						      });
						      $('[data-total='+day+'] .col:eq('+(data-1)+')').text(total);
						      $('.toast-body').text("Data has updated successfully.");
						      $('.toast').toast('show');
					      },
					      error: function (data) {
						      alert(data);
					      },
				      });
			      });
		      });


		      let reqTotalCampain_1 = 0,
			      reqTotalCampain_2 = 0;

		      $('[data-request=total]').each(function() {
			      reqTotalCampain_1 += parseInt($(this).find('.col:eq(0)').text());
			      reqTotalCampain_2 += parseInt($(this).find('.col:eq(1)').text());
		      });

		      $('[data-total=request]').find('div div:eq(0)').text(reqTotalCampain_1);
		      $('[data-total=request]').find('div div:eq(1)').text(reqTotalCampain_2);



		      //Button + -
		      $('<button type="button" class="btn btn-sm btn-dark inc"><img src="img/plus.svg" alt="Increment"></button>').insertBefore('input[type="number"]');
		      $('<button type="button" class="btn btn-sm btn-dark dec"><img src="img/minus.svg" alt="Decrement"></button>').insertAfter('input[type="number"]');
		      $(".inc, .dec").on("click", function() {
			      let button = $(this),
				      newVal = 0,
				      oldValue = button.siblings("input").val();

			      if (button.hasClass('inc')) {
				      newVal = parseFloat(oldValue) + 1;
			      } else {
				      // Don't allow decrementing below zero
				      if (oldValue > 0) {
					      newVal = parseFloat(oldValue) - 1;
				      } else {
					      newVal = 0;
				      }
			      }
			      button.siblings("input").val(newVal).trigger('change');
		      });
	      }(jQuery));
      </script>
</body>
</html> 
