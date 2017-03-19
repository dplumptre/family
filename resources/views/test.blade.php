<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .timer{
        padding-top: 40px;
        display: block;
    }
    .timer ul {
        list-style: none;
        display:block;
        clear: both;
    }
    .timer ul li{
        width: 12.5%;
        float:left;
        padding: 5px;
        border:1px solid #e0e2e5;
        display:block;
        border-radius: 4px;
    }
    .timer ul li span.head{
        display: block;
        text-align: center;
        color: #1976D2;
        font-weight: bold;
        font-size:16px;
        padding: 5px;
        border:1px solid #1976D2;
        text-transform: uppercase;
    }
    .timer ul li span.body{
        color: #3F51B5;
        margin-top: 3px;
        display: block;
        text-align: center;
        font-weight: bold;
        font-size: 30px;
        padding:8px;
        border:1px solid #1976D2;
    }
</style>
<body>

<div class="container">

    <?php
    $elapse_time = '2017-04-01 10:20:00';
    $now = \Carbon\Carbon::now();
    ?>

    <p>Elapse Time: {{$elapse_time}}</p>
    <p>Now: {{$now}}</p>

        <div class="timer" id="clockdiv">
            <ul class="timer-list">
                <li>
                    <span class="head">Days</span>
                    <span class="body days"></span>
                </li>
                <li>
                    <span class="head">Hours</span>
                    <span class="body hours"></span>
                </li>
                <li>
                    <span class="head">Minutes</span>
                    <span class="body minutes"></span>
                </li>
                <li>
                    <span class="head">Seconds</span>
                    <span class="body seconds"></span>
                </li>

            </ul>
        </div>
        <div id="clockdiv2">
            <span class="days"></span>
            <span class="hours"></span>
            <span class="minutes"></span>
            <span class="seconds"></span>
        </div>

</div>
</div>

<script src="/js/clock-countdown.js"></script>
<script>
    var deadline = '{{$elapse_time}}';
    var now = '{{$now}}';

//    function getTimeRemaining(endtime) {
//        var t = Date.parse(endtime) - Date.parse(new Date());
//        var seconds = Math.floor((t / 1000) % 60);
//        var minutes = Math.floor((t / 1000 / 60) % 60);
//        var hours = Math.floor((t / 1000 * 60 * 60) % 24);
//        var days = Math.floor(t / (1000 * 60 * 60 * 24));
//
//        return {
//            'total': t,
//            'days': days,
//            'hours': hours,
//            'minutes': minutes,
//            'seconds': seconds
//        }
//    }
//
//
//    function initializeClock(id, endtime) {
//        var clock = document.getElementById(id);
//        var daysSpan = clock.querySelector('.days');
//        var hoursSpan = clock.querySelector('.hours');
//        var minutesSpan = clock.querySelector('.minutes');
//        var secondsSpan = clock.querySelector('.seconds');
//
//        function updateClock() {
//            var t = getTimeRemaining(endtime);
//
//            daysSpan.innerHTML = t.days;
//            hoursSpan.innerHTML = t.hours;
//            minutesSpan.innerHTML = t.minutes;
//            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
//
//            if (t.total <= 0) {
//                clearInterval(timeinterval);
//            }
//        }
//
//        updateClock();
//        var timeinterval = setInterval(updateClock, 1000)
//    }

    initializeClock('clockdiv', deadline, now);
    initializeClock('clockdiv2', deadline, now);
</script>
</body>
</html>