<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                   <div class="row">
                          <div class="col-12">
                          
                          <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title" id="page_title">videogallery</h3>
                                   <?php if($this->session->userdata('role_id') == '1'){?>
                                  <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_videogalleryAdd"><span class="fa fa-plus"></span> Add New</a></div>
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
                                      <tbody id="show_videogallerydata">

                                      <?php if($videogallery) foreach ($videogallery as $key => $video): ?>
                                        <tr>
                                         <td><?php echo $key+1;?></td>
                                         <td><?php echo $video->title;?></td>
                                         <td><?php echo $video->description;?></td>
                     <td><?php echo ucfirst($video->language);?></td>
                                         <td><?php echo ($video->status == 1 ) ? 'active': 'not active';?></td>
                                         <td>
                                           <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $video->id;?>" data-title="<?php echo $video->title;?>" data-description="<?php echo $video->description;?>" data-thumbnail="<?php echo $video->image;?>" data-video="<?php echo $video->video;?>" data-status="<?php echo $video->status;?>" data-language="<?php echo $video->language;?>" class="btn btn-info btn-sm item_edit" >Edit</a>
                                             <?php };?>
                                             <?php if($this->session->userdata('role_id') == '1'){?>
                                            <a href="javascript:void(0);" data-id="<?php echo $video->id;?>" class="btn btn-danger btn-sm item_delete">Delete</a>
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

             <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="addvideogalleryform"  method="post" action="">
            <div class="modal fade" id="Modal_videogalleryAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add videogallery Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">videogallery Information</legend>
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
                                                    <label class="control-label col-form-label" for="thumbnail">thumbnail</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="thumbnail" id="thumbnail" type="file" placeholder="thumbnail" class="form-control" >
                                                </div>
                                               
                                              </div>
                        
                        <div class="form-group row margin-top-10">
                                               <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="video">Video</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <!-- <input name="video" id="video" type="file" placeholder="video" class="form-control" > -->
                                                  <input name="video" id="video" type="text" placeholder="Enter youtube video url" class="form-control">
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

               <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="editvideogalleryform"  method="post" action="">
            <div class="modal fade" id="Modal_NewEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit videogallery Information<br/><span id="error"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
          
                <div class="modal-body">
                      
                                        <legend class="text-bold">videogallery Information</legend>
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
                                                    <label class="control-label col-form-label" for="thumbnail">thumbnail</label>
                                                </div>
                                                <div class="col-md-8">
                                                  <input name="thumbnail" id="thumbnail" type="file" placeholder="thumbnail" class="form-control" >
                          <img id="thumbnail_view" src="#"  style="width :200px" style="height :200px">
                                                </div>
                                               
                                              </div>
                        
                        <div class="form-group row margin-top-10">
                                               <div class="col-md-4">
                                                    <label class="control-label col-form-label" for="video">Video</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- <input name="video" id="video" type="file" placeholder="video" class="form-control" >
                            <video id="myVideo" width="320" height="240" controls>
                            <source src="mov_bbb.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                          </video> -->
                                                <input name="video" id="video" type="text" placeholder="Enter youtube video url" class="form-control">
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
            <div class="modal fade" id="Modal_videogalleryDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete videogallery</h5>
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
                    <button type="button" type="submit" id="btn_videogallerydelete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE Admin-->

<script>
    
    $(document).ready(function(){

      $('#addvideogalleryform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     thumbnail: {
                      required: true,
                    },
                   video: {
                      required: false,
                    },
                     status: {
                      required: true
                    },
                    language: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#addvideogalleryform")[0]);
                        formData.append('image', $('#addvideogalleryform').find("#thumbnail")[0].files[0])
                        //formData.append('video', $('#addvideogalleryform').find("#video")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/Adminvideogallery/add_videogallery",  
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

         $('#show_videogallerydata').on('click','.item_edit',function(){
            
             var id      = $(this).data('id');
             var title = $(this).data('title');
             var thumbnail      = $(this).data('thumbnail');
             var video_src      = $(this).data('video');
             var description = $(this).data('description');
             var status      = $(this).data('status');
             var language      = $(this).data('language');
             
           
            $('#editvideogalleryform').find('[name="id"]').val(id);
            $('#editvideogalleryform').find('[name="title"]').val(title);
            $('#editvideogalleryform').find('[name="description"]').val(description);
            $('#editvideogalleryform').find('[name="status"]').val(status);
            $('#editvideogalleryform').find('[name="language"]').val(language);
            $('#editvideogalleryform').find('[name="video"]').val(video_src);
            $('#editvideogalleryform').find('#thumbnail_view').attr("src","<?php echo base_url().'assets/backend/uploads/videogallery/thumbnails/'?>"+thumbnail);
      /*$("#myVideo").empty();
      var video = document.getElementById('myVideo');
      
      var extension = video_src.substr( (video_src.lastIndexOf('.') +1) );
      var source = document.createElement('source');
      source.src = "<?php echo base_url().'assets/backend/uploads/videogallery/videos/'?>"+video_src;
      source.type = 'video/'+extension;
      video.appendChild(source);
      video.load();
      $("#myVideo").show();*/
            $('#Modal_NewEdit').modal('show');
            $('select').each(function(){
                 $(this).trigger("chosen:updated");
            });
        });

        $('#editvideogalleryform').validate({
                rules: {
                     title: {
                      required: true
                    },
                     description: {
                      required: true
                    },
                     status: {
                      required: true
                    },
                    language: {
                      required: true
                    }

          
                    
                  },
                submitHandler: function(form) {
                        var formData = new FormData( $("#editvideogalleryform")[0]);
                        formData.append('image', $('#editvideogalleryform').find("#thumbnail")[0].files[0])
                        //formData.append('video', $('#editvideogalleryform').find("#video")[0].files[0])
                        
                        $.ajax({
                            url : "<?php echo base_url(); ?>admin/Adminvideogallery/update_videogallery",  
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
        $('#show_videogallerydata').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_videogalleryDelete').modal('show');
            $('[name="id"]').val(id);
        });
        $('#editvideogalleryform').find('#thumbnail').on('change',function(){
            var id = $(this).data('id');
            $('#editvideogalleryform').find('#thumbnail_view').attr("src","");
        });
    $('#editvideogalleryform').find('#video').on('change',function(){
            var id = $(this).data('id');
      $("#myVideo").hide();
        });
        //delete record to database
         $('#btn_videogallerydelete').on('click',function(){
              var id = $('#id').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url(); ?>admin/Adminvideogallery/delete_videogallery",
                  dataType : "JSON",
                  data : {id:id},
                  success: function(data){
                      window.location.href =  window.location.href;
                  }
              });
              return false;
          });
      
      function addSourceToVideo(element, src, type) {
        var source = document.createElement('source');

        source.src = src;
        source.type = type;

        element.appendChild(source);
      }

      
    })



</script>