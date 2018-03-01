

function getTimeRemaining(endtime){
  var t = endtime - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}


function initializeClock(id, endtime){
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
  var timeinterval = setInterval(function(){
    var t = getTimeRemaining(endtime);
    clock.innerHTML = hoursSpan.innerHTML + ('0' + t.hours).slice(-2) + ':' +
                      minutesSpan.innerHTML + ('0' + t.minutes).slice(-2) + ':' +
                      secondsSpan.innerHTML + ('0' + t.seconds).slice(-2);
    if(t.total<=0){
      clearInterval(timeinterval);
      out_of_time();
    }
  },1000);
}


function out_of_time()
{
$('#out_of_time_modal').modal('show');
}