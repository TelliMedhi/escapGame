$(function(){
  var i = 0;
    //au clic sur tous les boutons sauf le égal
    $('button:not(#egal,#efface)').click(function(){
    i=i+1;
    if(i<=10){
              $('#input').val($('#input').val()+$(this).text());
    }
    })
//au clic sur la calculatrice
$('content').click(function(){
    $('#input').focus();
})

//au clic sur C
$('#b14').click(function(){
    $('#input').val('');
i=0;
})

  $('.btn').click(function(){
    var son = new Audio("Fake/click2.mp3");
    son.currentTime = 0;
    son.play();
  })

})
document.getElementById('audioInconnu').src = 'Fake/' + Math.floor(Math.random() * 22) + ".mp3";


