<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                   <div class="row">
                          <div class="col-12">
                          
                          <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title" id="page_title">News</h3>
                                   <?php if($this->session->userdata('role_id') == '1'){?>
                                  <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_NewsAdd"><span class="fa fa-plus"></span> Add New</a></div>
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
                                      <tbody id="show_newsdata">

                                      <?php if($news) foreach ($news as $key => $new): ?>
                                        <tr>
                                         <td><?php echo $key+1;?></td>
                                         <td><?php echo $new->title;?></td>
                                         <td><?php echo truncate($new->description, 200);?></td>
                     <td><?php echo ucfirst($new->language);?></td>
                     <td><?php echo ($new->status == 1 ) ? 'active': 'not active';?></td>
                                         <td>
                                           <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $new->id;?>" data-title="<?php echo $new->title;?>" data-image="<?php echo $new->image;?>" data-status="<?php echo $new->status;?>"  data-language="<?php echo $new->language;?>" class="btn btn-info btn-sm item_edit" >Edit</a>
                                             <?php };?>
                                             <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $new->id;?>" class="btn btn-danger btn-sm item_delete">Delete</a>
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

             <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="addNewsform"  method="post" action="">
            <div class="modal fade" id="Modal_NewsAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add News Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">News Information</legend>
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
                                                    <label class="control-label col-form-label" for="image_news">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_news" type="file" placeholder="Image" class="form-control" >
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

               <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="editNewsform"  method="post" action="">
            <div class="modal fade" id="Modal_NewEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit News Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">News Information</legend>
                                        <fieldset class="content-group">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="id" id="id" type="text" placeholder="id" class="form-control">
                           <textarea  name="title" id="title"  placeholder="Title" class="form-control"></textarea>
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
                                                    <label class="control-label col-form-label" for="image_news">Image</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="file" id="image_news" type="file" placeholder="Image" class="form-control" >
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
            <div class="modal fade" id="Modal_NewsDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete News</h5>
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
                    <button type="button" type="submit" id="btn_newsdelete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE Admin-->

<script>
    
    $(document).ready(function(){

      $('#addNewsform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_news: {
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
                        var formData = new FormData( $("#addNewsform")[0]);
                        formData.append('image', $('#addNewsform').find("#image_news")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminNews/add_news",  
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

         $('#show_newsdata').on('click','.item_edit',function(){
            
             var id      = $(this).data('id');
             var title = $(this).data('title');
             var image      = $(this).data('image');
             //var description = $(this).data('description');
             var description = $("#desc"+id).val();
             var status      = $(this).data('status');
              var language      = $(this).data('language');
            
             
           
            $('#editNewsform').find('[name="id"]').val(id);
            $('#editNewsform').find('[name="title"]').val(title);
            $('#editNewsform').find('[name="description"]').val(description);
            $('#editNewsform').find('[name="status"]').val(status);
            $('#editNewsform').find('[name="language"]').val(language);
            $('#editNewsform').find('#image_view').attr("src","<?php echo base_url().'assets/backend/uploads/news/'?>"+image);
            $.post("<?=base_url("admin/news/get_description")?>", {id: id}, function(data){
                //$('#editNewsform #description').summernote('code', '');
                //$("#editNewsform #description").val(data.response);
                $("#editNewsform #description").summernote({
                  placeholder: 'Enter description...',
                  height:250,
                  minHeight:null,
                  maxHeight:null,
                  focus:!1,
                  dialogsInBody: true
                });
                $("#editNewsform #description").summernote('code', data.response);
                $('select').each(function(){
                   $(this).trigger("chosen:updated");
                });   
                $('#Modal_NewEdit').modal('show');
                
            }, 'json');
             
        });

        $('#editNewsform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     image_news: {
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
                        var formData = new FormData( $("#editNewsform")[0]);
                        formData.append('image', $('#editNewsform').find("#image_news")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/AdminNews/update_news",  
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
        $('#show_newsdata').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_NewsDelete').modal('show');
            $('[name="id"]').val(id);
        });

        $('#editNewsform').find('#image_news').on('change',function(){
            var id = $(this).data('id');
            $('#editNewsform').find('#image_view').attr("src","");
        });
        //delete record to database
         $('#btn_newsdelete').on('click',function(){
              var id = $('#id').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url(); ?>admin/AdminNews/delete_news",
                  dataType : "JSON",
                  data : {id:id},
                  success: function(data){
                      window.location.href =  window.location.href;
                  }
              });
              return false;
          });

          $('#Modal_NewsAdd').on('show.bs.modal', function (e) {
            // do something...
            $("#addNewsform #description").summernote({
                placeholder: 'Enter description...',
                height:250,
                minHeight:null,
                maxHeight:null,
                focus:!1,
                dialogsInBody: true
            });
          });

          /*$('#Modal_NewEdit').on('hide.bs.modal', function(e) {
            $('#editNewsform #description').summernote('code', '');
            $("#editNewsform #description").summernote({
                  placeholder: 'Enter description...',
                  height:250,
                  minHeight:null,
                  maxHeight:null,
                  focus:!1,
                  dialogsInBody: true
                });
          });*/

        
        /*var editor;
        editor = $("#description").wysihtml5();*/
    })



</script>