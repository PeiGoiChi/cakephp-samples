<?php $this->assign('script','<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>') ?>
<?php $this->Html->css('grid', ['block' => true]) ?>
<script>
    $(function(){
        $('#grid-wrap').hide();
        $('.panel-content--0').show();
        $('.panel-content--1').hide();
        $('.panel-content--2').hide();
        $(document).on('click','.add-panel',function(){
            $(this).closest('.panel').parent().append($('#grid-wrap').html());
        });
        $(document).on('click','.del-panel',function(){
            $(this).closest('.panel').remove();
        });
        $(document).on('click','.container1-show',function(){
            $(this).closest('.panel').find('.panel-content--0').hide();
            $(this).closest('.panel').find('.panel-content--2').hide();
            $(this).closest('.panel').find('.panel-content--1').show();
        });
        $(document).on('click','.container2-show',function(){
            $(this).closest('.panel').find('.panel-content--0').hide();
            $(this).closest('.panel').find('.panel-content--1').hide();
            $(this).closest('.panel').find('.panel-content--2').show();
        });
        $(document).on('click','.container0-show',function(){
            $(this).closest('.panel').find('.panel-content--1').hide();
            $(this).closest('.panel').find('.panel-content--2').hide();
            $(this).closest('.panel').find('.panel-content--0').show();
        });
    });
</script>
<div class="grid">
    <div class="panel grid__item grid__item--1on3 has-gutter">
        <div class="grid__item grid__item--9on10">
            <input type="text" value="0"/>
        </div>
        <div class="add-panel panel-title grid__item grid__item--1on10" style="cursor:pointer;text-align:center;">+</div>            
    </div>
</div>    
<div id="grid-wrap">    
    <div class="panel grid__item grid__item--1on3 has-gutter">
        <div class="grid">
            <div class="panel-title grid__item grid__item--9on10 titleX">unknown</div>            
            <div class="del-panel panel-title grid__item grid__item--1on10" style="cursor:pointer;text-align:center;">X</div>            
        </div>
        <div class="panel-content--0">
            <button class="btn container1-show">comments</button>
            <button class="btn container2-show">graph</button>
        </div>
        <div  class="panel-content--1">
            <div class="btn container0-show panel-title grid__item">close</div>            
            <textarea>comments</textarea>
        </div>
        <div  class="panel-content--2">
            <div class="btn container0-show panel-title grid__item">close</div>            
            <textarea>graph</textarea>
        </div>
    </div>
</div>
