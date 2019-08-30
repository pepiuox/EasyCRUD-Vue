$(function(){
	// alert('hhfdh')
	var ramenu =$('#ra-menu');
	var ramenu2=$('#ra-menu2');
	var ramenu3=$('#ra-menu3');
	var ramenu4=$('#ra-menu4');
	var itemList=[ramenu,ramenu2,ramenu3,ramenu4];


for(var i in itemList){	

			itemList[i].mouseover(function(){
				$(this).css({
					backgroundColor: 'black',
					color:'#fab205'
				});
				
			});	
			itemList[i].mouseout(function(){
				$(this).css({
					backgroundColor: '#fab205',
					color:'black'
				});
				// $('.ra-menu i').css({
				// 	color:'black'
				// });
				// $('.ra-menu a').css({
				// 	color:'black'
				// });
			});	
	
	};

	
})