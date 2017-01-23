function room(){
    var that = {};
    var inPlayers = [];
    var monster = {};
    var head = {};
    var body = {};
    var hood = {};
    var weapon = {};
    var shield = {};
    var accessory = {};

    that.Janken = janken();

    that.join = function(name){
        inPlayers.push(name);
    };

    that.isStartGame = function(){
        if(inPlayers.length === 2){
            return true;
        }  else {
            return false;
        }
    };

    that.getPlayers = function(){
        inPlayers.sort();
        return inPlayers;
    };

    that.setHead = function(data){
        var name = data.name;
        var hand = data.val;
        head[name] = hand;
    };

    that.isStart = function(){
        if(Object.keys(handBuffer).length===2){
            return true;
        } else {
            return false;
        }
    };

    that.play = function(p1,p2){
        if(p1.ATK == p2.ATK ){
          return 'Draw';
        }else if(p1.ATK > p2.ATK){
          return inPlayers[0];
        }
        return inPlayers[1];
    };
    that.doBattle = function(){
        var player1 = inPlayers[0];
        var player2 = inPlayers[1];
        var player1Head = head[player1];
        var player2Head = head[player2];

        var ret = that.play(player1Head,player2Head);
        return ret;
    };

    return that;
}

module.exports = room;
