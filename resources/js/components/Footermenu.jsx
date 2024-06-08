import React from 'react';

const Footermenu = () => {
    return (
        <ul id="footermenu">
            <li><a href="{{ route('home.index') }}">home</a></li>
            <li><a href="{{ route('home.service') }}">service</a></li>
            <li><a href="#">company</a></li>
            <li><a href="#">contact</a></li>
        </ul>
    );
};

export default Footermenu;
