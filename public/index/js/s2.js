/* start s2*/
$('.block2-btn-add-cart').each(function()
{
    var nameProduct = $(this).parent().parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
        swal(nameProduct, "! به سبد خرید شما اضافه شد", "success");
    });
});
$('.block2-btn-add-wishlist').each(function()
{
    var nameProduct = $(this).parent().parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
        swal(nameProduct, "به لیست مقایسه اضافه شد", "success");
    });
});
$('.block2-btn-addwishlist').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	$(this).on('click', function(){
		swal(nameProduct, "لایک شد", "success");
	});
});
/* end s2*/