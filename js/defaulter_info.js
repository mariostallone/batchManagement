// JavaScript Document
$(document).ready(function() {
    var oTable = $('#defaulterInfo').dataTable( {
        "bProcessing": true,
        "sAjaxSource": "http://localhost:8080/Batch_Management/defaulters",
		"sAjaxDataProp": "defaulterData",
        "aoColumns": [
            { "mDataProp": "userName" },
            { "mDataProp": "login_time" },
            { "mDataProp": "hostName" },
			{ "mDataProp": "ipaddress" }
        ]
    } );
} );