function getData(){
  $.ajax({
    url:"/prepareFinal/database/getDataAJAX.php",
    type:"POST",
    dataType:"JSON",
    data:{
      action:"getData"
    },
    beforeSend:function(){
      alert("about to make an ajax call");
    },
    success:function(result){
      let x = JSON.stringify(result);
      console.log(x);
    },
    error:function(){alert("Error")}

  })
}
$(
  function(){
    alert("jquery loaded");
    getData();
  }
)