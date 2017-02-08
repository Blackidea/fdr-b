<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001486579556';
$dateexpire = '001522579556';
$ser_content = 'a:2:{s:7:"CONTENT";s:3450:"<script>
$(document).ready(function(){
       
    var loading = $(\'.loading-gif\');
    var more = $(\'.js-more-news\');
    var container = $(\'.newsblocks_pagenews\');
    
    more.on(\'click\', function(event){
        event.preventDefault();
        $(loading).show(\'slow\');
        console.log("кол-во страниц: "+getPagesCount());
        console.log("текущая страница: "+getCurPageCount());
        console.log("следующая страница: "+genUrl());
        url = \'/news/\'+genUrl();
        console.log(url);
        
        $.ajax({                                                                   
           url: url,                                   
             data: \'\',
        	 success: function(data) {                                                      
                console.log($(data).find(\'.newsblocks_pagenews\'));
                $(container).append($(data).find(\'.newsblocks_pagenews\').contents());
                pagesCounterPlus();
                checkMoreAvailible();
                $(loading).hide(\'slow\');
        	  }
          });
    })
})
function checkMoreAvailible(){
    if(parseInt($(\'input[name="pageCur"]\').val())>= parseInt($(\'input[name="pageCount"]\').val())){
        $(\'.js-more-news\').hide();
    }
    else{
        console.log(\'еще есть страницы\');
    }
}
function pagesCounterPlus(){
    $(\'input[name="pageCur"]\').val(parseInt($(\'input[name="pageCur"]\').val())+1);
}
function getPagesCount(){
    return $(\'input[name="pageCount"]\').val();
}
function getCurPageCount(){
    return $(\'input[name="pageCur"]\').val();
}
function getNextPage(){
     return parseInt(getCurPageCount())+1;
}
function genUrl(){
    url = "?PAGEN_1="+getNextPage();
    return url;
}
</script><style>
body {
    font-size: 14px;}
    
.loading-gif{
    display: none;
}
.loading-gif img{
    width: 10%;
    position: fixed;
    margin-left: -5%;
    left: 50%;
    top: 50%;
    margin-top: -5%;
}
</style>


<div class="container">
    <div class="top">
        <p class="toptext">РџРѕРєР°Р·Р°С‚СЊ:</p>
            <select name="" id="">
                <option value="">Р’СЃРµ РЅРѕРІРѕСЃС‚Рё</option>
            </select>
    </div>
    <div class="js-pager-wrepper" style="">
                	<style>

</style>
<input type="text" name="pageCount" value="2"/>
<input type="text" name="pageCur" value="2"/>


<font class="text">РќРѕРІРѕСЃС‚Рё 


	5 - 5 РёР· 5<br /></font>

	<font class="text">

	
					<a href="/news/">РќР°С‡Р°Р»Рѕ</a>
			|
							<a href="/news/">РџСЂРµРґ.</a>
						|
		
	
	
					<a href="/news/">1</a>
					
					<b>2</b>
						|

			РЎР»РµРґ.&nbsp;|&nbsp;РљРѕРЅРµС†	



</font><br />
                </div>
    <div class="newsblocks newsblocks_pagenews">
                                    <a href="/news/spetsialisty-provodyat-raboty-po-obektu/" class="news-linkblock">
				<div class="bg"></div>
				<img src="/upload/iblock/131/news_1.jpg" alt="">
				<p class="small">08.02.2017 14:16:28</p>
				<p>РЎРїРµС†РёР°Р»РёСЃС‚С‹ РїСЂРѕРІРѕРґСЏС‚ СЂР°Р±РѕС‚С‹ РїРѕ РѕР±СЉРµРєС‚Сѓ</p>
			</a>
                </div>
    <div class="loading-gif">
        <img src="/bitrix/templates/fdr_blackidea/img/loading.gif"/>
    </div>
    <a data-counter="2" href="#" class="js-more-news button button_green"><span class="button__border-top"></span>РџРѕРєР°Р·Р°С‚СЊ РµС‰Рµ<span class="button__border-bottom"></span></a>
</div>

";s:4:"VARS";a:2:{s:8:"arResult";a:7:{s:2:"ID";s:1:"3";s:14:"IBLOCK_TYPE_ID";s:4:"news";s:13:"LIST_PAGE_URL";s:6:"/news/";s:15:"NAV_CACHED_DATA";N;s:4:"NAME";s:14:"РќРѕРІРѕСЃС‚Рё";s:7:"SECTION";b:0;s:8:"ELEMENTS";a:1:{i:0;s:3:"366";}}s:18:"templateCachedData";a:3:{s:13:"additionalCSS";s:95:"/bitrix/templates/fdr_blackidea/components/bitrix/news/news/bitrix/news.list/.default/style.css";s:9:"frameMode";b:1;s:8:"__NavNum";i:1;}}}';
return true;
?>