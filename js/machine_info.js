// JavaScript Document
$(document).ready(function() {
    var oTable = $('#machineInfo').dataTable( {
        "bProcessing": true,
        "sAjaxSource": "http://localhost:8080/Batch_Management/machineinfo",
		"sAjaxDataProp": "machineData",
        "aoColumns": [
            { "mDataProp": "machineNumber" },
            { "mDataProp": "hostName" },
            { "mDataProp": "recentIP" }
        ]
    } );
} );