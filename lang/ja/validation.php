<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attributeを承認してください。',
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    'active_url'           => ':attributeには有効なURLを指定してください。',
    'after'                => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには:date以降の日付を指定してください。',
    'alpha'                => ':attributeには英字のみからなる文字列を指定してください。',
    'alpha_dash'           => ':attributeには英数字・ハイフン・アンダースコアのみからなる文字列を指定してください。',
    'alpha_num'            => ':attributeには英数字のみからなる文字列を指定してください。',
    'array'                => ':attributeには配列を指定してください。',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before'               => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal'      => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'array'            => ':attributeには:min〜:max個の要素を持つ配列を指定してください。',
        'file'             => ':attributeには:min〜:max KBのファイルを指定してください。',
        'numeric'          => ':attributeには:min〜:maxまでの数値を指定してください。',
        'string'           => ':attributeには:min〜:max文字の文字列を指定してください。',
    ],
    'boolean'              => ':attributeには真偽値を指定してください。',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed'            => ':attributeが確認用の値と一致しません。',
    'current_password' => 'The password is incorrect.',
    'date'                 => ':attributeには正しい形式の日付を指定してください。',
    'date_equals' => 'The :attribute field must be a date equal to :date.',
    'date_format'          => '":format"という形式の日付を指定してください。',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'The :attribute field must be declined.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',
    'different'            => ':attributeには:otherとは異なる値を指定してください。',
    'digits'               => ':attributeには:digits桁の数値を指定してください。',
    'digits_between'       => ':attributeには:min〜:max桁の数値を指定してください。',
    'dimensions'           => ':attributeの画像サイズが不正です。',
    'distinct'             => '指定された:attributeは既に存在しています。',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email'                => ':attributeには正しい形式のメールアドレスを指定してください。',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists'               => '指定された:attributeは存在しません。',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file'                 => ':attributeにはファイルを指定してください。',
    'filled'               => ':attributeには空でない値を指定してください。',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image'                => ':attributeには画像ファイルを指定してください。',
    'in'                   => ':attributeには:valuesのうちいずれかの値を指定してください。',
    'in_array'             => ':attributeが:otherに含まれていません。',
    'integer'              => ':attributeには整数を指定してください。',
    'ip'                   => ':attributeには正しい形式のIPアドレスを指定してください。',
    'ipv4'                 => ':attributeにはIPv4形式のIPアドレスを指定してください。',
    'ipv6'                 => ':attributeにはIPv6形式のIPアドレスを指定してください。',
    'json'                 => ':attributeには正しい形式のJSON文字列を指定してください。',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array'            => ':attributeには:max個以下の要素を持つ配列を指定してください。',
        'file'             => ':attributeには:max KB以下のファイルを指定してください。',
        'numeric'          => ':attributeには:max以下の数値を指定してください。',
        'string'           => ':attributeには:max文字以下の文字列を指定してください。',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes'                => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'mimetypes'            => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'min' => [
        'array'            => ':attributeには:min個以上の要素を持つ配列を指定してください。',
        'file'             => ':attributeには:min KB以上のファイルを指定してください。',
        'numeric'          => ':attributeには:min以上の数値を指定してください。',
        'string'           => ':attributeには:min文字以上の文字列を指定してください。',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in'               => ':attributeには:valuesのうちいずれとも異なる値を指定してください。',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric'              => ':attributeには数値を指定してください。',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => ':attributeには現在時刻を指定してください。',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex'                => '正しい形式の:attributeを指定してください。',
    'required'             => ':attributeは必須です。',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':otherが:valueの時:attributeは必須です。',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => ':otherが:values以外の時:attributeは必須です。',
    'required_with'        => ':valuesのうちいずれかが指定された時:attributeは必須です。',
    'required_with_all'    => ':valuesのうちすべてが指定された時:attributeは必須です。',
    'required_without'     => ':valuesのうちいずれかがが指定されなかった時:attributeは必須です。',
    'required_without_all' => ':valuesのうちすべてが指定されなかった時:attributeは必須です。',
    'same'                 => ':attributeが:otherと一致しません。',
    'size' => [
        'array'            => ':attributeには:size個の要素を持つ配列を指定してください。',
        'file'             => ':attributeには:size KBのファイルを指定してください。',
        'numeric'          => ':attributeには:sizeを指定してください。',
        'string'           => ':attributeには:size文字の文字列を指定してください。',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => ':attributeには文字列を指定してください。',
    'timezone'             => ':attributeには正しい形式のタイムゾーンを指定してください。',
    'unique'               => 'その:attributeはすでに使われています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url'                  => ':attributeには正しい形式のURLを指定してください。',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
