$(function () {
    var LAJQ = {
        autoload: function () {
            $('.ajax-form').on('submit',function(){
                var action = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();
                if(!method){
                    method = 'POST';
                }
                if(action != ''){
                    $.ajax({
                        type:method,
                        url:action,
                        data:data,
                        success:function(res){

                            if(res.code == 1){

                            }
                        }
                    })
                }
                return false;
            })
        },
        alert:function(options){
            //弹窗 确定

        },
        confirm:function(options){
            //弹窗 确定 取消 {title,msg,yes(function),not(function)}
            if(!options.title){
                options.title = '提示';
            }
            if(!options.msg){
                options.msg = '系统提示';
            }

        }
    }
})