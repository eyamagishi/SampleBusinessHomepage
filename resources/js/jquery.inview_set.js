// .upクラスを持つ要素が画面内に表示された際に、upstyleクラスを追加する
$('.up').on('inview', function() {
    $(this).addClass('upstyle');
});

// .downクラスを持つ要素が画面内に表示された際に、downstyleクラスを追加する
$('.down').on('inview', function() {
    $(this).addClass('downstyle');
});

// .transform1クラスを持つ要素が画面内に表示された際に、transform1styleクラスを追加する
$('.transform1').on('inview', function() {
    $(this).addClass('transform1style');
});

// .transform2クラスを持つ要素が画面内に表示された際に、transform2styleクラスを追加する
$('.transform2').on('inview', function() {
    $(this).addClass('transform2style');
});

// .transform3クラスを持つ要素が画面内に表示された際に、transform3styleクラスを追加する
$('.transform3').on('inview', function() {
    $(this).addClass('transform3style');
});

// .blurクラスを持つ要素が画面内に表示された際に、blurstyleクラスを追加する
$('.blur').on('inview', function() {
    $(this).addClass('blurstyle');
});
