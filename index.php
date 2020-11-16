<?php include 'functions.php'; ?>
<!DOCTYPE HTML>
<html>
<head> <!-- Made by Scott Smith -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="30">
    <title>Requisitions Processed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *,
        *:focus {
            outline: none !important;
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
    </style>
  </head>
  <body>
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
<<<<<<< HEAD
                    <tr>
                        <td>jackie</td> <!-- name must be lowercase and unique -->
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('erin', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('erin', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('erin', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('erin', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><?php echo get_delivered_qty('erin', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('erin', 2); ?></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>tara</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('tara', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('tara', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
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
                                <div class="col"><?php echo get_delivered_qty('tara', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('tara', 2); ?></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>angela</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
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
                                <div class="col"><?php echo get_delivered_qty('angela', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('angela', 2); ?></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>kristyna</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('kristyna', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('kristyna', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('kristyna', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('kristyna', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><?php echo get_delivered_qty('kristyna', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('kristyna', 2); ?></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>hanna</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('hanna', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('hanna', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
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
                                <div class="col"><?php echo get_delivered_qty('hanna', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('hanna', 2); ?></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>
                    <tr>
                        <td>marissa</td>
                        <?php foreach($days as $day) { ?>
                            <td>
                                <div class="row">
                                    <div class="col"><?php echo get_request_qty('marissa', date('Y-m-d', strtotime(''.$day.' this week')), 1); ?></div>
                                    <div class="col border-left"><?php echo get_request_qty('marissa', date('Y-m-d', strtotime(''.$day.' this week')), 2); ?></div>
                                </div>
                            </td>
                        <?php } ?>
                        <td data-request="total">
                            <div class="row">
                                <div class="col"><?php echo get_total_request_by('marissa', 1); ?></div>
                                <div class="col border-left"><?php echo get_total_request_by('marissa', 2); ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col"><?php echo get_delivered_qty('marissa', 1); ?></div>
                                <div class="col border-left"><?php echo get_delivered_qty('marissa', 2); ?></div>
                            </div>
                        </td> <!-- Delivered Kits -->
                    </tr>
=======
                  <tr>
                    <td>jackie</td>
                    <?php foreach($days as $day) { ?>
                        <td><?php echo get_request_qty('erin', date('Y-m-d', strtotime(''.$day.' this week'))); ?></td>
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('erin'); ?></td>
                    <td><?php echo get_delivered_qty('erin'); ?></td>
                  </tr>
                  <tr>
                    <td>tara</td>
                    <?php foreach($days as $day) { ?>
                        <td><?php echo get_request_qty('tara', date('Y-m-d', strtotime(''.$day.' this week'))); ?></td>    
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('tara'); ?></td>
                    <td><?php echo get_delivered_qty('tara'); ?></td>
                  </tr>
                  <tr>
                    <td>angela</td>
                    <?php foreach($days as $day) { ?>
                        <td><?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week'))); ?></td>    
                    <?php } ?>
>>>>>>> 10b5ad810732341650bb9a1a0bf5fc059f48bea6

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
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        (function($) {
	        let reqTotalCampain_1 = 0,
		        reqTotalCampain_2 = 0;

	        $('[data-request=total]').each(function() {
		        reqTotalCampain_1 += parseInt($(this).find('.col:eq(0)').text());
		        reqTotalCampain_2 += parseInt($(this).find('.col:eq(1)').text());
	        });

	        $('[data-total=request]').find('div div:eq(0)').text(reqTotalCampain_1);
	        $('[data-total=request]').find('div div:eq(1)').text(reqTotalCampain_2);
        }(jQuery));
    </script>
</body>
</html>
