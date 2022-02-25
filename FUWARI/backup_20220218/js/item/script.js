$(function(){
//初期スピード（タイマー当たりの移動 px）	
var Speed = 1;
//マウスをオーバーしたとき（タイマー当たりの移動 px）	
var Speed_m = 3;
//タイマーの設定
var TimeInterval=25;
//進行方向（right、left）
var ScrollDirection = "left";
//
var ImgCount = $('#ScrollArea li').length;
var ImgWidth = $('#ScrollArea li').outerWidth();

//表示エリアの幅
$('#ScrollArea').css('width',(ImgCount+2)*ImgWidth+"px");
//表示エリアの位置
$('#ScrollArea').css('right',"-"+ImgWidth+"px");
var x=0;
var s=Speed;

	function set_timer(){
		timerID = setInterval(function(){
			if(ScrollDirection =="left"){
				timer_action_toL();				
			}else if(ScrollDirection =="right"){
				timer_action_toR();				
			}else{
				timer_action_toL();
			}
		},TimeInterval);
	}
	
	function clear_timer(){
		clearInterval(timerID);
	}
	
	//左スクロール
	function timer_action_toL(){
		if(x<=-2400){
		  x=0;
		}		
		x = x - s;
		$('#ScrollArea li').css('left',x+"px");
	}

	//右スクロール
	function timer_action_toR(){
		if(x<ImgWidth && x>0){
			$('#ScrollArea li:first').before($('#ScrollArea li:last').clone());
			$('#ScrollArea li:last').remove();
    	x = (-ImgWidth)-x;
		}
		if(x>=ImgWidth){
			$('#ScrollArea li:first').before($('#ScrollArea li:last').clone());
			$('#ScrollArea li:last').remove();
			x=0;
		}		
		x = x + s;
		$('#ScrollArea li').css('left',x+"px");
	}
	
	//左のボタン制御
	$('#Leftbtn').hover(function(){
		clear_timer();
		s= Speed_m;
		ScrollDirection="left";
		set_timer();
	},
	function(){
		clear_timer();
		s= Speed;		
		ScrollDirection="left";
		set_timer();			
	});

	//右ボタン制御
	$('#Rightbtn').hover(function(){
		clear_timer();
		s= Speed_m;
		ScrollDirection="right";
		set_timer();
	},
	function(){
		clear_timer();
		s= Speed;
		ScrollDirection="right";
		set_timer();			
	});
	
	//スクロールエリアをマウスオーバーしたとき
	$('#ScrollArea').hover(function(){
		clear_timer();
	},
	function(){
		s= Speed;		
		set_timer();			
	});
	
	//移動開始		
	set_timer();
});



