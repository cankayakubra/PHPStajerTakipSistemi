var faaliyeticerik = document.getElementById('yemek');
var baslik = document.getElementById('myModalLabel');
function tikladi(e,tarih)
{
	var baslik = document.getElementById('myModalLabel');
	baslik.innerHTML = tarih+' YEMEK MENÜSÜ';
	var bootstrapIcerik = document.getElementById('faaliyetBootstrap');
	
	bootstrapIcerik.innerHTML = e.innerHTML;
	//e.previousElementSibling.innerHTML
//alert (e.innerHTML);	
}
function tikladimi(e)
{
	//bootstrapIcerik.innerHTML = '';
	var bootstrapIcerik = document.getElementById('faaliyetBootstrap');
	bootstrapIcerik.innerHTML = '';
	if(e.nextElementSibling.innerHTML) bootstrapIcerik.innerHTML = e.nextElementSibling.innerHTML;
	/*
		bootstrapIcerik.innerHTML = e.nextElementSibling.innerHTML;
	else alert('helleo'); 
	//e.preventDefault();
	//e.previousElementSibling.innerHTML
//alert (e.nextElementSibling.innerHTML);	*/
}

function kapat(){

	
	//myModalNorm.close();
}

function addClass(){
	var fade = $('.fade ');
	fade.addClass('fadeOpen');
}

function removeClass(){
	var fade = $('.modal-open ');
	fade.toggleClass('fadeClose');
}