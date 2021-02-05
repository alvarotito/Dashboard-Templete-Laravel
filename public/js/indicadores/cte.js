$('.content-content2').hide();
$('.content2').hide();
$('.content3').hide();

setTimeout(function () {
    $('#btn1').addClass('active');
    $('#btn1-1').addClass('active');
},160);


$('#btn1').click(function(){
    $('#btn2').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn1').addClass('active');
    $('.content2').hide();
    $('.content3').hide();
    $('.content').show();
    $('.abas2').show();
});

$('#btn1-1').click(function(){
    $('#btn1-2').removeClass('active');
    $('.content-content2').hide();
    $('#btn1-1').addClass('active');
    $('.content-content').show();
});

$('#btn1-2').click(function(){
    $('#btn1-1').removeClass('active');
    $('.content-content').hide();
    $('#btn1-2').addClass('active');
    $('.content-content2').show();
});

$('#btn2').click(function(){
    $('#btn2').addClass('active');
    $('#btn1').removeClass('active');
    $('#btn3').removeClass('active');
    $('.content').hide();
    $('.content3').hide();
    $('.content2').show();
    $('.abas2').hide();
});

$('#btn3').click(function(){
    $('#btn3').addClass('active');
    $('#btn1').removeClass('active');
    $('#btn2').removeClass('active');
    $('.content').hide();
    $('.content2').hide();
    $('.content3').show();
    $('.abas2').hide();
});


