$(document).ready(function (){
  let mymap, myLocationLayerCircle, myLocation, markers ;
  function getKhuVuc($type, $idSelect, $parent, callback){
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-khu-vuc',
      type: 'post',
      dataType: 'json',
      data: {
        type: $type,
        parent: $parent,
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      success: function (data){
        $($idSelect).html('<option value="">-- Chọn '+$type+' -- </option>');
        $.each(data, function (k, obj){
          $($idSelect).append(`<option value="`+obj.id+`">`+obj.name+`</option>`);
        });
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
  }
  function getKhoangGia($type, $idSelect, callback){
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-danh-muc',
      type: 'post',
      dataType: 'json',
      data: {
        type: $type,
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      success: function (data){
        $($idSelect).html('<option value="">-- Chọn '+$type+' -- </option>');
        $.each(data, function (k, obj){
          $($idSelect).append(`<option value="`+obj.id+`">`+obj.name+`</option>`);
        });
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
  }
  function changeGoogleEarth(maxZ) {
    L.TileLayer && mymap.removeLayer(L.TileLayer);
    if (L.GoogleEarth === 1) {
      L.TileLayer = new L.tileLayer("https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}&style=feature:all|element:labels|visibility:off", {
        maxZoom: maxZ,
        minZoom: 3,
        subdomains: ["mt0", "mt1", "mt2", "mt3"]
      });
      L.GoogleEarth = 0;
    } else {
      L.TileLayer = new L.tileLayer("https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}", {
        maxZoom: maxZ,
        minZoom: 3,
        subdomains: ["mt0", "mt1", "mt2", "mt3"]
      });
      L.GoogleEarth = 1;
    }
    L.TileLayer.addTo(mymap);
  }
  if($("#mapid").length > 0){
    var radius;
    $("html, body").css('height', '100%')
    $("html, body").css('max-height', '100%')
    $("html, body").css('overflow', 'hidden')
    mymap = L.map('mapid');
    $.ajax({
      url: 'https://app.hpmap.vn/service/khoi-tao-ban-do',
      type: 'post',
      dataType: 'json',
      data: {
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      beforeSend: function(){
        $("#drop-gia-tien form, #drop-dien-tich form, #list-loai-bds, #list-phan-loai-bds").html('');
      },
      success: function (data){
        $.each(data.giaTien, function (k, obj){
          $("#drop-gia-tien form").append(`<div class="form-check">
            <label class="form-check-label" for="gia-tien-`+k+`">
              <input type="checkbox" class="form-check-input" value="`+obj+`" id="gia-tien-`+k+`"> `+obj+`
            </label>
          </div>`)
        })
        $.each(data.dienTich, function (k, obj){
          $("#drop-dien-tich form").append(`<div class="form-check">
            <label class="form-check-label" for="dien-tich-`+k+`">
              <input type="checkbox" class="form-check-input" value="`+obj+`" id="dien-tich-`+k+`"> `+obj+`
            </label>
          </div>`)
        })
        $.each(data.loaiBDS, function (k, obj){
          $("#list-loai-bds").append(`<a class="dropdown-item" href="#">`+obj+`</a>`)
        })
        $.each(data.phanLoai, function (k, obj){
          $("#list-phan-loai-bds").append(`<a class="dropdown-item" href="#">`+obj+`</a>`)
        })
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
    // var map = L.map('mapid').fitWorld();
    // var current_position, current_accuracy;
    function onLocationError(e) {
      // alert(e.message);
    }
    function onLocationFound(e) {
      var radius = e.accuracy;

      myLocationLayer = L.marker(e.latlng).addTo(mymap);
      myLocationLayer.bindPopup("Điểm gần nhất cách " + radius + " m so với vị trí của bạn").openPopup();
      // myLocationLayerCircle = L.circle(e.latlng, {radius: 5000}, {
      //   fillOpacity: 0.1
      // }).addTo(mymap);

      // myLocationLayerCircle.remove();
      myLocationLayerCircle = L.circle(e.latlng, {radius: 1000, stroke: false}, {
        fillOpacity: 0.05
      }).addTo(mymap);
      if (current_position) {
        mymap.removeLayer(current_position);
        mymap.removeLayer(current_accuracy);
      }

      radius = e.accuracy;

      current_position = L.marker(e.latlng).addTo(mymap)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

      current_accuracy = L.circle(e.latlng, radius).addTo(mymap);
    }
    L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&hl=vi&x={x}&y={y}&z={z}', {
      subdomains:['mt0', 'mt1', 'mt2', 'mt3'],
      maxNativeZoom:19,
      maxZoom:25,
      minZoom: 1,
    }).addTo(mymap);
    markers = L.markerClusterGroup();
    mymap.attributionControl.setPrefix('Bản đồ &copy; <a href="https://hpmap.vn">HPLands - HPMap</a> contributors');
    mymap.locate({setView: true, maxZoom: 14});

    mymap.on('locationfound', onLocationFound);
    mymap.on('locationerror', onLocationError);
    mymap.setView([20.850343360086164, 106.691017804732], 12);

    // Load ds dữ liệu các sản phẩm có trên bản đồ
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-san-pham',
      type: 'post',
      dataType: 'json',
      data: {
        san_pham_tim_kiem: $("#san-pham-tim-kiem").val(),
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      $.each(data.dsSanPham, function (k, obj){
        var toado = obj.toa_do_vi_tri.split(', ');
        var one_marker = L.marker([toado[0].trim(), toado[1].trim()],{
          title: obj.tieu_de,
          // riseOnHover: true,
          // bubblingMouseEvents: true,
          icon:  L.divIcon({
            html: '<span class="xem-chi-tiet-san-pham" data-value="'+obj.id+'"></span>'
          })
        })
          .bindTooltip('<b><a href="#" class="xem-chi-tiet" data-value="'+obj.nid+'">'+obj.tieu_de+'</a></b><br/>'+'Giá từ '+parseInt(obj.gia_tu)
            .toLocaleString('vi'))
          .openTooltip();
        markers.addLayer(one_marker);
      })

      $.each(data.dsSanPhamTimKiem, function (k, obj){
        var toado = obj.toa_do_vi_tri.split(', ');
        var one_marker = L.marker([toado[0].trim(), toado[1].trim()],{
          title: obj.tieu_de,
          riseOnHover: true,
          bubblingMouseEvents: true,
          icon:  L.divIcon({
            html: '<span class="san-pham-tim-kiem xem-chi-tiet-san-pham" data-value="'+obj.id+'"> SP '+obj.id+'</span>'
          })
        })
          .bindTooltip('<b>'+obj.tieu_de+'</b><br/>'+'Giá từ '+parseInt(obj.gia_tu).toLocaleString('vi'))
          .openTooltip();
        markers.addLayer(one_marker);
      })

      $.each(data.loThuaDat, function (k, obj){
        var loDat = L.polygon(obj.dinh, {stroke: false, opacity: 1})
          .bindTooltip(obj.tieu_de)
          .openTooltip();
        markers.addLayer(loDat);
      })
      mymap.addLayer(markers);

      setTimeout(function (){
        $(".san-pham-tim-kiem").each(function (){
          $(this).parent().addClass('bg-green');
        })
      }, 1000);
    })
    var maxZ = 20;
    $(document).on('click','.gg-earth',function () {
      changeGoogleEarth(maxZ);
    })
    // $(document).on('click','.custom-map-control-button',function (e) {
    //   mymap.on('locationfound', onLocationFound);
    // })
    document.addEventListener("DOMContentLoaded", event => {
      let $ = document.querySelector.bind(document);
      let options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
      };

      $(".custom-map-control-button").addEventListener("click", getLocation);

      function getLocation() {
        let geolocation = navigator.geolocation;
        if (geolocation) {
          geolocation.getCurrentPosition(onGeoSuccess, onGeoError, options);
        } else {
          console.log("trinh duyệt của bạn không hỗ trợ Geolocation.");
        }
      }

      function onGeoSuccess(position) {
        // $("#lat").innerHTML = position.coords.latitude;
        // $("#lon").innerHTML = position.coords.longitude;
        alert(position.coords.latitude);
        alert(position.coords.longitude);
        // var radius = e.accuracy;

        myLocationLayer = L.marker([position.coords.latitude,position.coords.longitude]).addTo(mymap);
        // myLocationLayer.bindPopup("Điểm gần nhất cách " + radius + " m so với vị trí của bạn").openPopup();
        // myLocationLayerCircle = L.circle(e.latlng, {radius: 5000}, {
        //   fillOpacity: 0.1
        // }).addTo(mymap);

        // myLocationLayerCircle.remove();
        myLocationLayerCircle = L.circle([position.coords.latitude,position.coords.longitude], {radius: 1000, stroke: false}, {
          fillOpacity: 0.05
        }).addTo(mymap);
      }

      function onGeoError(error) {
        let detailError;

        if(error.code === error.PERMISSION_DENIED) {
          detailError = "người dùng từ chối chia sẻ vị trí.";
        }
        else if(error.code === error.POSITION_UNAVAILABLE) {
          detailError = "thông tin vị trí không khả dụng.";
        }
        else if(error.code === error.TIMEOUT) {
          detailError = "yêu cầu đã hết thời gian ."
        }
        else if(error.code === error.UNKNOWN_ERROR) {
          detailError = "lỗi không xác định."
        }

        $("#error").innerHTML = `Error: ${detailError}`;
      }
    });
  }

  if($("#edit-field-quan-huyen-und-0-value").length > 0){
    $("#edit-field-quan-huyen-und-0-value, #edit-field-duong-pho-und-0-value").addClass('hidden').attr('type', 'hide');
    $("#edit-field-quan-huyen-und-0-value").parent().append('<select class="form-control" id="select-quan-huyen"></select>')
    $("#edit-field-duong-pho-und-0-value").parent().append('<select class="form-control" id="select-duong-pho"></select>')
    // setTimeout(function (){
    //
    // }, 500)
    getKhuVuc('Quận huyện', "#select-quan-huyen", 735);
    $("#select-quan-huyen, #select-duong-pho").select2();
    setTimeout(function (){
      if($("#edit-field-quan-huyen-und-0-value").val() != ''){
        $("#select-quan-huyen").val($("#edit-field-quan-huyen-und-0-value").val()).trigger('change');
      }
    }, 500);
  }
  // xử lý khác
  if($("#quan-huyen").length > 0)
  {
    getKhuVuc('Quận huyện', "#quan-huyen", 735);
  }

  $(document).on('change', "#select-quan-huyen", function (){
    $("#edit-field-quan-huyen-und-0-value").val($(this).find(':selected').val());
    getKhuVuc('Đường phố', "#select-duong-pho", $(this).val(), function (){
      if($("#edit-field-duong-pho-und-0-value").val() != ''){
        $("#select-duong-pho").val($("#edit-field-duong-pho-und-0-value").val()).trigger('change');
      }
    });
  });

  $(document).on('change', "#quan-huyen", function (){
    getKhuVuc('Đường phố', "#duong-pho", $(this).val());
  });

  $(document).on('change', "#select-duong-pho", function (){
    $("#edit-field-duong-pho-und-0-value").val($(this).find(':selected').val());
  });

  if($("#khoang-gia").length > 0){
    getKhoangGia('Khoảng giá', '#khoang-gia');
  }

  if($("#huong").length > 0){
    getKhoangGia('Hướng', '#huong');
  }

  $(document).on('click', '#btn-tim-kiem-bds, #btn-tim-kiem', function (e){
    e.preventDefault();
    var redirect = false;
    if($(this).attr('id') != 'btn-tim-kiem')
      redirect = true;
    if(
      $('#quan-huyen').val() == ''&&
      $('#duong-pho').val() == '' &&
      $('#huong').val() == '' &&
      $('#khoang_gia').val() == ''
    )
      alert('Vui lòng chọn ít nhất 1 lựa chọn để tìm kiếm');
    else{
      $.ajax({
        url: 'https://hpmap.vn/tim-san-pham',
        dataType: 'json',
        type: 'post',
        beforeSend: function (){
          $.blockUI({ message: '<h4 style=""><img width="80px" src="https://hpmap.vn/sites/all/themes/leminhland/assets/img/loading2.gif" /> Vui lòng đợi trong giây lát...</h4>' });
        },
        data: {
          quan_huyen: $('#quan-huyen').val(),
          duong_pho: $('#duong-pho').val(),
          khoang_gia: $('#khoang-gia').val(),
          huong: $('#huong').val(),
          uid: $("#input-uid").val(),
          token: $("#input-token").val(),
        },
        error: function(r1, r2){
          console.log(r1.responseText);
          $.unblockUI();
        },
        complete: function(){
          $.unblockUI();
        }
      }).then(function(response){
        $.unblockUI();
        if(redirect)
          window.location = 'https://hpmap.vn/ban-do-hang';
        else{

        }
      });
    }
  });

  $(document).on('click', '.leaflet-marker-icon.leaflet-div-icon.leaflet-zoom-animated.leaflet-interactive', function(e){
    e.preventDefault();
    var $span = $(this).find('span.xem-chi-tiet-san-pham');
    console.log($span);
    $.confirm({
      columnClass: 'l',
      content: function(){
        var self = this;
        return $.ajax({
          url: 'https://app.hpmap.vn/service/xem-chi-tiet-san-pham',
          dataType: 'json',
          method: 'post',
          data: {
            san_pham: $span.attr('data-value'),
            uid: $("#input-uid").val(),
            token: $("#input-token").val(),
          }
        }).done(function (response) {
          self.setContent(response.content);
          self.setTitle(response.title)
        }).fail(function(){
        }).always(function(){
        });
      },
      // contentLoaded: function(data, status, xhr){
      //   self.setContentAppend('<div>Content loaded!</div>');
      // },
      // onContentReady: function(){
      //   this.setContentAppend('<div>Content ready!</div>');
      // }
    });
  })

  if($('#my-modal').length > 0){
    if($('#my-modal .modal-body').html().trim() !== '')
      $('#my-modal').modal('show')
  }

})
