<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
    function submitData() {
        $(document).ready(function() {
            var data = {
                name: $('#name').val(),
                uname: $('#uname').val(),
                pswd: $('#pswd').val(),
                pswd2: $('#pswd2').val(),
                action: $("#action").val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'POST',
                data: data,
                success:function(response){
                    alert(response);
                    if(response == "Login Successful"){
                        header("Location: index.php");
                    }
                    if(response == "Registration Successful"){
                        header("Location: http://localhost:8080/PetClub/index.php?page=login");
                    }
        
                }
            });
        });
    }
</script>