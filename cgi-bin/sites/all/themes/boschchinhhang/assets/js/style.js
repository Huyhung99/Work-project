$(document).ready(function (){
    $(".delete-order").on("click",function (){
        $("#views-form-commerce-cart-form-default").submit();
        return false;
    });
});