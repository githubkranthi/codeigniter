<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css " rel="stylesheet" type="text/css"rel="stylesheet" type="text/css">
 


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </head>

    <body>

        <div class="container-fluid ">

            <button type="button" data-toggle="modal" data-target="#myModel">Launch modal</button>

            <div class="table-responsive">
                <table class="table table-responsive  table-condensed table-hover">
                    <thead>
                    <td> Number</td>
                    <td> Name</td>
                    <td> Mobile Number</td>
                    <td> Email ID</td>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($query as $empoloyee) {
                            $id = $empoloyee->employee_number;
                            ?>
                            <tr>
                                <td>  <?= $empoloyee->employee_number ?> </td>

                                <td>  <?= $empoloyee->first_name ?> </td>
                                <td data-id="<?= $id ?>"> 
                                    <a data-id="<?= $id ?>" class="userinfo"  href="#">  <?= rand(900007788, 900002000) ?> </a> </td>
                                <td>  <?= $empoloyee->email_id ?> </td>

                            </tr>
<?php } ?>

                    </tbody>
                </table>
            </div>

        </div>



        

    </body>

    <div id="modal-data"></div>


    <script type="text/javascript">
        $(document).ready(function () {

            $('.userinfo').click(function () {
                $('#modal-data').html("");
                var mobile =     $(this).val();
                var userid = $(this).data('id');
           var headcontent = "<div>"+mobile+"</div>";
                // AJAX request
                $.ajax({
                    url: 'show_user',
                    type: 'post',
                    data: {userid: userid},
                    success: function (response) {
                        // Add response in Modal body
                     
                        $('#modal-data').html(response);

                       
                    }
                });
            });
        });
    </script>


</html>
