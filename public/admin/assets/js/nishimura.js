const refreshPage = () => {
    document.location.reload();
}
$(document).ready(function(){
    console.log('Greetings from nishimurastaros@outlook.com');
    var car_id = 0;
    var refresh = $('#nishimura_refresh').val();
    $('.check_out_action').click(function(){
        car_id = $(this).data('id');
    })
    $('.check_out').click(function(){
        console.log('Checking out...');
        var name = $('#name').val();
        var time = $('#checkout-time').val();
        let url = document.location.origin + '/cars/checkout/' + car_id;
        let _token = $('#_token').val();
        $.post(url, {_token, name, time}, function(data){
            if (data) {
                console.log(data);
                if(refresh == "1") 
                    document.location.reload();
                else {
                    $('#'+id+'_status').removeClass();
                    $('#'+id+'_status').addClass('badge badge-dim badge-sm badge-outline-success');
                    $('#'+id+'_status').text('Staged');
                }
            }
        });
    })
    $('.return_action').click(function(){
        console.log('Returning...');
        var id = $(this).data('id');
        let url = document.location.origin + '/cars/return/' + id;
        let _token = $('#_token').val();
        $.post(url, {_token}, function(data){
            if (data) {
                console.log(data);
                if(refresh == "1") 
                    document.location.reload();
                else {
                    $('#'+id+'_status').removeClass();
                    $('#'+id+'_status').addClass('badge badge-dim badge-sm badge-outline-success');
                    $('#'+id+'_status').text('return');
                }
            }
        });
    })
    $('#search_text').keypress(function(e){
        // console.log(e.key);
        if (e.key == "Enter") {
            $('.search-submit').click();        
        }
    })
    $('.search-submit').click(function(){
        location.href = '?search=' + $('#search_text').val();
    })
    $('.nk-ibx-link').click(function(){
        // if($(this).siblings().eq(2).find('.nk-ibx-context').hasClass('nishimura_wrap'))
        //     $('.nishimura_wrap').removeClass('nishimura_wrap');
        // else
        // {
        //     $('.nishimura_wrap').removeClass('nishimura_wrap');
        //     $(this).siblings().eq(2).find('.nk-ibx-context').addClass('nishimura_wrap');
        // }
        // // console.log($(this).siblings().eq(2).find('.nk-ibx-context').html());
        // $id = $(this).data('id');
    })
})