/*
===============================================================

Hi! Welcome to my little playground!

My name is Tobias Bogliolo. 'Open source' by default and always 'responsive',
I'm a publicist, visual designer and frontend developer based in Barcelona. 

Here you will find some of my personal experiments. Sometimes usefull,
sometimes simply for fun. You are free to use them for whatever you want 
but I would appreciate an attribution from my work. I hope you enjoy it.

===============================================================
*/
//=====================
//=====================
//JSON Data:
//=====================
//=====================
var picsData = [
  {
    id: '1',
    title: 'Windows',
    description: 'Windows',
    alt: 'Windows',
    thumbName: '2-%20Arquitectura%2011_o.jpg',
    imgName: "2-%20Arquitectura%2011_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '2',
    title: 'Over the Clouds',
    description: 'Over the Clouds',
    alt: 'Over the Clouds',
    thumbName: '1%20-%20Landscape%201.jpg',
    imgName: "1%20-%20Landscape%201_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '3',
    title: 'Paralyzed',
    description: 'Paralyzed',
    alt: 'Paralyzed',
    thumbName: '2012-8-3---Maria-y-Martina-en-Barcelon54a-8_out.jpg',
    imgName: "2012-8-3---Maria-y-Martina-en-Barcelon54a-8_out_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '4',
    title: 'The Guard',
    description: 'The Guard',
    alt: 'The Guard',
    thumbName: '4%20-%20Restratos%204_o.jpg', 
    imgName: "4%20-%20Restratos%204_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '5',
    title: 'Human Being',
    description: 'Human Being',
    alt: 'Human Being',
    thumbName: '2012-10-29---Perrssssssssssssssssssssssssssssos_out_o.jpg', 
    imgName: "2012-10-29---Perrssssssssssssssssssssssssssssos_out_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '6',
    title: 'Fire',
    description: 'Fire',
    alt: 'Fire',
    thumbName: 'ver-la-luz-24.jpg', 
    imgName: "ver-la-luz-24_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '7',
    title: 'Beyond the crowd',
    description: 'Beyond the crowd',
    alt: 'Beyond the crowd',
    thumbName: '5%20-%20Personas%207.jpg', 
    imgName: "5%20-%20Personas%207_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '8',
    title: 'Jamaa el Fna',
    description: 'Jamaa el Fna',
    alt: 'Jamaa el Fna',
    thumbName: '2009-7-21---Marrakech-2_o.jpg', 
    imgName: "2009-7-21---Marrakech-2_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '9',
    title: 'Two Lovers',
    description: 'Two Lovers',
    alt: 'Two Lovers',
    thumbName: '5%20-%20Personas%2011.jpg', 
    imgName: "5%20-%20Personas%2011_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '10',
    title: 'Fringe',
    description: 'Fringe',
    alt: 'Fringe',
    thumbName: '2-%20Arquitectura%201_o.jpg', 
    imgName: "2-%20Arquitectura%201_o.jpg",
    classes: 'item item-big',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '11',
    title: 'Heads Elsewhere',
    description: 'Heads Elsewhere',
    alt: 'Heads Elsewhere',
    thumbName: '2-%20Arquitectura%2013_o.jpg', 
    imgName: "2-%20Arquitectura%2013_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '12',
    title: 'Giraffes',
    description: 'Giraffes',
    alt: 'Giraffes',
    thumbName: '1%20-%20Landscape%208.jpg', 
    imgName: "1%20-%20Landscape%208_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '13',
    title: 'Alphabet',
    description: 'Alphabet',
    alt: 'Alphabet',
    thumbName: '2012-8-17---ABbfgfgC-3_out.jpg', 
    imgName: "2012-8-17---ABbfgfgC-3_out.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '14',
    title: 'Mirrors',
    description: 'Mirrors',
    alt: 'Mirrors',
    thumbName: '2-%20Arquitectura%206.jpg', 
    imgName: "2-%20Arquitectura%206_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '15',
    title: 'Columns',
    description: 'Columns',
    alt: 'Columns',
    thumbName: '3%20-%20Interiores%201_o.jpg', 
    imgName: "3%20-%20Interiores%201_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '16',
    title: 'Advanced Gardening',
    description: 'Advanced Gardening',
    alt: 'Advanced Gardening',
    thumbName: '2011-9-12---Jardinero-2.jpg', 
    imgName: "2011-9-12---Jardinero-2_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '17',
    title: 'Grid',
    description: 'Grid',
    alt: 'Grid',
    thumbName: '2-%20Arquitectura%209.jpg', 
    imgName: "2-%20Arquitectura%209_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '18',
    title: 'Stone',
    description: 'Stone',
    alt: 'Stone',
    thumbName: 'Escultura%20-%202008-08-16-14_out_o.jpg', 
    imgName: "Escultura%20-%202008-08-16-14_out_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '19',
    title: 'Light',
    description: 'Light',
    alt: 'Light',
    thumbName: '3%20-%20Interiores%208.jpg', 
    imgName: "3%20-%20Interiores%208_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '20',
    title: 'Scrabble',
    description: 'Scrabble',
    alt: 'Scrabble',
    thumbName: '2011-9-11---Tacheles-Scrabble---HUMANITY.jpg', 
    imgName: "2011-9-11---Tacheles-Scrabble---HUMANITY_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '21',
    title: 'X',
    description: 'X',
    alt: 'X',
    thumbName: 'IMG_0874_out_o.jpg', 
    imgName: "IMG_0874_out_o.jpg",
    classes: 'item item-mid',
    tags: ['photo', 'color', 'pattern', 'light']
  },
  {
    id: '22',
    title: 'Breathe',
    description: 'Breathe',
    alt: 'Breathe',
    thumbName: 'Escultura%20-%20IMG_1067_out.jpg', 
    imgName: "Escultura%20-%20IMG_1067_out_o.jpg",
    classes: 'item',
    tags: ['photo', 'color', 'pattern', 'light']
  }
];


//=====================
//=====================
//Script:
//=====================
//=====================
//Global vars:
var imgSrc = "http://payload100.cargocollective.com/1/9/296422/4317770/"; //Root directory.
var imgName;
var dataLength = picsData.length;
var loopLength = 3; //Set loop length.
var initItemsLength = 9; //set initial items length.
var itemDelay = 300; //Set delay between appended items.

//Create elements:
function getItem(param) {
  //Find data:
  var imgName = picsData[param].thumbName;
  //Create image:
  var image = new Image();
  image.className = 'img-item';
  image.src = imgSrc + imgName;
  //Create title:
  var title = document.createElement('span');
  title.className = "thumb-title";
  titleText = document.createTextNode(picsData[param].title);
  title.appendChild(titleText);
  //Create container:
  var item = document.createElement('div');
  item.className = picsData[param].classes;
  item.appendChild(title);
  item.appendChild(image);
  return item;
}

//Append initial items:
function appendItemInit(){
  for (i=0; i<initItemsLength; i++) {
    (function(i){
      setTimeout(function(){
        if (initItemsLength<dataLength) {
          //Get item:
          var elems = getItem(i);
          //Create jQuery object:
          var $elems = $(elems);
          //Append item:
          $(".grid").append($elems);
          // console.log(picsData[i].id);
        }
        else {
          $('.append-button').hide();
          $(".status").fadeIn();
        };
      }, itemDelay * i);
    }(i)); //Add delay between appended items.
  };
};
appendItemInit();

//Append new items:
function appendItem(){
  for (i=0; i<loopLength; i++) {
    (function(i){
      setTimeout(function(){
        if (initItemsLength<dataLength) {
          //Get item:
          var elems = getItem(initItemsLength);
          //Create jQuery object:
          var $elems = $(elems);
          //Append item:
          $(".grid").append($elems);
          // console.log(picsData[initItemsLength].id);
          //Modify items counter:
          initItemsLength += 1;
        }
        else {
          $('.append-button').hide();
          $(".status").fadeIn();
        };
      }, itemDelay * i);
    }(i)); //Add delay between appended items.
  };
};
$('.append-button').click(function() {
  appendItem();
});

//Infinite Scroll (trigger):
$(window).scroll(function() {
  if(Math.ceil($(window).scrollTop() + window.innerHeight) == $(document).height()) {
    appendItem();
  }
});

//Lightbox:
//Binding DOM after newly appended elements.
$(document).on('click', '.item', function() {
  //Find item into JSON:
  var thisItem = $(this).find(".img-item").attr("src");
  var n = thisItem.lastIndexOf('/');
  var result = thisItem.substring(n + 1);
  var index = picsData.map(function(e) { return e.thumbName; }).indexOf(result);
  console.log(index);
  //Lightbox display (fade in):
  $(".lightbox").css({
    "background": "url("+imgSrc+picsData[index].imgName+") no-repeat center",
    "background-size": "contain"
  });
  $(".sandbox").fadeIn(100);
  //Hide scrollbar
  $("html").css({"overflow-y": "hidden"});
});
//Lightbox display (fade out):
$(".sandbox").click(function(){
  $(".sandbox").fadeOut(100);
  //Show scrollbar:
  $("html").css({"overflow-y": "auto"});
});