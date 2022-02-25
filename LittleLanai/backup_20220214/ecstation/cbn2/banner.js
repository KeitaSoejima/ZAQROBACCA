$(function (){
    // 設置するバナーオブジェクトの識別子を設定する
    var $bn = $("#cbn2");
    $bn.text("");

    // 表示するアイテム（＝ユーザーが選択したバナー）をここに埋め込む
    var imgs = [];
    var url = 'https://www.rakuten.ne.jp/gold/little-lanai/ecstation/cbn_all/allbanner_R_320x50.json';
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
        // var disableList = [{ src:"https://www.rakuten.ne.jp/gold/little-lanai/ecstation/cbn2/websearch_exist_320x50.gif",url:"https://toolbar.rakuten.co.jp/intro/everyday/members/campaign1/?scid=wi_grp_tenpomuke_2times ",frdate:"201908010000",todate:"999999999999",alt:"楽天ウェブ検索利用でポイント2倍",rate:"2",windowKbn:"0"}];
        var windowKbn = 0;

        //  サイズが必要な場合
        var _width = 320;
        var _height = 50;
        var _height2 = _height * 2;
        var _height3 = _height * 3;
        
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
            $(img).attr("src", imgs[i].src).css({"width":"100%"}).attr("alt", imgs[i].alt);
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
        var page2 = 1;
        var page3 = 2;
        var next = 3;
        var lastPage = parseInt($bn.find("a").length - 1);
        if (lastPage < 0) return;
        //表示数にアイテム数を合わせるよう調整
        if (lastPage == 0) {
            for (var i = 0; i < 3; i++) {
               $bn.find("a").eq(0).clone().appendTo($bn);
            }
            lastPage = parseInt($bn.find("a").length - 1);
        }
        if (lastPage == 1) {
            for (var i = 0; i < 2; i++) {
               $bn.find("a").eq(0).clone().appendTo($bn);
               $bn.find("a").eq(1).clone().appendTo($bn);
            }
             lastPage = parseInt($bn.find("a").length - 1);
        }
        if (lastPage == 2) {
             $bn.find("a").eq(0).clone().appendTo($bn);
             $bn.find("a").eq(1).clone().appendTo($bn);
             $bn.find("a").eq(2).clone().appendTo($bn);
             lastPage = parseInt($bn.find("a").length - 1);
        }
     
        //  最初の表示
        $bn.css({
          "position": "relative",
          "overflow": "hidden",
          "width": "100%",
          "padding": 0,
          "margin": 0
        });
        var vw = $bn.width();
        var vh = $bn.find("a").eq(page).height();
        $bn.find("a").css({
          "position": "absolute",
          "top": vh,
          "left": 0,
          "display": "block"
          });
        $bn.closest("body").css({
          "margin": 0
          });

        $(window).on("load resize", function(){
          vw = $bn.width();
          $bn.css({
            "height": (vw * _height3) / _width
            });
          vh = $bn.find("a").eq(page).height();
          $bn.find("a").css({
            "top": -vh,
            });
          $bn.find("a").eq(page).css({
            "top": vh * 2
            });
          $bn.find("a").eq(page2).css({
            "top": vh
            });
          $bn.find("a").eq(page3).css({
            "top": 0
            });
        });
        vw = $bn.width();
        $bn.css({
          "height": (vw * _height3) / _width
          });
        vh = $bn.find("a").eq(page).height();
        $bn.find("a").css({
          "top": -vh,
          });
        $bn.find("a").eq(page).css({
          "top": vh * 2
          });
        $bn.find("a").eq(page2).css({
          "top": vh
          });
        $bn.find("a").eq(page3).css({
          "top": 0
          });
        if (lastPage < 1) return;

        // 表示切替
        function changeImage() {
            page2 = (page >= lastPage)? 0: page + 1;
            page3 = (page2 >= lastPage)? 0: page2 + 1;
            next = (page3 >= lastPage)? 0: page3 + 1;
            // 次ページを上から
    //        $bn.find("a").eq(next).css("top", -_height);
            $bn.find("a").eq(next).css("top", -vh);
            $bn.find("a").eq(next).animate({top: 0}, 500);
            // 現ページを下へ
            $bn.find("a").eq(page).animate({top: vh * 3}, 500);
            $bn.find("a").eq(page2).animate({top: vh * 2}, 500);
            $bn.find("a").eq(page3).animate({top: vh}, 500);
        }

        // スタート
        var Timer;
        function startTimer() {
            Timer = setInterval(function() {
                changeImage();
    //            page = next;
                page = page2;
                page2 = page3;
                page3 = next;
            }, 4000);
        }

        startTimer();
    }

});
