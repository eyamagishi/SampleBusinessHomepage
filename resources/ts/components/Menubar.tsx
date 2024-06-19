import { useState, useEffect, useCallback } from 'react';
import { Link } from 'react-router-dom';
import { debounce } from '../utils';

const Menubar: React.FC = () => {
    const [isSmallScreen, setIsSmallScreen] = useState(window.innerWidth < 900);
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);

    const handleResize = useCallback(debounce(() => {
        setIsSmallScreen(window.innerWidth < 900);
        setIsMenuOpen(false); // ウィンドウリサイズ時にメニューを閉じる
    }, 10), []);

    useEffect(() => {
        /**
         * ウィンドウのリサイズイベントを処理し、画面サイズの状態を更新します。
         */
        window.addEventListener('resize', handleResize);

        // コンポーネントのアンマウント時にイベントリスナーをクリーンアップ
        return () => window.removeEventListener('resize', handleResize);
    }, [handleResize]);

    useEffect(() => {
        const menubar = document.querySelector('#menubar');
    
        if (menubar){
            if (isMenuOpen && isSmallScreen) {
                menubar.classList.add('display-none');
                menubar.classList.remove('display-block');
            } else {
                menubar.classList.add('display-block');
                menubar.classList.remove('display-none');
    
                const ddmenuParents = document.querySelectorAll('.ddmenu_parent > ul');
                ddmenuParents.forEach(ul => {
                    (ul as HTMLUListElement).style.display = 'none';
                });
            }
    
            const liElementsWithUl = menubar.querySelectorAll('li:has(ul)');
            liElementsWithUl.forEach(li => {
                li.classList.add('ddmenu_parent');
            });
    
            const ddmenuParentLinks = menubar.querySelectorAll('.ddmenu_parent > a');
            ddmenuParentLinks.forEach(link => {
                link.classList.add('ddmenu');
            });
        }

    }, [isMenuOpen, isSmallScreen]);

    /**
     * メニューの開閉状態をトグルします。
     */
    const handleMenuToggle = () => {
        setIsMenuOpen(prev => !prev);
    };

    /**
     * アンカーリンクがクリックされたときにメニューを閉じます。
     */
    const handleAnchorClick = () => {
        setIsMenuOpen(false);
    };

    /**
     * マウスがドロップダウンメニューに入ったときにドロップダウンメニューを開きます。
     */
    const handleDropdownMouseEnter = () => {
        setIsDropdownOpen(true);
    };

    /**
     * マウスがドロップダウンメニューから離れたときにドロップダウンメニューを閉じます。
     */
    const handleDropdownMouseLeave = () => {
        setIsDropdownOpen(false);
    };

    return (
        <div id="menubar">
            <nav>
                <ul>
                    <li><Link to="/" onClick={handleAnchorClick}>HOME</Link></li>
                    <li onMouseEnter={handleDropdownMouseEnter} onMouseLeave={handleDropdownMouseLeave}>
                        <Link to="#">SERVICE</Link>
                        <ul style={{ display: isDropdownOpen ? 'block' : 'none' }}>
                            <li><Link to="/service" onClick={handleAnchorClick}>MENU 1</Link></li>
                            <li><Link to="/service" onClick={handleAnchorClick}>MENU 2</Link></li>
                            <li><Link to="/service" onClick={handleAnchorClick}>MENU 3</Link></li>
                            <li><Link to="/service" onClick={handleAnchorClick}>MENU 4</Link></li>
                        </ul>
                    </li>
                    <li><Link to="/company" onClick={handleAnchorClick}>COMPANY</Link></li>
                    <li><Link to="/contact" onClick={handleAnchorClick}>CONTACT</Link></li>
                </ul>
            </nav>
        </div>
    );
};

export default Menubar;
