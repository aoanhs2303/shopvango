<script type="text/javascript">
    jssor_1_slider_init = function() {

var jssor_1_SlideshowTransitions = [
    {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
    {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
    {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
    {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
    {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
    {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
    {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
    {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
    {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
    {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
    {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
    ];

    var jssor_1_options = {
    $AutoPlay: 5,
    $SlideshowOptions: {
        $Class: $JssorSlideshowRunner$,
        $Transitions: jssor_1_SlideshowTransitions,
        $TransitionsOrder: 1
    },
    $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
    },
    $ThumbnailNavigatorOptions: {
        $Class: $JssorThumbnailNavigator$,
        $Rows: 2,
        $SpacingX: 7,
        $SpacingY: 7,
        $Orientation: 2,
        $Align: 156,
        $Loop: 0
    }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1170;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
    };
    </script>

    <style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssora093 {display:block;position:absolute;cursor:pointer;}
    .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093:hover {opacity:.8;}
    .jssora093.jssora093dn {opacity:.6;}
    .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

    .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
    .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
    .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
    .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
    .jssort101 .p:hover{padding:2px;}
    .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
    .jssort101 .p:hover.pdn{padding:0;}
    .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
    .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
    .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
    .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
    .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
</style>

<style>
ul.nav.nav-tabs li.active a{
    color: white;
    background-color: #157ED2;
}
</style>

<div class="body-content" ng-controller="CatalogCtrl">
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="blog-pagem">
                <div class="col-md-12">
                    <div class="blog-post" style="background-color: #FFF; padding: 10px">
                        <h1 class="section-title" style="font-size: 30px; text-align:center">THƯ VIỆN CATALOGUE</h1>
                        <div class="more-info-tab clearfix ">
                            <ul style="width: 100%;margin-bottom: 20px;" class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active">
                                    <a ng-click="chooseCategory('MELAMINE')" data-transition-type="backSlide" href="#van-0" data-toggle="tab">
                                        MELAMINE
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('ACRYLIC')" data-transition-type="backSlide" href="#van-1" data-toggle="tab">
                                        ACRYLIC
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('LAMINATE')" data-transition-type="backSlide" href="#van-2" data-toggle="tab">
                                        LAMINATE
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('VENNEER')" data-transition-type="backSlide" href="#van-3" data-toggle="tab">
                                        VENNEER
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('GỖ GHÉP')" data-transition-type="backSlide" href="#van-4" data-toggle="tab">
                                        GỖ GHÉP
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('NẸP NHỰA PVC')" data-transition-type="backSlide" href="#van-5" data-toggle="tab">
                                        NẸP NHỰA PVC
                                    </a>
                                </li>
                                <li>
                                    <a ng-click="chooseCategory('PHỤ KIỆN TITUS')" data-transition-type="backSlide" href="#van-6" data-toggle="tab">
                                        PHỤ KIỆN TITUS
                                    </a>
                                </li>
                            </ul>

                            <div id="content_slide">
                                <!-- //SLIDE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var app = angular.module('myApp', [])
        app.controller('CatalogCtrl', function($scope, $http, $rootScope, $timeout, $compile) {
            $scope.domain = "http://vangoviet.com/files/catelogue/";
            $scope.domain2 = "http://vangoviet.com/files/";
            var MELAMINE = [
                {"image":"c_melamine/c_melamine1", "thumb":"c_thumb_melamine/c_thumb_melamine1"},
                {"image":"c_melamine/c_melamine2", "thumb":"c_thumb_melamine/c_thumb_melamine2"},
                {"image":"c_melamine/c_melamine3", "thumb":"c_thumb_melamine/c_thumb_melamine3"},
                {"image":"c_melamine/c_melamine4", "thumb":"c_thumb_melamine/c_thumb_melamine4"},
                {"image":"c_melamine/c_melamine5", "thumb":"c_thumb_melamine/c_thumb_melamine5"},
                {"image":"c_melamine/c_melamine6", "thumb":"c_thumb_melamine/c_thumb_melamine6"},
                {"image":"c_melamine/c_melamine7", "thumb":"c_thumb_melamine/c_thumb_melamine7"},
                {"image":"c_melamine/c_melamine8", "thumb":"c_thumb_melamine/c_thumb_melamine8"},
                {"image":"c_melamine/c_melamine9", "thumb":"c_thumb_melamine/c_thumb_melamine9"},
                {"image":"c_melamine/c_melamine10", "thumb":"c_thumb_melamine/c_thumb_melamine10"},
                {"image":"c_melamine/c_melamine11", "thumb":"c_thumb_melamine/c_thumb_melamine11"},
                {"image":"c_melamine/c_melamine12", "thumb":"c_thumb_melamine/c_thumb_melamine12"},
                {"image":"c_melamine/c_melamine13", "thumb":"c_thumb_melamine/c_thumb_melamine13"},
                {"image":"c_melamine/c_melamine14", "thumb":"c_thumb_melamine/c_thumb_melamine14"},
                {"image":"c_melamine/c_melamine15", "thumb":"c_thumb_melamine/c_thumb_melamine15"},
                {"image":"c_melamine/c_melamine16", "thumb":"c_thumb_melamine/c_thumb_melamine16"},
                {"image":"c_melamine/c_melamine17", "thumb":"c_thumb_melamine/c_thumb_melamine17"},
                {"image":"c_melamine/c_melamine18", "thumb":"c_thumb_melamine/c_thumb_melamine18"},
                {"image":"c_melamine/c_melamine19", "thumb":"c_thumb_melamine/c_thumb_melamine19"},
                {"image":"c_melamine/c_melamine20", "thumb":"c_thumb_melamine/c_thumb_melamine20"},
                {"image":"c_melamine/c_melamine21", "thumb":"c_thumb_melamine/c_thumb_melamine21"},
                {"image":"c_melamine/c_melamine22", "thumb":"c_thumb_melamine/c_thumb_melamine22"},
                {"image":"c_melamine/c_melamine23", "thumb":"c_thumb_melamine/c_thumb_melamine23"},
                {"image":"c_melamine/c_melamine24", "thumb":"c_thumb_melamine/c_thumb_melamine24"},
                {"image":"c_melamine/c_melamine25", "thumb":"c_thumb_melamine/c_thumb_melamine25"},
                {"image":"c_melamine/c_melamine26", "thumb":"c_thumb_melamine/c_thumb_melamine26"},
                {"image":"c_melamine/c_melamine27", "thumb":"c_thumb_melamine/c_thumb_melamine27"},
                {"image":"c_melamine/c_melamine28", "thumb":"c_thumb_melamine/c_thumb_melamine28"},
                {"image":"c_melamine/c_melamine29", "thumb":"c_thumb_melamine/c_thumb_melamine29"},
                {"image":"c_melamine/c_melamine30", "thumb":"c_thumb_melamine/c_thumb_melamine30"}
            ];
            var ACRYLIC = [
                {"image":"c_acrylic/c_acrylic1", "thumb":"c_thumb_acrylic/c_thumb_acrylic1"},
            ];

            var LAMINATE = [
                {"image":"c_laminate/c_laminate1", "thumb":"c_thumb_laminate/c_thumb_laminate1"},
            ];

            var VENNEER = [
                {"image":"c_venneer/c_venneer1", "thumb":"c_thumb_venneer/c_thumb_venneer1"},
            ];

            var GOGHEP = [
                {"image":"c_goghep/c_goghep1", "thumb":"c_thumb_goghep/c_thumb_goghep1"},
            ];

            var NEP_NHUA_PVC = [
                {"image":"c_nepnhua/c_nepnhua1", "thumb":"c_thumb_nepnhua/c_thumb_nepnhua1"},
            ];
            var PHU_KiEN_TITUS = [
                {"image":"c_titus/c_titus1", "thumb":"c_thumb_titus/c_thumb_titus1"},
                {"image":"c_titus/c_titus2", "thumb":"c_thumb_titus/c_thumb_titus2"},
                {"image":"c_titus/c_titus3", "thumb":"c_thumb_titus/c_thumb_titus3"},
                {"image":"c_titus/c_titus4", "thumb":"c_thumb_titus/c_thumb_titus4"},
                {"image":"c_titus/c_titus5", "thumb":"c_thumb_titus/c_thumb_titus5"},
                {"image":"c_titus/c_titus6", "thumb":"c_thumb_titus/c_thumb_titus6"},
                {"image":"c_titus/c_titus7", "thumb":"c_thumb_titus/c_thumb_titus7"},
                {"image":"c_titus/c_titus8", "thumb":"c_thumb_titus/c_thumb_titus8"},
                {"image":"c_titus/c_titus9", "thumb":"c_thumb_titus/c_thumb_titus9"},
                {"image":"c_titus/c_titus10", "thumb":"c_thumb_titus/c_thumb_titus10"}
            ];

            
            
            $scope.chooseCategory = function(cate) {
                var html = `
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{domain2 + 'svg/loading/static-svg/spin.svg'}}" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
                        <div ng-repeat="image in thuvien">
                            <img data-u="image" src="{{domain + image.image + '.jpg'}}" />
                            <img data-u="thumb" src="{{domain + image.thumb + '.jpg'}}" />
                        </div>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#F3F3F3;" data-autocenter="2" data-scale-left="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="width:110px;height:67px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <svg viewBox="0 0 16000 16000" class="cv">
                                    <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>
                </div> 
                `;
                $("#jssor_1").remove();
                var divElement = angular.element(document.getElementById('content_slide'));
                var htmlElement = angular.element(html);
                divElement.append(htmlElement);
                $compile(divElement)($scope);

                switch (cate) {
                    case "MELAMINE":
                        $scope.thuvien = MELAMINE;
                        break;
                    case "ACRYLIC":
                        $scope.thuvien = ACRYLIC;
                        break;
                    case "LAMINATE":
                        $scope.thuvien = LAMINATE;
                        break;
                    case "VENNEER":
                        $scope.thuvien = VENNEER;
                        break;
                    case "GỖ GHÉP":
                        $scope.thuvien = GOGHEP;
                        break;
                    case "NẸP NHỰA PVC":
                        $scope.thuvien = NEP_NHUA_PVC;
                        break;
                    case "PHỤ KIỆN TITUS":
                        $scope.thuvien = PHU_KiEN_TITUS;
                        break;
                    default:
                        break;
                }
                $timeout(function () {
                    jssor_1_slider_init();
                });
            }
            $scope.chooseCategory("MELAMINE");
            
            

        })
    </script>