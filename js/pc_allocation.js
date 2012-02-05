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
}*/
 /*
$(document).ready(function() {
    $('#report_table').dataTable( {
        "bProcessing": true,
        "sAjaxSource": 'http://localhost:8080/Batch_Management/report',
        "fnServerData": fnServerObjectToArray( [ 'username', 'hostname', 'ipaddress', 'groupid',] )
    } );
} );
*/
/*$(document).ready(function() {
    $('#allocation_table').dataTable( {
        "bProcessing": true,
        "sAjaxSource": 'http://localhost:8080/Batch_Management/report',
		"sAjaxDataProp": "loginData"	
    } );
} );*/

function readCSV(file)
{
	console.log("File");
	console.log(file);
	var reader = new FileReader();
	reader.onload = function(theFile) 
	{
        console.log("Success");
		console.log(theFile.target.result);
		var output_json = csvjson.csv2json(theFile.target.result, {
    		delim: ",",
    		textdelim: "\""
    	});
		console.log(output_json.rows);
        var a = [];
        for ( var i=0, iLen=output_json.rows.length ; i<iLen ; i++ ) 
		{
			var inner = [];
        	for ( var j in output_json.rows[i]) 
			{
            	inner.push(output_json.rows[i][j] );
            }
            a.push( inner );
		}
		console.log(a);
		$('#allocation_table').dataTable( {
        "bProcessing": true,
        "aaData": a,
		"aoColumns":output_json.columns
    } );
    }
	reader.onerror = function(start)
	{
		console.log("Error");
		console.log(start);
	}
	//reader.file = file;
	reader.readAsText(file[0]);
	//reader.readAsBinaryString(file);
	/*$.post('ajax/test.html', 
		   function(data) {
							
							});*/
}