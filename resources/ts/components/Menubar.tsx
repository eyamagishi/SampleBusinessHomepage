import { useState, useEffect, useCallback } from 'react';
import { Link } from 'react-router-dom';
import { debounce } from '../utils';

import '../../css/menubar.css';

const useWindowWidth = () => {
    const [windowWidth, setWindowWidth] = useState(window.innerWidth);

    const handleResize = useCallback(debounce(() => {
        setWindowWidth(window.innerWidth);
    }, 10), []);

    useEffect(() => {
        window.addEventListener('resize', handleResize);
        return () => window.removeEventListener('resize', handleResize);
    }, [handleResize]);

    return windowWidth;
};

const Menubar: React.FC = () => {
    const windowWidth = useWindowWidth();
    const isSmallScreen = windowWidth < 900;
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);

    const handleAnchorClick = () => {
        setIsMenuOpen(false);
    };

    const handleDropdownMouseEnter = () => {
        setIsDropdownOpen(true);
    };

    const handleDropdownMouseLeave = () => {
        setIsDropdownOpen(false);
    };

    useEffect(() => {
        const menubar = document.querySelector('#menubar');

        if (menubar) {
            if (isMenuOpen && isSmallScreen) {
                menubar.classList.add('display-none');
                menubar.classList.remove('display-block');
            } else {
                menubar.classList.add('display-block');
                menubar.classList.remove('display-none');
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

    return (
        <div id="menubar">
            <nav>
                <ul>
                    <li><Link to="/" onClick={handleAnchorClick}>HOME</Link></li>
                    <li onMouseEnter={handleDropdownMouseEnter} onMouseLeave={handleDropdownMouseLeave}>
                        <Link to="#">SERVICE</Link>
                        <ul style={{ display: isDropdownOpen ? 'block' : 'none' }}>
                            <li><Link to="/todo" onClick={handleAnchorClick}>todo</Link></li>
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
