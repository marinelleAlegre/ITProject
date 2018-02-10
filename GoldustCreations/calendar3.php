<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>It's A Calendar Sort Of Thing</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
  
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

html, body {
  background: #f7f8fb;
}

.calendar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 50vh;
}
.calendar_left {
  background: #00A8E8;
  width: 400px;
  height: 415px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  padding: 1.5em;
  z-index: 1;
}
.calendar_left .header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  margin-bottom: 2em;
  color: #FFF;
  font-size: 0.7em;
}
.calendar_left .header h1 {
  line-height: 1em;
}
.calendar_left .header i {
  cursor: pointer;
}
.calendar_right {
  background: #0096cf;
  width: 350px;
  height: 315px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  position: relative;
  -webkit-transform: scale(0.95) translateX(-10px);
          transform: scale(0.95) translateX(-10px);
  z-index: 0;
}
.calendar_right .list {
  height: 351px;
  overflow-y: scroll;
  padding: 1em;
}
.calendar_right .list ul {
  padding: 2.25em;
}
.calendar_right .list li {
  padding: 1em;
  width: 180px;
  color: #FFF;
  -webkit-transform: translateX(-700px);
          transform: translateX(-700px);
}
.calendar_right .list .description {
  font-size: 12px;
}
.calendar_right form {
  position: absolute;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.calendar_right input {
  background: #008ec4;
  border: none;
  padding: 1.2em;
  -webkit-box-flex: 2;
      -ms-flex: 2;
          flex: 2;
  outline: none;
  color: #FFF;
  border-bottom-right-radius: 5px;
}
.calendar_right select {
  background: #007fb0;
  border: none;
  padding: 1.2em;
  outline: none;
  color: #FFF;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 5px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.days {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  width: 400px;
}
.days .day_item {
  color: #FFF;
  width: 50px;
  text-align: center;
  padding-bottom: 1em;
  font-size: 8px;
}

.dates {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  width: 60px;
}
.dates .date_item {
  color: #FFF;
  width: 35px;
  text-align: center;
  height: 30px;
  padding: 0;
  cursor: pointer;
  border-radius: 100%;
  font-size: 8px;
}
}
div.calendar.ng-scpoe {
  float: right;
}
.present {
  font-size: 8px;
  background: #FFF;
  font color:black;
  -webkit-transform: scale(0.7);
          transform: scale(0.7);
  border-radius: 50px;
  padding: 0.95em !important;
  color: #00A8E8 !important;
  z-index: 0;
  box-shadow: 10px 10px 5px #009dd9;
  -webkit-animation: bounce-button-in 0.45s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
          animation: bounce-button-in 0.45s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}

::-webkit-scrollbar {
  display: none;
}

::-webkit-input-placeholder {
  color: #FFF;
}

.bounce-in.ng-animate {
  -webkit-animation: none 0s;
          animation: none 0s;
}

.bounce-in {
  -webkit-animation: bounce-in 0.9s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
          animation: bounce-in 0.9s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}

@-webkit-keyframes bounce-in {
  50% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  75% {
    -webkit-transform: translateX(7px);
            transform: translateX(7px);
  }
  100% {
    -webkit-transform: translateX(2px);
            transform: translateX(2px);
  }
}

@keyframes bounce-in {
  50% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  75% {
    -webkit-transform: translateX(7px);
            transform: translateX(7px);
  }
  100% {
    -webkit-transform: translateX(2px);
            transform: translateX(2px);
  }
}
@-webkit-keyframes bounce-button-in {
  0% {
    -webkit-transform: translateZ(0) scale(0);
            transform: translateZ(0) scale(0);
  }
  100% {
    -webkit-transform: translateZ(0) scale(0.7);
            transform: translateZ(0) scale(0.7);
  }
}
@keyframes bounce-button-in {
  0% {
    -webkit-transform: translateZ(0) scale(0);
            transform: translateZ(0) scale(0);
  }
  100% {
    -webkit-transform: translateZ(0) scale(0.7);
            transform: translateZ(0) scale(0.7);
  }
}

* {
  margin: 0; padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

// Variables
$primary-color: #00A8E8;
$radius: 5px;

html,body {
  background: #f7f8fb;
}
h1.ng-binding {
  font-size: 15px;
}
}

}
.calendar {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  &_left {
    background: $primary-color;
    width: 400px;
    height: 415px;
    border-top-left-radius: $radius;
    border-bottom-left-radius: $radius;
    padding: 1.5em;
    z-index: 1;
    .header {
      display: flex;
      justify-content: space-around;
      margin-bottom: 2em;
      color: #FFF;
      font-size: 15px;
      h1 {
        line-height: 1em;
      }
      i {
        cursor: pointer;
      }
    }
  }
  &_right {
    background: darken($primary-color, 5%);
    width: 350px;
    height: 415px;
    border-top-right-radius: $radius;
    border-bottom-right-radius: $radius;
    position: relative;
    transform: scale(0.95) translateX(-10px);
    z-index: 0;
    .list {
      height: 351px;
      overflow-y: scroll;
      padding: 1em;
      ul {
        padding: 2.25em;  
      }
      li {
        padding: 1em;
        width: 180px;
        color: #FFF;
        transform: translateX(-700px);
      }
      .description {
        font-size: 12px;
      }
    }
    form {
      position: absolute;
      bottom: 0;
      display: flex;
      width: 100%;
      display: flex;
      flex-flow: row wrap;
    }
    input {
      background: darken($primary-color, 7%);
      border: none;
      padding: 1.2em;
      flex: 2;
      outline: none;
      color: #FFF;
      border-bottom-right-radius: $radius;
    }
    select {
      background: darken($primary-color, 11%);
      border: none;
      padding: 1.2em;
      outline: none;
      color: #FFF;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: $radius;
      appearance: none;
    }
  }
}

.days {
  display: flex;
  justify-content: flex-start;
  width: 250px;
  .day_item {
    color: #FFF;
    width: 50px;
    text-align:center;
    padding-bottom: 1em;
  }
}

.dates {
  display: flex;
  justify-content: flex-start;
  flex-flow: row wrap;
  width: 250px;
  .date_item {
    color: #FFF;
    width: 30px;
    text-align:center;
    height: 30px;
    padding: 1em;
    cursor: pointer;
    border-radius: 100%;
  }
}

.present {
  background: #FFF;
  transform: scale(0.7);
  border-radius: 50px;
  padding: 0.95em !important;
  color: $primary-color !important;
  z-index: 0;
  box-shadow: 10px 10px 5px darken($primary-color, 3%);
  animation: bounce-button-in .45s 0s cubic-bezier(0.175, 0.885, 0.320, 1.275) forwards;
}

// Browser Specific Overwrites
::-webkit-scrollbar {
  display: none;
}

::-webkit-input-placeholder {
   color: #FFF;
}

// Animations
.bounce-in.ng-animate { 
  animation: none 0s; 
}

.bounce-in {
  animation: bounce-in .9s 0s cubic-bezier(0.175, 0.885, 0.320, 1.275) forwards;
}

@keyframes bounce-in {
  50% {
    transform: translateX(0);
  }
  75% {
    transform: translateX(7px);
  }
  100% {
    transform: translateX(2px);
  }
}

@keyframes bounce-button-in {
  0% {
    transform: translateZ(0) scale(0);
  }
  100% {
    transform: translateZ(0) scale(0.7);
  }
}

div.calendar_left{
  height: 250px;
  width: 300px;
}
</style>

  
</head>

<body>
  <html ng-app='calendarApp' ng-cloak='true'></html>
<div class='calendar' ng-controller='calendarController as calendar'>
  <div class='calendar_left'>
    <div class='header'>
      <i class='material-icons' ng-click='calendar.prev()'>navigate_before</i>
      <h1>{{calendar.month}}</h1>
      <i class='material-icons' ng-click='calendar.next()'>navigate_next</i>
    </div>
    <div class='days'>
      <div class='day_item'>Mon</div>
      <div class='day_item'>Tue</div>
      <div class='day_item'>Wed</div>
      <div class='day_item'>Thu</div>
      <div class='day_item'>Fri</div>
      <div class='day_item'>Sat</div>
      <div class='day_item'>Sun</div>
    </div>
    <div class='dates'></div>
  </div>
  <div class='calendar_right'>
    <div class='list'>
      <ul>
        <li class='bounce-in' ng-repeat='events in calendar.events' ng-show='events.id === calendar.dataId'>
          <span class='type'>It's a {{ events.type }} thing -</span>
          <span class='description'>{{ events.description }}</span>
        </li>
      </ul>
    </div>
    <form ng-submit='calendar.add()'>
      <input ng-model='calendar.description' placeholder='Enter a task for this day' type='text'>
        <select ng-model='calendar.type' placeholder='calendar.type'>
          <option value='Social'>Social</option>
          <option value='Work'>Work</option>
        </select>
      </input>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://code.angularjs.org/1.3.14/angular-animate.js'></script>

 <script>
(function() {
  angular
    .module('calendarApp', ['ngAnimate'])
    .controller('calendarController', calendarController);

  function calendarController($scope) {
    var vm = this,
      now = new Date(),
      months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      jan = daysInMonth(1, now.getFullYear()),
      feb = daysInMonth(2, now.getFullYear()),
      mar = daysInMonth(3, now.getFullYear()),
      apr = daysInMonth(4, now.getFullYear()),
      may = daysInMonth(5, now.getFullYear()),
      jun = daysInMonth(6, now.getFullYear()),
      jul = daysInMonth(7, now.getFullYear()),
      aug = daysInMonth(8, now.getFullYear()),
      sep = daysInMonth(9, now.getFullYear()),
      oct = daysInMonth(10, now.getFullYear()),
      nov = daysInMonth(11, now.getFullYear()),
      dec = daysInMonth(12, now.getFullYear()),
      monthRef = [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
      month = now.getMonth(),
      monthDay = monthRef[now.getMonth()],
      n = now.getDate(),
      uidi,
      uidm,
      uid;

    vm.id = now.getDate().toString() + now.getMonth().toString();
    vm.dataId;
    vm.events = [];
    vm.description;
    vm.type = 'Social';
    vm.month = months[month];
    vm.next = next;
    vm.prev = prev;
    vm.add = add;

    // Place Dates In Correct Place
    function placeIt() {
      if (month === 0) {
        $(".date_item").first().css({
          'margin-left': '200px'
        })
      } else if (month === 1) {
        $("date_item").first().css({
          'margin-left': '0px'
        })
      } else if (month === 2) {
        $(".date_item").first().css({
          'margin-left': '50px'
        })
      } else if (month === 3) {
        $(".date_item").first().css({
          'margin-left': '200px'
        })
      } else if (month === 4) {
        $(".date_item").first().css({
          'margin-left': '300px'
        })
      } else if (month === 5) {
        $(".date_item").first().css({
          'margin-left': '100px'
        })
      } else if (month === 6) {
        $(".date_item").first().css({
          'margin-left': '200px'
        })
      } else if (month === 7) {
        $(".date_item").first().css({
          'margin-left': '0px'
        })
      } else if (month === 8) {
        $(".date_item").first().css({
          'margin-left': '150px'
        })
      } else if (month === 9) {
        $(".date_item").first().css({
          'margin-left': '250px'
        })
      } else if (month === 10) {
        $(".date_item").first().css({
          'margin-left': '50px'
        })
      } else if (month === 11) {
        $(".date_item").first().css({
          'margin-left': '150px'
        })
      }
    }

    // Highlight Present Day
    function presentDay() {
      $(".date_item").eq(n - 1).addClass("present");
    }

    // Print List Of Dates For Current Month
    function showDays(days) {
      for (var i = 1; i < days; i++) {
        var uidi = i;
        var uidm = month;
        var uid = uidi.toString() + uidm.toString();
        $(".dates").append("<div class='date_item' data='" + uid + "'>" + i + "</div>");
      }
    }

    // Get The Current Date
    function daysInMonth(month, year) {
      return new Date(year, month, 0).getDate() + 1;
    }

    // Next Month
    function next() {
      if (month < 11) {
        month++;
        $(".dates").html('');
        vm.month = months[month];
        monthDay = monthRef[month];
        showDays(monthDay);
        placeIt();
      }
    }

    // Previous Month
    function prev() {
      if (month === 0) {
        return false
      } else {
        month--;
        $(".dates").html('');
        vm.month = months[month];
        monthDay = monthRef[month];
        showDays(monthDay);
        placeIt();
      }
    }

    // Add Events To Specified Date
    function add() {
      vm.events.push({
        id: vm.id,
        description: vm.description,
        type: vm.type
      });

      vm.description = "";
    }

    // Fetch Unique ID For Each Date Item
    $(".dates").on("click", ".date_item", function() {
      vm.id = $(this).attr('data');
      vm.dataId = $(this).attr('data');
      $(this).addClass("present").siblings().removeClass("present");
      $scope.$apply();
    });

    showDays(monthDay);

    presentDay();

    placeIt();

  }

})();
 </script>

</body>
</html>
