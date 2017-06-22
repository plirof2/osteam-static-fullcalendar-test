<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<meta charset="UTF-8">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<!-- timepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-el.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</head>
<body>




<form name="rrule-gen" id="rrule" action="dummy_response_server.php" target="_blank" method="get">

<table border=2><tr><td>

  <li id="li_2" >
<label class="description" for="parent_id">parent_id </label>
<div>
<input id="parent_id" name="parent_id" class="element text medium" type="text" maxlength="255" value="1"/>
</div>
</li>
<li id="li_1" >
<label class="description" for="id-frontistirioy">id-frontistirioy </label>
<div>
<select class="element select medium" id="id-frontistirioy" name="id-frontistirioy">
<option value="1" selected="selected">ΚΟΡΥΦΗ Α.Ε.</option>
<option value="2" >ΚΟΡΜΟΣ</option>
<option value="3" >ΔΕΣΜΕΣ</option>
<option value="4" >ΘΕΣΜΟΣ</option>

</td></tr><tr><td>
</select>
</div>
</li>		<li id="li_3" >
<label class="description" for="id-classroom">id-classroom </label>
<div>
<select class="element select medium" id="id-classroom" name="id-classroom">
<option value="1" selected="selected">ΑΙΘΟΥΣΑ Α</option>
<option value="2" >ΑΙΘΟΥΣΑ Β</option>
<option value="3" >ΑΙΘΟΥΣΑ ΔΙΑΔΡΑΣΤΙΚΟΥ</option>
<option value="4" >ΑΙΘ.-ΕΡΓΑΣΤΗΡΙΟ Β</option>
</td></tr><tr><td>
</select>
</div>
</li>		<li id="li_4" >
<label class="description" for="id_taksi">id_taksi </label>
<div>
<select class="element select medium" id="id_taksi" name="id_taksi">
<option value="1" >ΓΥΜΝΑΣΙΟ-Α</option>
<option value="2" selected="selected" >ΓΥΜΝΑΣΙΟ-Β</option>
<option value="3" >ΓΥΜΝΑΣΙΟ-Γ</option>
<option value="4" >ΛΥΚΕΙΟ-Α</option>
<option value="5" >ΛΥΚΕΙΟ-Β</option>
<option value="6" >ΛΥΚΕΙΟ-Γ ΘΕΤΙΚΗ </option>
<option value="7" >ΛΥΚΕΙΟ-Γ ΘΕΩΡΗΤΙΚΗ</option>
<option value="8" >LOWER</option>
<option value="9" >JUNIOR-A</option>
</td></tr><tr><td>
</select>
</div>
</li>		<li id="li_5" >
<label class="description" for="id_teacher">id_teacher </label>
<div>
<select class="element select medium" id="id_teacher" name="id_teacher">
<option value="1"  >ΠΑΠΑΔΟΠΟΥΛΟΣ Κ. ΠΕ19 ΑΦΜ4554395349</option>
<option value="2" selected="selected" >ΛΙΝΟΥΣ Τ. ΠΕ03 ΑΦΜ453534435</option>
<option value="3" >ΓΚΕΤΗΣ Β. ΠΕ02 ΑΦΜ557395349</option>

</select>
</div>
</li>		<li id="li_7" >
<label class="description" for="id_tmima">id_tmima </label>
<div>
<select class="element select medium" id="id_tmima" name="id_tmima">
<option value="1"  >ΓΥΜΝ-Α2</option>
<option value="2" selected="selected" >ΓΥΜΝ-Β3</option>
<option value="3" >ΛΥΚ-ΓΘ1</option>
<option value="4" >ΛΥΚ-ΓΤ1</option>

</select>
</div><p class="guidelines" id="guide_7"><small>ΦΙΛΤΡΑΡΕΤΑΙ ΒΑΣΗ ΤΑΞΗΣ + ΤΜΗΜΑΤΟΣ</small></p>
</li>		<li id="li_6" >
<label class="description" for="id_lesson">ΜΑΘΗΜΑ </label>
<div>
<select class="element select medium" id="id_lesson" name="id_lesson">
<option value="1" selected="selected">ΑΛΓΕΒΡΑ Β-ΓΥΜΝ</option>
<option value="2" >ΠΛΗΡΟΦΟΡΙΚΗ Γ-ΛΥΚ.</option>
<option value="3" >ΑΡΧΑΙΑ Β-ΛΥΚ.</option>

</select>
</div><p class="guidelines" id="guide_6"><small>(ΜΑΘΗΜΑ ΦΙΛΤΡΑΡΕΤΑΙ REAL-TIME ΒΆΣΗ ΤΑΞΗΣ)</small></p>
</li>		<li id="li_8" >
<label class="description" for="lesson_duration">lesson_duration </label>
<div>
<select class="element select medium" id="lesson_duration" name="lesson_duration">
<option value="45" selected="selected">45</option>
<option value="50" >50</option>
<option value="60" >60</option>

</select>
</div><p class="guidelines" id="guide_8"><small>Διάρκεια Μαθήματος</small></p>
</li>




</td></tr>
<tr><td>



<h2>Καταχώρηση ώρας</h2>







<p>Ημερομηνία test (ΔΟΚΙΜΗ): <input type="text" class="timedatepicker" name="test-date" id="test-date" /></p>


  <p>Ημερομηνία έναρξης: <input type="text" class="datepicker" id="start-date" /></p>

  <input type="hidden" name="start-date-formatted" id="start-date-hidden" value="" />
<!-- <p> End Date: <input type="text" class="datepicker" id="start-date" /></p> -->

  <p>Επαναλαμβανόμενο Event?
  <input type="radio" name="event-recurring" value="no" checked="checked" /> No
  <input type="radio" name="event-recurring" value="yes"  /> Yes   <!-- JON- THE OTHER OPTION ARE ACTIVATED BY CLICK EVENT - so leave this unchecked as default (so we have to CLICK) -->

  </p>
  <div id="recurring-rules" style="display:none;">

<!-- FREQ -->
    <p>Frequency
    <select name="freq">
      <option value="daily" class="days">Daily</option>
      <option value="weekly" class="weeks">Weekly</option>
      <option value="monthly" class="months">Monthly</option>
      <option value="yearly" class="years">Yearly</option>
    </select>
    </p>
    <p>Every <input type="text" name="interval" value="1" size="2" /> <span class="freq-selection">day(s)</span>
    </p>


<!-- BYWEEKDAY -->
    <div id="weekday-select" class="btn-toolbar weeks-choice" role="toolbar" style="display:none;">
      <h4>Which day(s) of the week does this repeat on:</h4>
      <div class="btn-group">
        <button class="btn btn-default" id="SU">Sun</button>
        <button class="btn btn-default" id="MO">Mon</button>
        <button class="btn btn-default" id="TU">Tue</button>
        <button class="btn btn-default" id="WE">Wed</button>
        <button class="btn btn-default" id="TH">Thu</button>
        <button class="btn btn-default" id="FR">Fri</button>
        <button class="btn btn-default" id="SA">Sat</button>
      </div>
    </div>



<!-- BYMONTH -->
    <div id="bymonth-select" class="btn-toolbar years-choice" role="toolbar" style="display:none;">
      <h4>Which month(s) of the year does this repeat on</h4>

      <p><input type="radio" name="yearly-options" id="yearly-one-month" checked="checked" /> One Month Out of the Year</p>
      on <select name="yearly-bymonth" id="yearly-bymonth" class="yearly-one-month">
        <option value="1" selected="yes">Ιανουάριος</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>

      <select name="yearly-bymonthday" id="yearly-bymonthday" class="yearly-one-month">
        <option value="1" selected="yes">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>

      <p><input type="radio" name="yearly-options" id="yearly-multiple-months" /> Multiple Months</p>
      <div style="display:block;float:none;" class="btn-group yearly-multiple-months">
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="1" disabled="disabled">Ιαν</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="2" disabled="disabled">Φεβ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="3" disabled="disabled">Μαρ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="4" disabled="disabled">Απρ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="5" disabled="disabled">Μαιος</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="6" disabled="disabled">Ιουν</button>
      </div>
      <div style="display:block;float:none;" class="btn-group yearly-multiple-months">
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="7" disabled="disabled">Ιουλ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="8" disabled="disabled">Αυγ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="9" disabled="disabled">Σεπ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="10" disabled="disabled">Οκτ</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="11" disabled="disabled">Νοε</button>
        <button class="btn btn-default" style="width:16.66666666666667%" data-month-num="12" disabled="disabled">Δεκ</button>
      </div>


      <p><input type="radio" name="yearly-options" id="yearly-precise" /> Or be precise</p>
        on the <select name="yearly-bysetpos" class="yearly-precise" disabled="disabled">
              <option value="1" selected="selected">First</option>
              <option value="2">Second</option>
              <option value="3">Third</option>
              <option value="4">Fourth</option>
              <option value="-1">Last</option>
        </select>
        <select name="yearly-byday" class="yearly-precise" disabled="disabled">
              <option value="SU" selected="selected">Sunday</option>
              <option value="MO">Monday</option>
              <option value="TU">Tuesday</option>
              <option value="WE">Wednesday</option>
              <option value="TH">Thursday</option>
              <option value="FR">Friday</option>
              <option value="SA">Saturday</option>
              <option value="SU,MO,TU,WE,TH,FR,SA" selected="selected">Day</option>
              <option value="MO,TU,WE,TH,FR">Weekday</option>
              <option value="SU,SA">Weekend day</option>
        </select>
      in <select name="yearly-bymonth-with-bysetpos-byday"  id="yearly-bymonth-with-bysetpos-byday" class="yearly-precise" disabled="disabled">
        <option value="1" selected="selected">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>

    </div>

<!-- BYMONTHDAY -->
    <div id="monthday-select" class="btn-toolbar months-choice" role="toolbar" style="display:none;">
      <input type="radio" name="monthday-pos-select" value="monthday-selected" id="monthday-selected" checked="checked" />

      <h4>Which day(s) of the month does this repeat on</h4>
      <div class="btn-group" style="display:block;float:none;">
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="1">1</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="2">2</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="3">3</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="4">4</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="5">5</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="6">6</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="7">7</button>
      </div>
      <div class="btn-group" style="display:block;float:none;">
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="8">8</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="9">9</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="10">10</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="11">11</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="12">12</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="13">13</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="14">14</button>
      </div>
      <div class="btn-group" style="display:block;float:none;">
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="15">15</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="16">16</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="17">17</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="18">18</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="19">19</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="20">20</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="21">21</button>
      </div>
      <div class="btn-group" style="display:block;float:none;">
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="22">22</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="23">23</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="24">24</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="25">25</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="26">26</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="27">27</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="28">28</button>
      </div>
      <div class="btn-group" style="display:block;float:none;">
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="29">29</button>
        <button class="btn btn-default" style="width:14.28571428571429%;" data-day-num="30">30</button>
      </div>

  <!-- BYDAY -->
      <div>
      <input type="radio" name="monthday-pos-select" value="month-byday-pos-selected" id="month-byday-pos-selected" /> Or
        <select name="month-byday-pos" disabled="yes">
              <option value="1" selected="selected">First</option>
              <option value="2">Second</option>
              <option value="3">Third</option>
              <option value="4">Fourth</option>
              <option value="-1">Last</option>
        </select>
        <select name="month-byday-pos-name" disabled="yes">
              <option value="SU">ΚΥΡΙΑΚΗ</option>
              <option value="MO">ΔΕΥΤΕΡΑ</option>
              <option value="TU">ΤΡΙΤΗ</option>
              <option value="WE">ΤΕΤΑΡΤΗ</option>
              <option value="TH">ΠΕΜΠΤΗ</option>
              <option value="FR">ΠΑΡΑΣΚΕΥΗ</option>
              <option value="SA">ΣΑΒΒΑΤΟ</option>
              <option value="SU,MO,TU,WE,TH,FR,SA" selected="selected">Day</option>
              <option value="MO,TU,WE,TH,FR">Weekday</option>
              <option value="SU,SA">Weekend day</option>
        </select>
      </div>
    </div>

    <div id="until-rules" style="display:none;">
      <p>Until</p>
      <p><label for="until-select"><input type="radio" name="end-select" value="until" id="until-select" checked="checked" /> Specific Date (aka until) <input type="text" name="until" id="end-date" disabled="yes" />
      <input type="hidden" name="end-date-formatted" id="end-date-hidden" value="" /></label>
      </p>
<!--
      <p> <label for="count-select"><input type="radio" name="end-select" value="count" id="count-select" /> How many times does this transaction occur?

        <input autocomplete="off" type="number" name="count" min="1" max="50" value="1" step="1"/> Time(s)</label>
    </p>
  -->
    </div>
    <input type="hidden" name="rrule_generated" id="rrule_generated" value="NOT_CHANGED!!!!!!!!!!!!!!!!">
    <input type="submit" name="submit" value="ΚΑΤΑΧΩΡΗΣΗ ΔΙΔΑΣΚΑΛΙΑΣ" />
  </div>

</form>
</td></tr></table>
<div class="show-dates">
</div>
<div class="readout">

</div>
<!-- End Recurrence Form -->


                   </form>
<script type="text/javascript">
    //PASS VARIABLES to called script
    var startdatepassed = "<?php echo $_REQUEST["start"]; ?>";
</script>
  <script type="text/javascript" src="js/rrule-gui.js"></script>
</body>
</html>
