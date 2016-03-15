$(document).ready(function()
{
	var images = ["slike/slider/cover1.jpg", "slike/slider/cover2.jpg", "slike/slider/cover3.jpg", "slike/slider/cover4.jpg"];
	var titles = ["Slika1", "Slika2", "Slika3", "Slika4"];
	
	
	$(".bullet").click(function(){
		$(".bullet.active").attr("class","bullet");
		$(this).attr("class","bullet active");
		setContent($(".bullet").index(this));
	  });
	  
	  function setContent(index){
		$(".title").fadeOut("slow",function(){
			$(".title").text(titles[index]);
			$(".title").fadeIn();
		});
		
		
		$(".image").fadeOut("slow",function(){
		$(".image").attr("src",images[index]);
		$(".image").fadeIn();
		});
	  }
	  
});
