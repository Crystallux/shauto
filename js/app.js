var carVideoWidth = $('.modal-dialog').width();
if(carVideoWidth < 1)
{
    var carVideoWidth = $('.modal').width();
}
$('iframe').css('height', (carVideoWidth * .61));

var videoWidth = $('.car-details').width();
videoHeight = videoWidth * .61;
$('.car-details iframe').css('height', videoHeight);

var SingleRoomSliderdWidth = $('.simple-slider').width();
var SingleRoomSliderdHeight = SingleRoomSliderdWidth * .74;
$('.thumb-preview').css('height', SingleRoomSliderdHeight);
$('.imng-preview').css('height', SingleRoomSliderdHeight);


$('.selectpicker').selectpicker();

val =  $('.price-slider').slider('getValue');
$('.price-slider').on('slide', function (ev) {
    $('#minPrice').val(ev.value[0]);
    $('#maxPrice').val(ev.value[1]);
});