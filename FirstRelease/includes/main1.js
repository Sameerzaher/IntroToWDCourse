function getstuff(){
    document.querySelector('#submit').onclick=talk;
}
function talk(){
    alert('are you sure')
}
window.onload=getstuff;