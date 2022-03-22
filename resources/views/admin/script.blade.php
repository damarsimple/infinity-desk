<script type="text/javascript" src="https://www.google-analytics.com/analytics.js"></script>
<script src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js',new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- base -->
<script src="{{ url('frontend/admin/script/base/vendor.bundle.base.js') }}"></script>
<script src="{{ url('frontend/admin/script/general/tooltips.js') }}"></script>
<script src="{{ url('frontend/admin/script/general/moment.min.js') }}"></script>
<script src="{{ url('frontend/admin/script/general/stisla.js') }}"></script>
<script src="{{ url('frontend/admin/script/general/index.js') }}"></script>
<!-- chart -->
<script src="{{ url('frontend/admin/script/chart/Chart.min.js') }}"></script>
<!-- inject -->
<script src="{{ url('frontend/admin/script/inject/off-canvas.js') }}"></script>
<script src="{{ url('frontend/admin/script/inject/hoverable-collapse.js') }}"></script>
<script src="{{ url('frontend/admin/script/inject/template.js') }}"></script>
<script src="{{ url('frontend/admin/script/inject/settings.js') }}"></script>
<script src="{{ url('frontend/admin/script/inject/todolist.js') }}"></script>
<!-- pages -->
<script src="{{ url('frontend/admin/script/dashboard.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');
      $navbar = $('.navbar');
      $main_panel = $('.main-panel');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;
      white_color = false;

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



      $('.fixed-plugin a').click(function(event) {
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data', new_color);
        }

        if ($main_panel.length != 0) {
          $main_panel.attr('data', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data', new_color);
        }
      });

      $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
        var $btn = $(this);

        if (sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          sidebar_mini_active = false;
          blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
        } else {
          $('body').addClass('sidebar-mini');
          sidebar_mini_active = true;
          blackDashboard.showSidebarMessage('Sidebar mini activated...');
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);
      });

      $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
        var $btn = $(this);

        if (white_color == true) {

          $('body').addClass('change-background');
          setTimeout(function() {
            $('body').removeClass('change-background');
            $('body').removeClass('white-content');
          }, 900);
          white_color = false;
        } else {

          $('body').addClass('change-background');
          setTimeout(function() {
            $('body').removeClass('change-background');
            $('body').addClass('white-content');
          }, 900);

          white_color = true;
        }


      });

      $('.light-badge').click(function() {
        $('body').addClass('white-content');
      });

      $('.dark-badge').click(function() {
        $('body').removeClass('white-content');
      });
    });
  });
</script>


<script>
  var random_color = randColor();
  function randColor(){
    return colors[Math, floor(Math.random()*colors.length)];
  }
  $(document).on
  ("click",
  ".div_edit_table_parent .btn_them_edit_table",
    (e) => {
      random_color = randColor();
        $('.div_transition').css('background',
        random_color);
        var element = $(e.target);
        if (element.hasClass("color-black"))
        return;
        var parent =
        element.closest(".div_edit_table_parent");
        var table = parent.find("table");
        var tbody = $(table).find("tbody");
        var elementCheck = $(table).find('tr[name="tr-edit"]');
        var check = 
        window.CheckLengthOfElement(elementCheck);
          if(check === "-1") return;
          else{
            if(check==="0"){
              XuLyEditFunc(table,null,tbody);
            }
            else{
              alert(
                "You have a row that are not 
                saving, please save or close 
                that before Continue"
              );
            }
          }
    });
    function CheckLengthOfElement(element){
      if(!element) return "-1";
      else{
        return element.length > 0 ? "1" : "0";
      }
    }

    function XuLyEditFunc(table, dataArr, tbody) {
    var fnhtmlName = $(table).attr("data-html");
    var html = window[fnhtmlName](dataArr); // call function dynamic
    if (dataArr) {
        tbody.find("tr[name!='tr-edit']").each
        ((index, obj) => {
            var thisElement = $(obj);
            if (dataArr.id == thisElement.attr("data-id")) {
                thisElement.after(html);
                thisElement.addClass("hidden");
            }
        });
    } else {
        window.AppendDiv(tbody, html);
             random_color = randColor();
          $('.div_transition').css('background', random_color);
    }

};
function html_gen_edit_trinh_do(data) {
    var html = "";
    html += '   <tr ' + (data ? "data-id=\"" + data.id + "\"" : "data-id=0") + ' class="font-size-13"  name="tr-edit">';
    html += "    <td>";
    html += '<input  min = 1 step="1" name="id" oninput="validity.valid||(value=\'\');" class="with_50_per syt-radius-3 min-h-30 paddingMin txt_nam_tot_nghiep"' +
        ' type="number"' +
        (data ? "value=\"" + data.id + "\"" : "") +
        "/>";
    html += "    </td>";
    html += "   <td>";
        html += '    <input name="truong_dao_tao" class="with_50_per syt-radius-3 min-h-30 paddingMin txt_truong_dao_tao"' +
        ' type="text" ' +
        (data ? "value=\"" + data.truong_dao_tao + "\"" : "") +
        " />";
    html += "    </td>";
    html += "   <td>";
  html += '<input  min = 1 step="1" name="name_tot_nghiep" oninput="validity.valid||(value=\'\');" class="with_50_per syt-radius-3 min-h-30 paddingMin txt_nam_tot_nghiep"' +
        ' type="number"' +
        (data ? "value=\"" + data.nam_tot_nghiep + "\"" : "") +
        "/>";
    html += "   </td>";
    html += "  <td>";
    html += '   <div class="show-inline cursor-pointer min-h-30 mt-mobile-5">';
    html += '   <span class="glyphicon glyphicon-ok syt-icon-save" ' +
        'title="Save" onclick="fn_save_edit(this)"></span>';
    html += "   </div>";
    html += "  </td>";
    html += "   <td >";
    html += '    <div class="show-inline cursor-pointer min-h-30 mt-mobile-5">';
    html += '    <span type="button" title="Cancel"  onclick="fn_cancel_edit(this)"' +
        ' class="glyphicon glyphicon-remove syt-icon-cancel"/>';
    html += "  </div>";
    html += "   </td>";
    html += "   </tr> ";
    return html;
};
function AppendDiv(element, html) {
           random_color = randColor();
          $('.div_transition').css('background', random_color);
    element.append(html).hide().show('slow');
};
function fn_cancel_edit(e) {
         $('.div_transition').css('background', random_color);
    var element = $(e);
    var table = element.closest("table");
    var tbody = element.closest("tbody");
    var trParent = element.closest("tr");
    var dataId = trParent.attr("data-id");
    trParent.remove();
    if (dataId != 0) {
        tbody.find("tr[class='font-size-13 hidden']").removeClass("hidden");
    }
};

function fn_save_edit(element) {
              random_color = randColor();
          $('.div_transition').css('background', random_color);
    var table = $(element).closest("table");
    var saveFunctionName = table.attr("data-save");

    window[saveFunctionName](element);
};

function XyLySaveTrinhDo(e) {
            random_color = randColor();
          $('.div_transition').css('background', random_color);
    var element = $(e);
    var table = element.closest("table");
    var tbody = element.closest("tbody");
    var trParent = element.closest("tr");
    var dataId = trParent.attr("data-id");
    var arrId = [];
    var newDataId;
    tbody.find("tr[name!='tr-edit']").each((index, obj) => {
        var thisElement = $(obj);
        arrId.push(thisElement.attr("data-id"));
    });
    if (arrId.length > 0) {
        var maxOfArray = Math.max.apply(Math, arrId);
        var checkExist = arrId.indexOf(dataId) > -1;
        if (checkExist) {
            newDataId = dataId;
        } else {
            newDataId = maxOfArray + 1;
        }
    } else {
        newDataId = 1;
    }
    var objData = window.GetAllInputOnDiv(trParent);
    if (objData) {
        var namHienTai = window.getCurrentYear();
        if (namHienTai < objData.name_tot_nghiep) {
            alert("Year too big!");
        }
        else {
            var html = html_Load_tbl_TrinhDo(newDataId, objData);
            if (dataId == 0)
                tbody.append(html);
            else {
                trParent.after(html);
                tbody.find("tr[class='font-size-13 hidden']").remove();
            }
            trParent.remove();
        }
    }
};

function html_Load_tbl_TrinhDo(newDataId, objData) {
              random_color = randColor();
          $('.div_transition').css('background', random_color);
    var html = "";
    html += '<tr data-id="' + newDataId + '" class="font-size-13">';
    html += '<td class="input-get line-height-1_1-Em" data-name="TrinhDoChuyenMonID" data-value=' + objData.id + '> ' + objData.id + ' </td>';
 
    html += '<td class="input-get line-height-1_1-Em"  data-name="TenTruongDaoTao" data-value=' + objData.truong_dao_tao + '>' + objData.truong_dao_tao + ' </td>';
     html += '<td  class="input-get line-height-1_1-Em" data-name="NamTotNghiep" data-value=' + objData.name_tot_nghiep + '>' + objData.name_tot_nghiep + '</td>';
    html += '<td class="glyphicon glyphicon-edit cursor-pointer color-blue font-size-20 table-cell syt-edit-btn line-height-1_1-Em"';
    html += ' data-trinhdoId="' + objData.TrinhDo + '"  data-trinh-do="' + objData.TrinhDo_Name + '" data-nam_tot_nghiep="' + objData.name_tot_nghiep + '"';
    html += ' data-id="' + newDataId + '"  data-truong_dao_tao="' + objData.truong_dao_tao + '" title="Edit"></td>';
    html += ' <td class="glyphicon glyphicon-trash cursor-pointer color-blue  font-size-18  position-inherit line-height-1_1-Em" title="Del"';
    html += 'onclick="fn_Xoa_Dong(this)"></td>';
    html += '</tr>';
    return html;
};
function fn_Xoa_Dong(ev) {
    var tr = $(ev).closest("tr");
    var msg = "Are you sure delete this record?";
    var notice = new PNotify
        ({
            title: "Warrning!",
            text: msg,
            icon: "glyphicon glyphicon-question-sign",
            hide: false,
            confirm: {
                confirm: true
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            },
            addclass: "stack-modal",
            stack: { 'dir1': "down", 'dir2': "right", 'modal': true }
        }).get().on
        ("pnotify.confirm",
            function () {
                tr.remove();
            }).on
        ("pnotify.cancel",
            function () {
                return "false";
            });

};

function GetAllInputOnDiv(parent) {
    var objArr = {};
    getValueInputText_Select2_OnDiv(objArr, parent);
    getValueCheckboxOnDiv(objArr, parent);
    getValueMultipleSelectOnDiv(objArr, parent);
    return objArr;
};

function getValueCheckboxOnDiv(objArr,parent) {
    $(':input[type="radio"]:checked', parent)
        .not(":hidden,:disabled").each
        ((index, obj) => {
            var input = $(obj);
            objArr[input.attr("name")] = input.val();
        });
    return objArr;
};

function getValueInputText_Select2_OnDiv(objArr, parent)
{
    $(':input', parent).not(":button,:radio, :submit, :reset, :hidden,:disabled")
        .each
        ((index, obj) => {
            var input = $(obj);
            var checkTonTaiClass = input.hasClass("adselect");
            if (!checkTonTaiClass)
                objArr[input.attr('name')] = input.val();
            else {
                var objData = $(obj).select2('data');
                if (objData[0]) {
                    var name = ($($(objData[0].element)[0]).parent().attr('name'));
                    var id = objData[0].id;
                    objArr[name] = isNaN(id * 1) ? "" : id * 1;
                    objArr[name + "_Name"] = isNaN(id * 1) ? "" : objData[0].text;
                }
            }
        });
    return objArr;
}

function getValueMultipleSelectOnDiv(objArr, parent) {
    $('.selectpicker_checkbox', parent)
        .not(":disabled").each
        ((index, obj) => {
            var input = $(obj);
            objArr[input.attr("name")] = input.val();
        });
    return objArr;
};

function getCurrentYear() {
    var now = new Date();
    return now.getFullYear();
};

</script>