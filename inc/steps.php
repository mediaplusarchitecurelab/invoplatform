    <?php include 'db/dbconnect.php';?>
    <style type="text/css">
      input,select {
        display:table-cell;
        width:100%;
      }
    </style>
    <section id='services' class="s-services" >

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">雲林科技大學</h3>
                <h1 class="display-2">創新創業平台整體架構與進程</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">


                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tabhome">團隊列表</a></li>
                  <li><a data-toggle="tab" href="#tabtec">教學卓越中心團隊</a></li>
                  <li><a data-toggle="tab" href="#tabidf">自造者中心培育團隊</a></li>
                  <li><a data-toggle="tab" href="#tabord">研究發展處扶植團隊</a></li>
                </ul>

                <div class="tab-content">
                  <div id="tabhome" class="tab-pane fade in active">
                    <h3>團隊列表</h3>
                    <p>Some content.</p>
                  </div>
                  <div id="tabtec" class="tab-pane fade">
                    <h3>教學卓越中心團隊</h3>
                    <p>Some content in menu 1.</p>
                  </div>
                  <div id="tabidf" class="tab-pane fade">
                    <h3>自造者中心培育團隊</h3>
                    <p>Some content in menu 2.</p>
                  </div>
                  <div id="tabord" class="tab-pane fade">
                    <h3>研究發展處扶植團隊</h3>
                    <p>Some content in menu 2.</p>
                  </div>
                </div>


                <!-- The Modal -->
                <div class="modal" id="modalform">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="modalformcontent">
                    </div>
                  </div>
                </div>


        </div> <!-- end services-list -->
    </section> <!-- end s-services -->
    <script type="text/javascript">
      

      var arrsql = <?php echo json_encode($arrsql) ?>;

      
      var tabthead = '<thead>'+
                          '<tr>'+
                              '<th>團隊名稱</th>'+
                              '<th>扶植單位</th>'+
                              '<th>隸屬計畫</th>'+
                              '<th>團隊成員</th>'+
                              '<th>團隊提案名稱</th>'+
                              '<th>最後更新</th>'+
                          '</tr>'+
                      '</thead>'+
                      '<tbody>';

    var tabhomestr='<table id="tablehome" class="table sortable" style=" width:90%; border-collapse: collapse; margin-left:5%; margin-top:50px;">'+tabthead;
    var tabidfstr='<table id="tableidf" class="table sortable" style=" width:90%; border-collapse: collapse; margin-left:5%; margin-top:50px;">'+tabthead;
    var tabordstr='<table id="tableord" class="table sortable" style=" width:90%; border-collapse: collapse; margin-left:5%; margin-top:50px;">'+tabthead;
    var tabtecstr='<table id="tabletec" class="table sortable" style=" width:90%; border-collapse: collapse; margin-left:5%; margin-top:50px;">'+tabthead;

// function
      function splitlink(str){
          var arrstr = str.split('、');
          var outstr='';
          arrstr.forEach(function(val){
            outstr+='<a>'+val+'</a>'+'、';
          } );
          return outstr.slice(0, -1);
        }
        // for teamsearch
        function fsearchteamdata(arr,namespace, filter=''){
          //filter = filter || 0;
          var arrnew = [];
          for (let i =1; i<arr.length;i+=1){

            var valarr;
            var thistype=arr[i].teamtype;

            switch (namespace){
              case 'teamname':
                valarr = arr[i].teamname.split('、');
                break;
              case 'teammember':
                valarr = arr[i].teammember.split('、');
                break;
              case 'teamaffiliationplan':
                valarr = arr[i].teamaffiliationplan.split('、');
                break;
              case 'teamadvisor':
                valarr = arr[i].teamadvisor.split('、');
                break;
              case 'teamplansexecuted':
                valarr = arr[i].teamplansexecuted.split('、');
                break;
            }
            

            for (let j =0; j<valarr.length; j+=1){
                let c=0;
                for(let k=0; k<arrnew.length; k+=1){
                  if (valarr[j] === arrnew[k]){c+=1;break;}
                }
                if (c===0){
                  if  (filter==='' || filter === thistype){
                    arrnew.push(valarr[j]);
                  }
                }
            }
          }
          return arrnew;
        }
        // search filter

      // for modal
      function modaladd(){
        //;
        
        //alert(membername);
        var mod =     //<!-- Modal Header -->
                      '<div class="modal-header">'+
                        '<h4 class="modal-title">增加</h4>'+
                      '</div>'+
                      '<div class="modal-body">'+

                        '<form id="teamform" >'+
                        '<div class="container">'+
                          // row
                          '<div class="form-group row">'+
                              '<div class="col-md-3">'+
                                '<select id="teamname" form="teamform">'+
                                  '<label for="teaname" class="control-label">當前扶植單位</label>'+
                                  '<option value="請選擇團隊">請選擇團隊</option>'; 
                                  fsearchteamdata(arrsql,'teamname').forEach(function(v){
                                    mod+='<option value="'+v+'">'+v+'</option>';
                                  });

         mod+=                    '<option value="新增團隊">新增團隊</option>'+ 
                                '</select>'+
                              '</div>'+
                              '<div class="col-md-3">'+
                                '<input type="text" id="teamname_new" placeholder="未指定團隊名稱" form="teamform" readonly>'+
                              '</div>'+
                          '</div>'+ //row
                          //row
                          '<div class="row form-group">'+  
                            '<div class="col-md-3">'+
                              '<label for="teamtype">當前扶植單位</label>'+
                              '<select name="teamtype" id="teamtype" form="teamform" value="自造者中心">'+
                                '<option value="自造者中心">自造者中心</option>'+
                                '<option value="研究發展處">研究發展處</option>'+
                                '<option value="教學卓越中心">教學卓越中心</option>'+
                              '</select>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                              '<label for="teamadvisor">指導教授</label>'+
                              '<select id="teamadvisor" form="teamform">'+
                                  '<option value="請選擇指導教授">請選擇指導教授</option>'; 
                                  fsearchteamdata(arrsql,'teamadvisor').forEach(function(v){
                                    mod+='<option value="'+v+'">'+v+'</option>';
                                  });

        mod+=                    '<option value="新增指導教授">新增指導教授</option>'+ 
                              '</select>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                                '<label for="teamadvisor_new"></br></label>'+
                                '<input type="text" id="teamadvisor_new" placeholder="未指定指導教授" form="teamform" readonly>'+
                            '</div>'+
                          '</div>'+ //row

                          //row
                          '<div class="row form-group">'+  
                            '<div class=" col-md-3">'+
                              '<label for="teamplansexecuted">當前執行專案</label>'+
                              '<input type="text" class="form-control" id="teamplansexecuted" placeholder="請輸入當前執行提案名稱" form="teamform">'+
                            '</div>'+

                            '<div class="col-md-6">'+
                              '<label for="teammember">團隊人員</label>'+
                              '<input type="text" class="form-control" id="teammember" placeholder="請輸入團隊人員(請用半形;斷開)" form="teamform">'+
                            '</div>'+
                          '</div>'+ //row

                          //row
                          '<div class="row">'+  
                            '<div class="form-group">'+
                              '<div class="col-md-5">'+
                                '<label for="teamdescription">提案計畫內容</label>'+
                                '<textarea type="text" class="form-control col-full" id="teamdescription" rows="5" placeholder="請輸入提案計畫內容" form="teamform"></textarea>'+
                              '</div>'+
                              '<div class="col-md-4">'+
                                '<label for="uploaddata">上傳資料</label>'+
                                '<input type="file" multiple id="uploaddata" name="myInputName">'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                          //row
                          // new row
                          '<div class="row">'+
                              '<div class="form-group">'+
                                '<button type="submit" id="btnsubmit" class="btn btn-primary" form="teamform">新增</button>'+
                                '<button type="button" class="btn btn-danger" data-dismiss="modal" form="teamform">關閉</button>'+
                              '</div>'+
                          '</div>'+ //row
                          '</div>'+ //container
                          '</form>'+
                      '</div>';
                      
        $('#modalformcontent').html(mod);
        $('#modalform').modal('show');

        // 上傳介面須在 modal 生成段落中
        $('#uploaddata').ssi_uploader({
          locale: 'zh_TW',
          url: 'db/dbupload.php',
          maxFileSize: 5,
          allowed: ['jpg']
        });
      }
      // event function : new option
      function addoption(target,chr){
        $(document.body).on('change',target,function(){
          var val = $(target+' option:selected').text();
          if (val === '新增'+chr){
            $(target+'_new').val('請輸入新'+chr);
            $(target+'_new').prop('readonly', false);
          }else{
            $(target+'_new').val(val);
            $(target+'_new').prop('readonly', true);
          }
        });
      }
      

      for(let i=1;i<arrsql.length;i+=1){
        var row = '<tr>'+
                        '<th>'+arrsql[i].teamname+'</td>'+
                        '<th>'+arrsql[i].teamtype+'</td>'+
                        '<th>'+arrsql[i].teamaffiliationplan+'</td>'+
                        '<th>'+splitlink(arrsql[i].teammember)+'</td>'+
                        '<th>'+splitlink(arrsql[i].teamplansexecuted)+'</td>'+
                        '<th>'+arrsql[i].teamupdatetime+'</td>'+
                     '</tr>';
        if(arrsql[i].teamtype ==='自造者中心'){ tabidfstr +=row; }
        if(arrsql[i].teamtype === '研究發展處'){ tabordstr +=row; }
        if(arrsql[i].teamtype ==='教學卓越中心'){ tabtecstr +=row; }

        tabhomestr += row;
      }
       
       function tail(str){
            return '<div>'+
                      '<div>'+
                          '<table class="table" style=" width:90%; border-collapse: collapse; margin-left:5%; margin-top:50px;">'+
                                '<tr>'+
                                    '<th>團隊名稱</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamname',str)+'</th>'+
                                    '<th>總計團隊數量</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamname',str).length+'</th>'+
                                '</tr>'+

                                '<tr>'+
                                    '<th>提案名稱</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamplansexecuted',str)+'</th>'+
                                    '<th>總計提案數量</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamplansexecuted',str).length+'</th>'+
                                '</tr>'+

                                '<tr>'+
                                    '<th>團隊成員</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teammember',str)+'</th>'+
                                    '<th>總計提案數量</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teammember',str).length+'</th>'+
                                '</tr>'+


                                '<tr>'+
                                    '<th>指導教授</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamadvisor',str)+'</th>'+
                                    '<th>總計提案數量</th>'+
                                    '<th>'+fsearchteamdata(arrsql,'teamadvisor',str).length+'</th>'+
                                '</tr>'+
                          '</table>'+
                      '</div>'+
                      '<div class="text-center" colspan="6">'+
                          '<button style="width:100%" onclick="modaladd()">增加</button>'+
                      '</div>'+
                  '</div>';
                }
       

      tabhomestr+= '</tbody></table>'+tail();
      tabtecstr+= '</tbody></table>'+tail('教學卓越中心');
      tabidfstr+= '</tbody></table>'+tail('自造者中心');
      tabordstr+= '</tbody></table>'+tail('研究發展處');
      $('#tabhome').html(tabhomestr);
      $('#tabidf').html(tabidfstr);
      $('#tabtec').html(tabtecstr);
      $('#tabord').html(tabordstr);

      // uploader
      /*
      var notifyOptions = {
        iconButtons: {
            className: 'fa fa-question about',
            method: function (e, modal) {
                ssi_modal.closeAll('notify');
                var btn = $(this).addClass('disabled');
                ssi_modal.dialog({
                    onClose: function () {
                        btn.removeClass('disabled')
                    },
                    onShow: function () {
                    },
                    okBtn: {className: 'btn btn-primary btn-sm'},
                    title: 'ssi-modal',
                    content: 'ssi-modal is an open source modal window plugin that only depends on jquery. It has many options and it\'s super flexible, maybe the most flexible modal out there... For more details click <a class="sss" href="http://ssbeefeater.github.io/#ssi-modal" target="_blank">here</a>',
                    sizeClass: 'small',
                    animation: true
                });
            }
        }
      };
      */
      

      /*
      $(function() {
        $('.bootstrapTable').bootstrapTable();
      });
      */
      // event : new option
      addoption('#teamname','團隊');
      addoption('#teamadvisor','指導教授');
      addoption('#teamaffiliationplan','隸屬計畫'); 


/*
      $("#btnuploadimg").click(function() {
            $.FileDialog({multiple: true}).on('files.bs.filedialog', function(ev) {
                var files = ev.files;
                var text = "";
                files.forEach(function(f) {
                    text += f.name + "<br/>";
                });
                $("#output").html(text);
            }).on('cancel.bs.filedialog', function(ev) {
                $("#output").html("Cancelled!");
            });
        });
*/
      //資料暫存
      /*
      $(document).ready(function(){
        
      });
      */
      //表格上傳
        $(document).on("click", "#btnsubmit", function(event){
            event.preventDefault();

            var url = 'db/dbadd.php';

            var formteamname = ($("#teamname_new").val() === '' || $("#teamname_new").val()==='請輸入新團隊') ? 'none' : $("#teamname_new").val();
            var formteamadvisor = ($("#teamadvisor_new").val() === '' || $("#teamadvisor_new").val()==='請輸入新指導教授') ? 'none' : $("#teamadvisor_new").val();

            var formteamplansexecuted = $("#teamplansexecuted").val() === '' ? 'none':$('#teamplansexecuted').val();
            var formteammember = $("#teammember").val() === '' ? 'none':$('#teammember').val();
            var formteamdescription = $("#teamdescription").val() === '' ? 'none':$('#teamdescription').val();
            var formteamtype = $("#teamtype").val() === '' ? 'none':$('#teamtype').val();

            var arrformnone = [];
            if (formteamname === 'none'){arrformnone.push('團隊名稱');}
            if (formteamadvisor === 'none'){arrformnone.push('指導教授');}
            if (formteamplansexecuted === 'none'){arrformnone.push('執行計畫');}
            if (formteammember === 'none'){arrformnone.push('團隊成員');}
            if (formteamdescription === 'none'){arrformnone.push('團隊內容');}
            if (formteamtype === 'none'){arrformnone.push('扶植單位');}

            if (arrformnone.length === 0){
              $.ajax({
               type:"POST",
               url: url,
               data: {newteamname:formteamname,newteamadvisor:formteamadvisor, newteamplansexecuted:formteamplansexecuted, newteammember:formteammember, newteamdescription:formteamdescription, newteamtype:formteamtype},// serializes the form's elements.
               success:function(data)
               {
                  alert(data);
                  $('#modalform').modal('hide');
               }
              });  
            }else{
              alert(arrformnone+'，尚未輸入資料!!');
            }

        });

    </script>