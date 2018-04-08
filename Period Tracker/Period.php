<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="daterangepicker.css" />
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>


    <title>Period Tracker</title>
  </head>
  <body style="background-image:url(girls.jpg);background-size:cover;">
    <p><br/></p>
    <div class="container">
      <p style="margin-top: 200px; text-align: center; font-size: 50px; font-family:'Sofia';"> Enter Cycle Length</p>


<div id="reportrange" class="pull-right" style="background: #fff; margin-top: 30px; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
    
    <span></span> <b class="caret"></b>
    <button style="margin-left: 788px;" type="button">Select!</button>
</div>
<button style="margin-top:150px; margin-left: 550px; border-radius: 12px; " type="button">Next</button>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="moment.min.js"></script>
    <script type="text/javascript" src="daterangepicker.js"></script>
    <script>

$(function() {

    var start = moment().subtract(0, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Cycle for 5days': [moment().add(0, 'days'), moment().add(5, 'days')],
           'Cycle for 6days': [moment().add(0, 'days'), moment().add(6, 'days')],
           'Cycle for 7days': [moment().add(0, 'days'), moment().add(7, 'days')],
           'Cycle for 8days': [moment().add(0, 'days'), moment().add(8, 'days')],
           'Cycle for 9days': [moment().add(0, 'days'), moment().add(9, 'days')],
           
           
        }
    }, cb);

    cb(start, end);
    
});

</script>
  </body>
</html>