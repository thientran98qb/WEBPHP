<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          id_role
                      </th>
                      <th>
                          name_role
                      </th>
                     <th>
                          action
                      </th>
                  </tr>
              </thead>
              <tbody>
               <?php 
                  $mangRole=$data['role'];
                ?>
                 <?php foreach ($mangRole as $role) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $role['id_role']; ?>
                      </td>
                      <td>
                         <?php echo $role['role_name']; ?>
                      </td>
                      <td class="project-actions text-left">
                          <button type="button" class="btn btn-primary btn-sm edit_data" data-toggle="modal" data-target="#myModall" id="<?php echo $role['id_role']; ?>">
                            Edit
                            </button>
                         
                            <!-- Modal -->
                            <div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabell">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabell">Edit Role</h4>
                                  </div>
                                  
                                   <form id="updateRole" action="<?=BASE_URL?>/Ajax/upRole" method="post">
                                      <div class="modal-body">
                                        <div class="form-group">
                                          <label for="role_namee">Name Role</label>
                                          <input type="hidden" name="id_role" id="id_role">
                                          <input type="text" class="form-control" id="role_namee" name="role_namee">
                                        </div> 
                                      </div>              
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <!-- <button type="submit" id="inserttttt" name="insert" class="btn btn-primary"></button> -->
                                          <input type="submit" name="insert" value="Insert" class="btn btn-primary">
                                        </div>
                                    </form>                 
                                </div>
                              </div>
            </div>  
                         <form id="delRoleee" action="<?=BASE_URL?>/Ajax/removeRole" method="post" style="float: left;">
                              <input type="hidden" name="RoleID" value="<?php echo $role['id_role']; ?>">
                              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
                <?php } ?>
              </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function(){
   $(document).on('click','.edit_data',function(){
    var id_role=$(this).attr("id");
        $.ajax({
            method: 'post',
            url: "http://localhost/test/Ajax/listRolebyID",
            data: {id_role:id_role},
            dataType : 'json' ,
            success: function(data){
              $("#role_namee").val(data.role_name);
              $("#id_role").val(data.id_role);
            }
        });      
   });
});
</script>