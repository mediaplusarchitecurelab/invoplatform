    var ssurl = "https://spreadsheets.google.com/feeds/list/1NaDogfVq2JYcyPNkdUEeqC2rp28mFcLJylPJDhvp4Yg/od6/public/values?alt=json";
    var ssstr1= '';
    var ssstr2= '';
    var ssstr3= '';
    var ssstr4= '';

    $.getJSON( ssurl, function( data ) {

      let ssstrhead =
                        '<tr>'+
                            '<th>團隊名稱</th>'+
                            '<th>階段進程</th>'+
                            '<th>專案名稱</th>'+
                            '<th>補助單位</th>'+
                            '<th>團隊領導</th>'+
                            '<th>團隊成員</th>'+
                        '</tr>';
       let ssstrbody1 = '';
       let ssstrbody2 = '';
       let ssstrbody3 = '';
       let ssstrbody4 = '';

      for (let i = 0; i < data.feed.entry.length; i+=1) {
        let teamname = data.feed.entry[i].gsx$團隊名稱.$t;
        let teamstep = data.feed.entry[i].gsx$階段進程.$t;
        let teamproject = data.feed.entry[i].gsx$專案名稱.$t;
        let teamsupport = data.feed.entry[i].gsx$補助單位.$t;
        let teamleader = data.feed.entry[i].gsx$團隊領導.$t;
        let teammember = data.feed.entry[i].gsx$團隊成員.$t;
        
        ssstrbody1 += '<tr>'+
                        '<td>'+teamname+'</td>'+
                        '<td>'+teamstep+'</td>'+
                        '<td>'+teamproject+'</td>'+
                        '<td>'+teamsupport+'</td>'+
                        '<td>'+teamleader+'</td>'+
                        '<td>'+teammember+'</td>'+
                    '</tr>';

        switch(teamsupport){
            case '教學卓越中心':
                    ssstrbody2 += '<tr>'+
                        '<td>'+teamname+'</td>'+
                        '<td>'+teamstep+'</td>'+
                        '<td>'+teamproject+'</td>'+
                        '<td>'+teamsupport+'</td>'+
                        '<td>'+teamleader+'</td>'+
                        '<td>'+teammember+'</td>'+
                    '</tr>';       
                    break;
            case '育成中心':
                    ssstrbody4 += '<tr>'+
                        '<td>'+teamname+'</td>'+
                        '<td>'+teamstep+'</td>'+
                        '<td>'+teamproject+'</td>'+
                        '<td>'+teamsupport+'</td>'+
                        '<td>'+teamleader+'</td>'+
                        '<td>'+teammember+'</td>'+
                    '</tr>';       
                    break;
            default:
                    ssstrbody3 += '<tr>'+
                        '<td>'+teamname+'</td>'+
                        '<td>'+teamstep+'</td>'+
                        '<td>'+teamproject+'</td>'+
                        '<td>'+teamsupport+'</td>'+
                        '<td>'+teamleader+'</td>'+
                        '<td>'+teammember+'</td>'+
                    '</tr>'; 
                    break; 

        }
      }

        ssstr1 = ssstrhead+ssstrbody1;
        ssstr2 = ssstrhead+ssstrbody2;
        ssstr3 = ssstrhead+ssstrbody3;
        ssstr4 = ssstrhead+ssstrbody4;


      $("#team").html(
            '<section  class="s-team">'+
                '<div class="row section-header has-bottom-sep" data-aos="fade-up">'+
                    '<div class="col-full">'+
                        '<h3 class="subhead">雲林科技大學</h3>'+
                        '<h1 class="display-2">創新創業平台整體架構與進程</h1>'+
                    '</div>'+
                '</div>'+ 

                '<div id="teambar">'+

                    '<ul id="teamnav" class="nav nav-tabs">'+
                      '<li class="active"><a data-toggle="tab" >所有團隊</a></li>'+
                      '<li><a data-toggle="tab" >教學卓越中心</a></li>'+
                      '<li><a data-toggle="tab" >各PBL中心</a></li>'+
                      '<li><a data-toggle="tab" >育成中心</a></li>'+
                    '</ul>'+

                    '<div id="teamcontent" class="tab-content">'+

                      //'<div id="team1" class="tab-pane fade">'+
                        '<table id="team1" class="table sortable table-striped table-bordered">'+
                            ssstr1+
                        '</table">'+
                        '<table id="team2" class="table sortable table-striped table-bordered">'+
                            ssstr2+
                        '</table">'+
                        '<table id="team3" class="table sortable table-striped table-bordered">'+
                            ssstr3+
                        '</table">'+
                        '<table id="team4" class="table sortable table-striped table-bordered">'+
                            ssstr4+
                        '</table">'+
                    '<div>'+
                '<div>'+
            '</section>');

        $("#teambar").css({"width":"90%","margin-left":"5%"});
        $("#teamcontent").css({"width":"90%","margin-left":"5%", "margin-top":"5%"});
        
        $("#team1").show();
        $("#team2").hide();
        $("#team3").hide();
        $("#team4").hide();
        $("#teamnav li").on("click",function(){
            switch ($(this).text()){
                case '所有團隊':
                    $("#team1").show();
                    $("#team2").hide();
                    $("#team3").hide();
                    $("#team4").hide();
                    break;
                case '教學卓越中心':
                    $("#team1").hide();
                    $("#team2").show();
                    $("#team3").hide();
                    $("#team4").hide();
                    break;
                case '育成中心':
                    $("#team1").hide();
                    $("#team2").hide();
                    $("#team3").hide();
                    $("#team4").show();
                    break;
                default:
                    $("#team1").hide();
                    $("#team2").hide();
                    $("#team3").show();
                    $("#team4").hide();
                    break;

            }
        });
        
            
    });


    

