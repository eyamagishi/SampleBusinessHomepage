import { useState, useEffect, useCallback } from 'react';
import { debounce } from '../utils';

const HamburgerMenu: React.FC = () => {
    // リサイズイベントハンドラーを定義
    const handleResize = useCallback(debounce(() => {
        const menubarHdr = document.getElementById('hamburger-menu');
        const isSmallScreen = window.innerWidth < 900;

        document.body.classList.toggle('small-screen', isSmallScreen);
        document.body.classList.toggle('large-screen', !isSmallScreen);

        if (menubarHdr) {
            menubarHdr.classList.toggle('display-none', !isSmallScreen);
            menubarHdr.classList.toggle('display-block', isSmallScreen);
        }

        if (!isSmallScreen) {
            document.querySelectorAll('.ddmenu_parent > ul').forEach(ul => {
                (ul as HTMLElement).style.display = 'none';
            });
        }
    }, 100), []);

    // スクロール禁止/許可を切り替える関数を定義
    const toggleBodyScroll = useCallback(() => {
        const hamburgerMenu = document.getElementById('hamburger-menu');

        if (hamburgerMenu?.classList.contains('ham') && !hamburgerMenu.classList.contains('display-none')) {
            document.body.style.overflow = 'hidden';
            document.body.style.height = '100%';
        } else {
            document.body.style.overflow = '';
            document.body.style.height = '';
        }
    }, []);

    useEffect(() => {
        handleResize(); // 初回ロード時に実行

        window.addEventListener('resize', handleResize);

        // クリーンアップ関数を設定してイベントリスナーを解除
        return () => {
            window.removeEventListener('resize', handleResize);
        };
    }, [handleResize]);

    return (
        <div id="hamburger-menu">
            <span></span><span></span><span></span>
        </div>
    );
};

export default HamburgerMenu;
