var room = require('./room.js');

function gameServer(spec, my) {
    var app = spec.httpServer;
    var logLevel = spec.logLevel || 1;
    var io = require('socket.io').listen(app, {
        'log level' : logLevel
    });

    var mainRoom = room();

    io.sockets.on('connection', function(socket) {
        socket.on('EnterRoom',function(data){
            var roomId = data.roomId;
            var name = data.name;
            var loginInfo = {
                roomId : roomId,
                name : name
            };
            socket.set('loginInfo',loginInfo,function(){
                mainRoom.join(name);
                socket.join(roomId);
                if(mainRoom.isStartGame()){
                    var ret = {
                        players : mainRoom.getPlayers()
                    };
                    io.sockets.in(roomId).emit('GameStart', ret);
                }
            });


        });

        socket.on('GachaHead',function(data){
            var hand = data;
            socket.get('loginInfo',function(err,data){
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : {ATK:1}
                };
                mainRoom.setHead(eq);

            });
            io.sockets.in(roomId).emit('ChangeHead', eq);
        });

        socket.on('Buttle',function(){
            socket.get('loginInfo',function(err,data){
                var roomId = data.roomId;
                if(mainRoom.isStart()){
                    var ret = mainRoom.doButtle();
                    io.sockets.in(roomId).emit('Result', ret);
                }
            });
        });

        socket.on('disconnect',function(data){
            socket.get('loginInfo',function(err,data){
                var roomId = data.roomId;
                socket.leave(roomId);
                var clients = io.sockets.clients(roomId);
                if(clients.length === 0) {
                    mainRoom = room();
                } else {
                    for(var i in clients) {
                        clients[i].disconnect();
                    }
                }
            });
        });
    });

    return io;
};

module.exports = gameServer;
