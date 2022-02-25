$(function (){
    // 設置するバナーオブジェクトの識別子を設定する
    var $bn = $("#cbn1");
    $bn.text("");

    // 
    var imgs = [];
    var url = 'https://www.rakuten.ne.jp/gold/little-lanai/ecstation/cbn_all/allbanner_R_240x60.json';
    $.getJSON(
      url,
      {
      },
      function(data, status) {
        if (status == "success") {
          if (data != null) {
            imgs = data;
            showBanner();
          }
        } else {
          $("#message").html("取得できませんでした");
          return;
        };
      }
    );

    function showBanner() {
        //
        // var disableList = [{ src:"https://www.rakuten.ne.jp/gold/little-lanai/ecstation/cbn1/websearch_exist_240x60.gif",url:"https://toolbar.rakuten.co.jp/intro/everyday/members/campaign1/?scid=wi_grp_tenpomuke_2times ",frdate:"201908010000",todate:"999999999999",alt:"楽天ウェブ検索利用でポイント2倍",rate:"2",windowKbn:"0"}];
        var windowKbn = 0;

        //  サイズが必要な場合
        var _width = 240;
        var _height = 60;

        //　現在日付の比較用
        var dt = new Date();
        var y = dt.getFullYear();
        var m = ("00" + (dt.getMonth()+1)).slice(-2);
        var d = ("00" + dt.getDate()).slice(-2);
        var h = ("00" + dt.getHours()).slice(-2);
        var n = ("00" + dt.getMinutes()).slice(-2);
        var nowdt = y + "" + m + "" + d + "" + h + "" + n;

        //　表示するアイテムのDOM作成
        for (var i = 0; i < imgs.length; i++) {
            if (nowdt < imgs[i].frdate) continue;
            if (nowdt > imgs[i].todate) continue;
            var a = document.createElement("a");
            var img = document.createElement("img");
            $(img).attr("src", imgs[i].src).attr("alt", imgs[i].alt).css({"width":"100%"});
            $(a).attr("href", imgs[i].url).css({"width":"100%"}).append(img);
            if (windowKbn == 0) {
                      $(a).attr("target", "_top");
                    } else if (windowKbn == 1) {
              $(a).attr("target", "_blank");
                    }
            $bn.append(a);
        }
        
        //  表示アイテムとアイテム数
        var page = 0;
        var next = 1;
        var lastPage = parseInt($bn.find("a").length - 1);
        if (lastPage < 0) return;
     
        //  最初の表示
        $bn.css({
          "position": "relative",
          "overflow": "hidden",
          "width": "100%",
          "padding": 0,
          "margin": 0
        });
        $bn.find("a").css({
          "position": "absolute",
          "top": 0,
          "left": "-100%",
          "display": "block"
          });
        $bn.find("a").eq(page).css({
          "left": "0"
          });
        $bn.closest("body").css({
          "margin": 0
          });

        $(window).on("load resize", function(){
          var vw = $bn.width();
          $bn.css({
            "height": (vw * _height) / _width
            });
        });
        var vw = $bn.width();
        $bn.css({
          "height": (vw * _height) / _width
          });

        if (lastPage < 1) return;

        // 表示切替
        function changeImage() {
            next = (page >= lastPage)? 0: page + 1; 
            // 次ページを左から
    //        $bn.find("a").eq(next).css("left", -_width);
            $bn.find("a").eq(next).css("left", "-100%");
            $bn.find("a").eq(next).animate({left: 0}, 500);
            // 現ページを右へ
    //        $bn.find("a").eq(page).animate({left: _width}, 500);
            $bn.find("a").eq(page).animate({left: "100%"}, 500);
        }

        // スタート
        var Timer;
        function startTimer() {
            Timer = setInterval(function() {
                changeImage();
                page = next;
            }, 4000);
        }

        startTimer();
    }
});
