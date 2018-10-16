<section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">雲林科技大學</h3>
                    <h1 class="display-2 display-2--light">創新創業團隊作品</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry" id="warpportfolio">
    
                    

                    

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->
    <script type="text/javascript">
        var portfoliostr='';
        for(let i =1;i<arrsql.length;i+=1){
            portfoliostr+=
                            '<div class="masonry__brick" data-aos="fade-up">'+
                                '<div class="item-folio">'+
                                    '<div class="item-folio__thumb">'+
                                        '<a href="db/library/'+arrsql[i].teamplansexecuted+'/cover.jpg" class="thumb-link" title="'+arrsql[i].teamplansexecuted+'" data-size="1050x700">'+
                                                '<img src="db/library/'+arrsql[i].teamplansexecuted+'/cover.jpg"'+ 
                                                    'srcset="db/library/'+arrsql[i].teamplansexecuted+'/cover.jpg 1x, db/library/'+arrsql[i].teamplansexecuted+'/cover.jpg 2x" alt="">'+
                                        '</a>'+
                                    '</div>'+
                        
                                    '<div class="item-folio__text">'+
                                        '<h3 class="item-folio__title">'+arrsql[i].teamplansexecuted+'</h3>'+           
                                        '<p class="item-folio__cat">'+arrsql[i].teamname+'</p>'+
                                    '</div>'+
                                    
                                    '<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">'+
                                        '<i class="icon-link"></i>'+
                                    '</a>'+
                        
                                    '<div class="item-folio__caption">'+
                                        '<p>'+arrsql[i].teamdescription+'</p>'+
                                    '</div>'+
                        
                                '</div>'+
                            '</div>';
        }
        $('#warpportfolio').html( portfoliostr );

    </script>