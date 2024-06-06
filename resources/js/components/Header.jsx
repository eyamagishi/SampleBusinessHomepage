import React, { useState } from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
    const [isSubMenuVisible, setIsSubMenuVisible] = useState(false);

    const handleSubMenuHover = () => {
        setIsSubMenuVisible(true);
    };

    const handleSubMenuLeave = () => {
        setIsSubMenuVisible(false);
    };

    return (
        <header>
            <h1 id="logo">
                <Link to="/">COMPANY_NAME</Link>
            </h1>
            <div id="menubar">
                <nav>
                    <ul>
                        <li>
                            <Link to="/">HOME</Link>
                        </li>
                        <li
                            onMouseEnter={handleSubMenuHover}
                            onMouseLeave={handleSubMenuLeave}
                        >
                            <Link to="/service">SERVICE</Link>
                            {isSubMenuVisible && (
                                <ul>
                                    <li>
                                        <Link to="/menu">MENU 1</Link>
                                    </li>
                                    <li>
                                        <Link to="/menu">MENU 2</Link>
                                    </li>
                                    <li>
                                        <Link to="/menu">MENU 3</Link>
                                    </li>
                                    <li>
                                        <Link to="/menu">MENU 4</Link>
                                    </li>
                                </ul>
                            )}
                        </li>
                        <li>
                            <Link to="/company">COMPANY</Link>
                        </li>
                        <li>
                            <Link to="/contact">CONTACT</Link>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    );
};

export default Header;
