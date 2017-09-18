
(function($){
	$.fn.slide=function(options){
       var defaults= {
		   affect:1,     //1：�?下�??? 2:幕�?�? 3:左右滚动�?：淡?�淡??
		   time: 4000,   //?��??�间
		   speed:500,    //?�画快慢
		   dot_text:true,//?�钮上�??��??�号
	   };
	   var opts=$.extend(defaults,options);
	   
		   var $this=$(this);
		   var ool=$("<div class='dot'><p></p></div>");
		   var $box=$this.find("ul");
		   var $li=$box.find("li");
		   var timer=null;
		   var num=0;
	   
	   $this.append(ool);
	   $box.find("li").each(function(i){
			ool.find("p").append($("<b></b>"));
			if(opts.dot_text){
				ool.find("b").eq(i).html(i+1)
			}
       })
	   ool.find("b").eq(0).addClass("cur");
	   switch(opts.affect){
		   case 1:
		      break;
		   case 2:
		      $box.find("li").css("display","none");
		      break;
		   case 3:
			   $box.css({"width":$li.eq(0).width()*$li.length});
			   $li.css("float","left");
			   break;
		   case 4:
		      $box.find("li").css("display","none");
		      break;
	   }
	   $box.find("li").eq(0).show(0);
	   ool.find("b").mouseover(function(){	
			num=$(this).index();
			run ();
		})
		timer=setInterval(auto,opts.time);
			function auto(){
				num<$box.find("li").length-1?num++:num=0;
				run();
			}
		function run(){
			ool.find("b").eq(num).addClass("cur").siblings().removeClass("cur");
				switch(opts.affect){
				    case 1:
						$box.stop(true,false).animate({"top":-240*num},opts.speed);
						break;
					case 2:
						$box.find("li").css({"position":"absolute"});
						$box.find("li").stop(false,true).fadeOut(opts.speed).eq(num).slideDown(opts.speed);
						break;
					case 3:
						$box.stop(true,false).animate({"left":-670*num},opts.speed);
						break;	
					case 4:
						$box.find("li").css({"position":"absolute"});
						$box.find("li").stop(false,true).fadeOut(opts.speed).eq(num).fadeIn(opts.speed);
						break;	
				}
		}
		$this.mouseover(function(){
			  clearInterval(timer);	
		})
		 $this.mouseout(function(){
			  timer=setInterval(auto,opts.time);	
		})
}
})(jQuery)