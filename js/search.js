var loading  = false; 
var data = new Array();
var j = 0;
var typesearch = 0; 
// 0 - bình thường  1 - giá gảm dần  2-giá tắng dần
load();
function load(){
	$.ajax({	
		url: "../php/search.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			$("#num-show").append('Có tất cả '+data[typesearch].length+' sản phẩm!')

		}
	});
}


$(window).scroll(function() { //detect page scroll
	if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page
		load_contents(); //load content	
	}
});	
$('#search-price').click(function(){
	if(typesearch ==1) typesearch = 2;
	else typesearch = 1;
	$('#products').text("");
	j = 0;
});


function load_contents(){
    if(loading == false){
    	console.log(typesearch);
    	if(j <= data[typesearch].length){
			loading = true;  //set loading flag on
			$('.loading-info').show();
			var n =3;
			if(j+3 > data[typesearch].length) n = data[typesearch].length - j;
			for (var i = j; i < j+n; i++) {
			
				var str = $('<div class="item  col-xs-4 col-lg-4"><div class="thumbnail"><img class="group list-group-image" src="../img/'+data[typesearch][i].Type+'/'+data[typesearch][i].Name+'/1.jpg" alt="" ><div class="caption"><h5 class="group inner list-group-item-heading">'+data[typesearch][i].Name+'</h5><div><p class="lead">'+data[typesearch][i].Price+' VNĐ</p></div><div class="row"><div class="col-xs-12 col-md-6"><button class="btn btn-success" data-toggle="modal" onclick="addcart('+data[typesearch][i].ID+',1)">Add to cart</button></div><div class="col-xs-12 col-md-6"><button class="btn btn-success button-product" onclick="product('+data[typesearch][i].ID+')">Details</button></div></div></div></div></div>');
				$("#products").append(str);
			}
			$('.loading-info').hide();
			loading = false;
			j = j + n;
		}
		else{
			$('.loading-info').hide();

		}
	}
}
function product(id){
	$.ajax({
		url: '../php/product-details.php',
		type: "post",
		data:{
			'id':id,
		},
		success: function(str){
			window.location.href = 'http://localhost/AssWeb/product';
		}
	});
}

function addcart(pid,num){
	$.ajax({
		url: '../php/addcart.php',
		type: "post",
		data:{
			'productID':pid,
			'num':num
		},
		success: function(str){
			if(parseInt(str)==1) $("#success").modal('show');
			else if(parseInt(str)==0) $("#error").modal('show');
			else $("#LoginModal").modal('show');
		}
	});
}