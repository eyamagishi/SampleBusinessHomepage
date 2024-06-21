//===============================================================
// スライドショー
//===============================================================
export function initializeSlideshow() {
    console.log('スライドショー');
    var slides = $('#mainimg .slide');
    var slideCount = slides.length;
    var currentIndex = 0;

    slides.eq(currentIndex).css('opacity', 1).addClass('active');

    const intervalId = setInterval(function () {
        var nextIndex = (currentIndex + 1) % slideCount;
        slides.eq(currentIndex).css('opacity', 0).removeClass('active');
        slides.eq(nextIndex).css('opacity', 1).addClass('active');
        currentIndex = nextIndex;
    }, 4000); // 4秒ごとにスライドを切り替える

    // タイマーIDを返す
    return intervalId;
}

export function cleanupSlideshow(intervalId) {
    clearInterval(intervalId);
}
