var http = require('https')
var url = 'https://www.imooc.com/learn/348'
http.get(url,(res)=>{
    var html = ''
    res.on('data',(data)=>{
        html += data
    })
    res.on('end',()=>{
        console.log(html);
    })
}).on('error',()=>{
    console.log('获取数据出错!');
})
