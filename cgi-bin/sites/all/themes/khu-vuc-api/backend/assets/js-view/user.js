$(document).ready(function () {
    $(document).on('click', '.btn-nap-tien-vao-tai-khoan', function (e) {
        var $khach_hang_id = $(this).attr('data-value');
        $.confirm({
            content: function(){
                var self = this;
                return $.ajax({
                    url: 'index.php?r=site/loadform',
                    data: {type: 'naptienvaotaikhoan', type_giaodich: 'Nạp tiền', khachhang_id: $khach_hang_id},
                    dataType: 'json',
                    type: 'post'
                }).success(function (data) {
                    self.setContent(data.content);
                    self.setTitle(data.title);
                    self.setType('blue');

                    setTimeout(function () {
                        $(".tien-te").maskMoney({thousands: ".", decimal: ',', allowZero: true, precision: 3, allowEmpty: true, selectAllOnFocus: true});
                    }, 500);
                }).error(function (r1, r2) {
                    self.setContent(getMessage(r1.responseText));
                    self.setTitle("Lỗi");
                    self.setType('red');
                });
            },
            buttons: {
                btnLuuLai: {
                    btnClass: 'btn-primary',
                    text: "<i class='fa fa-save'></i> Lưu lại",
                    action: function () {
                        if($("#giaodich-ma_giao_dich_khach_paste").val() == ""){
                            $.alert({
                                title: 'Thông báo',
                                content: 'Chưa nhập mã giao dịch',
                                type: 'red',
                                icon: 'fa fa-warning'
                            });
                            return false;
                        }
                        if(getNumberFromStr($("#giaodich-so_tien_giao_dich").val()) == 0){
                            $.alert({
                                title: 'Thông báo',
                                content: 'Chưa nhập số tiền giao dịch',
                                type: 'red',
                                icon: 'fa fa-warning'
                            });
                            return false;
                        }
                        $.confirm({
                            content: function () {
                                var self = this;
                                return $.ajax({
                                    url: 'index.php?r=giao-dich/save',
                                    data: $("#form-giao-dich").serializeArray(),
                                    dataType: 'json',
                                    type: 'post'
                                }).success(function (data) {
                                    self.setContent(data.content);
                                    self.setTitle(data.title);
                                    self.setType('blue');
                                    $.pjax.reload({container: "#crud-datatable-pjax"});
                                }).error(function (r1, r2) {
                                    self.setContent(getMessage(r1.responseText));
                                    self.setTitle("Lỗi");
                                    self.setType('red');
                                    return false;
                                });
                            }
                        })
                    }
                },
                btnClose: {
                    text: "<i class='fa fa-close'></i> Đóng lại"
                }
            }
        });
    });
});