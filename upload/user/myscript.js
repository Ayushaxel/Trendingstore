function addquantity(){
    var quantity=document.getElementById('quantity').val();
    quantity=parseInt(quantity);
    if(quantity<10){
        quantity++
        document.getElementById('quantity').val()=quantity;    
    }
}
function minusquantity(){
    var quantity=document.getElementById('quantity').val();
    quantity=parseInt(quantity);
    if(quantity>1){
        quantity--
        document.getElementById('quantity').val()=quantity;
            
    }
}


