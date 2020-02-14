<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                   <div class="row">
                          <div class="col-12">
                          
                          <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title" id="page_title">photogallery</h3>
                                   <?php if($this->session->userdata('role_id') == '1'){?>
                                  <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_photogalleryAdd"><span class="fa fa-plus"></span> Add New</a></div>
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
                                      <tbody id="show_photogallerydata">

                                      <?php if($photogallery) foreach ($photogallery as $key => $photo): ?>
                                        <tr>
                                         <td><?php echo $key+1;?></td>
                                         <td><?php echo $photo->title;?></td>
                                         <td><?php echo $photo->description;?></td>
										  <td><?php echo ucfirst($photo->language);?></td>
										                     <td><?php echo ($photo->status == 1 ) ? 'active': 'not active';?></td>
                                         <td>
                                           <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $photo->id;?>" data-title="<?php echo $photo->title;?>" data-description="<?php echo $photo->description;?>" data-image="<?php echo $photo->image;?>" data-status="<?php echo $photo->status;?>"  data-language="<?php echo $photo->language;?>" class="btn btn-info btn-sm item_edit" >Edit</a>
                                             <?php };?>
                                             <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $photo->id;?>" class="btn btn-danger btn-sm item_delete">Delete</a>
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

             <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="addphotogalleryform"  method="post" action="">
            <div class="modal fade" id="Modal_photogalleryAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add photogallery Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">photogallery Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-md-8">
                                                   <textarea  name="title" id="title" placeholder="Title" class="form-control"></textarea>
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
                                                    <label class="control-label col-form-label" for="image_photogallery">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_photogallery" type="file" placeholder="Image" class="form-control" >
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

               <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="editphotogalleryform"  method="post" action="">
            <div class="modal fade" id="Modal_NewEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit photogallery Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">photogallery Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="id" id="id" type="text" placeholder="id" class="form-control">
                                                    <textarea  name="title" id="title" placeholder="Title" class="form-control"></textarea>
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
                                                    <label class="control-label col-form-label" for="image_photogallery">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_photogallery" type="file" placeholder="Image" class="form-control" >
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
            <div class="modal fade" id="Modal_photogalleryDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete photogallery</h5>
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
                    <button type="button" type="submit" id="btn_photogallerydelete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE Admin-->

<script>
    
    $(document).ready(function(){

      $('#addphotogalleryform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_photogallery: {
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
                        var formData = new FormData( $("#addphotogalleryform")[0]);
                        formData.append('image', $('#addphotogalleryform').find("#image_photogallery")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/Adminphotogallery/add_photogallery",  
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

         $('#show_photogallerydata').on('click','.item_edit',function(){
            
             var id      = $(this).data('id');
             var title = $(this).data('title');
             var image      = $(this).data('image');
             var description = $(this).data('description');
             var status      = $(this).data('status');
			 var language      = $(this).data('language');
            
             
           
            $('#editphotogalleryform').find('[name="id"]').val(id);
            $('#editphotogalleryform').find('[name="title"]').val(title);
            $('#editphotogalleryform').find('[name="description"]').val(description);
            $('#editphotogalleryform').find('[name="status"]').val(status);
			$('#editphotogalleryform').find('[name="language"]').val(language);
            $('#editphotogalleryform').find('#image_view').attr("src","<?php echo base_url().'assets/backend/uploads/photogallery/'?>"+image);
             $('#Modal_NewEdit').modal('show');
           $('select').each(function(){
                 $(this).trigger("chosen:updated");
            })
        });

        $('#editphotogalleryform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_photogallery: {
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
                        var formData = new FormData( $("#editphotogalleryform")[0]);
                        formData.append('image', $('#editphotogalleryform').find("#image_photogallery")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/Adminphotogallery/update_photogallery",  
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
        $('#show_photogallerydata').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_photogalleryDelete').modal('show');
            $('[name="id"]').val(id);
        });

       $('#editphotogalleryform').find('#image_photogallery').on('change',function(){
            var id = $(this).data('id');
            $('#editphotogalleryform').find('#image_view').attr("src","");
        });
        //delete record to database
         $('#btn_photogallerydelete').on('click',function(){
              var id = $('#id').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url(); ?>admin/Adminphotogallery/delete_photogallery",
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