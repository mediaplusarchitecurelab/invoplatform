    
    $("#about").html(
        '<section class="s-about">'+
                '<div class="row section-header has-bottom-sep" data-aos="fade-up">'+
                    '<div class="col-full">'+
                        '<h3 class="subhead subhead--dark">雲林科技大學</h3>'+
                        '<h1 class="display-1 display-1--light">創新創意團隊</h1>'+
                    '</div>'+
                '</div>'+ // <!-- end section-header -->

                '<div class="row about-desc" data-aos="fade-up">'+
                    '<div class="col-full">'+
                        '<p>'+
                        '深耕高教11<br>'+
                        '輔導創業<br>'+
                        '</p>'+
                    '</div>'+
                '</div>'+ //<!-- end about-desc -->
            '<div id="stepbar">'+
                '<ul class="nav nav-tabs">'+
                  '<li class="active"><a data-toggle="tab" href="#step1">學習基礎</a></li>'+
                  '<li><a data-toggle="tab" href="#step2">勇於嘗試</a></li>'+
                  '<li><a data-toggle="tab" href="#step3">團隊形成</a></li>'+
                  '<li><a data-toggle="tab" href="#step4">專業諮詢</a></li>'+
                  '<li><a data-toggle="tab" href="#step5">原型實踐</a></li>'+
                  '<li><a data-toggle="tab" href="#step6">群眾募資</a></li>'+
                  '<li><a data-toggle="tab" href="#step7">創業輔導</a></li>'+
                '</ul>'+

                '<div id="stepcontent" class="tab-content">'+
                  '<div id="step1" class="tab-pane fade in active">'+
                    '<h3>學習基礎</h3>'+
                    '<p>教卓中心</p>'+
                  '</div>'+

                  '<div id="step2" class="tab-pane fade ">'+
                    '<h3>勇於嘗試</h3>'+
                    '<p>教卓中心</p>'+
                  '</div>'+

                  '<div id="step3" class="tab-pane fade">'+
                    '<h3>團隊形成</h3>'+
                    '<p>教卓中心、自造者中心、PBL中心</p>'+
                  '</div>'+

                  '<div id="step4" class="tab-pane fade">'+
                    '<h3>專業諮詢</h3>'+
                    '<p>自造者中心、PBL中心</p>'+
                  '</div>'+

                  '<div id="step5" class="tab-pane fade">'+
                    '<h3>原型實踐</h3>'+
                    '<p>自造者中心、PBL中心</p>'+
                  '</div>'+

                  '<div id="step6" class="tab-pane fade">'+
                    '<h3>群眾募資</h3>'+
                    '<p>育成中心</p>'+
                  '</div>'+

                  '<div id="step7" class="tab-pane fade">'+
                    '<h3>創業輔導</h3>'+
                    '<p>育成中心</p>'+
                  '</div>'+
                '</div>'+
            '<div>'+
          '</section>'); //<!-- end s-about -->

    $("#stepbar").css({"width":"90%","margin-left":"5%"});
    $("#stepcontent").css({"width":"90%","margin-left":"5%"});

