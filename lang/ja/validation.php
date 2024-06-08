<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行には、バリデータークラスで使用されるデフォルトのエラーメッセージが含まれています。
    | これらのルールの一部には、サイズルールのように複数のバージョンがあります。
    | 各メッセージはここで自由に調整してください。
    |
    */

    'accepted'        => ':attributeを承認してください。',
    'accepted_if'     => ':otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url'      => ':attributeには有効なURLを指定してください。',
    'after'           => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal'  => ':attributeには:date以降の日付を指定してください。',
    'alpha'           => ':attributeには英字のみからなる文字列を指定してください。',
    'alpha_dash'      => ':attributeには英数字・ハイフン・アンダースコアのみからなる文字列を指定してください。',
    'alpha_num'       => ':attributeには英数字のみからなる文字列を指定してください。',
    'array'           => ':attributeには配列を指定してください。',
    'ascii'           => ':attributeにはシングルバイトの英数字と記号のみを指定してください。',
    'before'          => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'array'   => ':attributeには:min〜:max個の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:min〜:max KBのファイルを指定してください。',
        'numeric' => ':attributeには:min〜:maxまでの数値を指定してください。',
        'string'  => ':attributeには:min〜:max文字の文字列を指定してください。',
    ],
    'boolean'           => ':attributeには真偽値を指定してください。',
    'can'               => ':attributeには許可されていない値が含まれています。',
    'confirmed'         => ':attributeが確認用の値と一致しません。',
    'current_password'  => 'パスワードが正しくありません。',
    'date'              => ':attributeには正しい形式の日付を指定してください。',
    'date_equals'       => ':attributeには:dateと等しい日付を指定してください。',
    'date_format'       => '":format"という形式の日付を指定してください。',
    'decimal'           => ':attributeには:decimal桁の小数を指定してください。',
    'declined'          => ':attributeは辞退する必要があります。',
    'declined_if'       => ':otherが:valueの場合、:attributeは辞退する必要があります。',
    'different'         => ':attributeには:otherとは異なる値を指定してください。',
    'digits'            => ':attributeには:digits桁の数値を指定してください。',
    'digits_between'    => ':attributeには:min〜:max桁の数値を指定してください。',
    'dimensions'        => ':attributeの画像サイズが不正です。',
    'distinct'          => '指定された:attributeは既に存在しています。',
    'doesnt_end_with'   => ':attributeは次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attributeは次のいずれかで始まってはいけません: :values。',
    'email'             => ':attributeには正しい形式のメールアドレスを指定してください。',
    'ends_with'         => ':attributeは次のいずれかで終わる必要があります: :values。',
    'enum'              => '選択された:attributeは無効です。',
    'exists'            => '指定された:attributeは存在しません。',
    'extensions'        => ':attributeには次のいずれかの拡張子を指定してください: :values。',
    'file'              => ':attributeにはファイルを指定してください。',
    'filled'            => ':attributeには空でない値を指定してください。',
    'gt' => [
        'array'   => ':attributeには:value個より多くの要素を持つ配列を指定してください。',
        'file'    => ':attributeには:value KBより大きいファイルを指定してください。',
        'numeric' => ':attributeには:valueより大きい数値を指定してください。',
        'string'  => ':attributeには:value文字より多い文字列を指定してください。',
    ],
    'gte' => [
        'array'   => ':attributeには:value個以上の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:value KB以上のファイルを指定してください。',
        'numeric' => ':attributeには:value以上の数値を指定してください。',
        'string'  => ':attributeには:value文字以上の文字列を指定してください。',
    ],
    'hex_color' => ':attributeには有効な16進数の色を指定してください。',
    'image'     => ':attributeには画像ファイルを指定してください。',
    'in'        => ':attributeには:valuesのうちいずれかの値を指定してください。',
    'in_array'  => ':attributeが:otherに含まれていません。',
    'integer'   => ':attributeには整数を指定してください。',
    'ip'        => ':attributeには正しい形式のIPアドレスを指定してください。',
    'ipv4'      => ':attributeにはIPv4形式のIPアドレスを指定してください。',
    'ipv6'      => ':attributeにはIPv6形式のIPアドレスを指定してください。',
    'json'      => ':attributeには正しい形式のJSON文字列を指定してください。',
    'lowercase' => ':attributeには小文字を指定してください。',
    'lt' => [
        'array'   => ':attributeには:value個未満の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:value KB未満のファイルを指定してください。',
        'numeric' => ':attributeには:value未満の数値を指定してください。',
        'string'  => ':attributeには:value文字未満の文字列を指定してください。',
    ],
    'lte' => [
        'array'   => ':attributeには:value個以下の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:value KB以下のファイルを指定してください。',
        'numeric' => ':attributeには:value以下の数値を指定してください。',
        'string'  => ':attributeには:value文字以下の文字列を指定してください。',
    ],
    'mac_address' => ':attributeには有効なMACアドレスを指定してください。',
    'max' => [
        'array'   => ':attributeには:max個以下の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:max KB以下のファイルを指定してください。',
        'numeric' => ':attributeには:max以下の数値を指定してください。',
        'string'  => ':attributeには:max文字以下の文字列を指定してください。',
    ],
    'max_digits' => ':attributeには:max桁以下の数字を指定してください。',
    'mimes'      => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'mimetypes'  => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'min' => [
        'array'   => ':attributeには:min個以上の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:min KB以上のファイルを指定してください。',
        'numeric' => ':attributeには:min以上の数値を指定してください。',
        'string'  => ':attributeには:min文字以上の文字列を指定してください。',
    ],
    'min_digits'       => ':attributeには少なくとも:min桁の数字を指定してください。',
    'missing'          => ':attributeは存在しない必要があります。',
    'missing_if'       => ':otherが:valueの場合、:attributeは存在しない必要があります。',
    'missing_unless'   => ':otherが:value以外の場合、:attributeは存在しない必要があります。',
    'missing_with'     => ':valuesが存在する場合、:attributeは存在しない必要があります。',
    'missing_with_all' => ':valuesが全て存在する場合、:attributeは存在しない必要があります。',
    'multiple_of'      => ':attributeには:valueの倍数を指定してください。',
    'not_in'           => ':attributeには:valuesのうちいずれとも異なる値を指定してください。',
    'not_regex'        => ':attributeの形式が無効です。',
    'numeric'          => ':attributeには数値を指定してください。',
    'password' => [
        'letters'       => ':attributeには少なくとも1文字のアルファベットを含める必要があります。',
        'mixed'         => ':attributeには少なくとも1文字の大文字と1文字の小文字を含める必要があります。',
        'numbers'       => ':attributeには少なくとも1文字の数字を含める必要があります。',
        'symbols'       => ':attributeには少なくとも1文字の記号を含める必要があります。',
        'uncompromised' => '指定された:attributeはデータリークで確認されています。別の:attributeを選んでください。',
    ],
    'present'              => ':attributeを指定してください。',
    'present_if'           => ':otherが:valueの場合、:attributeを指定する必要があります。',
    'present_unless'       => ':otherが:value以外の場合、:attributeを指定する必要があります。',
    'present_with'         => ':valuesが存在する場合、:attributeを指定する必要があります。',
    'present_with_all'     => ':valuesが全て存在する場合、:attributeを指定する必要があります。',
    'prohibited'           => ':attributeは使用禁止です。',
    'prohibited_if'        => ':otherが:valueの場合、:attributeは使用禁止です。',
    'prohibited_unless'    => ':otherが:valuesに含まれていない場合、:attributeは使用禁止です。',
    'prohibits'            => ':attributeは:otherが存在することを禁止します。',
    'regex'                => '正しい形式の:attributeを指定してください。',
    'required'             => ':attributeは必須です。',
    'required_array_keys'  => ':attributeには次のエントリが含まれている必要があります: :values。',
    'required_if'          => ':otherが:valueの場合、:attributeは必須です。',
    'required_if_accepted' => ':otherが承認されている場合、:attributeは必須です。',
    'required_unless'      => ':otherが:values以外の場合、:attributeは必須です。',
    'required_with'        => ':valuesが指定された場合、:attributeは必須です。',
    'required_with_all'    => ':valuesが全て指定された場合、:attributeは必須です。',
    'required_without'     => ':valuesが指定されていない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeは必須です。',
    'same'                 => ':attributeと:otherが一致しません。',
    'size' => [
        'array'   => ':attributeには:size個の要素を持つ配列を指定してください。',
        'file'    => ':attributeには:size KBのファイルを指定してください。',
        'numeric' => ':attributeには:sizeを指定してください。',
        'string'  => ':attributeには:size文字の文字列を指定してください。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string'      => ':attributeには文字列を指定してください。',
    'timezone'    => ':attributeには正しい形式のタイムゾーンを指定してください。',
    'unique'      => 'その:attributeは既に使用されています。',
    'uploaded'    => ':attributeのアップロードに失敗しました。',
    'uppercase'   => ':attributeには大文字を指定してください。',
    'url'         => ':attributeには正しい形式のURLを指定してください。',
    'ulid'        => ':attributeには有効なULIDを指定してください。',
    'uuid'        => ':attributeには有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは、特定の属性ルールに対するカスタムバリデーションメッセージを指定できます。
    | これにより、特定のカスタム言語行を迅速に指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、属性プレースホルダーをより読みやすいものに置き換えるために使用されます。
    | これにより、メッセージをより表現豊かにすることができます。
    |
    */

    'attributes' => [],

];
