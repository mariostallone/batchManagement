// JavaScript Document
/*fnServerObjectToArray = function ( aElements )
{
    return function ( sSource, aoData, fnCallback ) {
        $.ajax( {
            "dataType": 'json', 
            "type": "GET", 
            "url": sSource, 
            "data": aoData, 
            "success": function (json) {
                var a = [];
                for ( var i=0, iLen=json.aaData.length ; i<iLen ; i++ ) {
                    var inner = [];
                    for ( var j=0, jLen=aElements.length ; j<jLen ; j++ ) {
                        inner.push( json.aaData[i][aElements[j]] );
                    }
                    a.push( inner );
                }
                json.aaData = a;
                fnCallback(json);
            }
        } );
    }
}
 
$(document).ready(function() {
    $('#report_table').dataTable( {
        "bProcessing": true,
        "sAjaxSource": 'http://localhost:8080/Batch_Management/report',
        "fnServerData": fnServerObjectToArray( [ 'username', 'hostname', 'ipaddress', 'groupid',] )
    } );
} );
*/
$(document).ready(function() {
    $('#report_table').dataTable( {
        "bProcessing": true,
        "sAjaxSource": 'http://localhost:8080/Batch_Management/report',
		"sAjaxDataProp": "loginData"	
    } );
} );