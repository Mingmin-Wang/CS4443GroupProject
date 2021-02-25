window.onload = function(){
	//cart box
	const ShoppingCart=document.querySelector('.ShoppingCart');
	const closebtn=document.querySelector('.fa-close');
	const cartbox=document.querySelector('.cartbox');
	ShoppingCart.addEventListener("click",function(){
		cartbox.classList.add('active');
	});
	closebtn.addEventListener("click",function(){
		cartbox.classList.remove('active');
	});
}


