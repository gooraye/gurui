function doScroll() {
    if (window.pageYOffset === 0) {
        window.scrollTo(0, 1);
    }
}
window.onload = function () {
    setTimeout(doScroll, 100);
}
// iPhone
window.onorientationchange = function () {
    setTimeout(doScroll, 100);
};
// Android
window.onresize = function () {
    setTimeout(doScroll, 100);
}

var browser={
versions:function(){
    var u = navigator.userAgent, app = navigator.appVersion;
    return {
        trident: u.indexOf('Trident') > -1, //IE内核
        presto: u.indexOf('Presto') > -1, //opera内核
        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
        mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
        ios: !!u.match(/(i[^;]+;(U;)? CPU.+Mac OS X)/), //ios终端
        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
        iPad: u.indexOf('iPad') > -1, //是否iPad
        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
        };
    }(),
    language:(navigator.browserLanguage || navigator.language).toLowerCase()
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

    if (browser.versions.ios) { WeixinJSBridge.call('hideToolbar'); }
    WeixinJSBridge.on('menu:setfont', function (argv) {
        var num = parseInt(argv.fontSize);
        changefont(num);
        return;

    });
    WeixinJSBridge.on('menu:share:appmessage', function (argv) {
        sendShareCommand('sendAppMessage');
        return;
    });
    WeixinJSBridge.on('menu:share:timeline', function (argv) {
        sendShareCommand('shareTimeline');
        return;
    });
    function sendShareCommand(command) {

        WeixinJSBridge.invoke(command, {
            "appid": '',
            "img_url": "http://wx.fractalist.cn/h5/FlappyBird/images/share.png", // 分享到朋友圈的缩略图
            "img_width": "200", 
            "img_height": "200",
            "link": "http://wx.fractalist.cn/h5/FlappyBird/Index.html",
            "desc": "进击的飞拓！",
            "title": "进击的飞拓！"
        }, function (res) {
            
        });
    }
    window.bindEvent('#shareTimeline', 'click', function () {
        sendShareCommand(this);
    });
    window.bindEvent('#sendAppMessage', 'click', function () {
        sendShareCommand(this);
    });

    window.bindEvent('#isShareBuy', 'click', function () {
        sendShareCommand(this);
    });

}, false);
