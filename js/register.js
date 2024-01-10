$(document).ready(function(){
$('.register_btn').click(function(){

var name,mail,phone,pass;
 name=$('#name').val();
 mail=$('#mail').val();
 phone=$('#phone').val();
 pass=$('#pass').val();

console.log(name);
  $.ajax({
    url:"ajax/registeruser.php",
    method:"post",
    data:{
      name:name,
      mail_id:mail,
      phonenumber:phone,
      password:pass
    },
    success:function(res){
      if(res=='registerd')
      {console.log(res);
        window.location.replace('login.php');
      }

    }



  });
})

});
