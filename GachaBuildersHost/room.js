var equipdata = require('./EquipEncode.js');

function room() {
    var that = {};
    var inPlayers = [];
    var playerColor = ['<span style="color:#cd5c5c;">', '<span style="color:#6495ed;">'];
    var damageColor = '<span style="color:#D72323;">';
    var healColor = '<span style="color:#A6ED8E;">';

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
    that.getEquip = function (data) {
        return equip;
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

    that.floor = function(f){
        return Math.round(f*10)/10;
    }

    that.NumText = function (f) {
        
        if (f == 0) {
            return '<span style="color:">' + f + '</span>';
        } else if (f > 0) {
            return damageColor + f + '</span>';
        } else {
            return healColor + f + '</span>';
        }
    }
    that.NumTextR = function (f) {

        if (f == 0) {
            return '<span style="color:">' + f + '</span>';
        } else if (f < 0) {
            return damageColor + f + '</span>';
        } else {
            return healColor + f + '</span>';
        }
    }
    that.NumTextHP = function (f) {
        if (f == 0) {
            return '(+'+ f+')';
        } else if (f < 0) {
            return '(' + damageColor + f + '</span>)';
        } else {
            return '(' + healColor + '+' + f + '</span>)';
        }
    }
    var pcolor = '';

    that.damage = function (p1, p2, cr) {
        var def = p2.def - ((p2.def-100) * p1.armpen);
        var cut = def / 15.0;
        def = 1 - (def / 500.0);
        def = Math.max(def, 0.01);
        var d = ((p1.atk * cr * 0.5) * def) - cut;
        d = Math.max(d, 1);
        d += p1.add_damage;
        d = that.floor(d);
        p2.hp -= d;
        return d;
    };
    that.mirror = function (p1, p2, call, damage) {
        if (p1.mirror === 0) return;
        var text = '';
        var d = damage * p1.mirror;
        d = that.floor(d);
        p2.hp -= d;
        text = '反射で「' + that.NumText(d) + '」ダメージを受けた';
        call(pcolor + text);
    };
    that.regen = function (p1, p2, call) {
        if (p2.regen === 0) return;
        var text = '';
        p2.hp += p2.regen;
        text = '自動回復で「' + that.NumTextR(p2.regen) + '」回復した';
        call(pcolor + text);
    };
    that.drain = function (p1, p2, call,damage) {
        if (p2.drain === 0) return;
        var text = '';
        var d = damage * p2.drain;
        d = that.floor(d);
        p2.hp += d;
        text = 'ドレインで「' + that.NumTextR(d) + '」回復した';
        call(pcolor + text);
    };

    that.debuf = function (p1, p2, call) {
        var text = '';
        p2.dbf_slow *= 0.8;
        p2.dbf_slow = that.floor(p2.dbf_slow);

        if (p2.dbf_fire !== 0) {

            p2.hp -= p2.dbf_fire;
            text = '炎上で「' + that.NumText(p2.dbf_fire) + '」ダメージを受けた';
            call(pcolor + text);

            p2.dbf_fire *= 0.5;
            p2.dbf_fire = that.floor(p2.dbf_fire);
        }
        if (p2.dbf_poison_t !== 0) {
            p2.dbf_poison_t--;
            p2.hp -= p2.dbf_poison;
            text = '毒で「' + that.NumText(p2.dbf_poison) + '」ダメージを受けた(残り' + p2.dbf_poison_t + 'T)';
            call(pcolor + text);
        }
    };

    that.nextTurn = function (p1, p2, call) {
        var maxattack = p2.add_attack + 1;
        for (var i = 0; i < maxattack; i++) {
            if (i >= 1) {
                call(pcolor + '連続行動');
            }

            that.regen(p1, p2, call);
            that.debuf(p1, p2, call);
            var text = '';
            var damageText = '攻撃!';
            var crText = '';
            var cr = 1;
            var r = Math.random();
            if (r < p2._cr) {
                cr = 1.25;
                crText = '☆クリティカル☆';
            }
            r = Math.random();
            if (r < p1._dogde) {
                text = '攻撃を回避された';
                call(pcolor + text);
            } else {
                var damage = that.damage(p2, p1, cr);
                if (p2.armpen !== 0) {
                    damageText = '防御貫通' + damageText;
                }
                if (p2.add_fire !== 0) {
                    damageText = '炎の' + damageText;
                }
                if (p2.add_slow !== 0) {
                    damageText = '氷の' + damageText;
                }
                if (p2.poison !== 0) {
                    damageText = '毒の' + damageText;
                }
                text = crText + damageText + '「' + that.NumText(damage) + '」ダメージを与えた';
                call(pcolor+text);

                r = Math.random();
                if (r < p2.poison) {
                    p1.dbf_poison_t = 3;
                    p1.dbf_poison += damage * 0.1 + p1.hp * 0.025;
                    p1.dbf_poison = that.floor(p1.dbf_poison);
                    call(pcolor + '毒を付与した');
                }

                that.drain(p1, p2, call, damage);
                that.mirror(p1, p2, call, damage);

                p1.dbf_fire += p2.add_fire;
                p1.dbf_slow += p2.add_slow;
            }

            r = Math.random();
            if (r < p2._doble) {
                maxattack++;
            }
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
    var battlelogid;
    that.isFinish = function (call,fincall, turn, p1, p2) {

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
            call('############ゲーム終了############');
            call(playerColor[0] + '[' + inPlayers[0] + '] HP:' + p1.hp);
            call(playerColor[1] + '[' + inPlayers[1] + '] HP:' + p2.hp);
            clearInterval(battlelogid);
            var name = that.getWiner(p1, p2);
            call(name);
            fincall();
        }
        return end;
    };
    that.play = function (call, fincall, p1, p2) {

        var turn = 0;
        var actspd = Math.max(p1.spd, p2.spd);
        var p1spd = 0;
        var p2spd = 0;
        var startcall = function (no) {
            pcolor = playerColor[no];
            call(playerColor[no]+'############' + turn + 'T[' + inPlayers[no] + ']の行動############');
        }

        var subhp = function (hp, p1, p2) {

            var s1 = p1.hp - hp.p1;
            var s2 = p2.hp - hp.p2;
            var text1 = '';
            var text2 = '';
            s1 = that.floor(s1);
            s2 = that.floor(s2);
            text1 = that.NumTextHP(s1);
            text2 = that.NumTextHP(s2);

            call('</span>[' + playerColor[0] + inPlayers[0] + '</span>] HP:' + p1.hp + text1 + ' [' + playerColor[1] + inPlayers[1] + '</span>] HP:' + p2.hp + text2);
        }
        var patk = [function(){
                if(actspd <= p1spd){
                    p1spd -= actspd;
                    var hp = { p1:p1.hp,p2:p2.hp};
                    startcall(0);
                    that.nextTurn(p2, p1, call);
                    p1.hp = Math.max(p1.hp, 0);
                    p2.hp = Math.max(p2.hp, 0);
                    p1.hp = that.floor(p1.hp);
                    p2.hp = that.floor(p2.hp);
                    subhp(hp, p1, p2);
                    return true;
                }
                return false;
            },
            function(){
                if(actspd <= p2spd){
                    p2spd -= actspd;
                    var hp = { p1: p1.hp, p2: p2.hp };
                    startcall(1);
                    that.nextTurn(p1, p2, call);
                    p1.hp = Math.max(p1.hp, 0);
                    p2.hp = Math.max(p2.hp, 0);
                    p1.hp = that.floor(p1.hp);
                    p2.hp = that.floor(p2.hp);
                    subhp(hp, p1, p2);
                    return true;
                }
                return false;
            }];
        var func = function () { return false;};
        battlelogid = setInterval(function () {
            turn++;
            if (func()) {
                func = function () { return false; };
                that.isFinish(call, fincall, turn, p1, p2);
                return;
            }
            p1spd += Math.max(p1.spd - p1.dbf_slow, 1);
            p2spd += Math.max(p2.spd - p2.dbf_slow, 1);
            if(p1spd == p2spd){
                // 0 or 1
                var r = Math.round(Math.random());

                func = function () {
                    return patk[(r + 1) % 2]();
                }
                if (!patk[r]()) {
                    func();
                }
                that.isFinish(call, fincall, turn, p1, p2);
            }else{
                if (p1spd > p2spd) {

                    func = function () {
                        return patk[1]();
                    }
                    if (!patk[0]()) {
                        func();
                    }
                    that.isFinish(call, fincall, turn, p1, p2);
                } else {

                    func = function () {
                        return patk[0]();
                    }
                    if (!patk[1]()) {
                        func();
                    }
                    that.isFinish(call, fincall, turn, p1, p2);
                }

            }

        }, 1000);

        //for(var i = 0;i<100;i++){
        //    _p1 = that.nextTurn(_p1, inPlayers[0], _p2, inPlayers[1], coll);
        //    _p2 = that.nextTurn(_p2, inPlayers[1], _p1, inPlayers[0], coll);
        //    if (_p1.hp <= 0) break;
        //    if (_p2.hp <= 0) break;
        //}
    };

    //101-5攻撃、防御、スピード、運, x1.4, 全部 x1.2
    //106-8クリUP
    //109 反射20
    //110 貫通25
    //111 連続攻撃10
    //112 回復5
    //113 ドレイン20
    //114 鈍足効果5
    //115 炎上5

    //116-8 固定ダメ追加 2 4 8
    //119 反射 40
    //120-1 自動回復 2 8
    //122 回避アップ 15
    //123 呪い

    that.addeffect = function (data, effect) {
        if (effect === 0) return;
        else if (effect === 1) {
            data.armpen += 0.25;
        }
        else if (effect === 2) {
            data.mirror += 0.1;
        }
        else if (effect === 3) {
            data.regen += 5;
        }
        else if (effect === 101) {
            data.satk += 0.4;
        }
        else if (effect === 102) {
            data.sdef += 0.4;
        }
        else if (effect === 103) {
            data.sspd += 0.4;
        }
        else if (effect === 104) {
            data.sluck += 0.4;
        }
        else if (effect === 105) {
            data.shp += 0.2;
            data.satk += 0.2;
            data.sdef += 0.2;
            data.sspd += 0.2;
            data.sluck += 0.2;
        }
        else if (effect === 106) {
            data._cr += 0.05;
        }
        else if (effect === 107) {
            data._cr += 0.1;
        }
        else if (effect === 108) {
            data._cr += 0.15;
        }
        else if (effect === 109) {
            data.mirror += 0.15;
        }
        else if (effect === 110) {
            data.armpen += 0.25;
        }
        else if (effect === 111) {
            data._doble += 0.1;
        }
        else if (effect === 112) {
            data.regen += 8;
        }
        else if (effect === 113) {
            data.drain += 0.2;
        }
        else if (effect === 114) {
            data.add_slow += 5;
        }
        else if (effect === 115) {
            data.add_fire += 5;
        }
        else if (effect === 116) {
            data.add_damage += 5;
        }
        else if (effect === 117) {
            data.add_damage += 10;
        }
        else if (effect === 118) {
            data.add_damage += 20;
        }
        else if (effect === 119) {
            data.mirror += 0.3;
        }
        else if (effect === 120) {
            data.regen += 4;
        }
        else if (effect === 121) {
            data.regen += 16;
        }
        else if (effect === 122) {
            data._dogde += 0.15;
        }
        else if (effect === 123) {
            data._cr += 0.25;
            data._dogde -= 1;
            data.add_fire += 5;
            data.add_slow += 5;
            data.poison += 0.25;
            data.add_damage += 5;
            data.armpen += 0.1;
            data.mirror += 0.1;
            data.regen += -8;
            data.drain += 0.1;
        }
        else if (effect == 124) {
            data.add_slow += 10;
        }
        else if (effect == 125) {
            data.add_fire += 10;
        }
        else if (effect == 126) {
            data.satk += 0.2;
        }
        else if (effect == 127) {
            data.sspd += 0.2;
        }
        else if (effect == 128) {
            data.drain += 0.1;
        }
        else if (effect == 129) {
            data.drain += 0.15;
        }
        else if (effect == 130) {
            data.armpen += 0.05;
        }
        else if (effect == 131) {
            data.armpen += 0.15;
        }
        else if (effect == 132) {
            data._dogde += 0.05;
        }
        else if (effect == 133) {
            data._dogde += 0.10;
        }
        else if (effect == 134) {
            data.add_slow += 2;
        }
        else if (effect == 135) {
            data.poison += 0.1;
        }
        else if (effect == 136) {
            data.poison += 0.25;
        }
        else if (effect == 137) {
            data.poison += 0.5;
        }
        else if (effect == 138) {
            data.shp += 0.2;
        }
        else if (effect === 210) {
            data.add_attack += 1;
        }
        else if (effect === 211) {
            data.sdef += 0.2;
        }
        else if (effect == 212) {
            data.add_fire += 2;
        }
        else if (effect === 810) {
            data.egz += 1;
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
        _doble: 0,

        armpen: 0,
        mirror: 0,
        regen: 0,
        drain: 0,
        poison: 0,

        add_attack: 0,
        add_damage: 0,
        add_slow: 0,
        add_fire: 0,

        dbf_slow:0,
        dbf_fire: 0,
        dbf_poison: 0,
        dbf_poison_t: 0,

        egz:0,

        shp:1,
        satk:1,
        sspd:1,
        sdef:1,
        sluck:1
      };

      for (var key in equip) {
        if (equip.hasOwnProperty(key)) {
            if(key == 'monster'){
                data.monster = equip[key].effect;
            } else {
                that.addeffect(data, equip[key].effect);
            }
            data.atk += equip[key].atk;
            data.def += equip[key].def;
            data.spd += equip[key].spd;
            data.hp += equip[key].hp;
            data.luck += equip[key].luck;

        }
      }

    data.atk *= data.satk;
    data.def *= data.sdef;
    data.spd *= data.sspd;
    data.hp *= data.shp;
    data.luck *= data.sluck;

    data.hp = Math.max(data.hp,1);
    data.atk = Math.max(data.atk,0);
    data.def = Math.max(data.def,0);
    data.spd = Math.max(data.spd,1);
    data.luck = Math.max(data.luck, 0);

    data.atk += 75;
    data.def += 200;
    data.spd += 50;

    if (data.egz >= 5) {

        data.hp = 9999;
        data.atk = 9999;
        data.def = 9999;
        data.spd = 9999;
        data.luck = 9999;
    }

      if(data.monster === 0){
        data._cr += data.luck / 400.0;
        data._dogde += data.luck / 400.0;
      }else if(data.monster == 1){

          data._cr += data.luck / 500.0;
          data._dogde += data.luck / 200.0;
      }else if(data.monster == 2){

          data._cr += data.luck / 200.0;
          data._dogde += data.luck / 500.0;
      }else{

          data._cr += data.luck / 300.0;
          data._dogde += data.luck / 300.0;
      }

      data._dogde = Math.min(data._dogde, 0.95);
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
