var room = require('./room.js');

function gameServer(spec, my) {
    var ajax = require('ajax-lib');
    var app = spec.httpServer;
    var logLevel = spec.logLevel || 1;
    var io = require('socket.io').listen(app, {
        'log level' : logLevel
    });

    var timeOutID60;
    var timeOutID90;

    var HasNull = function (socket) {
        if (typeof socket.loginInfo === "undefined") return true;
        return false;
    }

    var mainRoom = room();

    var hideEquip = function (roomId) {
        io.sockets.in(roomId).emit('HideEquip');
    };


    var onBattle = function (roomId) {
        allReloadEquip(roomId);
        mainRoom.doBattle(function (text) {
            io.sockets.in(roomId).emit('BattleLog', text);
            console.log(text);
        },function () {
            //io.sockets.in(roomId).emit('OnBattle', text);
            io.sockets.in(roomId).emit('Leave');
            console.log('room reset');
            mainRoom = room();
        });
    };


    //101-5攻撃、防御、スピード、運, x1.2, 全部 x1.1
    //106-8クリUP
    //109 反射10
    //110 貫通25
    //111 連続攻撃10
    //112 回復5
    //113 ドレイン20
    //114 鈍足効果5
    //115 炎上3
    //116-8 固定ダメ追加 2 4 8
    //119 反射 40
    //120-1 自動回復 2 8
    //122 回避アップ 15
    //123 呪い
    var addEffectText = function (eq) {
        var ef = eq.val.EFFECT;
        if(ef == 0){
            eq.val.EFFECT_TEXT = '無し';
        }
        else if(ef == 1){
            eq.val.EFFECT_TEXT = '防御貫通+25%';
        }
        else if(ef == 2){
            eq.val.EFFECT_TEXT = '反射+10%';
        }
        else if(ef == 3){
            eq.val.EFFECT_TEXT = '自動回復+5';
        }
        else if (ef == 101) {
            eq.val.EFFECT_TEXT = 'ATK x1.4';
        }
        else if (ef == 102) {
            eq.val.EFFECT_TEXT = 'DEF x1.4';
        }
        else if (ef == 103) {
            eq.val.EFFECT_TEXT = 'SPD x1.4';
        }
        else if (ef == 104) {
            eq.val.EFFECT_TEXT = 'LUK x1.4';
        }
        else if (ef == 105) {
            eq.val.EFFECT_TEXT = '全能力 x1.2';
        }
        else if (ef == 106) {
            eq.val.EFFECT_TEXT = 'クリティカル+5%';
        }
        else if (ef == 107) {
            eq.val.EFFECT_TEXT = 'クリティカル+10%';
        }
        else if (ef == 108) {
            eq.val.EFFECT_TEXT = 'クリティカル+15%';
        }
        else if(ef == 109){
            eq.val.EFFECT_TEXT = '反射+15%';
        }
        else if (ef == 110) {
            eq.val.EFFECT_TEXT = '防御貫通+25%';
        }
        else if (ef == 111) {
            eq.val.EFFECT_TEXT = '連続攻撃+10%';
        }
        else if (ef == 112) {
            eq.val.EFFECT_TEXT = '自動回復+8';
        }
        else if (ef == 113) {
            eq.val.EFFECT_TEXT = 'ドレイン+20%';
        }
        else if (ef == 114) {
            eq.val.EFFECT_TEXT = '氷属性+5';
        }
        else if (ef == 115) {
            eq.val.EFFECT_TEXT = '火属性+5';
        }
        else if (ef == 116) {
            eq.val.EFFECT_TEXT = '固定ダメ追加+5';
        }
        else if (ef == 117) {
            eq.val.EFFECT_TEXT = '固定ダメ追加+10';
        }
        else if (ef == 118) {
            eq.val.EFFECT_TEXT = '固定ダメ追加+20';
        }
        else if (ef == 119) {
            eq.val.EFFECT_TEXT = '反射+30%';
        }
        else if (ef == 120) {
            eq.val.EFFECT_TEXT = '自動回復+4';
        }
        else if (ef == 121) {
            eq.val.EFFECT_TEXT = '自動回復+16';
        }
        else if (ef == 122) {
            eq.val.EFFECT_TEXT = '回避+15%';
        }
        else if (ef == 123) {
            eq.val.EFFECT_TEXT = '呪い';
        }
        else if (ef == 124) {
            eq.val.EFFECT_TEXT = '氷属性+10';
        }
        else if (ef == 125) {
            eq.val.EFFECT_TEXT = '火属性+10';
        }
        else if (ef == 126) {
            eq.val.EFFECT_TEXT = 'ATK x1.2';
        }
        else if (ef == 127) {
            eq.val.EFFECT_TEXT = 'SPD x1.2';
        }
        else if (ef == 128) {
            eq.val.EFFECT_TEXT = 'ドレイン+10%';
        }
        else if (ef == 129) {
            eq.val.EFFECT_TEXT = 'ドレイン+15%';
        }
        else if (ef == 130) {
            eq.val.EFFECT_TEXT = '防御貫通+5%';
        }
        else if (ef == 131) {
            eq.val.EFFECT_TEXT = '防御貫通+15%';
        }
        else if (ef == 132) {
            eq.val.EFFECT_TEXT = '回避+5%';
        }
        else if (ef == 133) {
            eq.val.EFFECT_TEXT = '回避+10%';
        }
        else if (ef == 134) {
            eq.val.EFFECT_TEXT = '氷属性+2';
        }
        else if (ef == 135) {
            eq.val.EFFECT_TEXT = '毒+10%';
        }
        else if (ef == 136) {
            eq.val.EFFECT_TEXT = '毒+25%';
        }
        else if (ef == 137) {
            eq.val.EFFECT_TEXT = '毒+50%';
        }
        else if (ef == 138) {
            eq.val.EFFECT_TEXT = 'HP x1.2';
        }

        else if (ef == 210) {
            eq.val.EFFECT_TEXT = '行動回数+1';
        }
        else if (ef == 211) {
            eq.val.EFFECT_TEXT = 'DEF x1.2';
        }
        else if (ef == 212) {
            eq.val.EFFECT_TEXT = '火属性+2';
        }
        else if (ef == 810) {
            eq.val.EFFECT_TEXT = '封印されし';
        }
    };
    var ReloadEquip = function (e, send, name, roomId) {

        var eq = {
            name: name,
            val: {
                name: e.name,
                img: e.img,
                HP: e.hp,
                ATK: e.atk,
                DEF: e.def,
                SPD: e.spd,
                LUK: e.luck,
                RARE: e.rare,
                EFFECT: e.effect
            },
            force:true
        };
        addEffectText(eq);
        io.sockets.in(roomId).emit(send, eq);
    };

    var allReloadEquip = function (roomId) {

        var player = mainRoom.getPlayers();
        var equip = mainRoom.getEquip();

        for (var i = 0; i < 2; i++) {
            ReloadEquip(equip[i].monster, 'ChangeMonster', player[i], roomId);
            ReloadEquip(equip[i].armor, 'ChangeArmor', player[i], roomId);
            ReloadEquip(equip[i].helm, 'ChangeHelm', player[i], roomId);
            ReloadEquip(equip[i].boots, 'ChangeBoots', player[i], roomId);
            ReloadEquip(equip[i].weapon, 'ChangeWeapon', player[i], roomId);
            ReloadEquip(equip[i].shield, 'ChangeShield', player[i], roomId);
            ReloadEquip(equip[i].accessory, 'ChangeAcce', player[i], roomId);
        }
    };

    var preurl = 'http://localhost:5900/GachaBuildersHost/';
    var PlayGacha = function (socket, php, send, setfunc) {
        if (HasNull(socket)) return;
        if (mainRoom.isGameEnd()) return;
        if (!mainRoom.isStartGame()) return;
        ajax.get(preurl + php, function (err, json) {
            if (err !== null) {
                console.log(err);
                return;
            }
            if (typeof json.body === "undefined") {
                console.log('json.body = undefined');
                return;
            }
            var roomId = socket.loginInfo.roomId;
            var name = socket.loginInfo.name;
            var eq = {
                name: name,
                val: JSON.parse(json.body),
                force:false
            };
            addEffectText(eq);
            setfunc(eq);
            io.sockets.in(roomId).emit(send, eq);
        });
    };

    var PlayGachaInit = function (roomId) {

        var player = mainRoom.getPlayers();
        var p1 = {
            loginInfo: {
                roomId: roomId,
                name: player[0]
            }
        };
        var p2 = {
            loginInfo: {
                roomId: roomId,
                name: player[1]
            }
        };

        PlayGacha(p1, 'monsterGacha.php', 'ChangeMonster', function (eq) { mainRoom.setMonster(eq); });
        PlayGacha(p1, 'helmGacha.php', 'ChangeHelm', function (eq) { mainRoom.setHelm(eq); });
        PlayGacha(p1, 'armorGacha.php', 'ChangeArmor', function (eq) { mainRoom.setArmor(eq); });
        PlayGacha(p1, 'bootsGacha.php', 'ChangeBoots', function (eq) { mainRoom.setBoots(eq); });
        PlayGacha(p1, 'weaponGacha.php', 'ChangeWeapon', function (eq) { mainRoom.setWeapon(eq); });
        PlayGacha(p1, 'shieldGacha.php', 'ChangeShield', function (eq) { mainRoom.setShield(eq); });
        PlayGacha(p1, 'acceGacha.php', 'ChangeAcce', function (eq) { mainRoom.setAccessory(eq); });

        PlayGacha(p2, 'monsterGacha.php', 'ChangeMonster', function (eq) { mainRoom.setMonster(eq); });
        PlayGacha(p2, 'helmGacha.php', 'ChangeHelm', function (eq) { mainRoom.setHelm(eq); });
        PlayGacha(p2, 'armorGacha.php', 'ChangeArmor', function (eq) { mainRoom.setArmor(eq); });
        PlayGacha(p2, 'bootsGacha.php', 'ChangeBoots', function (eq) { mainRoom.setBoots(eq); });
        PlayGacha(p2, 'weaponGacha.php', 'ChangeWeapon', function (eq) { mainRoom.setWeapon(eq); });
        PlayGacha(p2, 'shieldGacha.php', 'ChangeShield', function (eq) { mainRoom.setShield(eq); });
        PlayGacha(p2, 'acceGacha.php', 'ChangeAcce', function (eq) { mainRoom.setAccessory(eq); });
    }

    //mainRoom.join('t');
    //ajax.get('http://localhost:5900/GachaBuildersHost/acceGacha.php', function (err, json) {
    //
    //    var roomId = 0;
    //    var name = 't';
    //    var eq = {
    //        name: name,
    //        val: json.body
    //    };
    //    mainRoom.setWeapon(eq);
    //    io.sockets.in(roomId).emit('ChangeWeapon', eq);
    //    console.log('ChangeWeapon');
    //});

    io.sockets.on('connection', function (socket) {
        socket.on('EnterViewRoom', function (roomId) {
            socket.join(roomId);
        });

        socket.on('EnterRoom', function (roomId) {
            socket.join(roomId);

        });

        socket.on('GameEntry', function (data) {
            if (mainRoom.isStartGame()) {
                console.log('GameEntry over');
                return;
            }
            if (mainRoom.isGameEnd()) {
                console.log('gameend');
                return;
            }
            var roomId = data.roomId;
            var name = data.name;

            if (HasNull(socket)) {
                console.log('GameEntry ' + name);
                socket.loginInfo = {
                    roomId: roomId,
                    name: name
                };
                mainRoom.join(name);


                io.sockets.in(roomId).emit('BattleLog', '「' + name + '」さんがゲームにエントリー');

            } else {
                console.log('rename faild');
                return;
            }
            if (mainRoom.isStartGame()) {
                var _hidetime = 60;
                var _time = 90;
                var ret = {
                    players: mainRoom.getPlayers(),
                    gameTime: _time
                };
                io.sockets.in(roomId).emit('GameStart', ret);

                PlayGachaInit(roomId);

                timeOutID60 = setTimeout(hideEquip, 1000 * _hidetime, roomId);
                timeOutID90 = setTimeout(onBattle, 1000 * _time, roomId);
            }

        });

        socket.on('GachaMonster', function () {
            PlayGacha(socket, 'monsterGacha.php', 'ChangeMonster', function (eq) { mainRoom.setMonster(eq); });
        });
        socket.on('GachaHelm', function () {
            PlayGacha(socket, 'helmGacha.php', 'ChangeHelm', function (eq) { mainRoom.setHelm(eq); });
        });
        socket.on('GachaArmor', function () {
            PlayGacha(socket, 'armorGacha.php', 'ChangeArmor', function (eq) { mainRoom.setArmor(eq); });
        });
        socket.on('GachaBoots',function(){
            PlayGacha(socket, 'bootsGacha.php', 'ChangeBoots', function (eq) { mainRoom.setBoots(eq); });
        });
        socket.on('GachaWeapon',function(){
            PlayGacha(socket, 'weaponGacha.php', 'ChangeWeapon', function (eq) { mainRoom.setWeapon(eq); });
        });
        socket.on('GachaShield',function(){
            PlayGacha(socket, 'shieldGacha.php', 'ChangeShield', function (eq) { mainRoom.setShield(eq); });
        });
        socket.on('GachaAcce', function () {
            PlayGacha(socket, 'acceGacha.php', 'ChangeAcce', function (eq) { mainRoom.setAccessory(eq); });
        });

        socket.on('Battle',function(){
            if(mainRoom.isStart()){
                onBattle(socket);
            }
        });

        socket.on('Leave', function (data) {
            if (HasNull(socket)) return;
            delete socket.loginInfo;
        });

        socket.on('disconnect', function (data) {
            if (HasNull(socket)) return;
            var roomId = socket.loginInfo.roomId;
            var winlog = '「'+socket.loginInfo.name +'」さんが退出しました';
            //socket.leave(roomId);
            //var clients = io.sockets.clients(roomId);
            //console.log(clients);
            mainRoom.leave(socket.loginInfo.name);

            clearTimeout(timeOutID60);
            clearTimeout(timeOutID90);
            io.sockets.in(roomId).emit('BattleLog', winlog);
            //io.sockets.in(roomId).emit('OnBattle', winlog);
            if (mainRoom.GetPlayerNum() === 0) {
                    mainRoom = room();
                    console.log('room reset');
                } else {
                    //clients.disconnect();
                    //for (var i in clients) {
                    //    console.log(i);
                    //   clients.disconnect();
                    //}
                }
        });
    });

    return io;
};

module.exports = gameServer;
