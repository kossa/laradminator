import * as $ from 'jquery';
import 'select2';
import 'select2/dist/css/select2.min.css'; 

export default (function () {
    $('.select2').select2();
    
    $('.select2-tag').select2({
        tags: true
    });
}())
