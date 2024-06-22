import React, { useEffect } from 'react';
import '../../css/slide.css';

/**
 * スライドショーの初期化を行います。
 * スライドショーの開始と自動的なスライド切り替えを設定します。
 *
 * @returns {void}
 */
export function initializeSlideshow(): void {
    const slidesInterval: number = 4000;

    const slides: NodeListOf<Element> = document.querySelectorAll('#mainimg .slide');
    const slideCount: number = slides.length;
    let currentIndex: number = 0;

    /**
     * スライドの不透明度を設定します。
     *
     * @param {number} index - スライドのインデックス
     * @param {number} opacity - 不透明度の値 (0から1)
     * @returns {void}
     */
    const setSlideOpacity = (index: number, opacity: number): void => {
        (slides[index] as HTMLElement).style.opacity = opacity.toString();
    };

    /**
     * スライドにアクティブクラスを設定または解除します。
     *
     * @param {number} index - スライドのインデックス
     * @param {boolean} isActive - アクティブにする場合は true、解除する場合は false
     * @returns {void}
     */
    const setActiveClass = (index: number, isActive: boolean): void => {
        if (isActive) {
            (slides[index] as HTMLElement).classList.add('active');
        } else {
            (slides[index] as HTMLElement).classList.remove('active');
        }
    };

    /**
     * 指定したインデックスのスライドを表示します。
     *
     * @param {number} index - 表示するスライドのインデックス
     * @returns {void}
     */
    const showSlide = (index: number): void => {
        setSlideOpacity(index, 1);
        setActiveClass(index, true);
    };

    /**
     * 指定したインデックスのスライドを非表示にします。
     *
     * @param {number} index - 非表示にするスライドのインデックス
     * @returns {void}
     */
    const hideSlide = (index: number): void => {
        setSlideOpacity(index, 0);
        setActiveClass(index, false);
    };

    // 最初のスライドを表示する
    showSlide(currentIndex);

    // 一定間隔でスライドを切り替える
    setInterval(() => {
        const nextIndex: number = (currentIndex + 1) % slideCount;
        hideSlide(currentIndex);
        showSlide(nextIndex);
        currentIndex = nextIndex;
    }, slidesInterval);
}

const Mainimg: React.FC = () => {
    useEffect(() => {
        initializeSlideshow();
    }, []);

    return (
        <aside id="mainimg">
            <div className="slide slide1">
                <div>
                    <h1>挑戦を楽しむ。</h1>
                    <p>限界を超えて、前進。<br />
                        常に新しい挑戦を求め、未知の領域に挑む企業です。</p>
                    <p className="btn-border-radius"><a href="#">もっと詳しくみる</a></p>
                </div>
            </div>
            <div className="slide slide2">
                <div>
                    <h1>発想の転換。</h1>
                    <p>新しい視点で世界を捉え直す。<br />
                        革新を生むためのアイデアをここから発信します。</p>
                    <p className="btn-border-radius"><a href="#">もっと詳しくみる</a></p>
                </div>
            </div>
            <div className="slide slide3">
                <div>
                    <h1>次世代の扉を<br />
                        切り開こう</h1>
                    <p>あなたの手で開く未来。<br />
                        新しい技術で世界を変える一歩を踏み出そう！</p>
                    <p className="btn-border-radius"><a href="#">もっと詳しくみる</a></p>
                </div>
            </div>
        </aside>
    );
};

export default Mainimg;
