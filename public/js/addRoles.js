$(document).ready(function(){
  $('#namerole').blur(function(){
          var u=$(this).val();
          $.post("http://localhost/test/Ajax/checkRoleName",{roleName:u},function(data){
              if(data==0){
                $("#baoLoi").html("role có thể sử dụng");
                  $("#baoLoi").css("color","blue");
              }else{
                $("#baoLoi").html("Đã tồn tại");
                $("#baoLoi").css("color","red");
              }
          });
      });
   $('#addNameRole').on('submit',function(e){
        e.preventDefault();
          $.ajax({
            type: "POST",
            url: "http://localhost/test/Ajax/saveDataRole",
            data: $('#addNameRole').serialize(),
            success: function(d){
              $('#output').load("http://localhost/test/Admin/listRoletalbe");
              $('#myModal').modal('hide');
              swal("Thêm mới thành công", "You clicked the button!", "success");
            }
        });           
   });
    $('#output').load("http://localhost/test/Admin/listRoletalbe");
     
});

