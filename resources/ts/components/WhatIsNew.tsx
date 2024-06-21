import React from 'react';

const WhatIsNew: React.FC = () => {
    return (
        <section>
            <h2><span className="fade-in-text">What's New</span><span className="hosoku">お知らせ</span></h2>
            <dl className="new">
                <dt>20XX/00/00<span className="icon-bg2">重要</span></dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
            </dl>
            <dl className="new">
                <dt>20XX/00/00<span className="icon-bg2">重要</span></dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
            </dl>
            <dl className="new">
                <dt>20XX/00/00<span className="icon-bg2">重要</span></dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
            </dl>
        </section>
    );
};

export default WhatIsNew;
