$(function(){
//�����X�s�[�h�i�^�C�}�[������̈ړ� px�j	
var Speed = 1;
//�}�E�X���I�[�o�[�����Ƃ��i�^�C�}�[������̈ړ� px�j	
var Speed_m = 3;
//�^�C�}�[�̐ݒ�
var TimeInterval=25;
//�i�s�����iright�Aleft�j
var ScrollDirection = "left";
//
var ImgCount = $('#ScrollArea li').length;
var ImgWidth = $('#ScrollArea li').outerWidth();

//�\���G���A�̕�
$('#ScrollArea').css('width',(ImgCount+2)*ImgWidth+"px");
//�\���G���A�̈ʒu
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
	
	//���X�N���[��
	function timer_action_toL(){
		if(x<=-2400){
		  x=0;
		}		
		x = x - s;
		$('#ScrollArea li').css('left',x+"px");
	}

	//�E�X�N���[��
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
	
	//���̃{�^������
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

	//�E�{�^������
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
	
	//�X�N���[���G���A���}�E�X�I�[�o�[�����Ƃ�
	$('#ScrollArea').hover(function(){
		clear_timer();
	},
	function(){
		s= Speed;		
		set_timer();			
	});
	
	//�ړ��J�n		
	set_timer();
});



