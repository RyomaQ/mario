
if (window.matchMedia("(min-width: 1050px)").matches) {
    /* La largeur minimum de l'affichage est 600 px inclus */
    var tlmenu = new TimelineMax({paused:false});
    tlmenu.to('nav', 0.3, {autoAlpha:1})
    .staggerFromTo('nav li', 0.5, {y:100, opacity:0}, {y:0, opacity:1}, 0.1);
  } else {
    /* L'affichage est inférieur à 600px de large */
var tlmenu = new TimelineMax({paused:true});
tlmenu.to('nav', 0.3, {autoAlpha:1})
.staggerFromTo('nav li', 0.5, {y:100, opacity:0}, {y:0, opacity:1}, 0.1);

$('#navicon-burger').click(function(){
    tlmenu.play(0);
});

$('.fermeMenu').click(function(){
    tlmenu.reverse(0);
});

}

const slides=document.querySelector(".slider").children;
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const indicator=document.querySelector(".indicator");
 let index=0;


   prev.addEventListener("click",function(){
       prevSlide();
       updateCircleIndicator(); 
       resetTimer();
   })

   next.addEventListener("click",function(){
      nextSlide(); 
      updateCircleIndicator();
      resetTimer();
      
   })

   // create circle indicators
    function circleIndicator(){
        for(let i=0; i< slides.length; i++){
        	const div=document.createElement("div");
        	      div.innerHTML=i+1;
                div.setAttribute("onclick","indicateSlide(this)")
                div.id=i;
                if(i==0){
                	div.className="active";
                }
               indicator.appendChild(div);
        }
    }
    circleIndicator();

    function indicateSlide(element){
         index=element.id;
         changeSlide();
         updateCircleIndicator();
         resetTimer();
    }
     
    function updateCircleIndicator(){
    	for(let i=0; i<indicator.children.length; i++){
    		indicator.children[i].classList.remove("active");
    	}
    	indicator.children[index].classList.add("active");
    }

   function prevSlide(){
   	 if(index==0){
   	 	index=slides.length-1;
   	 }
   	 else{
   	 	index--;
   	 }
   	 changeSlide();
   }

   function nextSlide(){
      if(index==slides.length-1){
      	index=0;
      }
      else{
      	index++;
      }
      changeSlide();
   }

   function changeSlide(){
   	       for(let i=0; i<slides.length; i++){
   	       	 slides[i].classList.remove("active");
   	       }

       slides[index].classList.add("active");
   }

   function resetTimer(){
   	  // when click to indicator or controls button 
   	  // stop timer 
   	  clearInterval(timer);
   	  // then started again timer
   	  timer=setInterval(autoPlay,4000);
   }
 
  
  function autoPlay(){
      nextSlide();
      updateCircleIndicator();
  }

  let timer=setInterval(autoPlay,4000);