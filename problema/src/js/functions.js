function loadForm(){
  $.ajax({
    url: "./view/loginForm.php",
    type: "GET",
    success: function(response) {
      $("#main").html(response);
      
    },
    error: function(err) {
      console.log(err)
    }
});
}
