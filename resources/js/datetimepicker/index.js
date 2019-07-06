import * as $ from 'jquery';
import 'jquery-datetimepicker/build/jquery.datetimepicker.full.min.js';
import 'jquery-datetimepicker/build/jquery.datetimepicker.min.css';

export default (function () {
  
  $.datetimepicker.setLocale('fr');
  
  $('.date').datetimepicker({
    timepicker:false,
    format:'Y-m-d'
  }).attr('autocomplete', "off");
  
  $('.date-time').datetimepicker({
    format:'Y-m-d H:i:s'
  }).attr('autocomplete', "off");
}())
