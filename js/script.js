$(function(){
	//Эффекты появления исчезновения
	$(".btnef1").on("click", function(){
       $(".pic1").effect("bounce", {
         direction: 'left',
         distance: 100,
         mode: 'hide',
         times: 7
       }, 2000, function(){
       	$(this).effect("bounce",{
         direction: 'left',
         distance: 300,
         mode: 'show',
         times: 7
       	}, 3000);
       });
	});

	$(".btnef2").on("click", function(){
		$(".abzac").effect("explode",{
         pieces: 9,
         mode: 'hide'
		}, 2000);
	});
	$(".btnef3").on("click", function(){
		$(".pic3").effect("puff", {
          percent: 200,
          mode: 'hide'
		}, 3000);
	});
	//show-hide
	$(".btnshow").on("click", function(){
		$(".pic4").show("bounce",2000);
	});
	$(".btnhide").on("click", function(){
		$(".pic5").hide("drop", 2000);
	});
	//addClass-removeClass
	$(".btnadd").on("click", function(){
		$(".text1").addClass("font", 2000);
	});
	$(".btnremove").on("click", function(){
		$(".text2").removeClass("font", 2000);
	});
	//toggleclass-switchclass
	$(".btntoggle").on("click", function(){
		$(".text3").toggleClass("font", 2000);
	});
	$(".btnswitch").on("click", function(){
		$(".text4").switchClass("font","border1", 2000);
	});
	//animate color
	$(".btnanim").on("click", function(){
		$(".coloranim").animate({
         "backgroundColor": "green",
         "color": "black",
         "fontSize": "35px"
		},3000);
	});
	//widget accordion
	$(".accord").accordion({
		active: false,
		collapsible: true,
		heightStyle: 'content'

	});
	//widget tabs
	$(".tabs").tabs({
		collapsible: true,
		active: false,
		heightStyle: 'content',
		hide: {effect: 'explode', duration: 1000},
		show: {effect: 'puff', duration: 1000}
	});
	//widget menu
	$(".menu").menu({
		icons: { submenu: "ui-icon-circle-triangle-e" }
	});
	//widget button
	$(".btnwidget").button({
		icon: "ui-icon-gear"
	});
	//widget datepicker
	$(".data").datepicker({
		changeYear: true,
		yearRange: '1945:2020',
		changeMonth: true,
		showButtonPanel: true,
		showWeek: true

	});
	//widget slider
	    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
//widget dialog
$(".dial").on("click", function(){
	$("p.hide").dialog({
		modal: true
	});
});
$(".login").on("click", function(){
	$("form.hide").dialog({
		modal: true,
		show: {effect: "slide", duration: 1000},
		hide: {effect: " slide", duration: 1000}
	});
});
//draggable actions
$("img.pic").draggable({
   zIndex: 100,
   helper: 'clone',
   opacity: 0.5,
   revert: true,
   revertDuration: 1000
  });
//draggeble and droppable
$(".imgtrash").draggable({
	revert: 'invalid',
	start: function(event, ui){
		ui.helper.css('transform', 'rotate(5deg) scale(1.2)');
	},
	stop: function(event, ui) {
		ui.helper.css('transform', 'rotate(0deg) scale(1)');
	},
	zIndex: 100
});
$(".korzina").droppable({
	activeClass: 'highlight',
	drop: function(event, ui){
		ui.helper.hide('explode');
		$(this).attr('src','img/trashcan-full-icon.png');
	}
});
//sortable
$(".sort1").sortable({
	connectWith: '.sort2'
});
$(".sort2").sortable({
	connectWith: '.sort1'
});
//gallery colorbox
$("a.gal").colorbox({
	rel: 'gal',
	transition: 'elastic',
	speed: 500,
	width: 500,
	height: 500,
	innerWidth: 300,
	innerHeight: 300,
	slideshow: true,
	slideshowSpeed: 3000,
	current: 'фото {current} из {total}',
	slideshowStart: "Запустить слайд-шоу",
	slideshowStop: "Остановить слайд-шоу"
});
$(".youtube").colorbox({
	iframe: true,
	innerWidth: 500,
	innerHeight: 500
 });
$(".inline").colorbox({inline:true, width:"50%"});

// Menu Superfish
$("ul.sf-menu").superfish({
	speed: 1000
});

// BxSlider
$(".slider").bxSlider({
	minSlides: 3,
	maxSlides: 3,
	moveSlides: 1,
	slideWidth: 300,
	slideMargin: 10,
	auto: true,
	video: true
});

// Countdown
     var note = $('#note'),
        ts = new Date(2012, 0, 1),
        newYear = true;

    if((new Date()) > ts){
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10*24*60*60*1000;
        newYear = false;
    }

    $('#countdown').countdown({
        timestamp   : ts,
        callback    : function(days, hours, minutes, seconds){

            var message = "";

            message += days + " day" + ( days==1 ? '':'s' ) + ", ";
            message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
            message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
            message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";

            if(newYear){
                message += "left until the new year!";
            }
            else {
                message += "left to 10 days from now!";
            }

            note.html(message);
        }
    });

    // NICK
   
    
    $('.threesixty').threeSixty({
        dragDirection: 'horizontal',
        useKeys: false
    });
});

