var productId= document.getElementsByClassName("productId").innerHTML;
console.log("productId");

var cartbutten = document.getElementsByClassName("makeCart");

function addCart(id){
    // alert(id)
    window.localStorage.setItem(id);


}


