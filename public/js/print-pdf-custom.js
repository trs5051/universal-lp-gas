var date = new Date();
var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
var am_pm = date.getHours() >= 12 ? "pm" : "am";
hours = hours < 10 ? "0" + hours : hours;
var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
ctime = hours + ":" + minutes + ":" + seconds + "" + am_pm;

var d = new Date();
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
var dayName = weekday[d.getDay()];

var cMonth = new Date().getMonth()+1;
var cMonth = cMonth < 10 ? '0'+cMonth : cMonth;


var cuDate = new Date().getDate() + '/'+ cMonth + '/' + new Date().getFullYear() +' '+ ctime;
var cuDateRev = new Date().getFullYear()+'/'+cMonth+'/'+new Date().getDate();

var pptitle = $(".pptitle").text();
var logo = $(".site-logo").attr("src");
// Print_Users
function Print_Users(img_logo) {  
    var mywindow = window.open('', 'PRINT');
    var is_chrome = Boolean(mywindow.chrome);

    mywindow.document.write('<html><head style="padding:0; margin:0 auto"><title>'+pptitle+'</title>');
    
    mywindow.document.write('<style>table{width: 100%;font-size:14px;border-collapse:collapse;margin-bottom:15px;}table th,table td{padding:5px 10px;text-aligh:center;border:1px solid #000;}.footersign span{border-top:1px solid black;padding-top:5px;} table#example2{margin-bottom:15px} img { max-width: 100%; height: auto; }#adm-logo,.adm-logo{height:65px;width:65px;border-radius:50%;}#adm-logo.left{float:left;background-color: #ddd;}#adm-logo.right{float:right;background-color: transparent;}.custName{ min-width:150px;} a{text-decoration: none; color:#000;}.custDate{min-width:90px;}.action,.tdfile{display:none;}</style>');
    mywindow.document.write('</head><body>');
    mywindow.document.write('<div class="header" style="display:flex;justify-content:space-between;align-items:center;">');
    mywindow.document.write('<div id="adm-logo" class="left"><img width="65" src="'+logo+'" class="img-fluid" alt="logo"></div>');
    mywindow.document.write('<div><h3 style="text-align: center;font-size: 16px;margin-top:-4px;">Chittagong Port Authority <br/>Office of the Director (Security) <br/>Bandar, Chittagong-4100</h3></div>');
    mywindow.document.write('<div class="adm-logo right"></div>');
    mywindow.document.write('</div>');
    mywindow.document.write('<h3 style="text-align: center; font-size: 15px; margin:-5px 0 0;">'+pptitle+'</h3> ');
    mywindow.document.write('<div class="date-meta" style="font-size: 13px;display:flex;justify-content:space-between;margin:0 0 10px;"><div class="leftd" style="display:inline-block;">NO:'+cuDateRev+'</div><div class="rightd" style="display:inline-block;">'+dayName+' '+cuDate+'</div></div>');

    mywindow.document.write(document.getElementById('example').outerHTML); 

    mywindow.document.write('<div class="footersign" style="text-align: center;font-size: 13px; position:relative; top:50px;width:98%;display: flex;font-weight:700;margin-top:25px; justify-content: space-between; align-item:center;"><span>Sticker Section(Incharge)</span> <span>SO(AD)</span> <span>Deputy Director(Security)</span> <span>Director(Security)</span></div>');         
    mywindow.document.write('</body></html>');

    if (is_chrome) {
        setTimeout(function () { // wait until all resources loaded 
            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/
            mywindow.print();
            mywindow.close();
        }, 250);
    }
    else {
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        mywindow.close();
    }

    return true;
}

// Print_Modal
function Print_Modal() {  

    var mywindow = window.open('', 'PRINT');
    var is_chrome = Boolean(mywindow.chrome);
    var ppmtitle = $(".modal-title").text();

    mywindow.document.write('<html><head style="padding:0; margin:0 auto"><title>'+ppmtitle+'</title>');
    
    mywindow.document.write('<style>table{width: 100%;font-size:14px;border-collapse:collapse;margin-bottom:15px;}table th,table td{padding:5px 10px;text-aligh:center;border:1px solid #000;}.footersign span{border-top:1px solid black;padding-top:5px;} table#example2{margin-bottom:15px} img { max-width: 100%; height: auto; }#adm-logo,.adm-logo{height:65px;width:65px;border-radius:50%;}#adm-logo.left{float:left;background-color: #ddd;}#adm-logo.right{float:right;background-color: transparent;}.custName{ min-width:150px;} a{text-decoration: none; color:#000;}.custDate{min-width:90px;}.action,.tdfile{display:none;}</style>');
    mywindow.document.write('</head><body>');

    mywindow.document.write('<h3 style="text-align: center; font-size: 18px; margin:10px 0 25px;">'+ppmtitle+'</h3> ');


    mywindow.document.write(document.getElementById('Print_Modal').outerHTML); 
       
    mywindow.document.write('</body></html>');

    if (is_chrome) {
        setTimeout(function () { // wait until all resources loaded 
            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/
            mywindow.print();
            mywindow.close();
        }, 250);
    }
    else {
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        mywindow.close();
    }

    return true;
}


$(document).ready(function() {

    // Datatable + PDF function with customization
    var table = $('#example').DataTable( {
      aLengthMenu: [[10, 25, 50, 75, 100, -1], [10, 25, 50, 75, 100, "All"]],
      iDisplayLength: 10,
        buttons: [
            {
                extend: 'pdfHtml5',
                text: 'Pdf',
                title: "",
                titleAttr: 'PDF',
                extension: ".pdf",
                pageSize: 'A4',
                filename: pptitle,  
                customize: function (doc) {
                    console.log(doc.content);
                    doc.styles = {
                        tableHeader: {
                            bold: true,
                            fontSize: 8,
                            color: 'black',
                            alignment: 'center'

                        },
                        defaultStyle: {
                            fontSize: 8,
                            color: 'black',
                            alignment: 'center'
                        }
                    }

                    doc.defaultStyle.fontSize = 8;

                    var objLayout = {};
                    objLayout['hLineWidth'] = function(i) { return .5; };
                    objLayout['vLineWidth'] = function(i) { return .5; };
                    objLayout['hLineColor'] = function(i) { return '#333'; };
                    objLayout['vLineColor'] = function(i) { return '#333'; };
                    objLayout['paddingLeft'] = function(i) { return 3; };
                    objLayout['paddingRight'] = function(i) { return 3; };
                    doc.content[0].layout = objLayout;

                    // margin: [left, top, right, bottom]
                    // Header Section
                    doc.content.splice(0, 0, {
                        
                        columns: [
                            {
                                image: 'data:image/png;base64,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',
                                alignment: 'left',
                                width: 50
                            },
                            {
                                text: 'Chittagong Port Authority' + '\n' + 'Office of the Director (Security)' + '\n' + 'Bandar, Chittagong-4100',
                                bold: true,
                                fontSize: 12,
                                margin: [25, 0, 0, 0],
                            },
                            {
                                text: '',
                                alignment: 'right',
                                width: 75
                            }
                        ],
                        fontSize: 12,
                        alignment: 'center',
                    });
                    // Title
                    doc.content.splice(1, 0, {
                        
                        columns: [
                            {
                                text: pptitle,
                                bold: true,
                                alignment: 'center',
                                fontSize: 11
                            }
                        ],
                    });

                    doc.content.splice(2, 0, {
                        
                        columns: [
                            {
                                text: 'NO:'+cuDateRev,
                                alignment: 'left'
                            },
                            {
                                text: dayName+' '+cuDate,
                                alignment: 'right'
                            }
                        ],
                        margin: [0, 0, 0, 5],
                        fontSize: 8,
                    });

                    doc.content.splice(10, 0, { 
                            columns: [
                                {
                                    text:'__________________________',
                                },
                                {
                                    text:'________'
                                },
                                {
                                    text:'_________________________'
                                }, 
     
                                {
                                    text: "__________________"

                                }
                            ],
                            margin: [0, 50, 0, 0],
                            fontSize: 9,
                            alignment: 'center',
                    });

                    doc.content.splice(10, 0, {
                        
                        
                            columns: [
                                {
                                    text:'Sticker Section(Incharge)',
                                },
                                {
                                    text:'SO(AD)'
                                },
                                {
                                    text:'Depoty Director(Security)'
                                }, 
     
                                {
                                    text: "Director(Security)"

                                }
                            ],
                            margin: [0, 0, 0, 10],
                            fontSize: 9,
                            bold: true,
                            alignment: 'center',
                    });
   
                
                    // Create a footer
                    doc['footer']=(function(page, pages) {
                        return {
                            text: ['Page ', { text: page.toString() },  '/', { text: pages.toString() }],
                            alignment: 'center',
                            italics: true,
                            fontSize: 10,
                        }
                    });
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9,11]
                }
            },
        ]
    } );



    table.buttons().container().appendTo( '.right-form' );
 

    // If data table empty
    var cell_empty = $("#example tbody > tr > td").html();

    if( cell_empty == "No data available in table" ){        
        table.buttons().disable();
        $('.print-p').addClass('disabled').attr("disabled", 'disabled');
    } else {        
        table.buttons().enable();
    }
    $("#example").parent("div").css({'overflow':'auto'})

} );