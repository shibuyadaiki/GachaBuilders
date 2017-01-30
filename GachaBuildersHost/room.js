function room(){
    var that = {};
    var inPlayers = [];

    var equip = [{
      monster : require('./EquipEncode.js'),
      helm : require('./EquipEncode.js'),
      armor : require('./EquipEncode.js'),
      boots : require('./EquipEncode.js'),
      weapon : require('./EquipEncode.js'),
      shield : require('./EquipEncode.js'),
      accessory : require('./EquipEncode.js')
    },{
      monster : require('./EquipEncode.js'),
      helm : require('./EquipEncode.js'),
      armor : require('./EquipEncode.js'),
      boots : require('./EquipEncode.js'),
      weapon : require('./EquipEncode.js'),
      shield : require('./EquipEncode.js'),
      accessory : require('./EquipEncode.js')
    }];

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
    that.getPlayerNo = function(name){
        if(inPlayers[0] == name){
          return 0;
        }else{
          return 1;
        }
    };

    that.setMonster = function(data){
        var no = getPlayerNo(data.name);
        equip[no].mosnter.php_json_encode(data.val);
    };
    that.setHead = function(data){
        var no = getPlayerNo(data.name);
        equip[no].head.php_json_encode(data.val);
    };
    that.setShield = function(data){
        var no = getPlayerNo(data.name);
        equip[no].shield.php_json_encode(data.val);
    };
    that.setBody = function(data){
        var no = getPlayerNo(data.name);
        equip[no].body.php_json_encode(data.val);
    };
    that.setWeapon = function(data){
        var no = getPlayerNo(data.name);
        equip[no].weapon.php_json_encode(data.val);
    };
    that.setHood = function(data){
        var no = getPlayerNo(data.name);
        equip[no].hood.php_json_encode(data.val);
    };
    that.setAccessory = function(data){
        var no = getPlayerNo(data.name);
        equip[no].accessory.php_json_encode(data.val);
    };

    that.isStart = function(){
        if(Object.keys(handBuffer).length===2){
            return true;
        } else {
            return false;
        }
    };

    that.damage = function(p1,p2){
        var d = p2.def - p1.atk;
        d = Math.max(d, 1);
        p2.hp -= d;
        p2.hp = Math.max(p2.hp, 0);
        return p2;
    }

    that.play = function(p1,p2){
        var _p1 = p1;
        var _p2 = p2;
        for(var i = 0;i<100|| _p1.hp<=0||_p2.hp <=0;i++){
          _p2 = that.damage(_p1,_p2);
          _p1 = that.damage(_p2,_p1);
        }
        if(_p1.hp == _p2.hp ){
          return 'Draw';
        }else if(_p1.hp < p2.hp){
          return inPlayers[0];
        }
        return inPlayers[1];
    };
    that.doBattle = function(){
        var player1 = inPlayers[0];
        var player2 = inPlayers[1];
        var player1Head = equip[0].head;
        var player2Head = equip[1].head;

        playerdata = [{
          hp:0,
          atk:0,
          def:0,
          luck:0
        },{
          hp:0,
          atk:0,
          def:0,
          luck:0
        }];
        for (var key in equip[0]) {
          if (equip[0].hasOwnProperty(key)) {
            playerdata[0].atk += equip[0][key].atk;
            playerdata[0].def += equip[0][key].def;
            playerdata[0].hp += equip[0][key].hp;
            playerdata[0].luck += equip[0][key].luck;
          }
        }
        for (var key in equip[1]) {
          if (equip[1].hasOwnProperty(key)) {
            playerdata[1].atk += equip[1][key].atk;
            playerdata[1].def += equip[1][key].def;
            playerdata[1].hp += equip[1][key].hp;
            playerdata[1].luck += equip[1][key].luck;
          }
        }

        var ret = that.play(playerdata[0],playerdata[1]);
        return ret;
    };

    return that;
}

module.exports = room;
