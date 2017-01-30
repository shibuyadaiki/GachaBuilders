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
        var no = that.getPlayerNo(data.name);
        equip[no].mosnter.php_json_encode(data.val);
    };
    that.setHead = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].head.php_json_encode(data.val);
    };
    that.setShield = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].shield.php_json_encode(data.val);
    };
    that.setBody = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].body.php_json_encode(data.val);
    };
    that.setWeapon = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].weapon.php_json_encode(data.val);
    };
    that.setHood = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].hood.php_json_encode(data.val);
    };
    that.setAccessory = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].accessory.php_json_encode(data.val);
    };

    that.damage = function(p1,p2){
        var d = p2.def - p1.atk;
        d = Math.max(d, 1);

        var r = Math.random() * (100 - 0) + 0;
        var cr = 1;
        if(r < p1._cr){
          cr = 1.5;
        }
        r = Math.random() * (100 - 0) + 0;
        if(r < p2._dogde){
          cr = 0;
        }
        p2.hp -= d * cr;
        p2.hp = Math.max(p2.hp, 0);
        return p2;
    };

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
    that.eqT = function(equip){
      var data = {
        monster:0,
        hp:0,
        atk:0,
        def:0,
        luck:0,
        _cr:0,
        _dogde:0,
        shp:0,
        satk:0,
        sdef:0,
        sluck:0
      };

      for (var key in equip[0]) {
        if (equip[0].hasOwnProperty(key)) {
          if(key == 'monster'){
            data.satk += equip[0][key].atk;
            data.sdef += equip[0][key].def;
            data.shp += equip[0][key].hp;
            data.sluck += equip[0][key].luck;
            data.monster = equip[0][key].effect;
          }else{
            data.atk += equip[0][key].atk;
            data.def += equip[0][key].def;
            data.hp += equip[0][key].hp;
            data.luck += equip[0][key].luck;
          }
        }
      }
      data.atk *= data.satk;
      data.def *= data.sdef;
      data.hp *= data.shp;
      data.luck *= data.sluck;

      if(data.monster === 0){
        data._cr = data.luck / 100.0;
        data._dogde = data.luck / 100.0;
      }else if(data.monster == 1){

          data._cr = data.luck / 33.0;
          data._dogde = data.luck / 200.0;
      }else if(data.monster == 2){

          data._cr = data.luck / 200.0;
          data._dogde = data.luck / 33.0;
      }else{

          data._cr = data.luck / 50.0;
          data._dogde = data.luck / 50.0;
      }

      return data;
    };
    that.doBattle = function(){

        var playerdata = [that.eqT(equip[0]),that.eqT(equip[1])];

        var ret = that.play(playerdata[0],playerdata[1]);
        return ret;
    };

    return that;
}

module.exports = room;
