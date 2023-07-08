console.log('Hello Worldqwetfrghyj!')
$(".login-email").on("submit", function(e){
    e.preventDefault()

    $.ajax({
        success:function(res){
            if(res==""){
                alert("invalid")
            }else{
                localStorage.setItem("userdata", res)
            }
        }
    })
})

