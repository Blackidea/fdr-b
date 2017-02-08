<script>
$(document).ready(function(){
       
    var loading = $('.loading-gif');
    var more = $('.js-more-news');
    var container = $('.newsblocks_pagenews');
    
    more.on('click', function(event){
        event.preventDefault();
        $(loading).show('slow');
        console.log("���-�� �������: "+getPagesCount());
        console.log("������� ��������: "+getCurPageCount());
        console.log("��������� ��������: "+genUrl());
        url = '/news/'+genUrl();
        console.log(url);
        
        $.ajax({                                                                   
           url: url,                                   
             data: '',
        	 success: function(data) {                                                      
                console.log($(data).find('.newsblocks_pagenews'));
                $(container).append($(data).find('.newsblocks_pagenews').contents());
                pagesCounterPlus();
                checkMoreAvailible();
                $(loading).hide('slow');
        	  }
          });
    })
})
function checkMoreAvailible(){
    if(parseInt($('input[name="pageCur"]').val())>= parseInt($('input[name="pageCount"]').val())){
        $('.js-more-news').hide();
    }
    else{
        console.log('��� ���� ��������');
    }
}
function pagesCounterPlus(){
    $('input[name="pageCur"]').val(parseInt($('input[name="pageCur"]').val())+1);
}
function getPagesCount(){
    return $('input[name="pageCount"]').val();
}
function getCurPageCount(){
    return $('input[name="pageCur"]').val();
}
function getNextPage(){
     return parseInt(getCurPageCount())+1;
}
function genUrl(){
    url = "?PAGEN_1="+getNextPage();
    return url;
}
</script>