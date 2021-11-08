$(document).ready(
    function (){
        $(document).on('click', '.upload_excel', function (e){
            var $dataInput = new FormData($('#form-upload-file-excel')[0]);
            $.ajax({
                url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel-san-pham-bep',
                type: 'post',
                dataType: 'json',
                data: $dataInput,
                // async: false,
                contentType: false,
                // cache: false,
                processData: false
            }).success(function (data) {
                // console.log(data.tablebep);
                $('.bedroom-all-product-area').html(data.table);
            }).error(function (r1, r2) {
                alert(r1.responseText);
            });
        });
        function exportToExcel(mytblId,name){
            var htmls = "";
            var uri = 'data:application/vnd.ms-excel;base64,';
            var template = '<html xmlns:o="urn:schemas-Microsoft-com:office:office" xmlns:x="urn:schemas-Microsoft-com:office:Excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>';
            var base64 = function(s) {
                return window.btoa(unescape(encodeURIComponent(s)))
            };

            var format = function(s, c) {
                return s.replace(/{(\w+)}/g, function(m, p) {
                    return c[p];
                })
            };

            htmls = $(mytblId).html();

            var ctx = {
                worksheet : 'Worksheet',
                table : htmls
            }


            var link = document.createElement("a");
            link.download = name+".xls";
            link.href = uri + base64(format(template, ctx));
            link.click();
        }
        $(document).on('click', '.xuat_ex', function (e){
            var classcan='.table_bep';
            var namefile="code_bep";
            exportToExcel(classcan,namefile);
        });
    })
