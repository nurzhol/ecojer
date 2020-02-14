<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                   <div class="row">
                          <div class="col-12">
                          
                          <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title" id="page_title">Users</h3>
                                   <?php if($this->session->userdata('role_id') == '1'){?>
                                  <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_UserAdd"><span class="fa fa-plus"></span> Add New</a></div>
                                  <?php };?>
                       
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                          
                            
                             
                                    <table  class="table table-hover emg1" id="myTable">
                                      <thead>
                                        <tr>
                                         <th>S.no</th>
                                         <th>User Name</th>
                                         <th>User Role</th>
                                         <th>Status</th>
                                         <th style="text-align: middle;">Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody id="show_userdata">

                                      <?php if($users) foreach ($users as $key => $users): ?>
                                        <tr>
                                         <td><?php echo $key+1;?></td>
                                         <td><?php echo $users->first_name." ".$users->last_name;?></td>
                                         <td><?php echo $users->display_name;?></td>
										 <td><?php echo ($users->status == 1 ) ? 'active': 'disabled';?></td>
                                         <td>
                                           <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $users->id;?>"  data-first_name="<?php echo $users->first_name;?>"  data-last_name="<?php echo $users->last_name;?>"  data-email="<?php echo $users->email;?>"    data-role_id="<?php echo $users->role_id;?>"  data-image="<?php echo $users->image;?>"   class="btn btn-info btn-sm item_edit" >Edit</a>
                                             <?php };?>
                                             <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $users->id;?>" class="btn btn-danger btn-sm item_delete">Delete</a>
                                             <?php };?>
                                         </td>
                                        </tr>
                                      <?php endforeach ?>
                                         
                                      </tbody>
                                    </table>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                          <!-- /.row -->

                </div>
            </d
            <!-- /PAGE CONTENT -->

             <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="addUserform"  method="post" action="">
            <div class="modal fade" id="Modal_UserAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add User Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">User Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="first_name">First Name</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="first_name" id="first_name" type="text" placeholder="First Name" class="form-control">
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="last_name">Last Name</label>
                                                </div>
                                                <div class="col-md-4">
                                                     <input name="last_name" id="last_name" type="text" placeholder="Last Name" class="form-control" >
                                                </div>
                                            </div>
                                             <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="email">Email</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="email" id="email" type="text" placeholder="Email" class="form-control" >
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="password">Password</label>
                                                </div>
                                                <div class="col-md-4">
                                                     <input name="password" id="password" type="password" placeholder="Password" class="form-control" >
                                                </div>
                                            </div>
                                              <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="cpassword">Confirm Password</label>
                                                </div>

                                                <div class="col-md-4">
                                                     <input name="cpassword" id="cpassword" type="password" placeholder="Password" class="form-control" >
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="user_status">Status</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="user_status" id="user_status" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Not Active</option>
                                                    </select>
                                                </div>
                                            </div>

                                             <div class="form-group row margin-top-10">

                                               <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="location_id">Location</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="location_id" id="location_id" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                        <?php foreach ($locations as $key => $location): ?>
                                                            <option value="<?php echo $location->id;?>"><?php echo $location->name;?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="user_status">Role</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="role_id" id="role_id" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                        <?php if($this->session->userdata('role_id') == '1'){?>
                                                        <option value="2">Admin</option>
                                                         <?php }?>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>

                                              <div class="form-group row margin-top-10">
                                               <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="image_user">Image</label>
                                                </div>
                                                <div class="col-md-10">
                                                  <input name="file" id="image_user" type="file" placeholder="Image" class="form-control" >
                                                </div>
                                               
                                              </div>

                                        </fieldset>

                                        <legend class="text-bold">User Rights</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_add">Can Add</label>
                                                </div>
                                               <div class="col-md-2">
                                                    <select name="can_add" id="can_add" class="form-control"  >
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_edit">Can Edit</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select name="can_edit" id="can_edit" class="form-control">
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                                 <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_delete">Can Delete</label>
                                                </div>
                                               <div class="col-md-2">
                                                    <select name="can_delete" id="can_delete" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                           

                                        </fieldset>
                                       
                                       
                                       
                                       

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button  type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
              </div>
                  
            </div>
            </form>

                <!-- MODAL Add Admin -->
       <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="adduserform"  method="post" action="">
            <div class="modal fade" id="Modal_AdminAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
               
                 
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL Add Admin-->

             <!-- MODAL EDIT Admin-->
           <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="editUserform"  method="post" action="">
            <div class="modal fade" id="Modal_UserEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit User Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">User Information</legend>
                                        <fieldset class="content-group">
                                           <input type="hidden" name="id_edit" id="id_edit" class="form-control">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="first_name_edit">First Name</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="first_name_edit" id="first_name_edit" type="text" placeholder="First Name" class="form-control">
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="last_name_edit">Last Name</label>
                                                </div>
                                                <div class="col-md-4">
                                                     <input name="last_name_edit" id="last_name_edit" type="text" placeholder="Last Name" class="form-control" >
                                                </div>
                                            </div>
                                             <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="email_edit">Email</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="email_edit" id="email_edit" type="text" placeholder="Email" class="form-control" >
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="password_edit">Password</label>
                                                </div>
                                                <div class="col-md-4">
                                                     <input name="password_edit" id="password_edit" type="password" placeholder="Password" class="form-control" >
                                                </div>
                                            </div>
                                              <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="cpassword_edit">Confirm Password</label>
                                                </div>

                                                <div class="col-md-4">
                                                     <input name="cpassword_edit" id="cpassword_edit" type="password" placeholder="Password" class="form-control" >
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="user_status_edit">Status</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="user_status_edit" id="user_status_edit" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Not Active</option>
                                                    </select>
                                                </div>
                                            </div>

                                             <div class="form-group row margin-top-10">

                                               <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="location_id_edit">Location</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="location_id_edit" id="location_id_edit" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                        <?php foreach ($locations as $key => $location): ?>
                                                            <option value="<?php echo $location->id;?>"><?php echo $location->name;?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="role_id_edit">Role</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="role_id_edit" id="role_id_edit" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                         <?php if($this->session->userdata('role_id') == '1'){?>
                                                        <option value="2">Admin</option>
                                                         <?php }?>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>

                                              <div class="form-group row margin-top-10">

                                                 <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="image_user_edit">User Image</label>
                                                </div>
                                                <div class="col-md-10">
                                                  <img src="" id="image_edit" alt="user_image" width="200" height="200">
                                                  <br>
                                                   <br>
                                                </div>

                                               <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="image_user_edit">Image</label>
                                                </div>
                                                <div class="col-md-10">
                                                  <input name="file_edit" id="image_user_edit" type="file" placeholder="Image" class="form-control" >
                                                </div>
                                               
                                              </div>

                                        </fieldset>

                                        <legend class="text-bold">User Rights</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_add_edit">Can Add</label>
                                                </div>
                                               <div class="col-md-2">
                                                    <select name="can_add_edit" id="can_add_edit" class="form-control"  >
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_edit_edit">Can Edit</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select name="can_edit_edit" id="can_edit_edit" class="form-control">
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                                 <div class="col-md-2">
                                                    <label class="control-label col-form-label" for="can_delete_edit">Can Delete</label>
                                                </div>
                                               <div class="col-md-2">
                                                    <select name="can_delete_edit" id="can_delete_edit" class="form-control" >
                                                        <option value=""  selected>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                           

                                        </fieldset>
                                       
                                       
                                       
                                       

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button  type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
              </div>
                  
            </div>
            </form>
        <!--END MODAL EDIT Admin-->
 
        <!--MODAL DELETE Admin-->
         <form>
            <div class="modal fade" id="Modal_UserDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id" id="id" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_userdelete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE Admin-->

<script>
    
    $(document).ready(function(){

      $('#addUserform').validate({
                rules: {
                     first_name: {
                      required: true
                    },
                     last_name: {
                      required: true
                    },
                     email: {
                      required: true,
                      email: true
                    },
                     password: {
                      required: true
                    },
                     cpassword: {
                      required: true,
                      equalTo: "#password"
                    },
                     location_id: {
                      required: true
                    },
                     user_status: {
                      required: true
                    },
                    role_id: {
                      required: true
                    },
                     file: {
                      required: true
                    },
                     can_add: {
                      required: true
                    },
                     can_edit: {
                      required: true
                    },
                     can_delete: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#addUserform")[0]);
                        formData.append('image', $("#image_user")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminUser/add_user",  
                            type : 'POST',
                            data : formData,
                            async : false,
                            cache : false,
                            contentType : false,
                            processData : false,
                            dataType :"JSON",
                            success : function(data) {
                            console.log(data)         
                               if(data.status == 'false'){
                                    $("#error").html('<label class="error" >'+data.error+'</label>');
                                }
                                else if(data.status == 'email_exist'){
                                    $("#error").html('<label class="error" >'+data.error+'</label>');
                                } 
                                 else {
                                    window.location.href =  window.location.href;
                                }
                            }
                        });         
                    return false;
                },
                // other options
            });

         $('#show_userdata').on('click','.item_edit',function(){
            
             var id      = $(this).data('id');
             var first_name = $(this).data('first_name');
             var last_name      = $(this).data('last_name');
             var user_status = $(this).data('user_status');
             var location_id      = $(this).data('location_id');
             var role_id = $(this).data('role_id');
             var email      = $(this).data('email');
             var image = $(this).data('image');
             var can_add      = $(this).data('can_add');
             var can_edit = $(this).data('can_edit');
             var can_delete      = $(this).data('can_delete');
            
             
            $('#Modal_UserEdit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="first_name_edit"]').val(first_name);
            $('[name="last_name_edit"]').val(last_name);
            $('[name="email_edit"]').val(email);
            $('[name="user_status_edit"]').val(user_status);
            $('[name="location_id_edit"]').val(location_id);
            $('[name="role_id_edit"]').val(role_id);
            $('#image_edit').prop('src',"<?php echo base_url();?>uploads/users/"+image);
            $('[name="can_add_edit"]').val(can_add);
            $('[name="can_edit_edit"]').val(can_edit);
            $('[name="can_delete_edit"]').val(can_delete);

           $('select').each(function(){
                 $(this).trigger("chosen:updated");
            })
        });

         $('#editUserform').validate({
                rules: {
                     first_name_edit: {
                      required: true
                    },
                     last_name_edit: {
                      required: true
                    },
                     email_edit: {
                      required: true,
                      email: true
                    },
                     location_id_edit: {
                      required: true
                    },
                     user_status_edit: {
                      required: true
                    },
                    role_id_edit: {
                      required: true
                    },
                     file_edit_edit: {
                      required: true
                    },
                     can_add_edit: {
                      required: true
                    },
                     can_edit_edit: {
                      required: true
                    },
                     can_delete_edit: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#editUserform")[0]);
                        formData.append('image_edit', $("#image_user_edit")[0].files[0])

                        console.log(formData)
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminUser/update_user",  
                            type : 'POST',
                            data : formData,
                            async : false,
                            cache : false,
                            contentType : false,
                            processData : false,
                            dataType :"JSON",
                            success : function(data) {
                            console.log(data)         
                               if(data.status == 'false'){
                                    $("#error").html('<label class="error" >'+data.error+'</label>');
                                }
                                else if(data.status == 'email_exist'){
                                    $("#error").html('<label class="error" >'+data.error+'</label>');
                                } 
                                 else {
                                    window.location.href =  window.location.href;
                                }
                            }
                        });         
                    return false;
                },
                // other options
            });

 
        //get data for delete record
        $('#show_userdata').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_UserDelete').modal('show');
            $('[name="id"]').val(id);
        });
        //delete record to database
         $('#btn_userdelete').on('click',function(){
              var id = $('#id').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url(); ?>admin/AdminUser/delete_user",
                  dataType : "JSON",
                  data : {id:id},
                  success: function(data){
                      window.location.href =  window.location.href;
                  }
              });
              return false;
          });
    })



</script>