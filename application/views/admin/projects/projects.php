<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                   <div class="row">
                          <div class="col-12">
                          
                          <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title" id="page_title">Projects</h3>
                                   <?php if($this->session->userdata('role_id') == '1'){?>
                                  <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_ProjectAdd"><span class="fa fa-plus"></span> Add Project</a></div>
                                  <?php };?>
                       
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                          
                            
                             
                                    <table  class="table table-hover emg1" id="myTable">
                                      <thead>
                                        <tr>
                                         <th>S.no</th>
                                         <th>title</th>
                                         <th>description</th>
										  <th>language</th>
                                         <th>Status</th>
                                         <th style="text-align: middle;">Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody id="show_projectsdata">

                                      <?php if($projects) foreach ($projects as $key => $project): ?>
                                        <tr>
                                         <td><?php echo $key+1;?></td>
                                         <td><?php echo $project->title;?></td>
                                         <td><?php echo $project->description;?></td>
										 <td><?php echo ucfirst($project->language);?></td>
										 <td><?php echo ($project->status == 1 ) ? 'active': 'not active';?></td>
                                         <td>
                                           <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $project->id;?>" data-title="<?php echo $project->title;?>" data-description="<?php echo $project->description;?>" data-image="<?php echo $project->image;?>" data-status="<?php echo $project->status;?>" data-language="<?php echo $project->language;?>"  class="btn btn-info btn-sm item_edit" >Edit</a>
                                             <?php };?>
                                             <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $project->id;?>" class="btn btn-danger btn-sm item_delete">Delete</a>
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
            </div>
            <!-- /PAGE CONTENT -->

             <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="addProjectsform"  method="post" action="">
            <div class="modal fade" id="Modal_ProjectAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add Projects Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">Projects Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea  name="title" id="title" type="text" placeholder="Title" class="form-control"></textarea>
                                                </div>
                                            </div>
                                             <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="description">Description</label>
                                                </div>
                                                <div class="col-md-8">
												    <textarea  name="description" id="description" type="text" placeholder="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                          
                                              <div class="form-group row margin-top-10">
                                               <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="image_projects">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_projects" type="file" placeholder="Image" class="form-control" >
                                                </div>
                                               
                                              </div>
											  		<div class="form-group row margin-top-10">

                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="language">Language</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select name="language" id="language" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="english">English</option>
														<option value="russian">Russian</option>
                                                        <option value="kazakh">Kazakh</option>
                                                    </select>
                                                </div>
                                            </div>  
											      <div class="form-group row margin-top-10">

                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="status">Status</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select name="status" id="status" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Not Active</option>
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

               <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="editProjectsform"  method="post" action="">
            <div class="modal fade" id="Modal_ProjectEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit Projects Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">Projects Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="id" id="id" type="text" placeholder="id" class="form-control">
                                                   <textarea  name="title" id="title" type="text" placeholder="Title" class="form-control"></textarea>
                                                </div>
                                            </div>
                                             <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="description">Description</label>
                                                </div>
                                                <div class="col-md-8">
                            <textarea  name="description" id="description" type="text" placeholder="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                          
                                              <div class="form-group row margin-top-10">
                                               <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="image_projects">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_projects" type="file" placeholder="Image" class="form-control" >
                                                  <img id="image_view" src="#"  style="width :200px" style="height :200px">
                                                </div>
                                               
                                              </div>
											  
											  		<div class="form-group row margin-top-10">

                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="language">Language</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select name="language" id="language" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="english">English</option>
														<option value="russian">Russian</option>
                                                        <option value="kazakh">Kazakh</option>
                                                    </select>
                                                </div>
                                            </div>  
                            <div class="form-group row margin-top-10">

                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="status">Status</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select name="status" id="status" class="form-control" >
                                                        <option value="" selected>Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Not Active</option>
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

      
        <!--END MODAL EDIT Admin-->
 
        <!--MODAL DELETE Admin-->
         <form>
            <div class="modal fade" id="Modal_ProjectsDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Projects</h5>
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
                    <button type="button" type="submit" id="btn_projectsdelete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE Admin-->

<script>
    
    $(document).ready(function(){

      $('#addProjectsform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_projects: {
                      required: true,
                    },
                     status: {
                      required: true
                    },
                    language: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#addProjectsform")[0]);
                        formData.append('image', $("#addProjectsform").find("#image_projects")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminProjects/add_projects",  
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
                                else if(data.status == 'title_exist'){
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

         $('#show_projectsdata').on('click','.item_edit',function(){
            
             var id      = $(this).data('id');
             var title = $(this).data('title');
             var image      = $(this).data('image');
             var description = $(this).data('description');
             var status      = $(this).data('status');
		     var language      = $(this).data('language');
             
           
            $('#editProjectsform').find('[name="id"]').val(id);
            $('#editProjectsform').find('[name="title"]').val(title);
            $('#editProjectsform').find('[name="description"]').val(description);
            $('#editProjectsform').find('[name="status"]').val(status);
			$('#editProjectsform').find('[name="language"]').val(language);
            $('#editProjectsform').find('#image_view').attr("src","<?php echo base_url().'assets/backend/uploads/projects/'?>"+image);
             $('#Modal_ProjectEdit').modal('show');
           $('select').each(function(){
                 $(this).trigger("chosen:updated");
            })
        });

        $('#editProjectsform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_projects: {
                      required: true,
                    },
                     status: {
                      required: true
                    },
                    language: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#editProjectsform")[0]);
                        formData.append('image', $("#editProjectsform").find("#image_projects")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminProjects/update_projects",  
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
                                else if(data.status == 'title_exist'){
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
        $('#show_projectsdata').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_ProjectsDelete').modal('show');
            $('[name="id"]').val(id);
        });

       $('#editProjectsform').find('#image_projects').on('change',function(){
            var id = $(this).data('id');
            $('#editProjectsform').find('#image_view').attr("src","");
        });
        //delete record to database
         $('#btn_projectsdelete').on('click',function(){
              var id = $('#id').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url(); ?>admin/AdminProjects/delete_projects",
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