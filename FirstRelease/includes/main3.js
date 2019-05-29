$('.all').on('click', function(e){
  $this = this;  
  $.each($(this).parents('ul').find('input'), function(i, item){
    $(item).prop('checked', $this.checked);
  });
});

function changepicture(){
  var rb1 =document.getElementById("r1");
  if(rb1.checked)
  {
    document.getElementById("pic").src="images/pizzanew.png";
  }

}
function getstuff(){
  document.querySelector('#submit1').onclick=talk;
}
function talk(){
  alert('you will pay')
}
window.onload=getstuff;