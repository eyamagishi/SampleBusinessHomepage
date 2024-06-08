import React from 'react';

import Information from './Information';
import WhatIsNew from './WhatIsNew';

const Contents = () => {
    return (
        <div id="contents">
            <main>
                <Information />
                <WhatIsNew />
            </main>
        </div>
    );
};

export default Contents;
