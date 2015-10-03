$(document).ready(function () {

    $('.game-container img').on('click', function () {
        var game_name = $(this).closest('.game-container').data('game-name'),
            game_code = $(this).closest('.game-container').data('game-code'),
            machine_id = $(this).closest('.game-container').data('machine-id'),
            denominations = $(this).closest('.game-container').data('denominations'),
            hands = $(this).closest('.game-container').data('hands');

        if(denominations == ''){
            denominations = null;
        }
        openGame(game_name, game_code, machine_id, denominations, hands);
    });

    //select next tab when swipe left
    $('.game-container').on('swipeleft', function(){
        $('.nav-tabs .active').next('li').find('a').trigger('click');
    });

    //select previous tab when swipe right
    $('.game-container').on('swiperight', function(){
        $('.nav-tabs .active').prev('li').find('a').trigger('click');
    });

    //show play icon
    $('.thumbnail').on('mouseenter', function(){
        $(this).find('span').css("display", "block");
    });

    $('.thumbnail').on('mouseleave', function(){
        $(this).find('span').css("display", "none");
    });
});

/**
 * 
 * @param string game_name
 * @param string game_code
 * @param string machine_id
 * @param string denominations
 * @param string hands
 */
function openGame(game_name, game_code, machine_id, denominations, hands){
    alert('Calling openGame() with args: \r\n game_name: ' + game_name + ' \r\n game_code: ' + game_code + ' \r\n machine_id: ' + machine_id + ' \r\n denominations: ' + denominations + ' \r\n hands: '+hands);
}
