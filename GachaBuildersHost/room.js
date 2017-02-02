var equipdata = require('./EquipEncode.js');

function room() {
    var that = {};
    var inPlayers = [];

    var playerData = [];
    that.isEnd = false;
    var equip = [{
      monster : equipdata(),
      helm : equipdata(),
      armor : equipdata(),
      boots : equipdata(),
      weapon : equipdata(),
      shield : equipdata(),
      accessory : equipdata()
    },{
      monster : equipdata(),
      helm : equipdata(),
      armor : equipdata(),
      boots : equipdata(),
      weapon : equipdata(),
      shield : equipdata(),
      accessory : equipdata()
    }];

    that.join = function(name){
        inPlayers.push(name);
    };
    that.leave = function (name) {
        inPlayers.some(function (v, i) {
            if (v == name) inPlayers.splice(i, 1);
        });
    }
    that.GetPlayerNum = function () {
        return inPlayers.length;
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
    that.isGameEnd = function () {
        return that.isEnd;
    };

    that.setMonster = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].monster.php_json_encode(data.val);
    };
    that.setHelm = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].helm.php_json_encode(data.val);
    };
    that.setShield = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].shield.php_json_encode(data.val);
    };
    that.setArmor = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].armor.php_json_encode(data.val);
    };
    that.setWeapon = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].weapon.php_json_encode(data.val);
    };
    that.setBoots = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].boots.php_json_encode(data.val);
    };
    that.setAccessory = function(data){
        var no = that.getPlayerNo(data.name);
        equip[no].accessory.php_json_encode(data.val);
    };

    that.damage = function (p1, p2, cr) {
        var def = p2.def - (p2.def * p1.armpen);
        var d = (p1.atk * cr) - def;
        d = Math.max(d, 1);
        p2.hp -= d;
        p2.hp = Math.max(p2.hp, 0);
        return d;
    };
    that.mirror = function (p1, name1, p2, name2, call, damage) {
        if (p1.mirror === 0) return;
        var text = '';
        var d = damage * p1.mirror;
        p2.hp -= d;
        p2.hp = Math.max(p2.hp, 0);
        text = name1 + 'の攻撃反射で' + d + 'ダメージを受けて' + name2 + 'のHPが' + p2.hp + 'になった。';
        call(text);
    };
    that.regen = function (p1, name1, p2, name2, call) {
        if (p2.regen === 0) return;
        var text = '';
        p2.hp += p2.regen;
        text = name2 + 'の自動HP' + p2.regen + '回復で' + name2 + 'のHPが' + p2.hp + 'になった。';
        call(text);
    };

    that.nextTurn = function (p1, name1, p2, name2, call) {
      that.regen(p1, name1, p2, name2, call);
      var text='';
      var damageText = '攻撃';
      var cr = 1;
      var r = Math.random();
      if(r < p2._cr){
        cr = 1.5;
        damageText = 'クリティカル攻撃';
      }
      r = Math.random()
      if(r < p1._dogde){
          text = name1 + 'は攻撃を回避した！';
          call(text);
      } else {
          var damage = that.damage(p2, p1, cr);
          if (p2.armpen !== 0) {
              damageText = '防御貫通'+damageText;
          }
          text = name2 + 'が' + damage + 'ダメージの' + damageText + 'をして' + name1 + 'のHPが' + p1.hp + 'になった。';
          call(text);

          that.mirror(p1, name1, p2, name2, call, damage);
      }

    };
    that.getWiner = function(_p1,_p2){
      if(_p1.hp == _p2.hp ){
        return 'Draw';
      }else if(_p1.hp > _p2.hp){
          return inPlayers[0] + 'の勝ち';
      }
      return inPlayers[1] + 'の勝ち';
    };

    that.play = function (call, fincall, p1, p2) {

        var turn = 0;
        var actspd = Math.max(p1.spd, p2.spd);
        var p1spd = 0;
        var p2spd = 0;
        var patk = [function(){
            if(actspd <= p1spd){
                p1spd -= actspd;
                that.nextTurn(p2, inPlayers[1], p1, inPlayers[0], call);
            }
            },
            function(){
                if(actspd <= p2spd){
                    p2spd -= actspd;
                    that.nextTurn(p1, inPlayers[0], p2, inPlayers[1], call);
                }
            }];
        var id = setInterval(function () {
            turn++;
            p1spd += p1.spd;
            p2spd += p2.spd;
            if(p1spd == p2spd){
                // 0 or 1
                var r = Math.round( Math.random() ) ;
                patk[r]();
                patk[(r+1)%2]();
            }else{
                if(p1spd>p2spd){
                    patk[0]();
                    patk[1]();
                }else{
                    patk[1]();
                    patk[0]();
                }

            }


            //終了条件
            var end = false;
            if (p1.hp <= 0) {
                end = true;
            }
            if (p2.hp <= 0) {
                end = true;
            }
            if (turn >= 100) {
                end = true;
            }
            if (end) {
                clearInterval(id);
                var name = that.getWiner(p1, p2);
                fincall(name);
            }
        }, 500);

        //for(var i = 0;i<100;i++){
        //    _p1 = that.nextTurn(_p1, inPlayers[0], _p2, inPlayers[1], coll);
        //    _p2 = that.nextTurn(_p2, inPlayers[1], _p1, inPlayers[0], coll);
        //    if (_p1.hp <= 0) break;
        //    if (_p2.hp <= 0) break;
        //}
    };
    that.addeffect = function (data, effect) {
        if (effect === 0) return;
        if (effect === 1) {
            data.armpen += 0.25;
        }
        if (effect === 2) {
            data.mirror += 0.1;
        }
        if (effect === 3) {
            data.regen += 5;
        }
    }
    that.eqT = function(equip){
      var data = {
        monster:0,
        hp:0,
        atk:0,
        def: 0,
        spd: 0,
        luck:0,
        _cr:0,
        _dogde: 0,

        armpen: 0,
        mirror: 0,
        regen: 0,

        shp:0,
        satk:0,
        sdef:0,
        sluck:0
      };

      for (var key in equip) {
        if (equip.hasOwnProperty(key)) {
            if(key == 'monster'){
                //data.satk += equip[key].atk;
                //data.sdef += equip[key].def;
                //data.shp += equip[key].hp;
                //data.sluck += equip[key].luck;
                data.monster = equip[key].effect;
            }
            data.atk += equip[key].atk;
            data.def += equip[key].def;
            data.spd += equip[key].spd;
            data.hp += equip[key].hp;
            data.luck += equip[key].luck;

            that.addeffect(data, equip[key].effect);
        }
      }
    data.hp = Math.max(data.hp,1);
    data.atk = Math.max(data.atk,0);
    data.def = Math.max(data.def,0);
    data.spd = Math.max(data.spd,1);
    data.luck = Math.max(data.luck,0);
      //data.atk *= data.satk;
      //data.def *= data.sdef;
      //data.hp *= data.shp;
      //data.luck *= data.sluck;

      if(data.monster === 0){
        data._cr = data.luck / 400.0;
        data._dogde = data.luck / 400.0;
      }else if(data.monster == 1){

          data._cr = data.luck / 500.0;
          data._dogde = data.luck / 200.0;
      }else if(data.monster == 2){

          data._cr = data.luck / 200.0;
          data._dogde = data.luck / 500.0;
      }else{

          data._cr = data.luck / 300.0;
          data._dogde = data.luck / 300.0;
      }

      return data;
    };
    that.doBattle = function (call, fincall) {
        that.isEnd = true;
        var p1d = that.eqT(equip[0]);
        var p2d = that.eqT(equip[1]);
        playerData.push(p1d);
        playerData.push(p2d);

        console.log(playerData[0].hp);
        console.log(playerData[1].hp);

        call('戦闘開始');
      that.play(call, fincall, playerData[0], playerData[1]);
    };

    return that;
}

module.exports = room;
