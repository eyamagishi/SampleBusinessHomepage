//===============================================================
// スライドショー
//===============================================================
/**
 * スライドショーの初期化を行います。
 * スライドショーの開始と自動的なスライド切り替えを設定します。
 *
 * @returns {void}
 */
export function initializeSlideshow() {
    /** @type {number} */
    const slidesInterval = 4000;

    /** @type {NodeListOf<Element>} */
    const slides = document.querySelectorAll('#mainimg .slide');

    /** @type {number} */
    const slideCount = slides.length;

    /** @type {number} */
    let currentIndex = 0;

    /**
     * スライドの不透明度を設定します。
     *
     * @param {number} index - スライドのインデックス
     * @param {number} opacity - 不透明度の値 (0から1)
     * @returns {void}
     */
    const setSlideOpacity = (index, opacity) => {
        slides[index].style.opacity = opacity;
    };

    /**
     * スライドにアクティブクラスを設定または解除します。
     *
     * @param {number} index - スライドのインデックス
     * @param {boolean} isActive - アクティブにする場合は true、解除する場合は false
     * @returns {void}
     */
    const setActiveClass = (index, isActive) => {
        if (isActive) {
            slides[index].classList.add('active');
        } else {
            slides[index].classList.remove('active');
        }
    };

    /**
     * 指定したインデックスのスライドを表示します。
     *
     * @param {number} index - 表示するスライドのインデックス
     * @returns {void}
     */
    const showSlide = (index) => {
        setSlideOpacity(index, 1);
        setActiveClass(index, true);
    };

    /**
     * 指定したインデックスのスライドを非表示にします。
     *
     * @param {number} index - 非表示にするスライドのインデックス
     * @returns {void}
     */
    const hideSlide = (index) => {
        setSlideOpacity(index, 0);
        setActiveClass(index, false);
    };

    // 最初のスライドを表示する
    showSlide(currentIndex);

    // 一定間隔でスライドを切り替える
    setInterval(() => {
        const nextIndex = (currentIndex + 1) % slideCount;
        hideSlide(currentIndex);
        showSlide(nextIndex);
        currentIndex = nextIndex;
    }, slidesInterval);
}
