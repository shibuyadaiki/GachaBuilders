var socketio=require('socket.io');

function roominit(server){
  var io=socketio.listen(server);
  //接続された時
  io.on('connection',function(socket){
    socket.on('')
  })
})
