<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
//print_r($query[0]);
?>
<div class="modal fade model-s" tabindex="-1" role="dialog" id="myModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row" style="min-width: 85%">
                    <div class="col"  style="max-width: 25%" >

                        <img width="30" height="30" src="<?php echo base_url(); ?>images/profile-img.png" alt=""/>
                    </div>
                    <div class="col" >
                        <div class=" "><?= $query->first_name ?></div>
                        <div class=" " >900002435</div>
                    </div>

                </div>
                <div class="col-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>  

            </div>
            <div class="modal-body">
                <div class=""  >
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="dropdown-item" href="#" ><i class="fas fa-fw fa-folder"></i> CAll</a></li>
                        <li class="list-group-item"><a class="dropdown-item" href="#" ><i class="fas fa-fw fa-folder"></i> Send Message</a></li>
                        <li class="list-group-item"><a class="dropdown-item" href="#" ><i class="fas fa-fw fa-folder"></i> Add to Contact</a></li>
                        <li class="list-group-item"><a class="dropdown-item" href="#" ><i class="fas fa-fw fa-folder"></i> Copy</a></li>
                        
                        <li class="list-group-item">
                            <div class="col-md-10">
                                 <label>Options</label>
                                 <select id="dropdown" class="custom-select custom-select-md mb-3">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                           
                        </li>
                        <li class="list-group-item">
                            <div class="col-10">
                                <label>Comment</label>
                                <textarea id="comment"rows="2" cols="3"  class="form-control" >Enter Comment... </textarea>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="col-5">
                                <button style="margin-right: 5%" type="button" class="btn btn-success">SMS</button>
                                <button type="button" class="btn btn-danger">CALL</button>
                            </div>


                        </li>
                    </ul>



                </div>

            </div>
            <div class="modal-footer"  >
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<input type="hidden" name="userid" id="userid"  value="<?= $query->employee_number; ?>" /> 
<script type="text/javascript">
    $(document).ready(function () {
        // Display Modal
        $('#myModel').modal('show');
        
        $("#saveChanges").click(function(){
          
             $.ajax({
                    url: 'save_user_popup',
                    type: 'post',
                    data: {
                         'userid' : $("#userid").val(),
                        'dropdown' : $("#dropdown").val(),
                        'comment'  :  $("#comment").val(),
                    },
                    success: function (response) {
                        // Add response in Modal body
                     
                     //   $('#modal-data').html(response);
  $('#myModel').modal('toggle');
                       
                    }
                });
                return true;
        });
    })</script>